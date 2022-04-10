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
     * Default rows of textarea.
     *
     * @var int
     */
    protected $rows = 5;

    /**
     * @var string
     */
    protected $append = '';

    /**
     * Set rows of textarea.
     *
     * @param int $rows
     *
     * @return $this
     */
    public function rows($rows = 5)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->script = <<<JS
$(document).ready(function() {
  ClassicEditor
    .create( document.querySelector( '.editor-{$this->id}' ), {
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
JS;

        return parent::fieldRender([
            'append' => $this->append,
            'rows'   => $this->rows,
        ]);
    }
}
