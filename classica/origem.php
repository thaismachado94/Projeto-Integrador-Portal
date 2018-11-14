<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
   <?php
   //importando o head da pagina
     include('../imports/head.php');
   ?>
     
<!--FINAL DO HEAD-->

<body>

    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8">
                <section>
                    <h3 class="text-center mt-4">A história da música clássica</h3>
                    <img src="../images/classica/origem-01.jpg" alt="origem" class="img-fluid">
                </section>

                <article>
                    <p class="porigem text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Donec id pretium leo. etiam nisi metolist. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. </p>
                </article>

                <section>
                    <img src="../images/classica/origem-02.jpg" alt="origem" class="img-fluid">
                </section>
                <section>
                    <p class="porigem text-justify mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Donec id pretium leo. etiam nisi metolist. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Praesent sed justo finibus, fringilla velit quis, porta erat. </p>
                </section>
            </div>
            
            <div class="col-12 col-md-12 col-lg-4 mt-4">
                <aside>
                    <div id="boxorigem">
                        <h5 class="text-center ajustevejamais">Veja também:</h5>
                    </div>
                    
                        <div class="col-12 col-md-12 col-lg-12 morigem">
                            <a href="#">
                                <h5 class="tboxorigem text-left">Períodos da música clássica</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 morigem">
                            <a href="#">
                                <h5 class="tboxorigem text-left">Orquestras mais conhecidas</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 morigem">
                            <a href="#">
                                <h5 class="tboxorigem text-left">Por que ouvir música clássica?</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </a>
                        </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- ARTICLE ENDS -->

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
