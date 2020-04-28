@extends('layouts.app')

@section('content')
@if (Auth::check())
       
            <div class="col-sm-8">
                    @include('tasks.index', ['tasks' => $tasks])
            
            </div>
        
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>タスク管理をはじめよう！</h1>
            {!! link_to_route('signup.get', 'はじめる', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>

@endif 
@endsection
        
  