    <!-- Promociones -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Promociones</h2>
                    <h3 class="section-subheading text-muted">Las promociones son por tiempo limitado.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                    <?php
                    $conteo = -1;
                        foreach ($promocion as $key) {
                            $conteo++;
                        if ($conteo%2==0) {
                                
                    ?>                              
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="<?php echo base_url();?>file/img/<?php echo $key->promocion_imagen;?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $key->promocion_titulo;?></h4>
                                    <h4 class="subheading"><?php echo $key->promocion_subtitulo;?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $key->promocion_contenido;?></p>
                                </div>
                            </div>
                        </li>
                    <?php      
                        }else{
                    ?>                         
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="<?php echo base_url();?>file/img/<?php echo $key->promocion_imagen;?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $key->promocion_titulo;?></h4>
                                    <h4 class="subheading"><?php echo $key->promocion_subtitulo;?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $key->promocion_contenido;?></p>
                                </div>
                            </div>
                        </li>   
                    <?php      
                        }}
                    ?>                       
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Se Parte
                                    <br>De Nuestra
                                    <br>Historia!</h4>
                            </div>
                        </li>
                                          
                    </ul>
                </div>
            </div>
        </div>
    </section>