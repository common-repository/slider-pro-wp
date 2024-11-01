<?php
/**
 * This Files Display Slider Settings HTML of Slider Pro Plugin in admin Section.
 *
 * @since      1.0.0
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/admin/view/slider-settings
 * @author     Devnath verma <devnathverma@gmail.com>
 */	
?>

<div class="sliderpro_settingscontainer" id="sliderpro_settingscontainer">
  	
	<h2><?php esc_html_e( 'Slider Settings', 'slider-pro-wp' ); ?></h2>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderwidth">
			<strong><?php _e( 'Width :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<input type="text" class="widefat" id="sliderpro_sliderwidth" name="sliderpro_sliderwidth" value="<?php echo $sliderpro_sliderwidth; ?>">
		<p class="description">
		  	<?php esc_html_e( 'Set the Width of the slider ( Default is 950 )', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderheight">
      		<strong><?php esc_html_e( 'Height :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
    	<input type="text" class="widefat" id="sliderpro_sliderheight" name="sliderpro_sliderheight" value="<?php echo $sliderpro_sliderheight; ?>">
		<p class="description">
			<?php esc_html_e( 'Set the Height of the slider ( Default is 500 )', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
    <div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderautoheight">
      		<strong><?php esc_html_e( 'Auto Height :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
		<select class="widefat" id="sliderpro_sliderautoheight" name="sliderpro_sliderautoheight">
			<option value="true" <?php selected( $sliderpro_sliderautoheight, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_sliderautoheight, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Indicates if Height of the slider will be adjusted to the Height of the selected slide.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderautoslidesize">
      		<strong><?php esc_html_e( 'Auto Slide Size :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
		<select class="widefat" id="sliderpro_sliderautoslidesize" name="sliderpro_sliderautoslidesize">
			<option value="true" <?php selected( $sliderpro_sliderautoslidesize, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_sliderautoslidesize, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if all the slides are at the same height but will allow the width of the slides to be variable.', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_slidershuffle">
      		<strong><?php esc_html_e( 'Shuffle :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_slidershuffle" name="sliderpro_slidershuffle">
			<option value="true" <?php selected( $sliderpro_slidershuffle, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_slidershuffle, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the slides will be shuffled.', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderloop">
      		<strong><?php esc_html_e( 'Loop :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_sliderloop" name="sliderpro_sliderloop">
			<option value="true" <?php selected( $sliderpro_sliderloop, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_sliderloop, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the slider will be loopable.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_slidercenterimage">
      		<strong><?php esc_html_e( 'Center Image :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_slidercenterimage" name="sliderpro_slidercenterimage">
			<option value="true" <?php selected( $sliderpro_slidercenterimage, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_slidercenterimage, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the image will be centered.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderimagescalemode">
      		<strong><?php esc_html_e( 'Image Scale Mode :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_sliderimagescalemode" name="sliderpro_sliderimagescalemode">
			<option value="none" <?php selected( $sliderpro_sliderimagescalemode, 'none' ); ?>>
				<?php esc_html_e( 'None', 'slider-pro-wp' ); ?>
			</option>
			<option value="cover" <?php selected( $sliderpro_sliderimagescalemode, 'cover' ); ?>>
				<?php esc_html_e( 'Cover', 'slider-pro-wp' ); ?>
			</option>
			<option value="contain" <?php selected( $sliderpro_sliderimagescalemode, 'contain' ); ?>>
				<?php esc_html_e( 'Contain', 'slider-pro-wp' ); ?>
			</option>
			<option value="exact" <?php selected( $sliderpro_sliderimagescalemode, 'exact' ); ?>>
				<?php esc_html_e( 'Exact', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'The scale mode for images ( cover, contain, exact and none )', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderwaitforlayers">
      		<strong><?php esc_html_e( 'Wait For Layers :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_sliderwaitforlayers" name="sliderpro_sliderwaitforlayers">
			<option value="true" <?php selected( $sliderpro_sliderwaitforlayers, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_sliderwaitforlayers, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the slider will wait for the layers to disappear before going to a new slide.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderorientation">
      		<strong><?php esc_html_e( 'Orientation:', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_sliderorientation" name="sliderpro_sliderorientation">
			<option value="horizontal" <?php selected( $sliderpro_sliderorientation, 'horizontal' ); ?>>
				<?php esc_html_e( 'Horizontal', 'slider-pro-wp' ); ?>
			</option>
			<option value="vertical" <?php selected( $sliderpro_sliderorientation, 'vertical' ); ?>>
				<?php esc_html_e( 'Vertical', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Slider Orientation will be vertical or horizontal.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_slidertouchswipe">
      		<strong><?php esc_html_e( 'TouchSwipe :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_slidertouchswipe" name="sliderpro_slidertouchswipe">
			<option value="true" <?php selected( $sliderpro_slidertouchswipe, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_slidertouchswipe, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the touch swipe will be enabled for slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_sliderfade">
      		<strong><?php esc_html_e( 'Fade :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_sliderfade" name="sliderpro_sliderfade">
			<option value="true" <?php selected( $sliderpro_sliderfade, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_sliderfade, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the slider will be fade effect.', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
	<h2><?php esc_html_e( 'Autoplay Settings', 'slider-pro-wp' ); ?></h2>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_autoplay">
      		<strong><?php esc_html_e( 'Autoplay :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_autoplay" name="sliderpro_autoplay">
			<option value="true" <?php selected( $sliderpro_autoplay, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_autoplay, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if or not slide autoplay will be enabled.', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
    <div class="sliderpro_settingsrow">
		<label for="sliderpro_autoplaydelay">
      		<strong><?php esc_html_e( 'Autoplay Delay :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<input type="number" class="widefat" id="sliderpro_autoplaydelay" name="sliderpro_autoplaydelay" value="<?php echo $sliderpro_autoplaydelay; ?>" min="0" max="10000" step="100">
		<p class="description">
			<?php esc_html_e( 'Sets the delay/interval (in milliseconds) at which the slide autoplay will run ( Default is 3000 )', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_autoplayhover">
      		<strong><?php esc_html_e( 'Autoplay on Hover :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_autoplayhover" name="sliderpro_autoplayhover">
			<option value="none" <?php selected( $sliderpro_autoplayhover, 'none' ); ?>>
				<?php esc_html_e( 'None', 'slider-pro-wp' ); ?>
			</option>
			<option value="pause" <?php selected( $sliderpro_autoplayhover, 'pause' ); ?>>
				<?php esc_html_e( 'Pause', 'slider-pro-wp' ); ?>
			</option>
			<option value="stop" <?php selected( $sliderpro_autoplayhover, 'stop' ); ?>>
				<?php esc_html_e( 'Stop', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the slide autoplay will be paused or stopped when the slider is hovered.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_autoplaydirection">
      		<strong><?php esc_html_e( 'Autoplay Direction :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_autoplaydirection" name="sliderpro_autoplaydirection">
			<option value="normal" <?php selected( $sliderpro_autoplaydirection, 'normal' ); ?>>
				<?php esc_html_e( 'Normal', 'slider-pro-wp' ); ?>
			</option>
			<option value="backwards" <?php selected( $sliderpro_autoplaydirection, 'backwards' ); ?>>
				<?php esc_html_e( 'Backwards', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the slide autoplay will be Normal or Backwards.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<h2><?php esc_html_e( 'Navigation Settings', 'slider-pro-wp' ); ?></h2>
    
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_navigationarrows">
      		<strong><?php esc_html_e( 'Arrows :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_navigationarrows" name="sliderpro_navigationarrows">
			<option value="true" <?php selected( $sliderpro_navigationarrows, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_navigationarrows, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Arrows will be displayed on slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_navigationarrowsonhover">
      		<strong><?php esc_html_e( 'Arrows on Hover:', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_navigationarrowsonhover" name="sliderpro_navigationarrowsonhover">
			<option value="true" <?php selected( $sliderpro_navigationarrowsonhover, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_navigationarrowsonhover, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Arrows will be displayed on Hover.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_navigationbuttons">
      		<strong><?php esc_html_e( 'Buttons :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_navigationbuttons" name="sliderpro_navigationbuttons">
			<option value="true" <?php selected( $sliderpro_navigationbuttons, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_navigationbuttons, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Buttons will be displayed.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_navigationkeyboard">
      		<strong><?php esc_html_e( 'Keyboard :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_navigationkeyboard" name="sliderpro_navigationkeyboard">
			<option value="true" <?php selected( $sliderpro_navigationkeyboard, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_navigationkeyboard, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the the slider move using Keyboard.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_navigationfullscreenbtn">
      		<strong><?php esc_html_e( 'FullScreen Button :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_navigationfullscreenbtn" name="sliderpro_navigationfullscreenbtn">
			<option value="true" <?php selected( $sliderpro_navigationfullscreenbtn, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_navigationfullscreenbtn, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the slider full-screen button is enabled.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_navigationfullscreenbtnonhover">
      		<strong><?php esc_html_e( 'FullScreen Button on Hover:', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_navigationfullscreenbtnonhover" name="sliderpro_navigationfullscreenbtnonhover">
			<option value="true" <?php selected( $sliderpro_navigationfullscreenbtnonhover, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_navigationfullscreenbtnonhover, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the FullScreen Button will be displayed on Hover.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<h2><?php esc_html_e( 'Thumbnail Slider Settings', 'slider-pro-wp' ); ?></h2>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnails">
      		<strong><?php esc_html_e( 'Slider :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnails" name="sliderpro_thumbnails">
			<option value="true" <?php selected( $sliderpro_thumbnails, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_thumbnails, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the thumbnails slider are displayed.', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
    <div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailswidth">
      		<strong><?php esc_html_e( 'Column Width :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
    	<input type="text" class="widefat" id="sliderpro_thumbnailswidth" name="sliderpro_thumbnailswidth" value="<?php echo $sliderpro_thumbnailswidth; ?>">
    	<p class="description">
      		<?php esc_html_e('Sets the width of the thumbnail column ( Default is 230 )', 'slider-pro-wp'); ?>
    	</p>
    </div>
	
    <div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailsheight">
      		<strong><?php esc_html_e( 'Column Height :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
    	<input type="text" class="widefat" id="sliderpro_thumbnailsheight" name="sliderpro_thumbnailsheight" value="<?php echo $sliderpro_thumbnailsheight; ?>">
    	<p class="description">
      		<?php esc_html_e('Sets the height of the thumbnail column ( Default is 130 )', 'slider-pro-wp'); ?>
    	</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailssliderimage">
      		<strong><?php esc_html_e( 'Thumbnail Images :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnailsimages" name="sliderpro_thumbnailsimages">
			<option value="true" <?php selected( $sliderpro_thumbnailsimages, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_thumbnailsimages, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the images are displayed in thumbnail slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailsimagewidth">
      		<strong><?php esc_html_e( 'Image Width :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
    	<input type="text" class="widefat" id="sliderpro_thumbnailsimagewidth" name="sliderpro_thumbnailsimagewidth" value="<?php echo $sliderpro_thumbnailsimagewidth; ?>">
    	<p class="description">
      		<?php esc_html_e('Sets the width of the thumbnail image ( Default is 100 )', 'slider-pro-wp'); ?>
    	</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailsimageheight">
      		<strong><?php esc_html_e( 'Image Height :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
    	<input type="text" class="widefat" id="sliderpro_thumbnailsimageheight" name="sliderpro_thumbnailsimageheight" value="<?php echo $sliderpro_thumbnailsimageheight; ?>">
    	<p class="description">
      		<?php esc_html_e('Sets the height of the thumbnail image ( Default is 100 )', 'slider-pro-wp'); ?>
    	</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailstext">
      		<strong><?php esc_html_e( 'Thumbnail Text :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnailstext" name="sliderpro_thumbnailstext">
			<option value="true" <?php selected( $sliderpro_thumbnailstext, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_thumbnailstext, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the text are displayed in thumbnail slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailsposition">
      		<strong><?php esc_html_e( 'Slider Position :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnailsposition" name="sliderpro_thumbnailsposition">
			<option value="left" <?php selected( $sliderpro_thumbnailsposition, 'left' ); ?>>
				<?php esc_html_e( 'Left', 'slider-pro-wp' ); ?>
			</option>
			<option value="right" <?php selected( $sliderpro_thumbnailsposition, 'right' ); ?>>
				<?php esc_html_e( 'Right', 'slider-pro-wp' ); ?>
			</option>
			<option value="top" <?php selected( $sliderpro_thumbnailsposition, 'top' ); ?>>
				<?php esc_html_e( 'Top', 'slider-pro-wp' ); ?>
			</option>
			<option value="bottom" <?php selected( $sliderpro_thumbnailsposition, 'bottom' ); ?>>
				<?php esc_html_e( 'Bottom', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Sets the position of the thumbnail slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailsarrows">
      		<strong><?php esc_html_e( 'Arrows :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnailsarrows" name="sliderpro_thumbnailsarrows">
			<option value="true" <?php selected( $sliderpro_thumbnailsarrows, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_thumbnailsarrows, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the thumbnail arrows will be enabled.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailsarrowsonhover">
      		<strong><?php esc_html_e( 'Arrows on Hover :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnailsarrowsonhover" name="sliderpro_thumbnailsarrowsonhover">
			<option value="true" <?php selected( $sliderpro_thumbnailsarrowsonhover, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_thumbnailsarrowsonhover, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Thumbnails Arrows will be displayed on Hover.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailspointer">
      		<strong><?php esc_html_e( 'Pointer :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnailspointer" name="sliderpro_thumbnailspointer">
			<option value="true" <?php selected( $sliderpro_thumbnailspointer, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_thumbnailspointer, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Thumbnails Pointer are displayed.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_thumbnailstouchswipe">
      		<strong><?php esc_html_e( 'TouchSwipe :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_thumbnailstouchswipe" name="sliderpro_thumbnailstouchswipe">
			<option value="true" <?php selected( $sliderpro_thumbnailstouchswipe, 'true' ); ?>>
				<?php esc_html_e( 'Yes', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_thumbnailstouchswipe, 'false' ); ?>>
				<?php esc_html_e( 'No', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the touch swipe will be enabled for thumbnails.', 'slider-pro-wp' ); ?>
		</p>
    </div>
    
	<h2><?php esc_html_e( 'Text Settings', 'slider-pro-wp' ); ?></h2>
    
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_titleonslider">
      		<strong><?php esc_html_e( 'Title on Slider :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_titleonslider" name="sliderpro_titleonslider">
			<option value="true" <?php selected( $sliderpro_titleonslider, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_titleonslider, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Title is displayed on slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_titleshowanimation">
      		<strong><?php esc_html_e( 'Title Show Animation :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_titleshowanimation" name="sliderpro_titleshowanimation">
			<option value="left" <?php selected( $sliderpro_titleshowanimation, 'left' ); ?>>
				<?php esc_html_e( 'Left', 'slider-pro-wp' ); ?>
			</option>
			<option value="right" <?php selected( $sliderpro_titleshowanimation, 'right' ); ?>>
				<?php esc_html_e( 'Right', 'slider-pro-wp' ); ?>
			</option>
			<option value="up" <?php selected( $sliderpro_titleshowanimation, 'up' ); ?>>
				<?php esc_html_e( 'Up', 'slider-pro-wp' ); ?>
			</option>
			<option value="down" <?php selected( $sliderpro_titleshowanimation, 'down' ); ?>>
				<?php esc_html_e( 'Down', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select the position where the Title will be show using Animation.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_titlehideanimation">
      		<strong><?php esc_html_e( 'Title Hide Animation :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_titlehideanimation" name="sliderpro_titlehideanimation">
			<option value="left" <?php selected( $sliderpro_titlehideanimation, 'left' ); ?>>
				<?php esc_html_e( 'Left', 'slider-pro-wp' ); ?>
			</option>
			<option value="right" <?php selected( $sliderpro_titlehideanimation, 'right' ); ?>>
				<?php esc_html_e( 'Right', 'slider-pro-wp' ); ?>
			</option>
			<option value="up" <?php selected( $sliderpro_titlehideanimation, 'up' ); ?>>
				<?php esc_html_e( 'Up', 'slider-pro-wp' ); ?>
			</option>
			<option value="down" <?php selected( $sliderpro_titlehideanimation, 'down' ); ?>>
				<?php esc_html_e( 'Down', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select the position where the Title will be hide using Animation.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_descriptiononslider">
      		<strong><?php esc_html_e( 'Description on Slider :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_descriptiononslider" name="sliderpro_descriptiononslider">
			<option value="true" <?php selected( $sliderpro_descriptiononslider, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'slider-pro-wp' ); ?>
			</option>
			<option value="false" <?php selected( $sliderpro_descriptiononslider, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select if the Description is displayed on slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_descriptionlength">
			<strong><?php esc_html_e( 'Description Lenght :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<input type="text" class="widefat" id="sliderpro_descriptionlength" name="sliderpro_descriptionlength" value="<?php echo $sliderpro_descriptionlength; ?>">
		<p class="description">
		  	<?php esc_html_e( 'Set the length of Description ( Default is 15 words )', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_descriptionshowanimation">
      		<strong><?php esc_html_e( 'Description Show Animation :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_descriptionshowanimation" name="sliderpro_descriptionshowanimation">
			<option value="left" <?php selected( $sliderpro_descriptionshowanimation, 'left' ); ?>>
				<?php esc_html_e( 'Left', 'slider-pro-wp' ); ?>
			</option>
			<option value="right" <?php selected( $sliderpro_descriptionshowanimation, 'right' ); ?>>
				<?php esc_html_e( 'Right', 'slider-pro-wp' ); ?>
			</option>
			<option value="up" <?php selected( $sliderpro_descriptionshowanimation, 'up' ); ?>>
				<?php esc_html_e( 'Up', 'slider-pro-wp' ); ?>
			</option>
			<option value="down" <?php selected( $sliderpro_descriptionshowanimation, 'down' ); ?>>
				<?php esc_html_e( 'Down', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select the position where the Description will be show using Animation.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_descriptionhideanimation">
      		<strong><?php esc_html_e( 'Description Hide Animation :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_descriptionhideanimation" name="sliderpro_descriptionhideanimation">
			<option value="left" <?php selected( $sliderpro_descriptionhideanimation, 'left' ); ?>>
				<?php esc_html_e( 'Left', 'slider-pro-wp' ); ?>
			</option>
			<option value="right" <?php selected( $sliderpro_descriptionhideanimation, 'right' ); ?>>
				<?php esc_html_e( 'Right', 'slider-pro-wp' ); ?>
			</option>
			<option value="up" <?php selected( $sliderpro_descriptionhideanimation, 'up' ); ?>>
				<?php esc_html_e( 'Up', 'slider-pro-wp' ); ?>
			</option>
			<option value="down" <?php selected( $sliderpro_descriptionhideanimation, 'down' ); ?>>
				<?php esc_html_e( 'Down', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select the position where the Description will be hide using Animation.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_textposition">
      		<strong><?php esc_html_e( 'Title / Description Position :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_textposition" name="sliderpro_textposition">
			<option value="topCenter" <?php selected( $sliderpro_textposition, 'topCenter' ); ?>>
				<?php esc_html_e( 'Top Center', 'slider-pro-wp' ); ?>
			</option>
			<option value="topLeft" <?php selected( $sliderpro_textposition, 'topLeft' ); ?>>
				<?php esc_html_e( 'Top Left', 'slider-pro-wp' ); ?>
			</option>
			<option value="topRight" <?php selected( $sliderpro_textposition, 'topRight' ); ?>>
				<?php esc_html_e( 'Top Right', 'slider-pro-wp' ); ?>
			</option>
			<option value="bottomCenter" <?php selected( $sliderpro_textposition, 'bottomCenter' ); ?>>
				<?php esc_html_e( 'Bottom Center', 'slider-pro-wp' ); ?>
			</option>
			<option value="bottomLeft" <?php selected( $sliderpro_textposition, 'bottomLeft' ); ?>>
				<?php esc_html_e( 'Bottom Left', 'slider-pro-wp' ); ?>
			</option>
			<option value="bottomRight" <?php selected( $sliderpro_textposition, 'bottomRight' ); ?>>
				<?php esc_html_e( 'Bottom Right', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select the position where the title / description will be displayed.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_animationdelay">
			<strong><?php esc_html_e( 'Title / Description Animation Delay :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<input type="text" class="widefat" id="sliderpro_animationdelay" name="sliderpro_animationdelay" value="<?php echo $sliderpro_animationdelay; ?>">
		<p class="description">
		  	<?php esc_html_e( 'Set the Animation Delay Time of Title / Description ( Default is 500 )', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_textbackground">
      		<strong><?php esc_html_e( 'Title / Description Background :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_textbackground" name="sliderpro_textbackground">
			<option value="sp-black" <?php selected( $sliderpro_textbackground, 'sp-black' ); ?>>
				<?php esc_html_e( 'Black', 'slider-pro-wp' ); ?>
			</option>
			<option value="sp-white" <?php selected( $sliderpro_textbackground, 'sp-white' ); ?>>
				<?php esc_html_e( 'White', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select the Background of title / description will be displayed on slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
	
	<div class="sliderpro_settingsrow">
		<label for="sliderpro_textbackgroundcorner">
      		<strong><?php esc_html_e( 'Title / Description Background Corner :', 'slider-pro-wp' ); ?></strong>
    	</label>
		<br />
      	<select class="widefat" id="sliderpro_textbackgroundcorner" name="sliderpro_textbackgroundcorner">
			<option value="" <?php selected( $sliderpro_textbackgroundcorner, '' ); ?>>
				<?php esc_html_e( 'Square', 'slider-pro-wp' ); ?>
			</option>
			<option value="sp-rounded" <?php selected( $sliderpro_textbackgroundcorner, 'sp-rounded' ); ?>>
				<?php esc_html_e( 'Rounded', 'slider-pro-wp' ); ?>
			</option>
		</select>
		<p class="description">
			<?php esc_html_e( 'Select the Background Corner of title / description will be displayed on slider.', 'slider-pro-wp' ); ?>
		</p>
    </div>
</div>