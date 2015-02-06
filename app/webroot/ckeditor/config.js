/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.removeDialogTabs = 'image:advanced;link:advanced';
    config.filebrowserBrowseUrl = '/bds/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = '/bds/ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = '/bds/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl = '/bds/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = '/bds/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = '/bds/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
    
};
