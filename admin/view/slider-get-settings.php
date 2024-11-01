<?php
/**
 * This Files Return Slider Settings values for Slider Pro Plugin.
 *
 * @since      1.0.0
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/admin/view/slider-get-settings
 * @author     Devnath verma <devnathverma@gmail.com>
*/	

if( isset( $slider_pro_id ) ) {

	$sliderpro_settings = 'SLIDER_PRO_SETTINGS_'.$slider_pro_id;		
	$sliderpro_metavalues = get_post_meta( $slider_pro_id, $sliderpro_settings, true );

} else {
	
	$sliderpro_settings = 'SLIDER_PRO_SETTINGS_'.$post->ID;		
	$sliderpro_metavalues = get_post_meta( $post->ID, $sliderpro_settings, true ); 
}

if( isset( $sliderpro_metavalues['multiple_image_id'] ) ) 
	$sliderpro_multipleimageid = $sliderpro_metavalues['multiple_image_id']; 
else 
 	$sliderpro_multipleimageid = array();
	
if( isset( $sliderpro_metavalues['sliderpro_type'] ) ) 
	$sliderpro_type = $sliderpro_metavalues['sliderpro_type']; 
else 
 	$sliderpro_type = 'image';
	
if( isset( $sliderpro_metavalues['sliderpro_postlimit'] ) ) 
	$sliderpro_postlimit = $sliderpro_metavalues['sliderpro_postlimit']; 
else 
 	$sliderpro_postlimit = 10;
 
if( isset( $sliderpro_metavalues['sliderpro_postorder'] ) ) 
	$sliderpro_postorder = $sliderpro_metavalues['sliderpro_postorder']; 
else 
 	$sliderpro_postorder = 'ASC';
 
if( isset( $sliderpro_metavalues['sliderpro_postorderby'] ) ) 
	$sliderpro_postorderby = $sliderpro_metavalues['sliderpro_postorderby']; 
else 
 	$sliderpro_postorderby = 'ID';

if( isset( $sliderpro_metavalues['sliderpro_postcategories'] ) ) 
	$sliderpro_postcategories = $sliderpro_metavalues['sliderpro_postcategories']; 
else 
 	$sliderpro_postcategories = array();

if( isset( $sliderpro_metavalues['sliderpro_posttags'] ) ) 
	$sliderpro_posttags = $sliderpro_metavalues['sliderpro_posttags']; 
else 
 	$sliderpro_posttags = array();
	
if( isset( $sliderpro_metavalues['sliderpro_wooproductslimit'] ) ) 
	$sliderpro_wooproductslimit = $sliderpro_metavalues['sliderpro_wooproductslimit']; 
else 
 	$sliderpro_wooproductslimit = 10;
 
if( isset( $sliderpro_metavalues['sliderpro_wooproductsorder'] ) ) 
	$sliderpro_wooproductsorder = $sliderpro_metavalues['sliderpro_wooproductsorder']; 
else 
 	$sliderpro_wooproductsorder = 'ASC';
 
if( isset( $sliderpro_metavalues['sliderpro_wooproductsorderby'] ) ) 
	$sliderpro_wooproductsorderby = $sliderpro_metavalues['sliderpro_wooproductsorderby']; 
else 
 	$sliderpro_wooproductsorderby = 'ID';
	
if( isset( $sliderpro_metavalues['sliderpro_productcategories'] ) ) 
	$sliderpro_productcategories = $sliderpro_metavalues['sliderpro_productcategories']; 
else 
 	$sliderpro_productcategories = array();

if( isset( $sliderpro_metavalues['sliderpro_producttags'] ) ) 
	$sliderpro_producttags = $sliderpro_metavalues['sliderpro_producttags']; 
else 
 	$sliderpro_producttags = array();		
	
if( isset( $sliderpro_metavalues['sliderpro_sliderwidth'] ) ) 
	$sliderpro_sliderwidth = $sliderpro_metavalues['sliderpro_sliderwidth']; 
else 
 	$sliderpro_sliderwidth = 950;
	
if( isset( $sliderpro_metavalues['sliderpro_sliderheight'] ) ) 
	$sliderpro_sliderheight = $sliderpro_metavalues['sliderpro_sliderheight']; 
else 
 	$sliderpro_sliderheight = 500;		 
	
if( isset( $sliderpro_metavalues['sliderpro_sliderautoheight'] ) ) 
	$sliderpro_sliderautoheight = $sliderpro_metavalues['sliderpro_sliderautoheight']; 
else 
 	$sliderpro_sliderautoheight = 'false';	
	
if( isset( $sliderpro_metavalues['sliderpro_sliderautoslidesize'] ) ) 
	$sliderpro_sliderautoslidesize = $sliderpro_metavalues['sliderpro_sliderautoslidesize']; 
else 
 	$sliderpro_sliderautoslidesize = 'false';	
	
if( isset( $sliderpro_metavalues['sliderpro_slidershuffle'] ) ) 
	$sliderpro_slidershuffle = $sliderpro_metavalues['sliderpro_slidershuffle']; 
else 
 	$sliderpro_slidershuffle = 'true';	
	
