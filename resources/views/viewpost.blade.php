@extends('layouts.master')

@section('title', "просмотр")

@section('content')

<div class="row">
    <div class="col-md-6">
        <h3>{{ $post->title }}</h3>
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-body">
                {{ $post->author }} 
                <span class="badge">{{ $post->created_at }}</span> 
            </div>
            <div class="panel-footer">{{ $post->content }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="caption">
        <div class="col-sm-2">
            <a class="btn btn-primary" role="button" href="/editpost/{{$post->id}}">Редактировать</a>
        </div>
    <div class="col-sm-2">
        <form action="/delete/{{ $post->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger">Удалить</button>
        </form>
        </div>
    </div>
</div>

@stop