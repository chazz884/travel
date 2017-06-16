    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                
            </div>
            <div class="row text-center">
                <?php
                $conteo = 0;
                    foreach ($servicio as $key) {
                       
                ?> 
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa <?php echo $key->servicio_icono; ?> fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $key->servicio_titulo;?></h4>
                    <p class="text-muted"><?php echo $key->servicio_contenido;?></p>
                </div>
                <?php    
                        $conteo = $conteo+1;  
                    }
                ?>               
            </div>        
        </div>
    </section>