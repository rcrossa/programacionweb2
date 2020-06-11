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

                                <?php
                                    $fz = fopen('archivosphp/zona.json','r');
                                    $zonaArray = json_decode(fread($fz,filesize('archivosphp/zona.json')),true);
                                    fclose($fz);
                                    
                                    $fp = fopen('archivosphp/productos.json','r');
                                    $pArray = json_decode(fread($fp,filesize('archivosphp/productos.json')),true);
                                    fclose($fp);
                                ?>

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="" method="get">

                                    <?php
                                    $opcion = 'todo';
                                    if(!empty($_GET['zona'])){
                                        $opcion = $_GET['zona'];
                                    }else{
                                        $opcion = "todo";
                                    }
                                    ?> 

                                        <select  class="custom-select custom-select-lg" name="zona" onchange="this.form.submit()">
                                            <?php foreach($zonaArray as $zona){ ?>
                                                <option <?php echo ($opcion == $zona['zona'])?'selected="selected"':'' ?>><?php echo $zona['zona'] ?></option>
                                                <!--
                                                <option href="productos.php?zona=<?php echo $zona['id']?>"><?php echo $zona['zona'] ?></option>
                                                -->
                                            <?php } ?>
                                        </select>
                                    </form>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="" method="get">
                                        
                                        <input type="hidden" name="zona" value="<?php echo isset($_GET['zona'])?$_GET['zona']:''?>">
                                        <?php
                                        $opcion2 = 'Tierra Del Fuego';
                                        if(!empty($_GET['lugar']))
                                        $opcion2 = $_GET['lugar'];
                                        ?>
                                                <select  class="custom-select custom-select-lg" name="lugar" onchange="this.form.submit()">
                                                    <?php
                                                        foreach($pArray as $lugar){
                                                            if($lugar['zona'] == $_GET['zona']){
                                                    ?>
                                                                <!--
                                                                <option><?php echo $lugar['nombre']; ?></option>
                                                                -->
                                                                <option <?php echo ($opcion2 == $lugar['nombre'])?'selected="selected"':'' ?>><?php echo $lugar['nombre']; ?></option>
                                                              
                                                    <?php
                                                            }if($_GET['zona'] === null || $_GET['zona'] == 'todo'){
                                                                ?>
                                                                <option><?php echo $lugar['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                        <?php
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