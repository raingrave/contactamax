<?php

namespace Contactamax\Http\Controllers\Dashboard\Order;

use Contactamax\Http\Controllers\Controller;
use Contactamax\Http\Requests\InputOrderFormRequest;
use Contactamax\Services\Contracts\InputOrderServiceContract;
use Illuminate\Http\Request;

class InputOrderController extends Controller
{
    protected $inputOrderService;

    public function __construct(InputOrderServiceContract $inputOrderService)
    {
        $this->inputOrderService = $inputOrderService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputOrders = $this->inputOrderService->getByFilter(10);

        return view('dashboard.input.order.index', compact('inputOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.input.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InputOrderFormRequest $request)
    {
        return $this->inputOrderService->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->inputOrderService->delete($id);
    }
}
