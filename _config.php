<?php
	
ShortcodeParser::get()->register('Vimeo', array('VimeoUtil','VimeoShortCodeHandler'));


HtmlEditorConfig::get('cms')->enablePlugins(array('vsc' => '../../../ssvimeo/javascript/editor_plugin.js'));
HtmlEditorConfig::get('cms')->insertButtonsAfter('anchor', 'vsc');

?>