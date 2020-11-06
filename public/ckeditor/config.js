/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

 CKEDITOR.editorConfig = function( config ) {
 	var root = 'http://localhost:88/richmedia/public/ckeditor';

 	config.filebrowserBrowseUrl = root + '/ckfinder/ckfinder.html';

 	config.filebrowserImageBrowseUrl = root + '/ckfinder/ckfinder.html?type=Images';

 	config.filebrowserFlashBrowseUrl = root + '/ckfinder/ckfinder.html?type=Flash';

 	config.filebrowserUploadUrl = root + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

 	config.filebrowserImageUploadUrl = root + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

 	config.filebrowserFlashUploadUrl = root + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

 };
