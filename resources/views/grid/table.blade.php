<div class="card p-0">
  @if(isset($title))
    <div class="card-header">
      <h3 class="card-title"> {{ $title }}</h3>
    </div>
  @endif

  @if ( $grid->showTools() || $grid->showExportBtn() || $grid->showCreateBtn() )
    <div class="card-header">
      <div class="pull-right">
        {!! $grid->renderColumnSelector() !!}
        {!! $grid->renderExportButton() !!}
        {!! $grid->renderCreateButton() !!}
      </div>
      @if ( $grid->showTools() )
        <div class="pull-left">
          {!! $grid->renderHeaderTools() !!}
        </div>
      @endif
    </div>
  @endif

<!-- /.box-header -->
  <div class="card-body p-0 table-responsive">
    <table class="table table-striped table-bordered" id="{{ $grid->tableID }}">
      <thead>
      <tr>
        @foreach($grid->visibleColumns() as $column)
          <th {!! $column->formatHtmlAttributes() !!}>{!! $column->getLabel() !!}{!! $column->renderHeader() !!}</th>
        @endforeach
      </tr>
      </thead>

      @if ($grid->hasQuickCreate())
        {!! $grid->renderQuickCreate() !!}
      @endif

      <tbody>

      @if($grid->rows()->isEmpty() && $grid->showDefineEmptyPage())
        @include('admin::grid.empty-grid')
      @endif

      @foreach($grid->rows() as $row)
        <tr {!! $row->getRowAttributes() !!}>
          @foreach($grid->visibleColumnNames() as $name)
            <td {!! $row->getColumnAttributes($name) !!}>
              {!! $row->column($name) !!}
            </td>
          @endforeach
        </tr>
      @endforeach
      </tbody>

      {!! $grid->renderTotalRow() !!}

    </table>

  </div>

  {!! $grid->renderFooter() !!}

  <div class="card-footer">
    {!! $grid->paginator() !!}
  </div>
  <!-- /.box-body -->
</div>
