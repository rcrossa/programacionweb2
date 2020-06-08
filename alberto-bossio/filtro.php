<div class="container pt-4 px-5">
    <div class="row justify-content-center">

        <div class="col-12 text-center pt-5 pb-4">
            <h1>Catálogo</h1>
        </div>

            <svg width="20%" height="2">
                <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
            </svg>

        <div class="col-12">
            <div class="filter-wrap py-4">
                <legend>Filtro</legend>
                <div class="filter-border p-4 border border-secondary">
                    <div class="filter-inner">
                        <div class="filtrolugar">
                            <div class="row justify-content-center align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="" method="get">
                                        <?php
                                            $opcion = '1';
                                            if(!empty($_GET['opcion']))
                                            $opcion = $_GET['opcion'];
                                        ?>

                                        <select  class="custom-select custom-select-lg" name="opcion">
                                            <option value="1" <?php $opcion == 1 ?> >Todo</option>
                                            <option value="2" <?php $opcion == 2 ?> >Interior</option>
                                            <option value="3" <?php $opcion == 3 ?> >Exterior</option>
                                        </select>

                                        <?php
                                            $fz = fopen('archivosphp/zona.json','r');
                                            $zonaArray = json_decode(fread($fz,filesize('archivosphp/zona.json')),true);
                                            fclose($fz);
                                            foreach($zonaArray as $zona){
                                                if($zona['id'] == $opcion){
                                                    break;
                                                }
                                            }
                                        ?>

                                    </form>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="" method="get">
                                        <?php
                                            if($zona['id'] == 1){
                                        ?>
                                                <select  class="custom-select custom-select-lg" name="todo">
                                                    <?php
                                                        foreach($productos as $lugar){
                                                    ?>
                                                            <option><?php echo $lugar['nombre']; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                        <?php
                                            }elseif($zona['id'] == 2){
                                        ?>
                                                <select  class="custom-select custom-select-lg" name="interior">
                                                    <?php
                                                            foreach($productos as $lugar){
                                                                if($lugar['id'] < 6){
                                                    ?>

                                                        <option><?php echo $lugar['nombre']; ?></option>

                                                    <?php   
                                                                }
                                                            }
                                                    ?>
                                                </select>
                                        <?php
                                            }elseif($zona['id'] == 3){
                                        ?>
                                                <select  class="custom-select custom-select-lg" name="exterior">
                                                    <?php
                                                        foreach($productos as $lugar){
                                                            if($lugar['id'] >= 6){
                                                    ?>
                                                            <option><?php echo $lugar['nombre']; ?></option>
                                                    <?php      
                                                            }
                                                        } 
                                                    ?>
                                                </select>
                                        <?php
                                            }
                                        ?>
                                    </form>
                                </div>
                                        <div class="col-sm-12 col-lg-2 py-2">
                                                <button class="btn btn-danger btn-md btn-block px-4" type="submit" name="submit">Buscar</button>
                                                <!-- <input class="btn btn-danger btn-md btn-block px-4" type="submit" value="Buscar" name="submit"> -->
                                        </div>

                                <!--
                                <div class="col-sm-12 col-lg-2 py-2">
                                    <button class="btn btn-danger btn-md btn-block px-4">Buscar</button>
                                </div>
                                -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>