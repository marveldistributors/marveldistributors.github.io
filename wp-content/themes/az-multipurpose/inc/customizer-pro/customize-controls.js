( function( api ) {

	// Extends our custom "az-multipurpose" section.
	api.sectionConstructor['az-multipurpose'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
