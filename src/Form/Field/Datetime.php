<?php

namespace Encore\Admin\Form\Field;

class Datetime extends Date
{
    protected $format = 'YYYY-MM-DD HH:mm';

    public function render()
    {
        $value = $this->value;
        $this->value = '';
        $this->options['time'] = true;
        $datepicker_name = 'datepicker_' . $this->id . '_' . time();
        $this->script = "let {$datepicker_name} = new Datepicker('{$this->getElementClassSelector()}', ".json_encode($this->options)."); {$datepicker_name}[0].setDate(new Date('{$value}'));";

        $this->prepend('<i class="fa fa-calendar fa-fw"></i>')
            ->defaultAttribute('style', 'width: 110px');

        return parent::render();
    }
}
