@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CRUD</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    @section('contenidoPrincipal')
    @endsection
@stop   

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop