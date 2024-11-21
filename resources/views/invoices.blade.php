@extends('layouts.app')

@section('content')

<div class="container bg-gray-600">
    <form method="POST" action="/invoices-create">
        @csrf
        <input type="text" name="invoice_number">
        <input type="text" name="amount">

        <button type="submit">Submit</button>
        <x-text-input/>
    </form>
</div>

@endsection