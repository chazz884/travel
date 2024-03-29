    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
<!--                         <li class="list-inline-item">
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
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">servicioalcliente@rompelarutina.com.co</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
   
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>file/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>file/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>file/js/bootstrap.min.js"></script>    
    <script src="<?php echo base_url();?>file/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>file/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>file/js/contact_me.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url();?>file/js/agency.min.js"></script>
    <script src="<?php echo base_url();?>file/js/swiper.min.js"></script>
    <script src="<?php echo base_url();?>file/js/jquery-ui.js"></script>
              

    <!-- Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        parallax: true,
        speed: 600,
    });
    </script>
    <!-- Date -->
    <script>
      $.datepicker.regional['es'] = {
         closeText: 'Cerrar',
         prevText: '<Ant',
         nextText: 'Sig>',
         currentText: 'Hoy',
         monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
         dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
         dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
         dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
         weekHeader: 'Sm',
         dateFormat: 'dd/mm/yy',
         firstDay: 1,
         isRTL: false,
         showMonthAfterYear: false,
         yearSuffix: ''
      };
      $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function () {
        $("#date").datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: "2017:2018"
        });
      });   
    </script>  
    <!-- Date2 -->
    <script>
      $.datepicker.regional['es'] = {
         closeText: 'Cerrar',
         prevText: '<Ant',
         nextText: 'Sig>',
         currentText: 'Hoy',
         monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
         dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
         dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
         dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
         weekHeader: 'Sm',
         dateFormat: 'dd/mm/yy',
         firstDay: 1,
         isRTL: false,
         showMonthAfterYear: false,
         yearSuffix: ''
      };
      $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function () {
        $("#date2").datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: "2017:2018"
        });
      });   
    </script>             
</body>

</html>    