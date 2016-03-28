<?php get_template_part( 'header-scripts', 'page' ); ?>    
		<header>
            <div class="fixed-header">
			<div class="container-fluid top-head">

                    <div class="companies-area container container-fluid">
                            <a id="company-logo" href="/" class="col-xs-2">
                                <img src="/img/logo-gsa.png" alt="Cruseros">
                            <a  id="company1" class="col-xs-2" href="<?php getNavieraUrl("Azamara Club Cruises"); ?>">
                            </a>  
                            <a   id="company2" class="col-xs-2" href="<?php getNavieraUrl("Celebrity Cruises"); ?>">
                            </a>
                            <a  id="company3" class="col-xs-2" href="<?php getNavieraUrl("Royal Caribbean"); ?>">
                            </a>
                            <a id="company4" class="col-xs-2" href="<?php getNavieraUrl("Pullmantur"); ?>">     
                            </a>
                    </ul>
        </div>
                    <p class="countries">Costa Rica - Nicaragua - Honduras - El Salvador - Belice - IR</p>
                    <p class="countries"><strong>Tel. (506) 2234-1818</strong></p>
			</div>			
				<div id= "menu-header" class="header-container extended">
                    <div class="container-fluid navbar-container">
                    <?php
                        if (has_nav_menu('primary_navigation')) : wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'menu'));
                        endif;
                    ?>
				</div>
			</div>
            </div>
		</header>