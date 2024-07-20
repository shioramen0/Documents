<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 商品一覧
        $products = Product::all();

        return view('product.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        // fillを使用する場合は、必ずモデルのfillableを指定する
        $product->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('product.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::find($id);

        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::find($id);
        $product->fill($request->all())->save();

        //一覧へ戻り完了メッセージを表示
        return redirect()->route('product.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * ＠param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {

        Product::where('id', $id)->delete();

        //完了メッセージを表示
        return redirect()->route('product.index')->with('message','削除しました');
    }
}
