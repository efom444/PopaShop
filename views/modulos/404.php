<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Página no encontrada
    
    </h1>

    <ol class="breadcrumb">
      <?php 
      if (isset($_SESSION["iniciarSesion"])) {
        echo '<li><a href="contenido"><i class="fa fa-home"></i> Inicio</a></li>';
      }else{
        echo '<li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>';
      }
       ?>
      
      <li class="active">Página no encontrada</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="error-page">
      
      <h2 class="headline text-primary">404</h2> 

      <div class="error-content">

        <h3>

          <i class="fa fa-warning text-primary"></i> 

          Ooops! Página no encontrada.

        </h3>

        <p>
        
Puedes regresar haciendo 
<?php 
      if (isset($_SESSION["iniciarSesion"])) {
        echo '<a href="contenido">click aquí.</a>';
      }else{
        echo '<a href="inicio">click aquí.</a>';
      }
       ?>
        
        </p>

      </div>

    </div>  

  </section>

</div>
