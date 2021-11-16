@extends('layouts.footer')
@extends('layouts.app')

@section('content')
<div id="flotante">
  <div class="card shadow">
    <a href="https://topia.io/gics-free-9tyznj1tz" target="_blank">
        <img src="{{asset('image/Topia.png')}}" alt="" class="w-100">
        </a>
  </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3"  id="portada" >
            <div class="row pt-2">
                <div class="col-md-6 offset-md-3">
                    <div class="card shadow">
                    
                        <div class="card-header text-center">
                            <h4>
                                4ta. EDICIÓN 2021
                            </h4>
                           <h1> <strong>Jornadas de Calidad de Software y Agilidad </strong> </h1> <br>
                           <h3 class="text-muted">12 y 13 de Noviembre, 2021 </h3>
                           <br>
                           <h3 class="text-muted">Ciudad de Corrientes, Argentina</h3>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-md-6 offset-md-3">
                     <div class="row">
                        <div class="col-md-4">
                        <a class="card boton shadow text-gris" target="_blank" href="{{asset('doc/Cronograma_IVJCSA_v01.pdf')}}">
                        
                                <div class="card-header text-center">
                                  
                                       <strong>Descargá el Cronograma</strong>
                                  {{-- </br>
                                   <small class="text-muted"> (próximamente)</small> --}}
                                </div>
                            </a>
                         </div>
                         <div class="col-md-4">
                            <a class="card boton shadow text-gris" href="{{route('videos')}}">
                            
                                    <div class="card-header text-center">
                                      
                                           <strong>Videos de las Jornadas</strong>
                                      {{-- </br>
                                       <small class="text-muted"> (próximamente)</small> --}}
                                    </div>
                                </a>
                             </div>
                        {{-- <div class="col-md-4">
                            <a class="card boton shadow text-gris" href="https://www.eventbrite.com.ar/e/iv-jornadas-de-calidad-de-software-y-agilidad-2021-tickets-193807151407">
                        
                                <div class="card-header text-center">
                                  
                                       <strong>Inscribite a las Jornadas</strong>
                                           
                               
                                </div>
                            </a>
                         </div> --}}
                         {{-- <div class="col-md-4">
                            <div class="card botond shadow text-gris">
                        
                                <div class="card-header text-center">
                                  
                                      <strong>Inscripción<br> Cerrada</strong>
                                 
                                </div>
                            </div>
                         </div> --}}
                         
                         <div class="col-md-4">
                            <div class="card botond shadow text-gris">
                        
                                <div class="card-header text-center">
                                  
                                      <strong>Actas</strong>
                                  </br>
                                  <small class="text-gris"> (próximamente)</small>
                                   
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">

   
 
   <div class="row justify-content-between pt-2 text-center">
        <div class="col-md-10 offset-md-1">
            <p><h2><strong> Videos de las Jornadas</strong></h2></p>
              
            <div class="card">
                <div class="card-header">1. Taller #1. El impacto de las emociones en equipos ágiles</div>
                <div class="card-body">
                    <iframe src="https://drive.google.com/file/d/1Qko-WQmIZZ7Y3BSx_hOi83sece6uqvzH/preview" width="640" height="480" ></iframe>
                </div>
            </div>
            {{--  --}}
            <div class="card">
                <div class="card-header">2. Taller #2. Gestión ágil de proyectos de explotación de datos</div>
                <div class="card-body">
                    <iframe src="https://drive.google.com/file/d/1QlI_XKJSKso1Sfd6JRxhzXcHWibZE_R1/preview" width="640" height="480" ></iframe>
                </div>
            </div>
            {{--  --}}
            <div class="card">
                <div class="card-header">3. Taller #3. Tipos de flaky tests. Diagnóstico y mejora.</div>
                <div class="card-body">
                    <iframe src="https://drive.google.com/file/d/1QoQoCDLuXOWSBQBnr-qjZ1wlARS33ANL/preview" width="640" height="480" ></iframe>
                </div>
            </div>
            {{--  --}}
                 <div class="card">
                     <div class="card-header">4. Track 1 - Presentación de trabajos académicos del 12 de noviembre</div>
                     <div class="card-body">
                        <iframe src="https://drive.google.com/file/d/1QkL1fDt0Kjc7qq1u2Ql7kNoq-X6v7_S_/preview" width="640" height="480" ></iframe> 
                     </div>
                 </div>
                 {{--  --}}
                 <div class="card">
                    <div class="card-header">5. Apertura de las Jornadas y charla inaugural</div>
                    <div class="card-body">
                        <iframe src="https://drive.google.com/file/d/1QqKYs7EXkmGkgo901qs2ddWf8rxue0ez/preview" width="640" height="480" ></iframe>
                    </div>
                </div>
                {{--  --}}
                <div class="card">
                    <div class="card-header">6. Track 1 - Presentación de trabajos académicos del 13 de noviembre</div>
                    <div class="card-body">
                        <iframe src="https://drive.google.com/file/d/1BNIjC1priOwiCBp8hPXP4IrVm3WA2cbP/preview" width="640" height="480" ></iframe>
                    </div>
                </div>
                {{--  --}}
                <div class="card">
                    <div class="card-header">7. Track 2 - Presentación de Experiencias en la Industria del Software</div>
                    <div class="card-body">
                        <iframe src="https://drive.google.com/file/d/1BNqFWpjJKhSabmBy4KzR07uA6VBANZLe/preview" width="640" height="480" ></iframe>
                    </div>
                </div>
        </div>
        
    </div>
    
  
        
    </div>
</div>
@endsection

<style>
    body{
        font-family: 'Poppins' !important;
    }
    .text-muted{
        color: gray;
    }

    #portada{
        
        background-image: url({{asset('image/ctes_4.png')}});
    }

    #portada .card{
        background-color:  rgb(255 255 255 / 70%);
    }

    #portada .botond{
        background-color:  rgb(255 255 255 / 70%);
        color:rgb(53, 52, 52);
    }
    #portada .botond:hover{
        background-color:  rgb(255 255 255 / 100%);
    }
    #portada .boton{
        background-color:  rgb(162 237 85 / 80%);
        color:white;
        cursor:pointer;
    }

    #portada .boton:hover{
        background-color:  rgb(162 237 85 / 100%);
        color:white;
        cursor:pointer;
    }

    .azul-oscuro{
        background-color: #333953;
    }

    .viole{
        background-color: #748bb4;
    }

    .celeste{
        background-color:  #85e4c4;
    }

    .clarito
    {
        background-color: #c2d1e4;
    }
    .azul{
        background-color: #789bdd !important;
    }

    .text-azul-oscuro{
            color: #333953;
        }

    .text-viole{
            color: #748bb4;
        }

    .text-celeste{
            color:  #85e4c4;
        }

    .text-clarito
    {
        color: #c2d1e4;
    }

    .poppins{
        font-family: 'Poppins';font-size: 22px;

    }

    .text-gris{

        color:rgb(53, 52, 52);
    }

    .text-negro{
        color: #212529
    }

    /* #333953  azul oscuro 
    #748bb4 viole claro
    #85e4c4 celeste
    #c2d1e4 casi blanco
    */
    #flotante{
        position: fixed;
   right:10px;
   top:50%;
   width: 100px;
   height: 100px;
   z-index: 5000;
    }

    #flotante:hover{
        width: 110px;
   height: 110px;
    }


 


</style>


@section('script')
<script>
    $(document).ready(function(){

        console.log("ready")
    });

  
</script>
@endsection
