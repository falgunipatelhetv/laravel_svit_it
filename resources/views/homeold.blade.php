@extends('layout');

@section('content')
<div id="owl">
							@foreach ($assignments as $ass)
                            <div class="item">
                                <a href="#"><img src="images/page1_img4.jpg" alt="">{{$ass->name}} <br>
                                {{$ass->age}} <br> years</a>
                            </div> 
                            @endforeach

							<!--<div class="item it1">
								<a href="#"><img src="images/page1_img5.jpg" alt="">{{$assignment->name}} <br>
								{{$assignment->age}} years</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="images/page1_img6.jpg" alt="">{{$assignment->name}} <br>
								{{$assignment->age}} years</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="images/page1_img7.jpg" alt="">{{$assignment->name}}  <br>
								{{$assignment->age}} years</a>
							</div>
							<div class="item">
								<a href="#"><img src="images/page1_img4.jpg" alt="">{{$assignment->name}} <br>
								{{$assignment->age}} years</a>
							</div>
							<div class="item it1">
								<a href="#"><img src="images/page1_img5.jpg" alt="">{{$assignment->name}} <br>
								{{$assignment->age}} years</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="images/page1_img6.jpg" alt="">{{$assignment->name}} <br>
								{{$assignment->age}} years</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="images/page1_img7.jpg" alt="">{{$assignment->name}}  <br>
								{{$assignment->age}} years</a>
							</div> -->
						
</div>		

<!-- @foreach($assignments as $assignment)
    <div class="item">
        <a href="#"><img src="images/page1_img4.jpg" alt="">{{$assignment->name}}  years</a>
    </div>      
    @endforeach                  
	@if(!empty($assignments))
    @foreach($assignments->$ass)
        {{$ass->name}}
    @endforeach
@endif

@endsection  -->