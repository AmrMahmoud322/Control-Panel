@extends('admin.layouts.layout')

@php
$title= "عمل فاتورة";    
@endphp

@section('title')
    {{ $title }}
@endsection

@section('header')
    {{-- {!! Html::style('/admin/css/plugins/dataTables/datatables.min.css') !!}
 --}}
    {{-- smart select --}}
    {!! Html::style('/admin/css/plugins/chosen/bootstrap-chosen.css') !!}
    
    
	
    
    

@endsection

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10 pull-right" style="direction:rtl">
            <h2 style="font-size: 27px">فاتورة بيع</h2>
            <ol class="breadcrumb" style="font-size: 18px">
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    الفواتير
                </li>
                <li class="active">
                    <strong>عمل فاتورة</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <form action="{{ route('admin.bill.add') }}" method="POST" id="checkout-form">    
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5 style="direction:rtl">الفاتورة</h5>
                        </div>
                        <div class="ibox-content" >
                            <div class="form-horizontal" style="direction: rtl; font-size: 25px">
                                <div class="form-group"  style="width:60%">
                                    <div class="col-sm-7">
                                    <input type="text" id="customer" name="customer" class="form-control" value="_"></div>
                                    <label class="col-sm-5 control-label">اسم العميل:</label>
                                </div>
                                <div class="form-group"  style="width:60%">
                                    <div class="col-sm-7">
                                    <input type="text" id="bill_note" name="bill_note" class="form-control" value="_"></div>
                                    <label class="col-sm-5 control-label">ملاحظات الفاتورة:</label>
                                </div>
                                <div class="form-group" style="width:60%">
                                    <div class="col-sm-7">
                                        <select class="form-control" id="status" name="status">
                                            <option value="خالص">خالص</option>
                                            <option value="ليس مدفوع بالكامل">ليس مدفوع بالكامل</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-5 control-label">الدفع:</label>
                                </div>
                            </div>

                            
                            

                            <div style="float: left">                   
                                <button class="btn btn-outline-secondary" onclick="deleteChecked()" style="float: left;margin-right:5px" type="button">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>

                                <button id="more_fields" onclick="cloneRow()" class="btn btn-outline-secondary" style="float: left"  type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                
                            </div>
                            <br/><br/><br/>
                                

                            <div class="table-responsive" style="min-height: 400px">
                                <table class="table table-striped table-bordered table-hover " style="direction:rtl;">
                                    <thead style="font-size: 15px">
                                        <tr>
                                            <th>تحكم </th>
                                            <th>الإجمالي </th>
                                            <th>السعر</th>
                                            <th>الكمية</th>
                                            <th>الآسم</th>
                                            <th>ملاحظات</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 14px" id="tableToModify">

                                        


                                        <tr class="gradeA" id="rowToClone" style="visibility: collapse">

                                            <td id="cellA-0" style="visibility: collapse">
                                                <input style="width: 10px;" type="checkbox" id="Delete-0" class="" placeholder="" >
                                            </td>
                                                
                                            
                                            <td id="cellB-0" style="visibility: collapse">
                                                <input style="width: 90px;" type="text" id="total-0" class="form-control" placeholder="" value="0" readonly>
                                            </td>
                                                
                                            
                                            <td id="cellC-0" style="visibility: collapse">
                                                <input style="width: 90px;" type="text" id="price-0" class="form-control" placeholder="" value="0" readonly>
                                            </td>
                                            
                                            
                                            <td id="cellD-0" style="visibility: collapse">
                                                <input style="width: 100%;" type="text" id="quantity-0" class="form-control quantity" value="1" placeholder="">
                                            </td>
                                            
                                            
                                            <td style="width: 40%;visibility: collapse" id="cellE-0">

                                                <select id="select-0" data-placeholder="اختر الصنف ..." class="chosen-select"  tabindex="2" >
                                    
                                                    <option value="0">...</option>
                                                                                                        
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                        
                                                    
                                                </select>
                                            </td>
                                                
                                            
                                            
                                            <td id="cellF-0" style="visibility: collapse">
                                                <input style="width: 100%;" type="text" id="notes-0" class="form-control" placeholder="اكتب الملاحظة" value="...">
                                            </td>
                                            
        
                                        </tr>

                                        

                                        <tr class="gradeA" id="Row-1">
                                            
                                            <td id="cellA-1">
                                                <input style="width: 10px; " type="checkbox" id="Delete-1" name="checkDelete-1" class="" placeholder="" >
                                            </td>
                                                
                                            
                                            <td id="cellB-1">
                                                <input style="width: 90px;" type="text" id="total-1" name="total-1" class="form-control" placeholder="" value="0" readonly>
                                            </td>
                                                
                                            
                                            <td id="cellC-1">
                                                <input style="width: 90px;" type="text" id="price-1" name="price-1" class="form-control" placeholder="" value="0" readonly>
                                            </td>
                                            
                                            
                                            <td id="cellD-1">
                                                <input style="width: 100%;" type="text" id="quantity-1" name="quantity-1" class="form-control quantity" value="1" placeholder="">
                                            </td>
                                            
                                            
                                            <td style="width: 40%;" id="cellE-1">
                                                <select id="select-1" data-placeholder="اختر الصنف ..." class="chosen-select"  tabindex="2" name="select-1">
                                                    
                                                    <option value="0"></option>

                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach

                                                </select>
                                            </td>
                                                
                                            
                                            
                                            <td id="cellF-1">
                                                <input style="width: 100%;" type="text" id="notes-1" name="notes-1" class="form-control" placeholder="اكتب الملاحظة" value="...">
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                    <tfoot style="font-size: 15px">
                                        
                                        <tr>
                                            <th></th>
                                            <th>
                                                    <input style="width: 90px;float: right;" type="text" id="discount" name="discount" class="form-control" value="0">
                                            </th>
                                            
                                            <th><div style="float: right;">خصم</div></th>
                                            <th><div style="float: right;"></div></th>
                                            
                                            <th></th>
                                            <th></th>
                                        </tr>

                                        <tr>
                                            <th>
                                                <button class="btn btn-outline-secondary" style="float: left" onclick="done()"  type="button">
                                                    <span class="glyphicon glyphicon-check"></span>
                                                </button>
                                            </th>
                                            <th>
                                                    <input type="hidden" id="product_index" name="product_index" value="0">
                                                    <input type="hidden" id="bill_total_before" name="bill_total_befor" value="0">
                                                    <input style="width: 90px;float: right;" type="text" id="bill_total" name="bill_total" class="form-control" value="0" readonly>
                                            </th>
                                            
                                            <th><div style="float: right;">الإجمالي</div></th>
                                            <th><div style="float: right;"></div></th>
                                            
                                            <th></th>
                                            <th>
                                                    <button type="submit" class="btn btn-outline-secondary" style="float: left" onclick="done()" >حفظ الفاتورة</button>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ csrf_field() }}
    </form>


@endsection

@section('footer')
    {{-- {!! Html::script('/admin/js/plugins/dataTables/datatables.min.js') !!}
 --}}
    {{-- smart select --}}
    {!! Html::script('/admin/SmartSelect/blobselect.min.js') !!}
    {!! Html::script('/admin/js/plugins/chosen/chosen.jquery.js') !!}
    
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            

            var prod = new Array();
            @php foreach($products as $product){
                echo "prod[" . $product->id . "] = " . $product->price . ";";
            }
            @endphp

            $(".chosen-select").on('change',function () {
                var rowNum = this.id.split("-");
                updateSelectButton(rowNum[1] , prod);
                
            });

            $(".quantity").on('change',function () {
                var rowNum = this.id.split("-");
                updateTotalLabel(rowNum[1]);
            });
            
            
            
           
        });

        var prod = new Array();
        @php foreach($products as $product){
            echo "prod[" . $product->id . "] = " . $product->price . ";";
        }
        @endphp

        function updateSelectButton(id , prod){
            var sel = document.getElementById('select-'+id);
            //console.log('select-'+id);
            var val = sel.value;
            var rowNum = sel.id.split("-");
            document.getElementById('price-'+ rowNum[1] ).value = prod[val];

            var y = document.getElementById("quantity-"+ rowNum[1] ).value;
            var z = document.getElementById("price-"+ rowNum[1] ).value;
            var x = Number(y) * Number(z);
            document.getElementById("total-"+ rowNum[1] ).value = x;

            updateTotalBill();
        }

        function updateTotalLabel(id){
            var sel = document.getElementById('select-'+id);
            
            var y = document.getElementById("quantity-"+ id ).value;
            var z = document.getElementById("price-"+ id ).value;
            var x = Number(y) * Number(z);
            document.getElementById("total-"+ id ).value = x;
            
            updateTotalBill();
        }

        function updateTotalBill(){
            var i = 0;
            var totalRowName = '';
            var totalRow = 0;
            var totalBill = 0;
            for(i= 0;i < RowCount; i++){
                if(indexOfRow[i]){
                    totalRowName = 'total-' + (i+1);
                    //console.log(totalRowName);
                    totalRow = document.getElementById(totalRowName).value;
                    totalBill += parseInt(totalRow);
                }
            }

            document.getElementById('bill_total_before').value = totalBill;
            var discount = document.getElementById('discount').value;
            document.getElementById('bill_total').value = totalBill-discount;
            document.getElementById('product_index').value = indexOfRow;
        }


        $('.chosen-select').chosen({width: "100%"});

        function done(){
            var i=0;
            var selectval = '';
            for(i=0;i< RowCount ; i++){
                if(indexOfRow[i]){
                    updateSelectButton(i+1 , prod);
                    updateTotalLabel(i+1);
                    //console.log(selectval);
                }
            }
        }

        var RowCount = 1;
        var indexOfRow = [true];

        function cloneRow() {
            RowCount++;
            indexOfRow.push(true);
            var row = document.getElementById("rowToClone"); // find row to copy
            var table = document.getElementById("tableToModify"); // find table to append to
            var clone = row.cloneNode(true); // copy children too
            clone.id = "Row-"+RowCount;
            clone.style= "visibility:visible" ;
            while (clone.hasChildNodes()) {
                clone.removeChild(clone.firstChild);
            }
            table.appendChild(clone); // add new row to end of table
            
            
            mainClone("cellA-0","Row-"+RowCount , "cellA-"+RowCount, true);
            mainClone("Delete-0","cellA-"+RowCount , "Delete-"+RowCount, false);

            mainClone("cellB-0","Row-"+RowCount , "cellB-"+RowCount, true);
            mainClone("total-0","cellB-"+RowCount , "total-"+RowCount, false);

            mainClone("cellC-0","Row-"+RowCount , "cellC-"+RowCount, true);
            mainClone("price-0","cellC-"+RowCount , "price-"+RowCount, false);

            mainClone("cellD-0","Row-"+RowCount , "cellD-"+RowCount, true);
            mainClone("quantity-0","cellD-"+RowCount , "quantity-"+RowCount, false);

            
            
            mainClone("cellE-0","Row-"+RowCount , "cellE-"+RowCount, true);
            mainClone("select-0","cellE-"+RowCount, "select-"+RowCount, false);
            
            



            mainClone("cellF-0","Row-"+RowCount , "cellF-"+RowCount, true);
            mainClone("notes-0","cellF-"+RowCount , "notes-"+RowCount, false);


            
            $('.chosen-select').chosen({width: "100%"});

        }



        function mainClone(original, perant, name, hasChild) {
            var org = document.getElementById(original); // find row to copy
            var prnt = document.getElementById(perant); // find table to append to
            var clone = org.cloneNode(true); // copy children too
            clone.id = name;
            clone.name = name;
            clone.style= "visibility:visible" ;
            if (hasChild){
                while (clone.hasChildNodes()) {
                    clone.removeChild(clone.firstChild);
                }
            }
            prnt.appendChild(clone); // add new row to end of table
        }

        function deleteChecked() {
            // Removes an element from the document
            var i=0;
            var ckeckName = 'Delete-';
            var rowDelete = '';
            var checkDeleteVal ;
            for(i=0;i< RowCount ; i++){
                if(indexOfRow[i]){
                    checkDeleteVal = document.getElementById(ckeckName + (i+1)).checked;
                    //console.log(checkDeleteVal);
                    if(checkDeleteVal){
                        rowDelete = document.getElementById('Row-' + (i+1));
                        //console.log(ckeckName + (i+1));
                        rowDelete.parentNode.removeChild(rowDelete);
                        indexOfRow[i] = false;
                    }
                }
                
            }
            // console.log(indexOfRow);
        }
        
        
    </script>

@endsection