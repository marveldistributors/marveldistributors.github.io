( function( api ) {

	// Extends our custom "sanitorium" section.
	api.sectionConstructor['sanitorium'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );