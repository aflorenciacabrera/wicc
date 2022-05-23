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
                    
                        <div class="card-header text-center text-verde">
                           <h1> <strong>Jornadas Argentinas de Didáctica de las Ciencias de la Computación <br>(JADiCC2022)
                        </strong> </h1> <br>
                           <h3 class="text-verde">18, 19 y 20 de agosto de 2022.</h3>
                           <br>
                           <h3 class="text-verde">Ciudad de Corrientes, Argentina</h3>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-md-6 offset-md-3">
                     {{-- <div class="row">
                         <div class="col-md-4">
                            <a class="card boton shadow " target="_blank" >
                            
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
<div class="container" id="central" style="background-color:#f0f0fd;">

   
 
   <div class="row justify-content-between pt-2 text-center">
        <div class="col-md-10 offset-md-1">
            <p ><h2><strong class="text-morado">Jornadas Argentinas de Didáctica de las Ciencias de la Computación </strong></h2></p>
              

                  <div class="text-negro text-justify" style="font-size: 1.2em" >
                

                    
                   <p>Estas jornadas, propiciadas por la Iniciativa Program.AR de la Fundación Sadosky, tienen la finalidad de favorecer el encuentro de investigadores, investigadoras, docentes, estudiantes, funcionarios y funcionarias públicas que lleven adelante proyectos de investigación o de intervención educativa en la enseñanza de las Ciencias de la Computación.
                    Se organizan anualmente desde el 2018 buscando promover el desarrollo de las Ciencias de la Computación en todos los niveles del sistema educativo argentino.</p>
                    <p> Las primeras jornadas se orientaron a la Didáctica de la Programación (JaDiPro), pero desde la última edición (JADiCC) se ha ampliado el alcance abarcando otros contenidos de la disciplina, tales como los referidos a las arquitecturas de las computadoras, el funcionamiento de las redes informáticas y la inteligencia artificial, con el objetivo de que la incorporación de las Ciencias de la Computación en las distintas instancias educativas se lleve a cabo desde una perspectiva disciplinar amplia.
                    Las jornadas comprenderán actividades diversas, como conferencias de especialistas, presentación de trabajos académicos en modalidad de artículos y posters, y dictado de talleres sobre temáticas de interés. 
                    Las actividades se desarrollarán principalmente en modalidad <b>PRESENCIAL</b>. Las conferencias y algunos talleres se desarrollarán en modalidad VIRTUAL.
                    </p>
                    <p>El acceso a las actividades de las jornadas es <b>GRATUITO</b>.</p>
                    
                  </div>
        </div>
        
    </div>
    <hr class="hr">
 
     {{-- ************************************************ --}}
     <div class="row justify-content-center pt-3">
        <div class="col-md-10  text-center ">
            
            <p ><h2><strong class="text-morado">Ediciones anteriores</strong></h2></p>
            <p><h4><a href="https://jadipro.unq.edu.ar/">JaDiPro 2018 (Universidad Nacional de Quilmes)</a></h4></p>
<p><h4><a href="https://jadipro.unc.edu.ar/">JaDiPro 2019 (Universidad Nacional de Córdoba)</a></h4></p>
<p><h4><a href="https://jadicc.program.ar/">JADiCC 2021 (Fundación Sadosky)</a></h4></p>
        </div>
     </div>
     <hr class="hr">
     {{-- ----------******************** --}}
     
     <div class="row justify-content-center pt-3">
        <div class="col-md-10  text-center ">
            
            <p ><h2><strong class="text-morado">Plazos para el envío de propuestas y notificación de
                aceptación y presentación final</strong></h2></p>
        </div>

        <div class="col-md-10 text-center text-negro ">
          <table id="tabla" class="table table-sm">
            <thead class="text-center verde" >
                <th> Instancias</th>
                <th>Artículos (originales y publicados)</th>
                <th>Posters</th>
                <th>Talleres</th>
            </thead>
            <tbody >
                <tr>
                    <td><b>Presentación </b></td>
                    <td class="text-center">25/05/2022</td>
                    <td class="text-center">14/06/2022</td>
                    <td class="text-center">01/07/2022</td>
                </tr>
                <tr>
                    <td><b>Notificación de aceptación</b></td>
                    <td class="text-center">17/07/2022</td>
                    <td class="text-center">10/07/2022</td>
                    <td class="text-center">15/07/2022</td>
                </tr>
                <tr>
                    <td><b>Presentación de versión final</b></td>
                    <td class="text-center">31/07/2022</td>
                    <td class="text-center">31/07/2022</td>
                    <td class="text-center">31/07/2022</td>
                </tr>
            </tbody>
          </table>
        
            
            <p ><h4>El envío de propuestas estará disponible desde el 12 de
                abril de 2022</h4></p>
                <p>
                   <h3> Consultas: <a href="mailto:jadicc2022@gmail.com?Subject=Consulta Web %20Jadicc%20-2022">jadicc2022@gmail.com</a><h3>
                </p>
        
                  
        </div>
    </div>
    
     <hr class="hr">
     <div class="row justify-content-center pt-3">
        <p ><h2><strong class="text-morado">Temáticas de interés de las jornadas</strong></h2></p>
     </div>
     <div class="col-md-10 offset-md-1 text-justify" style="font-size: 1.2em">
      <p>
        <ul><li>Evaluación de aprendizajes de secuencias didácticas para el aula sobre contenidos
            de CC</li>
            <li>Formatos, contenidos y estrategias de formación docente contínua en CC</li>
            <li>Percepciones sobre la enseñanza de CC por parte de docentes en ejercicio o</li>
            recientemente formados
            <li>Narrativa de experiencias áulicas de enseñanza de las CC en nivel inicial, primario o</li>
            secundario
            <li>Formatos, contenidos y estrategias de formación inicial docente en CC</li>
            <li>El Impacto de la enseñanza de CC en la brecha digital</li>
            <li>Impacto de la enseñanza de CC en la brecha de género</li>
            <li>Accesibilidad: enseñanza de las CC y programación de forma inclusiva</li>
            <li>Herramientas y entornos para enseñar CC con distintos dispositivos, con y sin</li>
            conectividad
            <li>Estudios comparativos de diseños curriculares y Frameworks</li>
            <li>Estudio de casos a nivel del aula, la escuela o un sistema educativo</li>
            <li>Preconceptos de estudiantes con respecto a programación y CC en general</li>
            <li>Jerarquización de contenidos de las CC en el contexto de la pandemia de Covid 19</li>
            <li>Aprendizajes y desarrollo cognitivo a partir de la enseñanza de la programación</li>
            </ul>
      </p>
        
     </div>
     <hr class="hr">
    <div class="row justify-content-center pt-3">
        <div class="col-md-10  text-center  ">
              <p ><h2><strong class="text-morado">Modos de participación</strong></h2></p>
            
        </div>
    </div>
    <div class="row justify-content-center pt-3">
        <div class="col-md-10  text-center ">
    <div id="accordion">
        <div class="card">
          <div class="card text-left border-0" id="headingOne">
            <h5 class="mb-0">
              <button class="btn verde collapsed btn-block text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              
                    <strong class="" style="font-size:1.2em">
                        1. Artículos Originales
                        &nbsp;
                       <i class="fas fa-chevron-down"></i>
                    </strong>  
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body card-jadicc text-negro">
              <div class="col-md-12 text-justify " style="font-size:1.2em">
                  {{--  --}}
                {{-- contenido 1  --}}
                                    <p> Se esperan trabajos de investigaciones realizadas por un investigador o una investigadora, estudiantes de doctorado o un equipo sobre alguna de las temáticas de interés de las jornadas. Para su presentación enviar el trabajo antes del 25/05/2022 a través de <a href="https://easychair.org/conferences/?conf=jadicc2022 " class="text-morado">EasyChair.</a>&nbsp;<label for="" class="text-muted" style="font-size: 0.8em" > (Es necesario crear un usuario en la plataforma Easychair para el envío).</label></p>
                        <p>Los artículos presentados para su evaluación deberán estar anonimizados.</p>
                        <p>
                           <b> Formato:</b>
                        <ul>
                            <li>Lenguaje: Español.</li>
                                <li>Tamaño de papel: A4.</li>
                                    <li>Extensión máxima: 14 páginas </li>
                                        <li>Márgenes: superior 3 cm; inferior, derecho e izquierdo 2 cm.</li>
                        </ul>
                        <b>Formato del texto:</b>
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
             
                    <button class="btn collapsed verde btn-block text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      
                        <strong class="text-left" style="font-size:1.2em">
                            2. Trabajos publicados
                            &nbsp;
                      
                            <i class="fas fa-chevron-down"></i>
                      
                          </strong> 
                      
             
            </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body card-jadicc text-negro">
              <div class="col-md-12 text-justify " style="font-size:1.2em">
                           
             {{--  --}}
             {{-- contenido 2  --}}
<p>             Se esperan artículos o adaptaciones de los mismos que hayan sido publicados en conferencias, congresos o revistas sobre alguna de las temáticas de interés de las jornadas, para compartir con la comunidad de JADiCC. Para su presentación enviar el trabajo antes del <del>14/05/2022</del> 25/05/2022 a través de <a href="ttps://easychair.org/conferences/?conf=jadicc2022" class="text-morado">EasyChair</a>.</p>
<p>Los artículos pueden estar escritos en el idioma original en el cual hayan sido publicados. Deben indicarse los datos de la publicación (revista, congreso, etc)</p>

             {{--  --}}
                      </div>
            </div>
          </div>
        </div>
        {{--  --}}
        <div class="card">
            <div class="card text-left  border-0" id="headingTwo">
              <h5 class="mb-0">
               
                      <button class="btn collapsed verde btn-block text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        
                          <strong class="text-left" style="font-size:1.2em">
                             3. Posters
                        
                              <i class="fas fa-chevron-down"></i>
                        
                            </strong> 
                        
               
              </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body card-jadicc text-negro">
                <div class="col-md-12 text-justify " style="font-size:1.2em">
                             {{-- contenido 3  --}}
                             <p>Se espera la presentación gráfica de trabajos de investigación en progreso o experiencias de enseñanza de las Ciencias de la Computación llevadas adelante en el contexto de un aula, una escuela, una red de instituciones o un sistema educativo. Se pretende que la elaboración del trabajo esté a cargo de las y los protagonistas de las acciones implementadas -docentes, equipos de conducción, supervisores, funcionarios o funcionarias educativos- o investigadores e investigadoras que hayan estudiado el caso.  
                             Para su presentación enviar el poster antes del 14/06/2022 a través de <a href="https://easychair.org/conferences/?conf=jadicc2022 " class="text-morado">EasyChair.</a>&nbsp;<label for="" class="text-muted" style="font-size:0.8em" > (Es necesario crear un usuario en la plataforma Easychair para el envío).</label></p>
                             <p><b>Formato:</b>
                                 <ul>
                             <li>Lenguaje: español.</li>
                             <li>Tamaño de papel: A3.</li>
                             <li>Formato del archivo: PDF.</li>
                             <li>El poster debe contener: (i) título del trabajo, (ii) autores (*), con sus respectivas filiaciones y direcciones de mail; y (iii) palabras clave (máximo 5). 
                                 <br>(*) en la presentación inicial no se incluyen en el texto los datos de los autores, sí en el envío final una vez aceptado el artículo para su presentación. 
                             </li>
                                 </ul>

                             
                             </p>
                             <p>Se espera que la visualización del póster describa en forma ágil y sencilla el trabajo presentado. A modo de ejemplo, a continuación, se muestra qué información se espera encontrar (al menos) en tres tipos de posters:
                             <ul><li><b>Póster de Investigación</b>. Debe contener el problema y los objetivos de la investigación, la metodología y principales resultados o avances.</li>
                             <li><b>Póster de caso</b>. Debe contener los objetivos de la experiencia, el contexto de la implementación, descripción de destinatarios y participantes, contenidos abordados, herramientas utilizadas, aprendizajes alcanzados.</li>
                             <li><b>Póster de presentación de una herramienta</b>. Debe contener el problema educativo que aborda la herramienta (aprendizaje, retención, rendimiento, acompañamiento, feedback, etc), la descripción de la herramienta y la descripción de cómo la herramienta mejora la situación educativa.</li>
                             </p>
                    
                        </div>
              </div>
            </div>
          </div>
          {{--  --}}
          <div class="card">
            <div class="card text-left  border-0" id="headingTwo">
              <h5 class="mb-0">
               
                      <button class="btn collapsed verde btn-block text-left" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        
                          <strong class="text-left" style="font-size:1.2em">
                              4. Talleres
                              &nbsp;
                        
                              <i class="fas fa-chevron-down"></i>
                        
                            </strong> 
                        
               
              </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body card-jadicc text-negro">
                <div class="col-md-12  text-justify" style="font-size:1.2em"> 
                             {{-- contenido 4  --}}
                             <p>La propuesta de un taller de dos horas de duración como máximo, puede ser presentada por una persona o un equipo de personas y estar basada en una actividad probada o bien ser un diseño original. Las propuestas deberán enviarse antes del 01/07/2020 a través del <a href="https://forms.gle/oahjToPURVSpJqtV8" target="_blank" >Formulario de presentación de Talleres </a>.</p>
                             <p><b>La propuesta deberá especificar:</b>
                             <ul><li>Los saberes que pone en juego</li>
                             <li>Los objetivos a alcanzar</li>
                             <li>Los destinatarios para el cual fue diseñado</li>
                             <li>La o las herramientas y/o equipamientos e infraestructura requerida</li>
                             <li>El enfoque didáctico en el que se fundamenta</li>
                             <li>El modo en que se evalúan los aprendizajes alcanzados</li>
                             </ul>
                             Se espera una propuesta pedagógica de enseñanza de las Ciencias de la Computación centrada en el hacer, de una forma creativa y reflexiva y que aborde la enseñanza de cualesquiera de los siguientes saberes -sin que esta lista sea ni exhaustiva ni excluyente:
                             <ul><li>Aquellos necesarios para poder formular soluciones efectivas y sistemáticas a diversos tipos de problemas: la algoritmia.</li>
                             <li>Los conocimientos necesarios para poder volcar esas soluciones algorítmicas a los diversos lenguajes que utilizan las computadoras: la programación.</li>
                             <li>Las formas de almacenar la información de manera que pueda ser recuperada y que se pueda buscar velozmente un dato entre miles o millones de otros: las estructuras de datos y las bases de datos.</li>
                             <li>El entendimiento de los componentes que definen los distintos tipos de computadoras: las arquitecturas de computadoras. </li>
                             <li>La forma en que las computadoras intercambian información: las redes de computadoras. </li>
                             <li>El aprendizaje automático y la ciencia de datos (usualmente englobados bajo el término inteligencia artificial), que se ocupa de la combinación de varias de las áreas previamente mencionadas para abordar problemas muy complejos mediante mecanismos que tienen puntos en común con la cognición humana.</li>
                             </ul>
                             {{-- Más información en: https://jadicc2022.unne.edu.ar --}}
                             

                             {{--  --}}
               
                    
                        </div>
              </div>
            </div>
          </div>
       
      </div>
      <p></p>
      <p></p>
      <p></p>
      <p></p>

     

      {{--  --}}
        </div></div>
    
   
    
    
    
    
        
    </div>
</div>
@endsection

<style>


    #tabla{
        border: 2px solid yellowgreen;
    }
    th,td{
        border: 2px solid yellowgreen;
    }
    th{
        text-align: center;
    }

    

    .hr{
        border: 1px solid greenyellow;
    }

    .container, .container-fluid, .card-jadicc{
        background-color: #f0f0fd;
        /* background-color: red; */
    }

    body{
        font-family: 'Poppins' !important;
       
    }
    .text-muted{
        color: gray;
    }

    #portada{
        
        background-image: url({{asset('image/ctes_4.png')}});
    }
    
   ul {
  list-style: none; /* Remove default bullets */
}

ul li::before {
  content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
  color: #7777f0; /* Change the color */
  font-weight: bold; /* If you want it to be bold */
  display: inline-block; /* Needed to add space between the bullet and the text */
  width: 1em; /* Also needed for space (tweak if needed) */
  margin-left: -1em; /* Also needed for space (tweak if needed) */
}

    #portada .card{
        background-color:  rgb(90 90 90 / 30%);
    }

    #portada .botond{
        background-color:  rgb(90 90 90 / 30%);
        color:rgb(53, 52, 52);
    }
    #portada .botond:hover{
        background-color:  rgb(90 90 90 / 100%);
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

    .text-verde{

        color:#c7fb02;
    }

    .text-negro{
        color: #212529
    }
      .text-morado{
        color: #7777f0
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

    .verde{
        background-color: #c7fb02 !important;
        color: black;
    }


 


</style>


@section('script')
<script>
    $(document).ready(function(){

        console.log("ready")
    });

  
</script>
@endsection
