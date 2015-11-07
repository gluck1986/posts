@extends('layouts.master')

@section('title', 'Создать статью')

@section('content')

<div class="row">
    <div class="col-md-6">
        <h1>Создать статью</h1>
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">
        @include('_form')
    </div>
</div>



@stop