<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-link <?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "ipaq" ? 'active' : '') : 'active') ?>" id="nav-ipaq-tab" data-toggle="tab" href="#nav-ipaq" role="tab" aria-controls="nav-ipaq" aria-selected="<?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "ipaq" ? 'true' : 'false') : 'false') ?>">
        Cuestionario Ipaq
      </a>

      <a class="nav-link <?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "fantastico" ? 'active' : '') : '') ?>" id="nav-fantastico-tab" data-toggle="tab" href="#nav-fantastico" role="tab" aria-controls="nav-fantastico" aria-selected="<?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "fantastico" ? 'true' : 'false') : 'false') ?>">
        Cuestionario Fantastico
      </a>

      <a class="nav-link <?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "insomio" ? 'active' : '') : '') ?>" id="nav-insomio-tab" data-toggle="tab" href="#nav-insomio" role="tab" aria-controls="nav-insomio" aria-selected="<?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "insomio" ? 'true' : 'false') : 'false') ?>">
        Cuestionario Insomio
      </a>
    </div>
  </nav>

  <!-- Contenido del Cuestionario Ipaq -->
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade <?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "ipaq" ? 'show active' : '') : 'show active') ?>" id="nav-ipaq" role="tabpanel" aria-labelledby="nav-ipaq-tab">
      <form>
        <table class="table table-hover table-sm">
          <h3 class="text-center mt-3">Cuestionario Ipaq</h3><br>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pregunta</th>
              <th scope="col">Respuesta</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td class="w-75">Durante los últimos 7 días, ¿Cuántos días realizó usted actividades físicas vigorosas como levantar objetos pesados, excavar, aeróbicos, o pedalear rápido en bicicleta?</td>
              <td class="w-25">
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>¿Cuánto tiempo en total usualmente le tomó realizar actividades físicas vigorosas en uno de esos días que las realizó?</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>

            <tr>
              <th scope="row">3</th>
              <td>Durante los últimos 7 días, ¿Cuántos días hizo usted actividades físicas moderadas tal como cargar objetos livianos, pedalear en bicicleta a paso regular, o jugar dobles de tenis? No incluya caminatas.</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>

            <tr>
              <th scope="row">4</th>
              <td>Usualmente, ¿Cuánto tiempo dedica usted en uno de esos días haciendo actividades físicas moderadas?</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>

            <tr>
              <th scope="row">5</th>
              <td>Durante los últimos 7 días, ¿Cuántos días caminó usted por al menos 10 minutos continuos?</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>

            <tr>
              <th scope="row">6</th>
              <td>Usualmente, ¿Cuánto tiempo gastó usted en uno de esos días caminando?</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>

            <tr>
              <th scope="row">7</th>
              <td>Durante los últimos 7 días, ¿Cuánto tiempo permaneció sentado(a) en un día en la semana?</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>
          </tbody>
        </table>          
      </form>
    </div>

    <!-- contenido Cuestionario Fantastico -->
    <div class="tab-pane fade <?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "fantastico" ? 'show active' : '') : '') ?>" id="nav-fantastico" role="tabpanel" aria-labelledby="nav-fantastico-tab">
      <form>
        <table class="table table-hover table-sm">
          <h3 class="text-center mt-3">Cuestionario Fantastico</h3><br>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pregunta</th>
              <th scope="col">Respuesta</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td class="w-75">Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí.</td>
              <td class="w-25">
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
              </td>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>Yo doy y recibo cariño.</td>
              <td>
               <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
             </td>
           </tr>

           <tr>
            <th scope="row">3</th>
            <td>Soy integrante activo(a) de un grupo de apoyo a mi salud y calidad de vida (Organizaciones de autocuidado, clubes de enfermos crónicos, deportivos, religiosos, mujeres, adultos mayores, vecinales y otros). Yo participo.</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">4</th>
            <td>Yo realizo actividad fisica (caminar, subir escaleras, trabajo de casa, jardinear) o deporte durante 30 minutos cada vez.</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">5</th>
            <td>Deporte durante 30 minutos cada vez.</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">6</th>
            <td>Yo camino al menos 30 minutos diariamente</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">7</th>
            <td>Como 2 porciones de verduras y 3 frutas</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">8</th>
            <td>A menudo consumes mucha azúcar o sál o comida chatarra o con mucha grasa.</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">9</th>
            <td>Como 2 porciones de verduras y 3 frutas</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">10</th>
            <td>Estoy pasado(a) en mi peso ídeal en</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">11</th>
            <td>Yo fumo cigarrillos</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">12</th>
            <td>Generalmente fumo ___ cigarrillos por dia</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">13</th>
            <td>Mi número promedio de tragos (botella de cerveza, vaso de vino, copita de trago fuerte) por semana es de</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">14</th>
            <td>bebo más de cuatro tragos en una misma ocasión</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">15</th>
            <td>manejo el auto despues de beber alcohol</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">16</th>
            <td>Uso drogas como marihuana, cocaína o pasta base</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">17</th>
            <td>Uso exsesivamente los remedios que me indicano los que puedo comprar sin receta</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">18</th>
            <td>Bebo café, té o bebidas cola que tienen cafeína</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">19</th>
            <td>Duermo bien y me siento descanzado(a)</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">20</th>
            <td>Yo me siento capaz de manejar el estrés o la tensión de mi vida</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">21</th>
            <td>Yo me relajo y disfruto mi tiempo libre</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">22</th>
            <td>parece que ando acelerado(a)</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">23</th>
            <td>Me siento enojado(a) o grasivo(a)</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">24</th>
            <td>Yo me siento contento(a) con mi trabajo o mis actividades</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">25</th>
            <td>Yo soy un pensador positivo u optimista</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">26</th>
            <td>Me siento tenso(a) o apretado(a)</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">27</th>
            <td>Me siento deprimido(a) o triste</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">28</th>
            <td>Me realizo controles de salud  en forma perdiodica</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">29</th>
            <td>Converso con mi pareja o mi familia temas de sexualidad</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">30</th>
            <td>En mi conducta sexual me preocupo del autocuidado y del cuidado de mi pareja</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">31</th>
            <td>Como peatón, pasajero del trasporte público y/o automovilista, soy respetuoso(a) de las ordenanzas del tránsito</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">31</th>
            <td>Uso cinturón de seguridad</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>
        </tbody>
      </table>           
    </form>
  </div>

  <!-- Contenido del formulario Insomio -->
  <div class="tab-pane fade <?php echo(isset($_GET['selected']) ? ($_GET['selected'] === "insomio" ? 'show active' : '') : '') ?>" id="nav-insomio" role="tabpanel" aria-labelledby="nav-insomio-tab">
    <form>
      <table class="table table-hover table-sm">
        <h3 class="text-center mt-3">Cuestionario Insomio</h3><br>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Respuesta</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td class="w-75">Inducción del dormir (tiempo que le toma quedarse dormido una vez acostado).</td>
            <td class="w-25">
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>Despertares durante la noche.</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>Despertar final más temprano de lo deseado.</td>
            <td>
              <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
            </tr>

            <tr>
              <th scope="row">4</th>
              <td>Duración total del dormir.</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
              </td>
            </tr>

            <tr>
              <th scope="row">5</th>
              <td>Calidad general del dormir (no importa cuánto tiempo durmió usted).</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
              </td>
            </tr>

            <tr>
              <th scope="row">6</th>
              <td>Sensación de bienestar durante el día.</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
              </td>
            </tr>

            <tr>
              <th scope="row">7</th>
              <td>Funcionamiento (físico y mental) durante el día.</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
              </td>
            </tr>

            <tr>
              <th scope="row">8</th>
              <td>Somnolencia durante el día.</td>
              <td>
                <input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
              </td>
            </tr>
          </tbody>
        </table>

        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block">Registar</button>
        </div>           
      </form>
    </div>
  </div>

</div>