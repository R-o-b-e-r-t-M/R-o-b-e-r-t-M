<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // public function show()
    // {
    //     $name = "Robert";
    //     return view("invoices", ['name' => $name]);
    // }

    public function create(Request $request){
        $data = $request->all();

        Invoice::create([
            'amount' => $data['amount'],
            'invoice_number' => $data['invoice_number'],
        ]);
    }

    public function jsonResponse(){
        return response()->json(['name' => 'Robert']);
    }

    public function index()
    {
        $data = Invoice::get();
        return response()->json(['data'=> $data]);
    }

    public function store(Request $request){

        $data = Invoice::create([
            'invoice_number'=> $request->invoice_number,
            'amount'=> $request->amount,
        ]);

        return response()->json(['data'=> 'record created successfully']);
    }

    //show method invoice
    public function show($id){
        $data = Invoice::find($id);
        return response()->json(['data'=> $data]);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        $data = $request->all();

        $invoice->update([
            'invoice_number' => $data['invoice_number'],
            'amount' => $data['amount'],
        ]);

        // $data = Invoice::find($id);
        // $data->invoice_number = $request->invoice_number;
        // $data->amount = $request->amount;
        // $data->save();

        return response()->json(['data' => 'Invoice updated successfully']);
    }

    public function destroy($id){
        $invoice = Invoice::find($id);

        $invoice->delete();

        return response()->json(['data'=> 'record deleted successfully']);
    }
}