    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactanos</h2>
                    <h3 class="section-subheading text-muted">La fecha esta sujeta a la disponibilidad del hotel</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate role="form" action="<?php base_url();?>Home/guardar" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="nombre" type="text" minlength="3" placeholder="Nombre *" data-validation-required-message="El nombre es obligatorio." >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="telefono" id="phone" type="number" minlength="7" maxlength="15" placeholder="Celular *" data-validation-required-message="El telefono es obligatorio.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email *" data-validation-required-message="El correo electronico es obligatorio." >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="pasajeros" type="text" placeholder="Pasajeros" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <select class="select" name="promo" id="">
                                        <option class="form-control">Selecciona Promoción</option>
                                        <option class="form-control">Promo 1</option>
                                        <option class="form-control">Promo 2</option>
                                        <option class="form-control">Promo 3</option>
                                        <option class="form-control">Promo 4</option>
                                        <option class="form-control">Promo 5</option>
                                        <option class="form-control">Cotizar otro destino</option>
                                    </select>
                                </div>                                 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="date" name="date" placeholder="Fecha de salida" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="date2" name="date2" placeholder="Fecha de llegada" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="pregunta" id="message" placeholder="Preguntas y sugerencias"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-xl" type="submit">Enviar mensaje</button>
                            </div>
                        </div>
                     
                    </form>
                </div>
            </div>         
        </div>        
    </section>
    
    
       