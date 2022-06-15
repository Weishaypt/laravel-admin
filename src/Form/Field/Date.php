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
        $value = $this->value;
        $this->value = '';
        $datepicker_name = 'datepicker_' . $this->id . '_' . time();
        $this->script = "let {$datepicker_name} = new Datepicker('{$this->getElementClassSelector()}', ".json_encode($this->options)."); {$datepicker_name}[0].setDate(new Date('{$value}'));";

        $this->prepend('<i class="fa fa-calendar fa-fw"></i>')
            ->defaultAttribute('style', 'width: 110px');

        return parent::render();
    }
}
