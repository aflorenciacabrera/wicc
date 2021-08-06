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
                            <div class="card boton shadow text-gris">
                        
                                <div class="card-header text-center">
                                  
                                       <strong>Inscripción</strong>
                                   </br>
                                   <small class="text-muted"> (próximamente)</small>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="card boton shadow text-gris">
                        
                                <div class="card-header text-center">
                                  
                                       <strong>Programa</strong>
                                  </br>
                                   <small class="text-muted"> (próximamente)</small>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="card boton shadow text-gris">
                        
                                <div class="card-header text-center">
                                  
                                      <strong>Actas</strong>
                                  </br>
                                  <small class="text-muted"> (próximamente)</small>
                                   
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
        <div class="col-md-12">
            <p><h2><strong> IV Jornadas de Calidad de Software y Agilidad </strong></h2></p>
              

                  <div class="text-negro" >
                    <p>Campus Virtual de FaCENA</p>

                    <p>Las Jornadas de Calidad de Software y Agilidad (JCSA) inician en el año 2017 con la intención de difundir en la región del NEA avances y tendencias en Ingeniería de Software y propiciar un espacio de debate e intercambio donde interactúen universidades, sector público y sector empresarial vinculado a la industria del software.</p>

                        <p> Durante las dos jornadas se realizarán talleres, conferencias y la presentación de experiencias en la Industria del Software regional, con la participación de integrantes de la Industria, los Polos y Clústeres TIC y representantes de Organismos del Estado.</p>
                            <p>Las actividades propuestas están destinadas a ingenieros y licenciados en sistemas, estudiantes y docentes de estas especialidades, profesionales y empresarios del sector del software, así como también público interesado en el tema.</p>
                  </div>
        </div>
        
    </div>
    <hr>
 
     {{-- ************************************************ --}}
     
     <div class="row justify-content-between pt-3">
        <div class="col-md-12  text-center text-gris ">
            <p><h3> Presentación de Trabajos Académicos y Experiencias en la Industria</h3></p>
        </div>

        <div class="col-md-12 text-center text-negro">
                <p>JCSA 2021 – 1º Llamado a Presentación de trabajos. CFP – FaCENA - UNNE.</p>

                  
                      <p>Se invita a la comunidad académica a presentar trabajos a las IV JCSA 2021, enviando artículos científicos/académicos o Experiencias en la Industria originales que se encuadren en las temáticas de la Jornada.</p>
                  
        </div>
    </div>
    
    <div id="accordion">
        <div class="card">
          <div class="card text-left border-0" id="headingOne">
            <h5 class="mb-0">
              <button class="btn azul collapsed btn-block text-gris" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              
                    <strong class="text-gris">
                       Llamado: Artículos científicos y póster&nbsp;
                       <i class="fas fa-chevron-down"></i>
                    </strong>  
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <div class="col-md-12 ">
                  {{--  --}}
                  <p>Los autores deben enviar sus trabajos desde el siguiente enlace (es necesario tener una cuenta de EasyChair): <a href="https://easychair.org/my/conference?conf=jcs2021#" target="_blank">aquí</a> </p>
                  {{--  --}}
                  <ul class="">
                      <li class="">Idioma: español o inglés.</li>
                      <li class="">Máximo 10 páginas sin numerar. Sin encabezado y pie de página.</li>                               
                  </ul>
                  {{--  --}}
                  <p> 
                      En general todos los artículos pueden enviarse en WORD o PDF en el formato LNCS. 
                      A continuación se añade la información, plantilla y ejemplo del formato en diferentes 
                      editores de texto:
                  </p>
                  {{--  --}}
                  <ul class="">
                      <li class="">
                          
                     <a href="ftp://ftp.springernature.com/cs-proceeding/llncs/llncs2e.zip">LaTeX2e.zip</a>
                      </li>
                      <li class="">
                          
                     <a href="ftp://ftp.springernature.com/cs-proceeding/llncs/word/splnproc1703.zip">Office2007.zip</a>
                      </li>  
                      <li class=""><a href="https://resource-cms.springernature.com/springer-cms/rest/v1/content/7117506/data/v1">word-97-2003.zip</a></li>                             
                  </ul>
                  {{--  --}}
                  <p> Se invitará a los autores de los trabajos aceptados a enviar un poster y audio explicativo para 
                      su socialización durante las jornadas.</p> 
      
                  <p> Los trabajos aceptados serán presentados el viernes 12 de noviembre en modalidad virtual 
                      en el marco de las IV Jornadas de Calidad de Software y Agilidad.</p> 
      
                  {{--  --}}
                  <p class="text-center clarito"><strong>Fechas Importantes</strong></p>
                  {{--  --}}
                  <ul class="">
                                      <li class=""></i>Cierre de Recepción de Artículos: 19 de septiembre</li>
                                      <li class=""></i>Notificación de Aceptación a los Autores: 18 de octubre</li>  
                                      <li class=""></i>Fecha Límite para Versión Final (camera ready) y envío del póster: 31 de octubre.</li>                             
                                  </ul>
      
      </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card text-left  border-0" id="headingTwo">
            <h5 class="mb-0">
             
                    <button class="btn collapsed azul btn-block text-gris" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      
                        <strong class="text-gris text-left">
                            Llamado: Experiencias en la Industria del Software&nbsp;
                      
                            <i class="fas fa-chevron-down"></i>
                      
                          </strong> 
                      
             
            </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <div class="col-md-12  ">
                           
             
                  <p>Las empresas o profesionales independientes deben enviar sus experiencias indicando 
                      de forma resumida el contexto de una solución innovadora en el campo de la Industria del Software realizada en la región. </p>
      
                  <p>Los resúmenes aceptados contarán con un track especial en las IV Jornadas de Calidad de Software y 
                      Agilidad a realizarse el viernes 12 de noviembre en modalidad virtual con un total de 15 minutos por Experiencia aceptada.</p>
      
                      <p>A continuación encontrará el enlace a la presentacción del trabajo</p>
      
                      <p>Presentación de Trabajos Experiencias en la Industria del Software para las IV JCSA 2021 <a href="https://forms.gle/LDLbdEHxVuVbQ2gGA" target="_blank">aquí</a></p>
      
                      <p class="text-center clarito"><strong>Fechas Importantes</strong></p>
                  <div class="col"> 
                      <ul class="">
                          <li class=""> Recepción de Resúmenes: 18 de octubre</li>
                          <li class=""> Aceptación: 31 de octubre</li>                                                              
                      </ul>
                  </div>                          
              </p>
                      </div>
            </div>
          </div>
        </div>
       
      </div>
     
    <div class="row justify-contente-between pt-3">
        <div class="col-md-12 text-center  text-gris ">
            <p><h3> Actas</h3></p>
                {{-- <p><h4 class="text-muted">JCSA 2021 – 1º Llamado a Presentación de trabajos. CFP – FaCENA - UNNE.</h4></p> --}}
        </div>
        <div class="col-md-12 text-negro">
           

            
                <p> Todos los artículos aceptados y presentados en las Jornadas se publicarán en las actas de las 
                    Jornadas con ISBN incluido. El Libro de Actas estará disponible en el Repositorio Institucional 
                    de la Universidad Nacional del Nordeste.</p>

                <p>Les agradecemos la difusión del presente llamado y esperamos sus propuestas.</p>
            
        </div>

    </div>
    <hr>
     {{-- ************************************************ --}}
     <div class="row justify-content-between pt-3">
        <div class="col-md-12 text-center  text-gris  ">
            <p><h3> Ejes Temáticos</h3></p>
                {{-- <p><h4 class="text-muted">JCSA 2021 – 1º Llamado a Presentación de trabajos. CFP – FaCENA - UNNE.</h4></p> --}}
        </div>
        <div class="col-md-6">
            <ul class="list-group list-group-flush">
                <li class=""> Calidad del Producto y Proceso de Software</li>
                <li class=""> Calidad Interna y Externa del Software</li>  
                <li class=""> Testing de Software</li> 
                <li class=""> Verificación y Validación</li> 
                <li class=""> Modelos y Métricas de Calidad de Software</li> 
                <li class=""> Calidad de Datos</li> 
                <li class=""> Calidad de Software Específica de Dominio: mobile, web, embebidos, 
                    concurrentes, distribuidos, cloud, GUI y sistemas de tiempo real.</li>    
                <li class=""> User Experience</li>
                <li class=""> Diseño Centrado en el Usuario</li> 
            
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group list-group-flush">
                <li class=""> Herramientas, Aplicaciones Industriales y Estudios Empíricos</li>  
                <li class=""> Anomalías de Código – Refactoring</li> 
                <li class=""> Gestión de la Calidad de Software</li> 
                <li class=""> Enseñanza de Calidad de Software</li>        
                <li class=""> Métodos y Prácticas Ágiles</li>
                <li class=""> Ingeniería del Software Continúa (Ejemplo: DevOps, Agile, etc)</li>
                <li class=""> Ingeniería de Requisitos en Métodos Ágiles</li>
                <li class=""> Peopleware y Management 3.0</li>
                <li class=""> Estimación y Planificación Ágil</li>
            </ul>
        </div>
               
                    
             
        
    </div>
     {{-- ************************************************ --}}
     <hr>
     <div class="row justify-content-between pt-3">
        <div class="col-md-12 text-center  text-gris ">
            <p><h3> Comité Organizador</h3></p>
                {{-- <p><h4 class="text-muted">JCSA 2021 – 1º Llamado a Presentación de trabajos. CFP – FaCENA - UNNE.</h4></p> --}}
        </div>
                <div class="col-md-6"> 
                    <ul class="list-group list-group-flush">
                        <li class=""> Mgter. Gladys Noemí Dapozo (FaCENA - UNNE)</li>
                        <li class=""> Dr. Emanuel Irrazábal (FaCENA - UNNE)</li>  
                        <li class=""> Lic. María de los Ángeles Ferraro (FaCENA - UNNE)</li> 
                        <li class=""> Dr. Horacio D. Kuna (FQCEyN - UNaM)</li> 
                        <li class=""> Dr. Eduardo Zamudio (FQCEyN - UNaM)</li> 
                       
                                                                             
                    </ul>
                </div>   
                <div class="col-md-6"> 
                    <ul class="list-group list-group-flush">
                    
                        <li class=""> Ing. Alice Rambo (FQCEyN - UNaM)</li> 
                        <li class=""> Dr. César Acuña (FRRe - UTN)</li>
                        <li class=""> Dra. Verónica Bollati (FRRe - UTN)</li>    
                        <li class=""> Dra. Noelia Pinto (FRRe - UTN)</li> 
                                                                             
                    </ul>
                </div>   

    </div>
    <hr>
    
    <div class="row justify-content-between pt-3 pb-5">
        <div class="col-md-12 text-center  text-gris ">
            <p><h3> Comité de Programa</h3></p>
                {{-- <p><h4 class="text-muted">JCSA 2021 – 1º Llamado a Presentación de trabajos. CFP – FaCENA - UNNE.</h4></p> --}}
        </div>
        <div class="col-md-6">
                    
            <ul class="list-group list-group-flush">
                <li  class=""> Mgter. Cristina Greiner (GICS - FaCENA - UNNE)</li>
                <li  class=""> Mgter. Gladys Noemí Dapozo (GICS - FaCENA - UNNE)</li>
                <li  class=""> Dr. Emanuel Irrazábal (GICS - FaCENA - UNNE)</li>
                <li  class=""> Dr. Rubén Bernal (GICS - FaCENA - UNNE)</li>
                <li  class=""> Dr. David la Red Martínez (FaCENA - UNNE)</li>
                <li  class=""> Dra. Sonia Mariño (FaCENA - UNNE)</li>
                <li  class=""> Mgter. María Viviana Godoy Guglielmone (FaCENA - UNNE)</li>
                <li  class=""> Mgter. Mónica Tugnarelli (FCAD - UNER)</li>
                <li  class=""> Dra. Gabriela Arévalo (DCyT - UNQ)</li>
                <li  class=""> Dra. María Fernanda Golobisky (UTN - FRStaFe)</li>
                <li  class=""> Master Ariel Pasini (LIDI - UNLP)</li>
                <li  class=""> Mgter. Pablo Thomas (LIDI - UNLP)</li>
                <li  class=""> Dr. Fernando Emmanuel Frati (DCByT - UNdeC)</li>
                <li  class=""> Dra. Marcela Genero Bocco (Grupo Alarcos - UCLM)</li>
                <li  class=""> Dr. Jorge Andrés Diaz Pace (ISISTAN - CONICET)</li>
                <li  class=""> Dr. Nazareno Aguirre (FCEFQyN - UNRC / CONICET)</li>
                <li  class=""> Dra. Nancy Ganz (IIDII-FCEQyN - UNaM)</li>
                <li  class=""> Esp.Ing.Alice Rambo (IIDII-FCEQyN - UNaM)</li>
                <li  class=""> Ing. Selva Nieves Ivaniszyn (FCEQyN - UNaM)</li>
                <li  class=""> Lic. Sergio Caballero (FCEQyN - UNaM)</li>
                <li  class=""> Lic. Martín Rey (IIDII-FCEQyN - UNaM)</li>
                <li  class=""> Dr.Eduardo Zamudio (IIDII - FCEQyN - UNaM)</li>
                <li  class=""> Dr.Horacio Kuna (IIDII - FCEQyN - UNaM)</li>
            </ul>
        
    </div>
    <div class="col-md-6">
        <ul class="list-group list-group-flush">
            <li class=""> Dr. Diego Godoy (UGD)</li>
            <li class=""> Ing. Edgardo Belloni (UGD)</li>
            <li class=""> Mag. Liliana Cuenca Pletsch (CINApTIC - UTN - FRRe)</li>
            <li class=""> Dra. Verónica Bollati (CINApTIC - UTN - FRRe / CONICET)</li>
            <li class=""> Dr. César J. Acuña (CINApTIC - UTN - FRRe)</li>
            <li class=""> Dra. Noelia Pinto (CINApTIC - UTN - FRRe)</li>
            <li class=""> Esp. Gabriela Tomaselli (CINApTIC - UTN - FRRe)</li>
            <li class=""> Ing. Nicolas Tortosa (CINApTIC - UTN - FRRe)</li>
            <li class=""> Ing. Valeria Sandobal Verón (GIESIN- UTN - FRRe)</li>
            <li class=""> Ing. Germán Gaona (CINApTIC - UTN - FRRe)</li>
            <li class=""> Dr. Horacio Leone (INGAR - UTN - FRSF)</li>
            <li class=""> Dr. Silvio Gonnet (INGAR - UTN - FRSF)</li>
            <li class=""> Dr. Gustavo Rossi (LIFIA - UNLP)</li>
            <li class=""> Dra. Alejandra Garrido (LIFIA - UNLP)</li>
            <li class=""> Dr. Andrés Rodriguez (LIFIA - UNLP)</li>
            <li class=""> Dr. Marcelo Estayno (UNSAM)</li>
            <li class=""> Dr. Luis Olsina (GIDIS - UNLPam)</li>
            <li class=""> Dra. Luciana Ballejos (INGAR - UTN - FRSF)</li>
            <li class=""> Dra. Luciana Roldan (INGAR - UTN - FRSF)</li>
            <li class=""> Dra. Milagros Gutierrez (UTN - FRSF)</li>
            <li class=""> Dra. Mariel Alejandra Ale (UTN - FRSF)</li>
            <li class=""> Dra. Elsa Estevez (UNSur / CONICET)</li>
            <li class=""> Dra. Alicia Mon (UNLaM)</li>          
        </ul>
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
    #portada .boton:hover{
        background-color:  rgb(255 255 255 / 80%);
        cursor:pointer;
    }

    #portada .boton:hover{
        background-color:  rgb(255 255 255 / 100%);
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
