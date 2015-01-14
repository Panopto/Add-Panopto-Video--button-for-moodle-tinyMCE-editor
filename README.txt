Instructions for installing the Panopto button for the TinyMCE editor in Moodle:

--Installation Note: This plugin is intended to be installed along with the Panopto plugin for Moodle, which can be found at: https://github.com/Panopto/Moodle-2.0-Plugin-for-Panopto
  The Panopto plugin is pre-requisite for installing and running the Panopto button for TinyMCE

1. Copy the entire "panoptobutton" directory into TinyMCE's plugin directory at <Moodle Server>/moodle/lib/editor/tinymce/plugins

2. Edit line 10 of panoptobutton/tinymce/panoptowrapper.html
	
	the line reading: 
	var servername = 'http://demo.hosted.panopto.com';

   Replace http://demo.hosted.panopto.com with the base address of your desired server, making sure to keep the surrounding quotation marks
   Note: if you are using Site Wide SSL that the link needs to be 'https' instead of 'http'. So: 'https://demo.hosted.panopto.com';

3. Navigate to your moodle server within a browser (refresh the page if it is already open) and follow the instructions to complete the plugin's installation.
  
The plugin should now be installed and the Panopto button will appear in all TinyMCE editor windows throughout the server.
