<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        //return $product ;
        return view('admin.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'buy_price'=>'required',
            'wholesale'=>'required',
            'price'=>'required',
            'type'=>'required',
            'quantity'=>'required',
            'min_quantity'=>'required',
        ]);

        $product = new products();
        $product->name = $request->name;
        $product->buy_price = $request->buy_price;
        $product->wholesale = $request->wholesale;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->quantity = $request->quantity;
        $product->min_quantity = $request->min_quantity;
        $product->notes = $request->notes;

        if($request->quantity > $request->min_quantity+1 ){
            $product->availability = 'متوفر';
        }elseif($request->quantity == 0){
            $product->availability ='غير متوفر';
        }elseif($request->quantity <= $request->min_quantity){
            $product->availability ='كمية قليلة';
        }

        $product->save();

        return redirect('/admin/product/new')->with('success','لقد تم اضافة الصنف بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = products::find($id);
        return view('admin/product/show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product = products::find($id);
        return view('admin/product/edit')->with('product',$product);
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
        $this->validate($request,[
            'name'=>'required',
            'buy_price'=>'required',
            'wholesale'=>'required',
            'price'=>'required',
            'type'=>'required',
            'quantity'=>'required',
            'min_quantity'=>'required',
            'availability'=>'required'
        ]);

        $product =  products::find($id);
        $product->name = $request->name;
        $product->buy_price = $request->buy_price;
        $product->wholesale = $request->wholesale;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->quantity = $request->quantity;
        $product->min_quantity = $request->min_quantity;
        $product->notes = $request->notes;
        $product->availability = $request->availability;

        $product->save();

        return redirect('/admin/product/new')->with('success','لقد تم تحديث الصنف بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  products::find($id);
        $product->delete();

        return redirect('/admin/product')->with('success','لقد تم حذف الصنف بنجاح');
    }
}
