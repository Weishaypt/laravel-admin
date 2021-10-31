<!-- Footer -->
<footer class="main-footer content-footer">
  <div class="pull-right hidden-xs">
    @if(config('admin.show_environment'))
      <strong>Env</strong>&nbsp;&nbsp; {!! config('app.env') !!}
    @endif

    &nbsp;&nbsp;&nbsp;&nbsp;

    @if(config('admin.show_version'))
      <strong>Version</strong>&nbsp;&nbsp; {!! \Encore\Admin\Admin::VERSION !!}
    @endif

  </div>
</footer>
