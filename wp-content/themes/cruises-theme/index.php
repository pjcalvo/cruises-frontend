<?php get_template_part( 'header', 'page' ); ?>
<?php get_template_part( 'partials/-descarga-brochures', 'page' ); ?>

<section class="content extended">      
            <div id="carousel-hero" class="carousel slide carousel-custom" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <a class="col-xs-12 carousel-control" role="button">
                <span class="glyphicon glyphicon-chevron-down circle" onclick="autoScrollTo('destinos-home')"></span>
              </a>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner heigh100">
                <div class="item active slide1 heigh100">
                  <img src="" alt="">
                  <div class="carousel-caption">
                      <h3></h3>
                  </div>
                </div>
                <div class="item slide2 heigh100">
                  <img src="" alt="">
                  <div class="carousel-caption">
                      <h3></h3>
                  </div>
                </div>
                <div class="item slide3 heigh100">
                  <img src="" alt="">
                  <div class="carousel-caption">
                      <h3></h3>
                  </div>
                </div>
              </div>
                
              <!--Caption-->
              <div class="carousel-caption container-fluid">
                    <?php getPageContent(); ?>
                            <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div> 
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-hero" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-hero" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div> <!-- Carousel -->            
		</section>
		<section class="content">
            <div id="destinos-home" class="extended">
                <div class="container-fluid">
                    <h1>DESTINOS</h1>
                    <p>Visitamos más de 100 puertos de escala, en algunos de los lugares más sobrecogedores y de ensueño del mundo.
                    </br></br>
                    Desde la belleza escapada de Alaska, Canadá y Nueva Inglaterra hasta el encanto de Europa y los exhuberantes paisajes
                    de México, Hawái, el Caribe, el Canal de Panamá, Bermudas y las Bahamas.</p>
                    <a class ="btn-primary" href="/destinos/">
                                DESCUBRE LOS <strong>DESTINOS</strong>
                    </a>
                </div>
            </div>            
		</section>

    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>        
    
        <section class="content">
            <div id="promociones-home" class="extended">
                <div class="container-fluid">
                    <h1>PROMOCIONES</h1>
                    <div class="col-xs-10 detail">
                        <p></p>
                    </div>
                    <div class="promociones">
                        <?php getPromocionesHome(); ?>
                    </div>
                </div>
            </div>            
		</section>

        <section class="content extended">      
            <div id="novedades-hero" class="carousel slide" data-ride="carousel">
              
              <div class="logo-container">
              <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#novedades-hero" data-slide-to="0" class="active company1">
                    <li data-target="#novedades-hero" data-slide-to="1" class="company2"></li>
                    <li data-target="#novedades-hero" data-slide-to="2" class="company3"></li>
                    <li data-target="#novedades-hero" data-slide-to="3" class="company4"></li>
                  </ol>
              </div>
                
              <!--Caption-->
              <div class="novedad-caption">
                  <h1>NOVEDADES</h1>
                </div> 

              <!-- Wrapper for slides -->
              <div class="carousel-inner heigh100">
                <div class="item active slide1 container-fluid heigh100">
                  <img src="" alt="">
                      <div class="carousel-caption container-fluid">
                        <div class="novedad-title">
                            <p>Visitamos más de 100 puertos de escala, en algunos de los lugares más sobrecogedores y de ensueño del mundo. 
                          Desde la belleza escarpada de Alaska, Canadá y Nueva Inglaterra hasta el encanto de Europa y los exuberantes paisajes de México, Hawái, el Caribe, el Canal de Panamá, Bermudas y Las Bahamas.</p>
                        </div>
                        <div class="novedades-details">
                            
                           <?php getNovedadesByEmpresa('royal', 3); ?>
                            
                        </div>
                  </div>
                </div>
                <div class="item slide2 container-fluid heigh100">
                  <img src="" alt="">
                  <div class="carousel-caption container-fluid">
                        <div class="novedad-title">
                            <p>Visitamos más de 100 puertos de escala, en algunos de los lugares más sobrecogedores y de ensueño del mundo. 
                          Desde la belleza escarpada de Alaska, Canadá y Nueva Inglaterra hasta el encanto de Europa y los exuberantes paisajes de México, Hawái, el Caribe, el Canal de Panamá, Bermudas y Las Bahamas.</p>
                        </div>
                        <div class="novedades-details">
                            
                            <?php getNovedadesByEmpresa('celebrity', 3); ?>            
                            
                        </div>
                  </div>
                </div>
                <div class="item slide3 container-fluid heigh100">
                  <img src="" alt="">
                  <div class="carousel-caption container-fluid">
                        <div class="novedad-title">
                            <p>Visitamos más de 100 puertos de escala, en algunos de los lugares más sobrecogedores y de ensueño del mundo. 
                          Desde la belleza escarpada de Alaska, Canadá y Nueva Inglaterra hasta el encanto de Europa y los exuberantes paisajes de México, Hawái, el Caribe, el Canal de Panamá, Bermudas y Las Bahamas.</p>
                        </div>
                        <div class="novedades-details">
                            
                            <?php getNovedadesByEmpresa('azamara', 3); ?>            
                            
                        </div>
                  </div>
                </div>
                <div class="item slide4 container-fluid heigh100">
                  <img src="" alt="">
                  <div class="carousel-caption container-fluid">
                        <div class="novedad-title">
                            <p>Visitamos más de 100 puertos de escala, en algunos de los lugares más sobrecogedores y de ensueño del mundo. 
                          Desde la belleza escarpada de Alaska, Canadá y Nueva Inglaterra hasta el encanto de Europa y los exuberantes paisajes de México, Hawái, el Caribe, el Canal de Panamá, Bermudas y Las Bahamas.</p>
                        </div>
                        <div class="novedades-details">
                            
                            <?php getNovedadesByEmpresa('pullmantur', 3); ?>            
                            
                        </div>
                  </div>
                </div>
              </div>
            </div> <!-- Carousel -->    
                        
		</section>

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>
