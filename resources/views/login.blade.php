<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config('admin.title')}} | {{ trans('admin.login') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @if(!is_null($favicon = Admin::favicon()))
    <link rel="shortcut icon" href="{{$favicon}}">
  @endif

  <link rel="stylesheet" href="{{ admin_asset("vendor/laravel-admin/admin/app.css") }}">
  <link rel="stylesheet" href="{{ admin_asset("vendor/laravel-admin/admin/bundle.css") }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ admin_asset("vendor/laravel-admin/font-awesome/css/font-awesome.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ admin_asset("vendor/laravel-admin/AdminLTE/dist/css/AdminLTE.min.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ admin_asset("vendor/laravel-admin/AdminLTE/plugins/iCheck/square/blue.css") }}">
  
</head>
<body class="form-membership dark">
<style>
  #logo img {
    display: block !important;
  }
</style>

<!-- begin::preloader-->
<div class="preloader">
  <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

  <!-- logo -->
  <div id="logo">
    <a class="d-flex justify-content-center align-items-center font-weight-bold" href="{{ admin_url('/') }}">
      {!! config('admin.logo', config('admin.name')) !!}
    </a>
  </div>
  <!-- ./ logo -->


  <h5>{{ trans('admin.login') }}</h5>

  <form action="{{ admin_url('auth/login') }}" method="post">
    <div class="form-group">

      <input type="text" class="form-control mb-0 {!! !$errors->has('username') ?: 'is-invalid' !!}" placeholder="{{ trans('admin.username') }}" name="username" value="{{ old('username') }}">
      @if($errors->has('username'))
        @foreach($errors->get('username') as $message)
          <div class="invalid-feedback text-left">
            {{$message}}
          </div>
        @endforeach
      @endif
    </div>
    <div class="form-group {!! !$errors->has('password') ?: 'has-error' !!}">
      <input type="password" class="form-control mb-0 {!! !$errors->has('username') ?: 'is-invalid' !!}" placeholder="{{ trans('admin.password') }}" name="password">
      @if($errors->has('password'))
        @foreach($errors->get('password') as $message)
          <div class="invalid-feedback text-left">
            {{$message}}
          </div>
        @endforeach
      @endif
    </div>
    @if(config('admin.auth.remember'))
      <div class="form-group d-flex justify-content-between">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" value="1" {{ (!old('username') || old('remember')) ? 'checked' : '' }} id="customCheck1">
          <label class="custom-control-label" for="customCheck1"> {{ trans('admin.remember_me') }}</label>
        </div>
      </div>
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-primary btn-block">{{ trans('admin.login') }}</button>
  </form>
  <!-- ./ form -->
</div>

<!-- jQuery 2.1.4 -->
<script src="{{ admin_asset("vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
<script src="{{ admin_asset("vendor/laravel-admin/admin/bundle.js")}}"></script>
<script src="{{ admin_asset("vendor/laravel-admin/admin/app.min.js")}}"></script>
</body>
</html>