if( isset( $sliderpro_metavalues['sliderpro_sliderloop'] ) ) 
	$sliderpro_sliderloop = $sliderpro_metavalues['sliderpro_sliderloop']; 
else 
 	$sliderpro_sliderloop = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_slidercenterimage'] ) ) 
	$sliderpro_slidercenterimage = $sliderpro_metavalues['sliderpro_slidercenterimage']; 
else 
 	$sliderpro_slidercenterimage = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_sliderimagescalemode'] ) ) 
	$sliderpro_sliderimagescalemode = $sliderpro_metavalues['sliderpro_sliderimagescalemode']; 
else 
 	$sliderpro_sliderimagescalemode = 'cover';		
	
if( isset( $sliderpro_metavalues['sliderpro_sliderwaitforlayers'] ) ) 
	$sliderpro_sliderwaitforlayers = $sliderpro_metavalues['sliderpro_sliderwaitforlayers']; 
else 
 	$sliderpro_sliderwaitforlayers = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_sliderorientation'] ) ) 
	$sliderpro_sliderorientation = $sliderpro_metavalues['sliderpro_sliderorientation']; 
else 
 	$sliderpro_sliderorientation = 'horizontal';
	
if( isset( $sliderpro_metavalues['sliderpro_slidertouchswipe'] ) ) 
	$sliderpro_slidertouchswipe = $sliderpro_metavalues['sliderpro_slidertouchswipe']; 
else 
 	$sliderpro_slidertouchswipe = 'false';
	
if( isset( $sliderpro_metavalues['sliderpro_sliderfade'] ) ) 
	$sliderpro_sliderfade = $sliderpro_metavalues['sliderpro_sliderfade']; 
else 
 	$sliderpro_sliderfade = 'false';					
	
if( isset( $sliderpro_metavalues['sliderpro_autoplay'] ) ) 
	$sliderpro_autoplay = $sliderpro_metavalues['sliderpro_autoplay']; 
else 
 	$sliderpro_autoplay = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_autoplaydelay'] ) ) 
	$sliderpro_autoplaydelay = $sliderpro_metavalues['sliderpro_autoplaydelay']; 
else 
 	$sliderpro_autoplaydelay = 3000;
	
if( isset( $sliderpro_metavalues['sliderpro_autoplayhover'] ) ) 
	$sliderpro_autoplayhover = $sliderpro_metavalues['sliderpro_autoplayhover']; 
else 
 	$sliderpro_autoplayhover = 'pause';
	
if( isset( $sliderpro_metavalues['sliderpro_autoplaydirection'] ) ) 
	$sliderpro_autoplaydirection = $sliderpro_metavalues['sliderpro_autoplaydirection']; 
else 
 	$sliderpro_autoplaydirection = 'normal';	
	
if( isset( $sliderpro_metavalues['sliderpro_navigationarrows'] ) ) 
	$sliderpro_navigationarrows = $sliderpro_metavalues['sliderpro_navigationarrows']; 
else 
 	$sliderpro_navigationarrows = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_navigationarrowsonhover'] ) ) 
	$sliderpro_navigationarrowsonhover = $sliderpro_metavalues['sliderpro_navigationarrowsonhover']; 
else 
 	$sliderpro_navigationarrowsonhover = 'true';	
	
if( isset( $sliderpro_metavalues['sliderpro_navigationbuttons'] ) ) 
	$sliderpro_navigationbuttons = $sliderpro_metavalues['sliderpro_navigationbuttons']; 
else 
 	$sliderpro_navigationbuttons = 'false';	
	
if( isset( $sliderpro_metavalues['sliderpro_navigationkeyboard'] ) ) 
	$sliderpro_navigationkeyboard = $sliderpro_metavalues['sliderpro_navigationkeyboard']; 
else 
 	$sliderpro_navigationkeyboard = 'true';	
	
if( isset( $sliderpro_metavalues['sliderpro_navigationfullscreenbtn'] ) ) 
	$sliderpro_navigationfullscreenbtn = $sliderpro_metavalues['sliderpro_navigationfullscreenbtn']; 
else 
 	$sliderpro_navigationfullscreenbtn = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_navigationfullscreenbtnonhover'] ) ) 
	$sliderpro_navigationfullscreenbtnonhover = $sliderpro_metavalues['sliderpro_navigationfullscreenbtnonhover']; 
else 
 	$sliderpro_navigationfullscreenbtnonhover = 'true';		
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnails'] ) ) 
	$sliderpro_thumbnails = $sliderpro_metavalues['sliderpro_thumbnails']; 
else 
 	$sliderpro_thumbnails = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailswidth'] ) ) 
	$sliderpro_thumbnailswidth = $sliderpro_metavalues['sliderpro_thumbnailswidth']; 
else 
 	$sliderpro_thumbnailswidth = 230;
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailsheight'] ) ) 
	$sliderpro_thumbnailsheight = $sliderpro_metavalues['sliderpro_thumbnailsheight']; 
else 
 	$sliderpro_thumbnailsheight = 130;
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailsimages'] ) ) 
	$sliderpro_thumbnailsimages = $sliderpro_metavalues['sliderpro_thumbnailsimages']; 
