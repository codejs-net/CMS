/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = 'codesnippet';
	config.skin = 'office2013';
	config.extraPlugins = 'autogrow';
	config.autoGrow_minHeight = 400;
	config.autoGrow_maxHeight = 1200;
	config.autoGrow_onStartup = true;
};
