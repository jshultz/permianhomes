/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
    config.toolbarGroups = [
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
        { name: 'links' },
        { name: 'insert' },
        { name: 'forms' },
        { name: 'tools' },
        { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'others' },
        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'styles' },
        { name: 'colors' },
        { name: 'about' }
    ];
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = '/assets/kcfinder/browse.php?type=files';
	config.filebrowserImageBrowseUrl = '/assets/kcfinder/browse.php?type=images';
	config.filebrowserFlashBrowseUrl = '/assets/kcfinder/browse.php?type=flash';
	config.filebrowserUploadUrl = '/assets/kcfinder/upload.php?type=files';
	config.filebrowserImageUploadUrl = '/assets/kcfinder/upload.php?type=images';
	config.filebrowserFlashUploadUrl = '/assets/kcfinder/upload.php?type=flash';
};
