jQuery( document ).ready( function ( $ ) {
	var deactivateAllButtons = function () {
		var $buttons = $('.nozama-lite-onboarding-list').find('.button');

		$buttons.addClass('disabled');
	};

	var activateAllButtons = function () {
		var $buttons = $('.nozama-lite-onboarding-list').find('.button');

		$buttons.removeClass('disabled');
	};

	$( 'body' ).on( 'click', '.nozama-lite-onboarding-wrap .activate-variation', function () {
		var button = $( this );
		var $box   = $( this ).closest( '.nozama-lite-variation' );
		var slug   = $( this ).data( 'variation-slug' );

		$.ajax( {
			type: 'post',
			url: nozama_lite_onboarding.ajaxurl,
			data: {
				action: 'nozama_lite_activate_variation',
				onboarding_nonce: nozama_lite_onboarding.onboarding_nonce,
				variation: slug,
			},
			dataType: 'text',
			beforeSend: function() {
				button.addClass( 'updating-message' );
				button.text( nozama_lite_onboarding.activating_text );
				deactivateAllButtons();
			},
			success: function( response ) {
				button.removeClass( 'updating-message' );
				button.text( nozama_lite_onboarding.activate_variation_text );
				activateAllButtons();
				$( '.nozama-lite-variation' ).removeClass( 'enabled' );
				$box.addClass( 'enabled' );
			}
		} );

		return false;
	} );

	$( 'body' ).on( 'click', '.nozama-lite-onboarding-wrap .reset-theme-mods', function () {
		var button = $( this );
		var text   = button.text();

		if ( ! window.confirm( nozama_lite_onboarding.reset_mods_confirm_text ) ) {
			return false;
		}

		$.ajax( {
			type: 'post',
			url: nozama_lite_onboarding.ajaxurl,
			data: {
				action: 'nozama_lite_reset_theme_mods',
				onboarding_nonce: nozama_lite_onboarding.onboarding_nonce,
			},
			dataType: 'text',
			beforeSend: function() {
				button.addClass( 'updating-message' );
				button.text( nozama_lite_onboarding.deleting_text );
				deactivateAllButtons();
			},
			success: function( response ) {
				button.removeClass( 'updating-message' );
				button.text( text );
				activateAllButtons();
			}
		} );

		return false;
	} );

	$( 'body' ).on( 'click', '.nozama-lite-onboarding-wrap .install-now', function () {
		var slug = $( this ).attr( 'data-plugin-slug' );

		deactivateAllButtons();

		wp.updates.installPlugin( {
			slug: slug
		}).done(function () {
			activateAllButtons();
		}).fail(function () {
			activateAllButtons();
		});

		return false;
	} );

	$( document ).on( 'DOMNodeInserted','.activate-now', function () {
		var activateButton = $( this );

		if (activateButton.length) {
			deactivateAllButtons();

			var url = $( activateButton ).attr( 'href' );
			if (typeof url !== 'undefined') {
				// Request plugin activation.
				$.ajax(
					{
						beforeSend: function () {
							$( activateButton ).replaceWith( '<a class="button updating-message">' + nozama_lite_onboarding.activating_text + '</a>' );
						},
						async: true,
						type: 'GET',
						url: url,
						success: function () {
							// Reload the page.
							location.reload();
						}
					}
				);
			}
		}
	} );

	$( document ).on( 'click','.activate-now', function () {
		var activateButton = $( this );

		if (activateButton.length) {
			deactivateAllButtons();
			var url = $( activateButton ).attr( 'href' );
			if (typeof url !== 'undefined') {
				// Request plugin activation.
				$.ajax(
					{
						beforeSend: function () {
							$( activateButton ).replaceWith( '<a class="button updating-message">' + nozama_lite_onboarding.activating_text + '</a>' );
						},
						async: true,
						type: 'GET',
						url: url,
						success: function () {
							// Reload the page.
							location.reload();
						}
					}
				);
			}
		}

		return false;
	} );

	$( '.ajax-install-plugin' ).on( 'click', function( e ) {
		e.preventDefault();
		var button = $(this);
		var plugin_slug = button.data('plugin-slug');

		$.ajax( {
			type: 'post',
			url: nozama_lite_onboarding.ajaxurl,
			data: {
				action: 'install_nozama_lite_plugin',
				onboarding_nonce: nozama_lite_onboarding.onboarding_nonce,
				plugin_slug: plugin_slug,
			},
			dataType: 'text',
			beforeSend: function() {
				button.addClass('updating-message');
				button.text(nozama_lite_onboarding.installing_text);
				deactivateAllButtons();
			},
			success: function( response ) {
				button.removeClass('updating-message');
				button.addClass('activate-now button-primary');
				button.text(nozama_lite_onboarding.activate_text);
				activateAllButtons();
			}
		} );
	} );

} );
