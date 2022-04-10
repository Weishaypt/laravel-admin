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

        return parent::render();
    }
}
