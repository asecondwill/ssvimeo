(function() {
	tinymce.create('tinymce.plugins.VimeoShortcodePlugin', {
		init : function(ed, url) {
			var t = this;

			t.editor = ed;
			
			ed.addCommand('vscInsertShortcode', function() {
				var str = '[Vimeo id= width= height= ]Description[/Vimeo]';

				ed.execCommand('mceInsertContent', false, str);
			});

			// Register buttons
			ed.addButton('vsc', {
				title : 'Insert Vimeo Shortcode',
				image : 'vimeo/images/v.png',
				cmd : 'vscInsertShortcode'
			});
		},

		getInfo : function() {
			return {
				longname : 'Vimeo Shortcode',
				author : 'Will Barker',
				authorurl : 'http://asecondsystem.com',
				infourl : 'http://asecondsystem.com',
				version : '1.0'
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('vsc', tinymce.plugins.VimeoShortcodePlugin);
})();