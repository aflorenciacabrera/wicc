@extends('layouts.footer')
@extends('layouts.app')

@section('content')

<div class="container" id="central" style="background-color:#f0f0fd;">

   
 
   <div class="row justify-content-between pt-2 text-center" >
        <div class="col-md-10 offset-md-1">
            <h2>
                Agenda de Actividades JADiCC 2022
            </h2>
           <img class="img img-fluid py-2" s src="{{asset('image/agendau.png')}}">
        
        

           <p>
            <a target="_blank" class="btn btn-success" href="https://www.eventbrite.com.ar/e/jadicc-2022-tickets-385796998207">
                <strong>Inscripciones al Evento</strong>
            </a>
              <a target="_blank" class="btn btn-danger" href="https://calendar.google.com/calendar/u/1?cid=dGhlNWdkc2d2ODMwaml0bW5xa3JvaWQ2ZzhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ">
                <strong>Agregar a Google Calendar</strong>
            </a>
            
        </p>
          
          
          
<div id="accordion">
  <div class="card">
    <div class="card text-left  border-0" id="headingOne">
      <h5 class="mb-0">
        <button class="btn collapsed verde btn-block text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <strong class="text-center" style="font-size:1.2em">
                             Agenda de Conferencias y Mesas debate &nbsp;<i class="fas fa-chevron-down"></i>
            </strong> 
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        @include("agenda.conferencias")
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card text-left  border-0" id="headingThree">
      <h5 class="mb-0">
        <button class="btn collapsed verde btn-block text-center" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <strong class="text-center" style="font-size:1.2em">
                              Agenda de talleres&nbsp;<i class="fas fa-chevron-down"></i>
            </strong> 
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-left">
        @include("agenda.tabla")
      </div>
    </div>
  </div>
</div>


        </div>
    </div>

</div>

@endsection
@section('script')
<script>
    $(document).ready(function(){

        // console.log("ready")
        $('.dropdown-item').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});
    });

  
</script>
@endsection