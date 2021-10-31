<?php

namespace Encore\Admin\Grid\Tools;

use Encore\Admin\Grid;

class CreateButton extends AbstractTool
{
    /**
     * @var Grid
     */
    protected $grid;

    /**
     * Create a new CreateButton instance.
     *
     * @param Grid $grid
     */
    public function __construct(Grid $grid)
    {
        $this->grid = $grid;
    }

    /**
     * Render CreateButton.
     *
     * @return string
     */
    public function render()
    {
        if (!$this->grid->showCreateBtn()) {
            return '';
        }

        $new = trans('admin.new');

        return <<<EOT

<div class="btn-group pull-right grid-create-btn mr-3">
    <a href="{$this->grid->getCreateUrl()}" class="btn btn-success" title="{$new}">
        <i class="fa fa-plus"></i><span class="hidden-xs ml-2">&nbsp;&nbsp;{$new}</span>
    </a>
</div>

EOT;
    }
}
