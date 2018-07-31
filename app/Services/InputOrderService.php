<?php

namespace Contactamax\Services;

use Contactamax\Entities\Repositories\Contracts\InputOrderRepositoryContract;
use Contactamax\Entities\Repositories\Contracts\ItemRepositoryContract;
use Contactamax\Events\SaveOrdem;
use Contactamax\Services\Contracts\InputOrderServiceContract;
use Illuminate\Support\Facades\DB;

class InputOrderService implements InputOrderServiceContract
{
    protected $inputOrderRepository;
    protected $itemRepository;

    public function __construct(InputOrderRepositoryContract $inputOrderRepository, ItemRepositoryContract $itemRepository)
    {
        $this->inputOrderRepository = $inputOrderRepository;
        $this->itemRepository = $itemRepository;
    }

    public function getByFilter(int $offset)
    {
        return $this->inputOrderRepository->getByFilter($offset);
    }

    public function create(array $data)
    {
        try {
            DB::beginTransaction();

            $inputOrder = $this->inputOrderRepository->create($this->setAttributes($data));

            $this->createItems($data, $inputOrder);

            DB::commit();

            event(new SaveOrdem($inputOrder));

            return redirect()->back()->with('success', 'Ordem de compra gerada com sucesso.');
        } catch (\Exception $exception) {
            DB::rollBack();

            return redirect()->back()->with('danger', $exception->getMessage());
        }
    }

    private function setAttributes(array $data)
    {
        $data['code'] = $this->generateCode();
        
        $data['request_type'] = 'web';

        $data['total'] = $this->getTotal($data);
        
        return $data;
    }

    private function createItems($data, $inputOrder)
    {
        if (!$data || !$inputOrder) {
            throw new \Exception('Ocorreu um erro ao criar items', 400);
        }

        foreach ($data['product_id'] as $key => $d) {
            $this->itemRepository->create([
                'product_id' => $d,
                'input_order_id' => $inputOrder->id,
                'quantity' => $data['quantity'][$key],
            ]);
        };
    }

    private function getTotal(array $data)
    {
        $total = 0;

        foreach ($data['product_id'] as $key => $d) {
            $total += ((int)$data['quantity'][$key] * $this->toFloat($data['price'][$key]));
        }
        
        return $total;
    }

    private function toFloat($value)
    {
        return floatval(str_replace(',', '.', str_replace('.', '', $value)));
    }

    private function generateCode()
    {
        return rand(000001, 999999);
    }

    public function delete(int $id)
    {
        try {
            $this->inputOrderRepository->delete($id);

            return redirect()->back()->with('success', 'Ordem de entrada cancelada sucesso.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger', 'Não foi possível realizar a operação.');
        }
    }
}