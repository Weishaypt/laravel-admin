<?php

namespace Encore\Admin\Form\Field;

class Datetime extends Date
{
    protected $format = 'YYYY-MM-DD HH:mm';

    public function prepare($value)
    {
        if ($value === '') {
            $value = null;
        }
        else {
            $value = date('c', strtotime($value));
        }

        return $value;
    }

    public function render()
    {
        $this->defaultAttribute('style', 'width: 160px');
        $this->defaultAttribute('type' , 'datetime-local');


        return parent::render();
    }
}
