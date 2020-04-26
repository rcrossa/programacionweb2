<div class="container-fluid px-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="filter-wrap py-4">
                <h3>Filtro</h3>
                <div class="filter-border p-4 border border-secondary">
                    <div class="filter-inner">
                        <div class="filtrolugar">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                    <select class="custom-select custom-select-lg">
                                        <option></option>
                                        <option name="interior" value="inter">Interior</option>
                                        <option>Exterior</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                    <select class="custom-select custom-select-lg">

                                        <?php 
                                                            foreach ($interior as $key => $value) : ?>
                                        <option value="<?php echo $key ?>"><?php echo $interior[$key]["nombre"]  
                                                               ?></option>


                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="row button">
                                    <div class="col-sm-12 col-lg-2">
                                        <button class="btn btn-danger btn-md px-4">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
