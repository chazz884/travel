    <!-- Team -->
    <section class="bg-faded" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">NUESTRO EQUIPO</h2>
                    <h3 class="section-subheading text-muted">Atencion personalizada.</h3>
                </div>
            </div>
            <div class="row">
                <?php
                    $conteo = 0;
                    foreach ($equipo as $key) {
                ?>
                    <div class="col-sm-<?php if ($conteo=2){echo '6';}elseif($conteo==3 || $conteo>3) {echo '4';} ?>">                 
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url();?>file/img/<?php echo $key->equipo_imagen;?>" alt="">
                            <h4><?php echo $key->equipo_nombre;?></h4>
                            <p class="text-muted"><?php echo $key->equipo_ocupacion;?></p>
                            <ul class="list-inline social-buttons">
                                <!-- <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li> -->
                                <li class="list-inline-item">
                                    <a target="_blank" href="https://www.facebook.com/rompelarutina.com.co/?ref=aymt_homepage_panel"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_blank" href="https://www.instagram.com/planea_tus_vacaciones/?hl=es"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>        
                <?php   
                    $conteo++;   
                  }  
                ?>                                 
            </div>
            </div>
<!--             <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Clients -->
<!--     <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="file/img/logos/envato.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="file/img/logos/designmodo.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="file/img/logos/themeforest.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="file/img/logos/creative-market.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>   -->  