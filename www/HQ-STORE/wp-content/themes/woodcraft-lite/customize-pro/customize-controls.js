( function( api ) {

	// Extends our custom "woodcraft-lite" section.
	api.sectionConstructor['woodcraft-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );