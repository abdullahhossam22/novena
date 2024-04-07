@extends('Layouts.app')

@section('title') Department Details @endsection

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Department Details</span>
          <h1 class="text-capitalize mb-5 text-lg">{{$S_Department->title}}</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="{{asset($S_Department->photo)}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md">{{$S_Department->title}}</h3>
					<div class="divider my-4"></div>
					<p class="lead">{{$S_Department->description}}</p>
					

					<h3 class="mt-5 mb-4">Services features</h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2">{{$S_Department->service}}</i></li>
					</ul>
					<a href="{{route('appoinment.create')}}" class="btn btn-main-2 btn-round-full">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
						
					  <li class="d-flex justify-content-between align-items-center">
					    <span>{{$S_Department->day_of_week_opening}}</span>
					    <span>{{$S_Department->opening_hours}}</span>
					  </li>

					@if ($S_Department->holiday === '0')

                    @else

                        <li class="d-flex justify-content-between align-items-center">
					    <span>{{$S_Department->holiday}}</span>
					    <span>Closed</span>
					    </li>

                    @endif

					  
					</ul>
					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3>{{$S_Department->phone}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection