(function () {
    // Load plugin specific language pack
    tinymce.PluginManager.requireLangPack('panoptobutton');

    //Initialize plugin
    tinymce.create('tinymce.plugins.AddPanoptoButton', {
        //ed: editor instance plugin is being called from
        //url: absolute url of plugin
        init: function (ed, url) {
            // Register the command so that it can be invoked by using tinyMCE.activeEditor.execCommand('mceExample');
            ed.addCommand('mcePanopto', function () {
                ed.windowManager.open({
                    file: ed.getParam("moodle_plugin_base") + 'panoptobutton/tinymce/panoptowrapper.html#servername=' + ed.getParam('panoptoservername'),
                    width: 1024,
                    height: 720,
                    inline: 1
                }, {
                    plugin_url: url, // Plugin absolute URL
                    filepath: ed.getParam("moodle_plugin_base") // Custom argument
                });
            });

            // Register example button
            ed.addButton('panoptobutton', {
                title: 'Add Panopto Video',
                cmd: 'mcePanopto',
                image: url + '/img/panopto_logo_globe.png'
            });

            // Add a node change handler, selects the button in the UI when a image is selected
            ed.onNodeChange.add(function (ed, cm, n) {
                cm.setActive('panoptobutton', n.nodeName == 'IMG');
            });
        },

        //required function not utilized by this plugin
        createControl: function (n, cm) {
            return null;
        },

        //Returns creator and version info about plugin
        getInfo: function () {
            return {
                longname: 'Add Panopto Video Content to TinyMCE',
                author: 'Panopto',
                version: "1.0"
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('panoptobutton', tinymce.plugins.AddPanoptoButton);
})();
