Instructions for installing the Panopto button for the TinyMCE editor in Moodle:

1. Copy the entire "panoptobutton" directory into TinyMCE's plugin directory at <Moodle Server>/moodle/lib/editor/tinymce/plugins

2. Edit line 10 of panoptobutton/tinymce/panoptowrapper.html
	
	the line reading: 
	var servername = 'http://demo.hosted.panopto.com';

   Replace http://demo.hosted.panopto.com with the base address of your desired server, making sure to keep the surrounding quotation marks

3. Navigate to your moodle server within a browser (refresh the page if it is already open) and follow the instructions to complete the plugin's installation.
  
The plugin should now be installed and the Panopto button will appear in all TinyMCE editor windows throughout the server.