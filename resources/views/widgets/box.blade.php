<div class="card">
  <div {!! $attributes !!}>
    @if($title || $tools)
      <div class="card-header">
        <h3 class="card=title">{{ $title }}</h3>
        <div class="box-tools pull-right">
          @foreach($tools as $tool)
            {!! $tool !!}
          @endforeach
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
    @endif
    <div class="card-body">
      {!! $content !!}
    </div><!-- /.box-body -->
    @if($footer)
      <div class="card-footer">
        {!! $footer !!}
      </div><!-- /.box-footer-->
    @endif
  </div>
</div>
{{-- 由于widget box 有可能会用于expand，加载完页面后还没有对应的html，导致script失败，故只能和html写在一起。 --}}
<script>
  {!! $script !!}
</script>
