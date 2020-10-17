@extends('layout')

@section('content')
@foreach($firstassign as $assignment)
    <div class="item">
        <a href="#"><img src="images/page1_img4.jpg" alt="">{{$assignment->name}}  <br> {{$assignment->age}} years</a>
    </div>      
@endforeach 
@endsection

@section('content1')
@endsection