else 
 	$sliderpro_thumbnailsimages = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailsimagewidth'] ) ) 
	$sliderpro_thumbnailsimagewidth = $sliderpro_metavalues['sliderpro_thumbnailsimagewidth']; 
else 
 	$sliderpro_thumbnailsimagewidth = 100;
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailsimageheight'] ) ) 
	$sliderpro_thumbnailsimageheight = $sliderpro_metavalues['sliderpro_thumbnailsimageheight']; 
else 
 	$sliderpro_thumbnailsimageheight = 100;	
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailstext'] ) ) 
	$sliderpro_thumbnailstext = $sliderpro_metavalues['sliderpro_thumbnailstext']; 
else 
 	$sliderpro_thumbnailstext = 'true';	
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailsposition'] ) ) 
	$sliderpro_thumbnailsposition = $sliderpro_metavalues['sliderpro_thumbnailsposition']; 
else 
 	$sliderpro_thumbnailsposition = 'bottom';
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailsarrows'] ) ) 
	$sliderpro_thumbnailsarrows = $sliderpro_metavalues['sliderpro_thumbnailsarrows']; 
else 
 	$sliderpro_thumbnailsarrows = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_thumbnailsarrowsonhover'] ) ) 
	$sliderpro_thumbnailsarrowsonhover = $sliderpro_metavalues['sliderpro_thumbnailsarrowsonhover']; 
else 
 	$sliderpro_thumbnailsarrowsonhover = 'true';	

if( isset( $sliderpro_metavalues['sliderpro_thumbnailspointer'] ) ) 
	$sliderpro_thumbnailspointer = $sliderpro_metavalues['sliderpro_thumbnailspointer']; 
else 
 	$sliderpro_thumbnailspointer = 'true';
		
if( isset( $sliderpro_metavalues['sliderpro_thumbnailstouchswipe'] ) ) 
	$sliderpro_thumbnailstouchswipe = $sliderpro_metavalues['sliderpro_thumbnailstouchswipe']; 
else 
 	$sliderpro_thumbnailstouchswipe = 'false';
	
if( isset( $sliderpro_metavalues['sliderpro_titleonslider'] ) ) 
	$sliderpro_titleonslider = $sliderpro_metavalues['sliderpro_titleonslider']; 
else 
 	$sliderpro_titleonslider = 'true';

if( isset( $sliderpro_metavalues['sliderpro_titleshowanimation'] ) ) 
	$sliderpro_titleshowanimation = $sliderpro_metavalues['sliderpro_titleshowanimation']; 
else 
 	$sliderpro_titleshowanimation = 'down';
	
if( isset( $sliderpro_metavalues['sliderpro_titlehideanimation'] ) ) 
	$sliderpro_titlehideanimation = $sliderpro_metavalues['sliderpro_titlehideanimation']; 
else 
 	$sliderpro_titlehideanimation = 'up';
	
if( isset( $sliderpro_metavalues['sliderpro_descriptiononslider'] ) ) 
	$sliderpro_descriptiononslider = $sliderpro_metavalues['sliderpro_descriptiononslider']; 
else 
 	$sliderpro_descriptiononslider = 'true';
	
if( isset( $sliderpro_metavalues['sliderpro_descriptionlength'] ) ) 
	$sliderpro_descriptionlength = $sliderpro_metavalues['sliderpro_descriptionlength']; 
else 
 	$sliderpro_descriptionlength = 15;

if( isset( $sliderpro_metavalues['sliderpro_descriptionshowanimation'] ) ) 
	$sliderpro_descriptionshowanimation = $sliderpro_metavalues['sliderpro_descriptionshowanimation']; 
else 
 	$sliderpro_descriptionshowanimation = 'up';

if( isset( $sliderpro_metavalues['sliderpro_descriptionhideanimation'] ) ) 
	$sliderpro_descriptionhideanimation = $sliderpro_metavalues['sliderpro_descriptionhideanimation']; 
else 
 	$sliderpro_descriptionhideanimation = 'down';
			
if( isset( $sliderpro_metavalues['sliderpro_textposition'] ) ) 
	$sliderpro_textposition = $sliderpro_metavalues['sliderpro_textposition']; 
else 
 	$sliderpro_textposition = 'bottomLeft';		

if( isset( $sliderpro_metavalues['sliderpro_animationdelay'] ) ) 
	$sliderpro_animationdelay = $sliderpro_metavalues['sliderpro_animationdelay']; 
else 
 	$sliderpro_animationdelay = 500;
	
if( isset( $sliderpro_metavalues['sliderpro_textbackground'] ) ) 
	$sliderpro_textbackground = $sliderpro_metavalues['sliderpro_textbackground']; 
else 
 	$sliderpro_textbackground = 'sp-black';			

if( isset( $sliderpro_metavalues['sliderpro_textbackgroundcorner'] ) ) 
	$sliderpro_textbackgroundcorner = $sliderpro_metavalues['sliderpro_textbackgroundcorner']; 
else 
 	$sliderpro_textbackgroundcorner = '';	