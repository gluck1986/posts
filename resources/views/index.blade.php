@extends('layouts.master')

@section('title', 'Статьи')

@section('content')
<div class="row">
    <div class="col-md-6">
        
            <div class="list-group">
            @foreach ($posts as $post)
            <a  href="/viewpost/{{$post->id}}" class="list-group-item list-group-item-warning">
                <div class="row" >
                    
                    <div class="col-md-4">
                        <span class="label label-default">{{ 'Автор: '.$post->author }}</span>
                        <span class="label label-default">{{ $post->created_at }}</span>
                        @if ($post->created_at<>$post->updated_at)
                            изменялось:
                            <span class="label label-default"> {{$post->updated_at}}'</span>
                        @endif
                    </div>
                       
                    <div class="col-md-6"> 
                        {{ $post->title }} 
                    </div>
                    
                    
                </div> 
            </a>
                
            @endforeach
            </div>
        

       <?php echo $posts->render(); ?>
    </div>
    
</div>
@stop