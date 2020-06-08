<section class="newsletter-area">

    <?php
        if(isset($_POST['submit'])){
          $dato = $_POST;
          unset($dato['submit']);
          if(file_exists('archivosphp/correos.json')){
            $correosJson = file_get_contents('archivosphp/correos.json');
            $correosArray = json_decode($correosJson, true);
          }else{
              $correosArray = array();
          }
          //$correosArray[$indexCorreo] = $correosArray;
          $indexCorreo = 0;
          $correosArray[$indexCorreo] = $dato;
          $correos = fopen('archivosphp/correos.json','w');
          fwrite($correos,json_encode($correosArray));
          fclose($correos);
          //var_dump($_POST);
        }
    ?>

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-10">
        <div class="row align-items-center">
          <div class="col-lg-5 py-2">
            <div class="newsletter-texto text-white p-2">
              <h4>Subscribite a nuestro newsletter</h4>
              <p>La mejor manera de mantenerte al tanto de los mejores viajes.</p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mail-form">
              <div class="no-gutters">
                <div class="newsletter-campo">
                    <form action="#" method="post">
                      <fieldset>
                        <div class="col-lg-9 col-md-8 p-2">
                          <input type="email" id="email" name="email" class="form-control newsletter-input pr-lg-1" placeholder="Tu email">
                        </div>

                        <div class="col-lg-3 col-md-4 p-2">
                            <!-- <button class="text-white btn btn-md btn-block text-center newsletter-btn" type="submit" name="submit">Subscribite</button> -->
                            <input class="text-white btn btn-md btn-block text-center newsletter-btn" type="submit" value="Subscribite" name="submit">
                        </div>
                      </fieldset>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>