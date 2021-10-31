<div class="navigation">
  <div class="navigation-header">
    <span>{{ trans('admin.menu') }}</span>
    <a href="#">
      <i class="ti-close"></i>
    </a>
  </div>
  <!-- sidebar: style can be found in sidebar.less -->
  <div class="navigation-menu-body">

  <!-- Sidebar Menu -->
    <ul>
      @each('admin::partials.menu', Admin::menu(), 'item')

    </ul>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</div>
