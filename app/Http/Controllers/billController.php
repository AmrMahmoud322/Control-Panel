<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\bill_products;
use App\bill;
use auth;

class billController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = bill::all();
        // return $bills;
        return view('admin.bill.index')->with('bills' , $bills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = products::all();
        return view('admin.bill.add')->with('products',$products);
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
            'customer' => 'required',
            'status' => 'required',
            'bill_total_befor' => 'required',
            'bill_total' => 'required',
            'discount' => 'required',
            'product_index' => 'required',
        ]);
        
        if( (int)$request->input('bill_total') <= 0){
            return redirect()->back()->with('error','هناك خطاء في قيمه الفاتورة');
        }

        //$product = new products($array['products']);
        //$bill_product = new bill_products();
        $bill = new bill();
        $bill->customer = $request->input('customer');
        $bill->status = $request->input('status');
        $bill->bill_note = $request->input('bill_note');
        $bill->totalBefore = $request->input('bill_total_befor');
        $bill->total = $request->input('bill_total');
        $bill->discount = $request->input('discount');
        $bill->owner = Auth::user()->id;
        // return var_dump($request->input());
        $bill->save();
        
        $productIndex = explode(",", $request->input('product_index'));
        // return var_dump($productIndex);
        for ($i=0; $i <  count($productIndex); $i++) { 
            if($productIndex[$i] == 'true'){
                $bill_product = new bill_products();
                $bill_product->bill_id = $bill->id;
                $bill_product->product_id = $request->input('select-' . ($i + 1));
                $bill_product->note = $request->input('notes-' . ($i + 1));
                $bill_product->amount = $request->input('quantity-' . ($i + 1));
                $bill_product->price = $request->input('price-' . ($i + 1));
                $bill_product->total_price = $request->input('total-' . ($i + 1));
                
                $productName = products::find($bill_product->product_id);
                $bill_product->product_name = $productName->name;
                
                $bill_product->save();
            }
        }

        return redirect('/admin/bill')->with('success','لقد تم اضافة الفاتورة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
        $bill = bill::find($id);
        $products = bill_products::where('bill_id',(int)$id)->get();
        // return $products;
        return view('admin/bill/show', ['bill' => $bill , 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill = bill::find($id);
        $products = bill_products::where('bill_id',(int)$id)->get();
        // return $products;
        return view('admin/bill/edit', ['bill' => $bill , 'products' => $products]);
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
            'customer' => 'required',
            'status' => 'required',
        ]);
        

        $bill = bill::find($id);
        $bill->customer = $request->input('customer');
        $bill->status = $request->input('status');
        $bill->bill_note = $request->input('bill_note');
        $bill->owner = Auth::user()->id;
        $bill->save();
        
        $bill_products = bill_products::where('bill_id',(int)$id)->get();
        $i = 0;
        foreach ($bill_products as $bill_product) {
            $bill_product->note = $request->input('notes-' . ($i + 1));
            $bill_product->save();
            $i++;
        }
        return redirect('/admin/bill')->with('success','لقد تم تحديث الفاتورة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = bill::find($id);
        $products = bill_products::where('bill_id',(int)$id)->delete();
        // foreach( $products as $product ){
        //     return $product;
        //     $product->delete();
        // }
        $bill->delete();

        return redirect('/admin/bill')->with('success','لقد تم حذف الفاتورة بنجاح');
    }
}
