( function( api ) {

	// Extends our custom "online-startup-business" section.
	api.sectionConstructor['online-startup-business'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );