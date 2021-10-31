<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="box-title pull-left mb-0">{{ $form->title() }}</h3>
        <div class="box-tools pull-right">
            {!! $form->renderTools() !!}
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    {!! $form->open() !!}

    <div class="card-body">

        @if(!$tabObj->isEmpty())
            @include('admin::form.tab', compact('tabObj'))
        @else
            <div class="fields-group">

                @if($form->hasRows())
                    @foreach($form->getRows() as $row)
                        {!! $row->render() !!}
                    @endforeach
                @else
                    @foreach($layout->columns() as $column)
                        <div class="col-md-{{ $column->width() }}">
                            @foreach($column->fields() as $field)
                                {!! $field->render() !!}
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        @endif

    </div>
    <!-- /.box-body -->

    <div class="card-footer">
        {!! $form->renderFooter() !!}
    </div>

    @foreach($form->getHiddenFields() as $field)
        {!! $field->render() !!}
    @endforeach

<!-- /.box-footer -->
    {!! $form->close() !!}
</div>

