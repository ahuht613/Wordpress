( function( api ) {
	// Extends our custom "spangle-lite" section.
	api.sectionConstructor['spangle-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );