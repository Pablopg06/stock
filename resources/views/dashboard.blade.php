@extends('adminlte::page')

@section('title', 'Stock')

@section('content_header')
    <h1>
        <strong>
            Stock
        </strong>
    </h1>
@stop

@section('content')
    <p>Bienvenidos al Sistema de stock.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stock') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
        </div>
    </div>
</x-app-layout>--}}

