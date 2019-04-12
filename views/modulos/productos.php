    <div class="row" id="row1">
    <div class="col-md-12">
            <div id="tablaProductos" align="center">
              <h4>Productos</h4>
                <?php 
                $datoProductos = ControladorProductos::ctrMostrarProductos();
                //var_dump($datoProductos);
                foreach ($datoProductos as $dato) {
                    echo '<div class="col-md-2" id="prodCliente">
                        <div  id="prodClienteDivImagen">
                            <img class="img-circle img-responsive" src="src/assets/productos/' . $dato["fotoProducto"].'" alt="imagen de '.$dato["nombreProducto"].'" id="prodClienteImagen">
                        </div>
                        <div>
                            <h3>'.$dato["nombreProducto"].'</h3>
                        </div>
                        <div>
                            <h4>$'.$dato["precioProducto"].'</h4>
                        </div><br>
                        </div>';
                } 
                ?>
                
            </div>
        </div>
        </div><br>
    </div>
</div>