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
<!--                     <div class="alert alert-danger" id="msg-error" style="text-align:left;">
                        <strong>importante!</strong> Corregir los siguientes errores.
                        <div class="list-errors"></div>
                    </div> -->
                    <form id="contactForm" role="form" action="<?php base_url();?>Home/guardar" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="nombre" required type="text" placeholder="Nombre *" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" required type="email" placeholder="Email *" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="telefono" required type="tel" placeholder="Celular *" >
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
                                    <textarea class="form-control" name="pregunta" placeholder="Preguntas y sugerencias" ></textarea>
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