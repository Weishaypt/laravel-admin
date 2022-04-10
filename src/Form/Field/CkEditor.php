<?php

namespace Encore\Admin\Form\Field;

use Encore\Admin\Form\Field;

class CkEditor extends Field
{
    protected static $css = [
        '/vendor/laravel-admin/admin/ckeditor/ckeditor.css',
    ];

    protected static $js = [
        '/vendor/laravel-admin/admin/ckeditor/ckeditor.js',
    ];
    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->script = <<<'EOT'
$(document).ready(function() {
  ClassicEditor
    .create( document.querySelector( '.editor' ), {
      
      licenseKey: '',
      
      
      
    } )
    .then( editor => {
      window.editor = editor;
  
      
      
      
    } )
    .catch( error => {
      console.error( 'Oops, something went wrong!' );
      console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
      console.warn( 'Build id: vn8plzw468d-6yqmpgq1irfr' );
      console.error( error );
    } );
});

EOT;

        return parent::render();
    }
}
