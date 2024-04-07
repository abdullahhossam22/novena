@extends('Layouts.app')

@section('title') Make An Appoinment @endsection

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+84 789 1256 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
            <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
               <form id="#"  class="appoinment-form" method="post" action="{{route('appointment.store')}}">
                @csrf
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select name="department" class="form-control" id="exampleFormControlSelect1">
                                  <option>Select Department </option>
                                  <option value="Opthomology">Opthomology</option>
                                  <option value="Cardiology">Cardiology</option>
                                  <option value="Dental Care">Dental Care</option>
                                  <option value="Child Care">Child Care</option>
                                  <option value="Pulmology">Pulmology</option>
                                  <option value="Gynecology">Gynecology</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="doctor" class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Doctors</option>
                                  <option value="Abdullah Hossam">abdullah hossam</option>
                                  <option value="Abdullah Ibrahim">abdullah ibrahim</option>
                                  <option value="Ziad Adel">ziad adel</option>
                                  <option value="Ziad Nader">ziad nader</option>
                                  <option value="Omar Zalata">omar zalata</option>
                                  <option value="Kareem Hamaza">kareem hamaza</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="text" class="form-control" placeholder="00:00">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    
                    <input class="btn btn-main btn-round-full" type="submit" value="Make appointment"><i class="icofont-simple-right ml-2"></i></input>
                    
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
