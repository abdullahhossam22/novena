@extends('Layouts.app')

@section('title') Department @endsection

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">All Department</span>
          <h1 class="text-capitalize mb-5 text-lg">Care Department</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Award winning patient care</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>

		<div class="row">

           @foreach ($departments as $department)
			   
		   
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="{{asset($department->photo)}}" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">{{$department->title}}</h4>
						<p class="mb-4">{{$department->description}}</p>
						<a href="{{route('SingleDepartment.show',$department->id)}}" class="read-more">Learn More<i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>

           @endforeach

		</div>
	</div>
</section>

@endsection