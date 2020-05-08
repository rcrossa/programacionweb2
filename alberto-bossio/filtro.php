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
                                        ?>

                                        <select  class="custom-select custom-select-lg">
                                            <option value="1" <?php $opcion == '1'?> >Todo</option>
                                            <option value="2" <?php $opcion == '2'?> >Interior</option>
                                            <option value="3" <?php $opcion == '3'?> >Exterior</option>
                                        </select>

                                    </form>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="" method="get">
                                        <select  class="custom-select custom-select-lg">
                                            <?php
                                                if($opcion == '1'){
                                                    ?>
                                                        <option><?php echo (array_search('nombre',$productos)); ?></option>
                                                    <?php
                                                }
                                            ?>

                                            <?php
                                                if($opcion == '2'){
                                                    foreach($productos as $zona => $interior){
                                                    ?>
                                                        <option><?php echo (array_search('nombre',$productos)); ?></option>
                                                    <?php      
                                                    }
                                                }
                                            ?>
                                                
                                            <?php
                                                if($opcion == '3'){
                                                    foreach($productos as $zona => $exterior){
                                                    ?>
                                                        <option><?php echo (array_search('nombre',$productos)); ?></option>
                                                    <?php      
                                                    }  
                                                }
                                            ?>
                                        </select>
                                    </form>
                                </div>
                                        <div class="col-sm-12 col-lg-2 py-2">
                                                <input class="btn btn-danger btn-md btn-block px-4" type="submit">
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