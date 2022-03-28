@extends('layouts.footer')
@extends('layouts.app')

@section('content')
{{-- <div id="flotante">
  <div class="card shadow">
    <a href="https://topia.io/gics-free-9tyznj1tz" target="_blank">
        <img src="{{asset('image/Topia.png')}}" alt="" class="w-100">
        </a>
  </div>
</div> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3"  id="portada" >
            <div class="row pt-2">
                <div class="col-md-6 offset-md-3">
                    <div class="card shadow">
                    
                        <div class="card-header text-center">
                           <h1> <strong>Jornadas Argentinas de Didáctica de las Ciencias de la Computación <br>(JADiCC2022)
                        </strong> </h1> <br>
                           <h3 class="text-muted">18, 19 y 20 de agosto de 2022</h3>
                           <br>
                           <h3 class="text-muted">Ciudad de Corrientes, Argentina</h3>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-md-6 offset-md-3">
                     {{-- <div class="row">
                         <div class="col-md-4">
                            <a class="card boton shadow text-gris" target="_blank" >
                            
                                <div class="card-header pt-4 pb-4 text-center">
                                 
                                   <small class="text-muted"> (próximamente)</small> 
                                </div>
                                
                            </a>
                         </div>
                     </div> --}}
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">

   
 
   <div class="row justify-content-between pt-2 text-center">
        <div class="col-md-10 offset-md-1">
            <p><h2><strong>Jornadas Argentinas de Didáctica de las Ciencias de la Computación </strong></h2></p>
              

                  <div class="text-negro text-justify" >
                

                    
                    <p>Estas jornadas, propiciadas por la Iniciativa Program.AR de la Fundación Sadosky, tienen la finalidad de propiciar el encuentro de investigadores, investigadoras, docentes, estudiantes, funcionarios y funcionarias públicas que lleven adelante proyectos de investigación o de intervención educativa en la enseñanza de las Ciencias de la Computación.
                    Se organizan anualmente desde el 2018 buscando promover el desarrollo de las Ciencias de la Computación en todos los niveles del sistema educativo argentino.</p>
                    <p> Las primeras jornadas se orientaron a la Didáctica de la Programación (JaDiPro), pero desde la última edición (JADiCC) se ha ampliado el alcance abarcando otros contenidos de la disciplina, tales como los referidos a las arquitecturas de las computadoras, el funcionamiento de las redes informáticas y la inteligencia artificial, con el objetivo de que la incorporación de las Ciencias de la Computación en las distintas instancias educativas se lleve a cabo desde una perspectiva disciplinar amplia.
                    Las jornadas comprenderán actividades diversas, como conferencias de especialistas, presentación de trabajos académicos en modalidad de artículos y posters, y dictado de talleres sobre temáticas de interés. 
                    Las actividades se desarrollarán principalmente en modalidad PRESENCIAL. Las conferencias y algunos talleres se desarrollarán en modalidad VIRTUAL.
                    </p>
                    <p>El acceso a las actividades de las jornadas es GRATUITO.</p>
                    
                  </div>
        </div>
        
    </div>
    <hr>
 
     {{-- ************************************************ --}}
     
     <div class="row justify-content-center pt-3">
        <div class="col-md-10  text-center text-gris ">
            
            <p><h3> Fechas Importantes</h3></p>
        </div>

        <div class="col-md-10 text-center text-negro ">
          <table class="table table-responsive">
            <thead>
                <th> Instancias</th>
                <th>Artículos (originales y publicados)</th>
                <th>Posters</th>
                <th>Talleres</th>
            </thead>
            <tbody>
                <tr>
                    <td>Presentación </td>
                    <td>14/05/2022</td>
                    <td>14/06/2022</td>
                    <td>01/07/2022</td>
                </tr>
                <tr>
                    <td>Notificación de aceptación</td>
                    <td>10/07/2022</td>
                    <td>10/07/2022</td>
                    <td>15/07/2022</td>
                </tr>
                <tr>
                    <td>Presentación de versión final</td>
                    <td>31/07/2022</td>
                    <td>31/07/2022</td>
                    <td>31/07/2022</td>
                </tr>
            </tbody>
          </table>
                  
        </div>
    </div>
    <div class="row justify-content-center pt-3">
        <div class="col-md-10  text-center text-gris ">
            
            <p><h3> Modos de participación
            </h3></p>
        </div>
    </div>
    <div class="row justify-content-center pt-3">
        <div class="col-md-10  text-center text-gris ">
    <div id="accordion">
        <div class="card">
          <div class="card text-left border-0" id="headingOne">
            <h5 class="mb-0">
              <button class="btn azul collapsed btn-block text-gris text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              
                    <strong class="text-gris">
                        1. Artículos Originales
                        &nbsp;
                       <i class="fas fa-chevron-down"></i>
                    </strong>  
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <div class="col-md-12 text-justify ">
                  {{--  --}}
                {{-- contenido 1  --}}
                                    <p> Se esperan trabajos de investigaciones realizadas por un investigador o una investigadora, estudiantes de doctorado o un equipo sobre alguna de las temáticas de interés de las jornadas. Para su presentación enviar el trabajo antes del 14/05/2022 a través de EasyChair.
                        Los artículos presentados para su evaluación deberán estar anonimizados.</p>
                        <p>
                            Formato:
                        <ul>
                            <li>Lenguaje: Español.</li>
                                <li>Tamaño de papel: A4.</li>
                                    <li>Extensión máxima: 14 páginas </li>
                                        <li>Márgenes: superior 3 cm; inferior, derecho e izquierdo 2 cm.</li>
                        </ul>
                        Formato del texto:
                        <ul>
                        <li>Fuentes: Times New Roman 12 para el texto.</li>
                        <li>Justificación a ambos márgenes.</li>
                        <li> Páginas sin numerar.</li>
                        <li>El texto debe incluir (i) título; (ii) autores (*), con sus respectivas filiaciones y direcciones de mail; (iii) resumen; y (iv) palabras clave (máximo 5). 
                        (*) en la presentación inicial no se incluyen en el texto los datos de los autores, sí en el envío final una vez aceptado el artículo para su presentación. </li>
                        <li>Presentación del documento en formato editable (WORD, RTF o similar).</li>
                        <li>Las citas y referencias deben hacerse siguiendo las normas APA (https://normas-apa.org/referencias/).</li>
                        </ul>
      
      </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card text-left  border-0" id="headingTwo">
            <h5 class="mb-0">
             
                    <button class="btn collapsed azul btn-block text-gris text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      
                        <strong class="text-gris text-left">
                            2. Trabajos publicados
                            &nbsp;
                      
                            <i class="fas fa-chevron-down"></i>
                      
                          </strong> 
                      
             
            </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <div class="col-md-12  ">
                           
             {{--  --}}
             {{-- contenido 2  --}}
             {{--  --}}
                      </div>
            </div>
          </div>
        </div>
        {{--  --}}
        <div class="card">
            <div class="card text-left  border-0" id="headingTwo">
              <h5 class="mb-0">
               
                      <button class="btn collapsed azul btn-block text-gris text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        
                          <strong class="text-gris text-left">
                             3. Posters
                        
                              <i class="fas fa-chevron-down"></i>
                        
                            </strong> 
                        
               
              </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <div class="col-md-12  ">
                             {{-- contenido 3  --}}
               
                    
                        </div>
              </div>
            </div>
          </div>
          {{--  --}}
          <div class="card">
            <div class="card text-left  border-0" id="headingTwo">
              <h5 class="mb-0">
               
                      <button class="btn collapsed azul btn-block text-gris text-left" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        
                          <strong class="text-gris text-left">
                              4. Talleres
                              &nbsp;
                        
                              <i class="fas fa-chevron-down"></i>
                        
                            </strong> 
                        
               
              </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <div class="col-md-12  ">
                             {{-- contenido 4  --}}


                             {{--  --}}
               
                    
                        </div>
              </div>
            </div>
          </div>
       
      </div>
     

      {{--  --}}
        </div></div>
    
   
    
    
    
    
        
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
