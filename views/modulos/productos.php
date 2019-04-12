    <div class="row" id="row1">
    <div class="col-md-12">
        <div>
        <div class="table-condensed">
            <!-- TABLA PRODUCTOS-->
            <div id="tablaProductos" align="center">
              <h4>Productos</h4>
              
                <?php 
                $datoProductos = ControladorProductos::ctrMostrarProductos();
                //var_dump($datoProductos);
                foreach ($datoProductos as $dato) {
                    echo '<div class="col-md-3">
                        <div>
                            <img class="img-circle img-responsive" style="width:150px;height: 100px;" src="src/assets/productos/' . $dato["fotoProducto"].'" alt="imagen de '.$dato["nombreProducto"].'">
                        </div>
                        <div>
                            <h2>'.$dato["nombreProducto"].'</h2>
                        </div>
                        <div>
                            <h3>$'.$dato["precioProducto"].'</h3>
                        </div><br>
                        </div>';
                }
                ?>
          
            </div>
            </div>
             </div>
             <!-- END SIMULACION -->
        </div>
        </div>
    </div>
</div>