<style> 
	<?php if ($slide1_on_off == 1) { ?>.bd-slide-1 {background-image: url(<?php echo JURI::base()?>/<?php echo $document->params->get('slide1_image'); ?>);}<?php } ?>
    <?php if ($slide2_on_off == 1) { ?>.bd-slide-2  {background-image: url(<?php echo JURI::base()?>/<?php echo $document->params->get('slide2_image'); ?>);}<?php } ?>

		


</style>
   <section class=" bd-section-1 bd-page-width bd-tagstyles bd-bootstrap-btn bd-btn-primary " id="slideshow-1" data-section-title="Slideshow">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-parallaxbackground-1 bd-parallax-bg-effect" data-control-selector=".bd-slider-3">



<div id="carousel-3" class="bd-slider-3 bd-page-width   bd-slider bd-no-margins  carousel slide bd-carousel-fade" >
    

    
    <div class="bd-container-inner">

    
        
    <div class="bd-sliderindicators-3  bd-slider-indicators" >
    <ol class="bd-indicators-15 " >
        
       <?php if ($slide1_on_off == 1) { ?> <li><a class="active" href="#" data-target="#carousel-3" data-slide-to="0"></a></li><?php } ?>
        <?php if ($slide2_on_off == 1) { ?><li><a class="" href="#" data-target="#carousel-3" data-slide-to="1"></a></li><?php } ?>
 
    </ol>
    </div>

    <div class="bd-slides carousel-inner">
        <?php if ($slide1_on_off == 1) { ?><div class=" bd-slide-1 bd-textureoverlay bd-textureoverlay-1 bd-slide item"
    
 data-url="<?php echo $document->params->get('slide1_imagelink'); ?>"
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <img class="bd-imagelink-3 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/mask1.png">
	
		<div class=" bd-layoutbox-11 animated bd-animation-25 bd-no-margins clearfix" data-animation-name="fadeIn" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
    <div class="bd-container-inner">
        <h2 class=" bd-textblock-71 animated bd-animation-30 bd-content-element" data-animation-name="bounceInDown" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">

<?php echo $document->params->get('slide1_text1'); ?>

</h2>
	
		<h3 class=" bd-textblock-70 animated bd-animation-28 bd-content-element" data-animation-name="bounceInUp" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="300ms" data-animation-infinited="false">
 
<?php echo $document->params->get('slide1_text2'); ?>

</h3>
	
		<div class=" bd-spacer-9 clearfix"></div>
	
		<?php if ($close_button == 1) { ?><a 
 href="<?php echo $document->params->get('slide1_button_link'); ?>" class="bd-linkbutton-12 animated bd-animation-27 bd-no-margins  bd-button-188  bd-own-margins bd-content-element"  data-animation-name="bounceInLeft" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"   >
   <?php echo $document->params->get('slide1_button_name'); ?>
    
</a>
	
		<a 
 href="<?php echo $document->params->get('slide1_button_link2'); ?>" class="bd-linkbutton-9 animated bd-animation-26  bd-button-187  bd-own-margins bd-content-element"  data-animation-name="bounceInRight" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"   >
    <?php echo $document->params->get('slide1_button_name2'); ?>
</a><?php } ?>
    </div>
</div>
        </div>
    </div>
</div><?php } ?>
	
		<?php if ($slide2_on_off == 1) { ?><div class=" bd-slide-2 bd-textureoverlay bd-textureoverlay-3 bd-slide item"
    
 data-url="<?php echo $document->params->get('slide2_imagelink'); ?>"
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-layoutbox-14 animated bd-animation-2 bd-no-margins clearfix" data-animation-name="fadeIn" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
    <div class="bd-container-inner">
        <h2 class=" bd-textblock-5 animated bd-animation-5 bd-content-element" data-animation-name="bounceInDown" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
<?php echo $document->params->get('slide2_text1'); ?>
</h2>
	
		<h3 class=" bd-textblock-10 animated bd-animation-8 bd-content-element" data-animation-name="bounceInUp" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="300ms" data-animation-infinited="false">
<?php echo $document->params->get('slide2_text2'); ?>
</h3>
	
		<div class=" bd-spacer-4 clearfix"></div>
    </div>
</div>
	
		<img class="bd-imagelink-8 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/mask1.png">
        </div>
    </div>
</div><?php } ?>
	
		
    </div>

    
        <div class="bd-left-button">
    <a class=" bd-carousel-25" href="#">
        <span class="bd-icon"></span>
    </a>
</div>

<div class="bd-right-button">
    <a class=" bd-carousel-25" href="#">
        <span class="bd-icon"></span>
    </a>
</div>

    
    </div>

    

    <script type="text/javascript">
        /* <![CDATA[ */
        if ('undefined' !== typeof initSlider) {
            initSlider(
                '.bd-slider-3',
                {
                    leftButtonSelector: 'bd-left-button',
                    rightButtonSelector: 'bd-right-button',
                    navigatorSelector: '.bd-carousel-25',
                    indicatorsSelector: '.bd-indicators-15',
                    carouselInterval: <?php echo $document->params->get('speed'); ?>,
                    carouselPause: "hover",
                    carouselWrap: true,
                    carouselRideOnStart: true
                }
            );
        }
        /* ]]> */
    </script>
</div></div>
    </div>
</section>