@extends('layouts.app')

@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Product') }}
    </h2>
</x-slot>
<div class="py-12">
   <h1>Product</h1>
</div>

@endsection