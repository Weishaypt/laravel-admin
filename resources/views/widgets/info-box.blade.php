<div {!! $attributes !!}>
  <div class="card">
    <div class="card-body">
      <h6 class="card-title text-center">{{ $name }}</h6>
      <div class="d-flex justify-content-center align-items-center mb-3">
        <div>
          <div class="avatar">
            <span class="avatar-title bg-info-bright text-info rounded-pill">
             <i class="fa fa-{{ $icon }}"></i>
            </span>
          </div>
        </div>
        <div class="font-weight-bold ml-1 font-size-30 ml-3">{{ $info }}</div>
      </div>
      <p class="mb-0 text-center">
        <a href="{{ $link }}" class="small-box-footer">
          {{ trans('admin.more') }}&nbsp;
          <i class="fa fa-arrow-circle-right"></i>
        </a>
      </p>
    </div>
  </div>
</div>
