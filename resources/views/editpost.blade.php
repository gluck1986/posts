@extends('layouts.master')

@section('title', 'Редактировать статью')

@section('content')

<div class="row">
    <div class="col-md-6">
        <h1>Редактировать статью</h1>
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">
        @include('_form')
    </div>
</div>



@stop