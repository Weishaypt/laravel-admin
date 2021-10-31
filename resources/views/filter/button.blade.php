<div class="btn-group mr-2">

    <button class="btn btn-secondary {{ $btn_class }} {{ $filter_id }} {{ $expand ? 'active' : '' }}" type="button">
        <i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;{{ trans('admin.filter') }}</span>
    </button>

    @if($scopes->isNotEmpty())
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">

            <span>{{ $label }}</span>
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            @foreach($scopes as $scope)
                {!! $scope->render() !!}
            @endforeach
            <li role="separator" class="divider"></li>
            <li class="dropdonw-item"><a href="{{ $cancel }}">{{ trans('admin.cancel') }}</a></li>
        </ul>
    @endif
</div>

<script>
    var $btn = $('.{{ $btn_class }}');
    var $filter = $('#{{ $filter_id }}');

    $btn.unbind('click').click(function (e) {
        if ($filter.is(':visible')) {
            $filter.slideUp();
        } else {
            $filter.slideDown();
        }
    });
</script>
