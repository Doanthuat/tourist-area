( function( $ ) {
	"use strict";

	$(document).on('click', '.st-notice .button-primary', function( e ) {

		if ( 'install-activate' === $(this).data('action') && ! $( this ).hasClass('init') ) {
			var $self = $(this),
				$href = $self.attr('href');
				
			if ( 'true' === $self.data('freemius') ) {
				$href.replace('st-dentcare','st-demo-importer')
			}

			$self.addClass('init');

			$self.html('Installing ST Demo Importer <span class="dot-flashing"></span>');

			var elementorData = {
				'action' : 'stdentcare_install_activate_elementor',
				'nonce' : st_dentcare_localize.elementor_nonce
			};

			// Send Request.
			$.post( st_dentcare_localize.ajax_url, elementorData, function( response ) {

				if ( response.success ) {
					console.log('elementor installed');

					// Both Plugins Installed
					if ( true === response.data.plugins_updated ) {
						setTimeout(function() {
							$self.html('Redirecting to ST Demo Importer <span class="dot-flashing"></span>');

							setTimeout( function() {
								window.location = $href;
							}, 1000 );
						}, 500);

						console.log('ST Demo Importer installed');

						return false;
					}

					var stDemoImporterData = {
						'action' : 'stdentcare_install_activate_st_demo_importer',
						'nonce' : st_dentcare_localize.st_demo_importer_nonce
					};

					$.post( st_dentcare_localize.ajax_url, stDemoImporterData, function( response ) {
						if ( response.success ) {

							var elementorRedirect = {
								'action' : 'stdentcare_cancel_elementor_redirect',
							};

							$.post( st_dentcare_localize.ajax_url, elementorRedirect, function( response ) {
								console.log('ST Demo Importer installed');

								setTimeout(function() {
									$self.html('Redirecting to St Demo Importer <span class="dot-flashing"></span>');

									setTimeout( function() {
										window.location = $href;
									}, 1000 );
								}, 500);
							});

						}
					});

				}

			} ).fail( function( xhr, textStatus, e ) {
				$(this).parent().after( `<div class="plugin-activation-warning">${st_dentcare_localize.failed_message}</div>` );
			} );

			e.preventDefault();
		}
	} );

} )( jQuery );