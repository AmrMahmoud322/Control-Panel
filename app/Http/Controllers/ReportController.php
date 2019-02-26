<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {

        return view('admin.report.index');
        // return view('admin/bill/show', ['bill' => $bill , 'products' => $products]);
        
    }
}
