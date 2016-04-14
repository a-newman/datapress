
//Adds a button to the TinyMCE toolbar with the exhibit logo
(function() { 
	//pretty sure that this line adds your function to tinymce's plugin list
	tinymce.PluginManager.add('exhibit_button', function( editor, url ) {
	//and this line adds the actual button
	editor.addButton( 'exhibit_button', { 
		title: 'Datapress Data Visualization', 
		image: url + '/exhibit-logo.png',
		onclick: function() {
			editor.insertContent('hey');
		}
      }); 
   }); 
})();
