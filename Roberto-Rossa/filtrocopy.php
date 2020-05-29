
<div class="container pt-4 px-5">
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="filter-wrap py-4">
                <h3>Filtro</h3>
                <div class="filter-border p-4 border border-secondary">
                    <div class="filter-inner">
                        <div class="filtrolugar">
                            <div class="row justify-content-center align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <select class="custom-select custom-select-lg" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <!-- Se comenta codigo para muestra en reunion -->
                                        <option></option>
                                        <option value="interior">Interior</option>
                                        <option value="exterior">Exterior</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <select class="custom-select custom-select-lg">

                                        <!--                                      
                                        Se comenta codigo para muestra en reunion
                                         -->
                                        <option></option>
                                        <!-- $_SERVER["REQUEST_METHOD"] == "POST") -->
                                        <!-- codigo adicional para implementacion posterior a reunion -->
                                       
                                                <?php foreach ($productosinternacionales as $key => $value) : ?> 
                                                  <option value="<?php echo $key ?>">
                                                      <?php echo $productosinternacionales[$key]["nombre"]; ?>
                                                  </option>
                                                  <?php endforeach ?>
                                           
                                    
                                    </select>
                                </div>

                                <div class="col-sm-12 col-lg-2 py-2">
                                    <button class="btn btn-danger btn-md btn-block px-4">Buscar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div>