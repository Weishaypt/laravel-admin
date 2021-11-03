<form action="{!! $action !!}" pjax-container style="display: inline-block;">
    <div class="input-group">
        <input type="text" name="{{ $key }}" class="form-control grid-quick-search" value="{{ $value }}" placeholder="{{ $placeholder }}">
        <div class="input-group-append">
            <div class="input-group-text p-0">
                <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
</form>
