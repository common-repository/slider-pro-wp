/**
 * Slider Pro general admin scripts.
 *
 * @package slider-pro-wp
 * @since   1.0.0
 * @author  Devnath verma <devnathverma@gmail.com>
 */

(function($) {
	
	$(document).ready(function() {
	
		var sliderpro_multipleimageuploader;
		
		/**
		 * Sortable All Images Callback Function
		 */
		$( document.getElementsByClassName( 'sliderpro_imagescontainer' ) ).sortable({ placeholder: '', revert: true });
		
		/**
		 * Delete Single Image Callback Function
		 */
		$(document).on( 'click', '.sliderpro_deleteimage', function() {
					
			if( confirm( 'Are you sure you want to delete this image?' ) ) {
				
				$(this).parent().fadeOut('slow', function() { $(this).remove(); });
				
				$( document.getElementsByClassName( 'sliderpro_imagestypecontainer' ) ).trigger( 'change' ); 
			}
			
			return false;
		});
		
		/**
		 * Delete All Images Callback Function
		 */
		$(document).on( 'click', '.sliderpro_deleteallimage', function() {
			
			if( confirm( 'Are you sure you want to delete all images?' ) ) {
				
				$( document.getElementsByClassName( 'sliderpro_imagescontainer' ) ).fadeOut('slow', function() { $(this).children().remove(); });
			}
			
			return false;
		});
		
		/**
		 * Add Multiple Images Callback Function
		 */
		$(document).on( 'click', '.sliderpro_addimages', function() {
			
			event.preventDefault();
			
			if (sliderpro_multipleimageuploader) {
				sliderpro_multipleimageuploader.open();
				return;
			}
			
			sliderpro_multipleimageuploader = wp.media.frames.sliderpro_multipleimageuploader = wp.media({
				title: $(this).data('uploader_title'),
				library: { type: 'image' },
				button: { text: $(this).data('uploader_button_text') },
				multiple: true
			});
			
			sliderpro_multipleimageuploader.on('select', function() {
					
				var attachment = sliderpro_multipleimageuploader.state().get('selection').toJSON();
				
				for (var i = 0; i <(attachment.length); i++) {
					
					$.ajax({
						 type : 'post',
						 dataType : 'html',
						 url : sliderpro_ajax.ajaxurl,
						 data : { action: 'sliderpro_multiple_images', attachment_id: attachment[i]['id'] },
						 success: function(response) {
							$('.sliderpro_imagescontainer').append(response).trigger('change');
							$('.sliderpro_imagescontainer').css('display','block');
						 }
					});   
				}
			});
			
			sliderpro_multipleimageuploader.open();
	    });
		
		/**
		 * Display Image Type Slider Callback Function
		 */
		$(document).on( 'click', '#sp4wp_slider_image', function() {
			$( document.getElementById('sliderpro_imagestypecontainer') ).fadeIn(1500).css('display','block');
			$( document.getElementById('sliderpro_poststypecontainer') ).css('display','none');
			$( document.getElementById('sliderpro_woocommercetypecontainer') ).css('display','none');
			$( document.getElementById('sliderpro_thumbnailswidth') ).val(230);
			$( document.getElementById('sliderpro_thumbnailsheight') ).val(130);
			$( document.getElementById('sliderpro_thumbnailsimagewidth') ).val(100);
			$( document.getElementById('sliderpro_thumbnailsimageheight') ).val(100);
			$( document.getElementById('sliderpro_sliderimagescalemode') ).val('cover');
		});
		
		/**
		 * Display Post Type Slider Callback Function
		 */
		$(document).on( 'click', '#sp4wp_slider_post', function() {
			$( document.getElementById('sliderpro_poststypecontainer') ).fadeIn(1500).css('display','block');
			$( document.getElementById('sliderpro_imagestypecontainer') ).css('display','none');
			$( document.getElementById('sliderpro_woocommercetypecontainer') ).css('display','none');
			$( document.getElementById('sliderpro_thumbnailswidth') ).val(230);
			$( document.getElementById('sliderpro_thumbnailsheight') ).val(130);
			$( document.getElementById('sliderpro_thumbnailsimagewidth') ).val(100);
			$( document.getElementById('sliderpro_thumbnailsimageheight') ).val(100);
			$( document.getElementById('sliderpro_sliderimagescalemode') ).val('cover');
		});
		
		/**
		 * Display Product Type Slider Callback Function
		 */
		$(document).on( 'click', '#sp4wp_slider_woocommerce', function() {
			$( document.getElementById('sliderpro_woocommercetypecontainer') ).fadeIn(1500).css('display','block');
			$( document.getElementById('sliderpro_imagestypecontainer') ).css('display','none');
			$( document.getElementById('sliderpro_poststypecontainer') ).css('display','none');
			$( document.getElementById('sliderpro_thumbnailswidth') ).val(200);
			$( document.getElementById('sliderpro_thumbnailsheight') ).val(200);
			$( document.getElementById('sliderpro_thumbnailsimagewidth') ).val(70);
			$( document.getElementById('sliderpro_thumbnailsimageheight') ).val(70);
			$( document.getElementById('sliderpro_sliderimagescalemode') ).val('none');
		});
	});   
   
})(jQuery);