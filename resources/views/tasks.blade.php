@extends('layouts.app')

@section('content')
  <div>
    <form action="{{ url('')}}" method="POST">
  {{ csrf_field() }}
    <input type="text" name="name">
    <button type="submit">등록</button>
 
  <div>할일을 입력해주세요</div>
  @foreach ($tasks as $task) 
    <p> {{ $task->name}}</p>
  @endforeach

   
  </form>
 </div>



    <!-- TODO: Current Tasks -->
@endsection
