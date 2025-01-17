@extends('admin::index', ['header' => strip_tags($header)])

@section('content')
    <div class="navigation">
        @include('admin::partials.sidebar')
    </div>
    <section class="content-header">
        <h1>
            {!! $header ?: trans('admin.title') !!}
            <small>{!! $description ?: trans('admin.description') !!}</small>
        </h1>
        <!-- breadcrumb start -->
        <nav aria-label="breadcrumb">
            @if ($breadcrumb)
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> {{__('Home')}}</a></li>
                    @foreach($breadcrumb as $item)
                        @if($loop->last)
                            <li class="active breadcrumb-item">
                                @if (\Illuminate\Support\Arr::has($item, 'icon'))
                                    <i class="fa fa-{{ $item['icon'] }}"></i>
                                @endif
                                {{ $item['text'] }}
                            </li>
                        @else
                            <li class="breadcrumb-item">
                                @if (\Illuminate\Support\Arr::has($item, 'url'))
                                    <a href="{{ admin_url(\Illuminate\Support\Arr::get($item, 'url')) }}">
                                        @if (\Illuminate\Support\Arr::has($item, 'icon'))
                                            <i class="fa fa-{{ $item['icon'] }}"></i>
                                        @endif
                                        {{ $item['text'] }}
                                    </a>
                                @else
                                    @if (\Illuminate\Support\Arr::has($item, 'icon'))
                                        <i class="fa fa-{{ $item['icon'] }}"></i>
                                    @endif
                                    {{ $item['text'] }}
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ol>
            @elseif(config('admin.enable_default_breadcrumb'))
                <ol class="breadcrumb" style="margin-right: 30px;">
                    <li class="breadcrumb-item"><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> {{__('Home')}}</a></li>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                        <li class="breadcrumb-item">
                            {{ucfirst(Request::segment($i))}}
                        </li>
                    @endfor
                </ol>
            @endif
        </nav>

        <!-- breadcrumb end -->

    </section>


    <div class="content-body" >
        <div class="content" id="app">

            @include('admin::partials.alerts')
            @include('admin::partials.exception')
            @include('admin::partials.toastr')

            @if($_view_)
                @include($_view_['view'], $_view_['data'])
            @else
                {!! $_content_ !!}
            @endif

        </div>
    </div>
@endsection
