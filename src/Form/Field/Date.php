<?php

namespace Encore\Admin\Form\Field;

use Carbon\Carbon;

class Date extends Text
{
    protected static $css = [
        '/vendor/laravel-admin/datetimepicker/datepicker.css',
    ];

    protected static $js = [
        '/vendor/laravel-admin/datetimepicker/datepicker.js',
    ];

    protected $format = 'MM-DD-YYYY';

    public function format($format)
    {
        $this->format = $format;

        return $this;
    }

    public function prepare($value)
    {
        if ($value === '') {
            $value = null;
        }

        return $value;
    }

    public function render()
    {

        $this->script = "datepicker('{$this->getElementClassSelector()}');";

        $this->prepend('<i class="fa fa-calendar fa-fw"></i>')
            ->defaultAttribute('style', 'width: 110px');

        return parent::render();
    }
}
