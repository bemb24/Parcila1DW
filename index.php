<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Parcial 1</title>
</head>
<body>
    <header style="height: 70px">
    </header> 
   <div style="height: 30px;"></div>
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="card shadow-lg p-3 mb-5 bg-white ">
       <div class="card-header">Solicitud Virtual de Empleo</div>
       <div class="card-body">
       <h1>Información Personal</h1>
       <form id="form" action="" method="POST" onsubmit= "return send();">
                 <div class="form-row">
                   <div class="col-md-4 mb-3">
                     <label for="">*NIT</label>
                     <input name="" type="number" class="form-control" id="nit" value="" required>                     
                     </div>
                   <div class="col-md-4 mb-3">
                     <label for="">*DPI</label>
                     <input name="dpi" type="number" class="form-control" id="dpi" value="" required>
                     </div>
                 </div>
                 <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="">*Primer Nombre</label>
                      <input name="name1" type="text" class="form-control" id="name1" value="" required>                    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="">Segundo Nombre</label>
                      <input name="name2" type="text" class="form-control" id="name2" value="" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="">*Primer Apellido</label>
                      <input name="last1" type="text" class="form-control" id="last1" value="" required>                      
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="">Segundo Apellido</label>
                      <input name="last2" type="text" class="form-control" id="last2" value="" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="">*Fecha de Nacimiento</label>
                      <input name="nac" type="date" class="form-control" id="nac" value="" required>                      
                    </div>
                  </div>
                  <div class="form-row">
                    
                    <div class="col-md-4 mb-3">
                    <label for="">Género</label><br>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio6" id="F" value="option1">
                        <label class="form-check-label" for="F">F</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio6" id="M" value="option2">
                        <label class="form-check-label" for="M">M</label>
                      </div>
                    </div>
                      <div class="col-md-4 mb-3">
                      <div class="form-group">
                        <label for="">Estado Cívil</label>
                        <select class="form-control" id="estC">
                          <option>Soltero</option>
                          <option>Casado</option>
                          <option>Unión de Hecho</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="">*No. Celular</label>
                      <input name="cel" type="number" class="form-control" id="cel" value="" required>                      
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="">*Tel. Casa</label>
                      <input name="tC" type="number" class="form-control" id="tC" value="" required>                    
                    </div>
                  </div>
                  <div class="form-row">
                   <div class="col-md-4 mb-3">
                     <label for="">*Dirección</label>
                     <input name="dir" type="text" class="form-control" id="dir" value="" required >                  
                   </div>
                   <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="">*Correo Electrónico</label>
                        <input type="email" class="form-control" id="mail" placeholder="nombre@ejemplo.com" required>                       
                      </div>
                   </div>
                 </div>

        <hr>       
        <h1>Información Adicional</h1>        
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                      <label for="">¿Con quién vive?</label>
                      <select class="form-control" id="live">
                        <option>Solo</option>
                        <option>Madre</option>
                        <option>Padre</option>
                        <option>Hijos</option>
                        <option>Hermanos</option>
                        <option>Abuelos</option>
                      </select>
                    </div>
                  </div>              
                  <div class="col-md-4 mb-3">
                    <div class="form-group">
                      <label for="">Religión</label>
                      <select class="form-control" id="rel">
                        <option>Evangélica</option>
                        <option>Católica</option>
                        <option>Mormona</option>
                        <option>Testigo de Jehóva</option>
                        <option>Ateo</option>
                        <option>No Profesa Religión</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="">¿Cual ha sido su mayor éxito, en la vida?</label>
                  <input name="c1" type="text" class="form-control" id="c1" value="">
                </div>
                <div class="col-md-4 mb-3">
                  <label for="">¿Qué es lo que más valora de un trabajo?</label>
                  <input name="c2" type="text" class="form-control" id="c2" value="">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="">¿Qué actividad realiza en su tiempo libre?</label>
                  <input name="c3" type="text" class="form-control" id="c3" value="">
                </div>
                <div class="col-md-4 mb-3">
                  <label for="">¿Por qué quiere trabajar en el Institución?</label>
                  <input name="c4" type="text" class="form-control" id="c4" value="">
                </div>
              </div>

              <hr>
              <h1>Información Academica</h1>              
              <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                      <label for="">Nivel</label>
                      <select class="form-control" id="nl">
                        <option>Nivel Medio</option>
                        <option>Nivel Profesional</option>
                        <option>Nivel Postgrado</option>
                        <option>Conocimiento</option>
                        <option>Nivel Técnico</option>
                      </select>
                    </div>
                  </div>
                <div class="col-md-4 mb-3">
                  <label for="">*Detalle del Nivel</label>
                  <input name="dn" type="text" class="form-control" id="dn" value="" required>
                  </div>
              </div>              
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="">*Establecimiento</label>
                  <input name="etb" type="text" class="form-control" id="etb" value="" required>                
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="">*Año Inicio</label>
                      <input name="aI" type="number" class="form-control" id="aI" value="" required>                      
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="">*Año Fin</label>
                      <input name="aF" type="number" class="form-control" id="aF" value="" required>                      
                    </div>
                  </div>
              </div>

                  <hr>
                  <h1>Experiencia Laboral</h1>                  
                  <div class="form-row">
                    <div class="col-md-4 mb-5">
                        <label for="">¿Tiene experiencia laboral?</label><br>
                        <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="exp">
                    <label class="form-check-label" for="invalidCheck">Seleccione si tiene experiencia Laboral</label>
                    </div>
                    </div>
                </div>
               
                <hr>
                <div class="form-row">
                    <div class="col-md-4 mb-5">
                      <label for="">¿Aceptaría trabajo temporal?</label>    
                    </div>
                    <div class="col-md-4 mb-3">
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio1" id="c5s" value="option1">
                            <label class="form-check-label" for="si">Si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio1" id="c5n" value="option2">
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>                   
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-5">
                      <label for="">¿Está dispuesto a trabajar por turnos?</label>    
                    </div>
                    <div class="col-md-4 mb-3">
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio2" id="c6s" value="option1">
                            <label class="form-check-label" for="si">Si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio2" id="c6n" value="option2">
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>                   
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-5">
                      <label for="">¿Tiene disponibilidad de horario?</label>    
                    </div>
                    <div class="col-md-4 mb-3">
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio3" id="c7s" value="option1">
                            <label class="form-check-label" for="si">Si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio3" id="c7n" value="option2">
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-5">
                      <label for="">¿Disponibilidad de iniciar Inmediatamente?</label>    
                    </div>
                    <div class="col-md-4 mb-3">
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio4" id="c8s" value="option1">
                            <label class="form-check-label" for="si">Si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio4" id="c8n" value="option2">
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-5">
                      <label for="">¿Acepta el sueldo mínimo?</label>    
                    </div>
                    <div class="col-md-4 mb-3">
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio5" id="c9s" value="option1">
                            <label class="form-check-label" for="si">Si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio5" id="c9n" value="option2">
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                </div>
                
                <hr>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                          <label for="rs">Rango salarial deseado</label>
                          <select class="form-control" id="rs">
                            <option>Q1000 - Q2000</option>
                            <option>Q2001 - Q3000</option>
                            <option>Q4001 - Q5000</option>
                            <option>Q6001 - Q7000</option>
                            <option>Q7001 - Q8000</option>
                          </select>
                        </div>
                      </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                      <label for="FormControlFile1">Ingresar Fotografía</label>
                      <input type="file" class="form-control-file" id="FormControlFile1">
                    </div>
                    </div>
                </div>
                
                <hr>
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Fcheck" >
                      <label class="form-check-label" for="invalidCheck">Declaro mi total aceptación a someterme al proceso de reclutamiento y 
                          selección. Con pleno conocimiento que los resultados obtenidos del mismo, permiten el ingreso de mi solicitud a la base 
                          de Recursos Humanos, sin compromiso y obligación de contratarme.</label>                      
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Cargar Información</button>

        </form>
        <p id="rst"></p>
       </div>
   </div>
           </div>       
       </div>                  
   </div>


<!--JAVASCRIPT-->
<script src="validation.js"></script>
<script src="ajax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>