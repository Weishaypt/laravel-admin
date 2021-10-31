<div class="form-group row">
    <label class="col-sm-{{$width['label']}} col-form-label">{{ $label }}</label>
    <div class="col-sm-{{$width['field']}}">
        @if($wrapped)
            <div class="card box box-solid box-default no-margin box-show">
                <!-- /.box-header -->
                <div class="card-body">
                    @if($escape)
                        {{ $content }}&nbsp;
                    @else
                        {!! $content !!}&nbsp;
                    @endif
                </div><!-- /.box-body -->
            </div>
        @else
            @if($escape)
                {{ $content }}
            @else
                {!! $content !!}
            @endif
        @endif
    </div>
</div>
