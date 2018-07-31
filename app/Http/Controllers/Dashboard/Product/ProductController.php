<?php

namespace Contactamax\Http\Controllers\Dashboard\Product;

use Contactamax\Entities\Category;
use Contactamax\Http\Controllers\Controller;
use Contactamax\Http\Requests\ProductFormRequest;
use Contactamax\Services\Contracts\ProductServiceContract;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceContract $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productService->getByFilter(10);

        return view('dashboard.product.index', compact('products'));
    }
    
    public function getByAttribute($attribute)
    {
        return $this->productService->getByAttribute($attribute);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', true)
            ->orderBy('name')
            ->get();

        return view('dashboard.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        return $this->productService->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = Category::where('status', true)
            ->orderBy('name')
            ->get();

        $product = $this->productService->read($id);

        return view('dashboard.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        return $this->productService->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return $this->productService->delete($id);
    }
}
