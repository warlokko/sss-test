<?php
// No direct access.
defined('_JEXEC') or die;

$doc= JFactory::getDocument();
// caricamenti style sheet
$doc->addStyleSheet($this->baseurl . '/templates/system/css/system.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/addons/bootstrap-3.3.4-dist/css/bootstrap.min.css', $type = 'text/css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/addons/font-awesome-4.3.0/css/font-awesome.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css', $type = 'text/css');
// caricamenti js
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/addons/bootstrap-3.3.4-dist/js/bootstrap.min.js', 'text/javascript');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<jdoc:include type="head" />

</head>

<body  >

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++HEADER+++++++++++++++++++++++++-->

    <div class="header    hidden-xs  "><!--HEADER-->
        <div class="he_conteiner container-fluid"><!--HEADER FLUID-->
            <div class="row">
                    <?php if ($this->countModules('logo')) : ?><!-- MODULO INSERIMENTO POSIZIONE-->
                        <div class="logo col-lg-8  col-sm-8 col-md-8"><!--LOGO-->
                            <div class="contenitore_logo hidden-xs"><!--CONTENITORE LOGO-->
                            
                                <jdoc:include type="modules" name="logo" />
                                                        
                            </div><!-- FINE CONTENITORE LOGO-->
                        </div><!--FINE LOGO-->
                    <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->
                    <?php if ($this->countModules('login')) : ?><!-- MODULO INSERIMENTO POSIZIONE LOGIN-->
                        <div class="box1 col-lg-4  col-sm-4 col-md-4 hidden-xs"><!--BOX!-->
                            <jdoc:include type="modules" name="login" style="xhtml" />
                        </div><!--BOX!-->
                    
                    <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->
            </div>        
        </div><!--HEADER FLUID-->
    </div><!--FINE HEADER-->

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++MENU+++++++++++++++++++++++++-->
	<?php if ($this->countModules('menu')||$this->countModules('search')) : ?><!--script di verifica-->
        <div   class="menu menu-p"  ><!--MENU-->
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img  src="img/logo2.png" class="img_log img-responsive hidden-sm hidden-md hidden-lg"   alt="Logo S.I.C.E.V."/>
    </div>

            <div class="menu_conteiner containerm-fluid"><!--MENU FLUID-->
                    <!-- Collect the nav links, forms, and other content for toggling -->
    				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <jdoc:include type="modules" name="menu" />
                        <jdoc:include type="modules" name="search" />
                    </div>
            </div><!--MENU FLUID-->
        </div>
        </nav>
        </div><!--FINE MENU-->
    <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++SLIDE+++++++++++++++++++++++++-->

	<?php if ($this->countModules('slide')) : ?><!-- MODULO INSERIMENTO POSIZIONE SLIDE-->
    <div class="slide"><!--SLIDE-->
                <jdoc:include type="modules" name="slide" />
	</div><!--FINE SLIDE-->
	<?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->
    
    
<div class="contenuto">

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++CONTENUTI+++++++++++++++++++++++++-->
<div class="contenuti container-fluid"><!--CONTENUTI-->

  
         <jdoc:include type="message" />
         
         <jdoc:include type="component" />
          
          <?php if ($this->countModules('sidebar')) : ?><!-- MODULO INSERIMENTO POSIZIONE Sidebars-->
    <div class="row">   
    <div class="sidebar "><!--Sidebars-->
                <jdoc:include type="modules" name="sidebar" style="xhtml"/>
                
					
                    
    
	</div><!--FINE Sidebar-->
    </div>
	<?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE--> 
     
        
 	<?php if ($this->countModules('eventi')||$this->countModules('news')) : ?><!--script di verifica-->
    <div class=" box_ev row">
		<?php if ($this->countModules('eventi')) : ?><!-- MODULO INSERIMENTO POSIZIONE EVENTI-->
        <div class="eventi col-lg-8">
            
                            <jdoc:include type="modules" name="eventi" style="xhtml"/>
            
        </div>
        <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->	
        <?php if ($this->countModules('news')) : ?><!-- MODULO INSERIMENTO POSIZIONE NEWS-->
            <div class="news col-lg-4">
                
                            <jdoc:include type="modules" name="news" style="xhtml"/>
                
            </div>
        <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->
    </div>
	<?php endif;?><!-- FINE script di verifica -->    
	<?php if ($this->countModules('banner')) : ?><!-- MODULO INSERIMENTO POSIZIONE BANNER-->
    <div class=" box_pub">
            
                        <jdoc:include type="modules" name="banner" />
            
    </div>
    <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->
</div><!--FINE CONTENUTI-->
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++FOOTER+++++++++++++++++++++++++-->

<div class="footer"><!--FOOTER-->

    <div class="footer_cont container-fluid "><!--FOOTER CONT-->
    	<?php if ($this->countModules('menu-fl')||$this->countModules('menu-fc')||$this->countModules('menu-fr')) : ?><!--script di verifica-->
    	<div class="row">
        	<?php if ($this->countModules('menu-fl')) : ?><!-- MODULO INSERIMENTO POSIZIONE MENU-fl-->
            <div class="blok1 col-lg-4">
                               <jdoc:include type="modules" name="menu-fl" style="xhtml" />
            </div>
            <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE--> 
            <?php if ($this->countModules('menu-fc')) : ?><!-- MODULO INSERIMENTO POSIZIONE MENU-fc-->
            <div class="blok2 col-lg-4">
            		<jdoc:include type="modules" name="menu-fc" style="xhtml"/>
     		</div>
            <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE--> 
            <?php if ($this->countModules('menu-fr')) : ?><!-- MODULO INSERIMENTO POSIZIONE MENU-fr-->
            <div class="blok3 col-lg-4">
            	 <jdoc:include type="modules" name="menu-fr" style="xhtml"/>
            </div>
            <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE-->
        </div>
    	<?php endif;?><!-- FINE script di controllo--> 
    
    
    </div><!--FINE FOOTER CONT-->
<?php if ($this->countModules('footer')) : ?><!-- MODULO INSERIMENTO POSIZIONE FOOTER-->       
    <div class="pie_pag container-fluid"><!--PIE PAG-->
    		
                    <jdoc:include type="modules" name="footer" />
           
    </div><!--FINE PIE PAG-->
    <?php endif;?><!-- FINE MODULO INSERIMENTO POSIZIONE--> 
</div><!--FINE FOOTER-->
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++FOOTER+++++++++++++++++++++++++-->
</div><!--FINE Contenuto-->

<jdoc:include type="modules" name="debug" />
</body>
</html>
