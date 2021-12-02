<div class="row {{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} col-form-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        <div class="input-group">

            @if ($prepend)
                <span class="input-group-text">{!! $prepend !!}</span>
            @endif

            <input {!! $attributes !!} />

            @if ($append)
                <span class="input-group-text clearfix">{!! $append !!}</span>
            @endif

            @isset($btn)
                <span class="input-group-text">
                  {!! $btn !!}
                </span>
            @endisset

        </div>

        @include('admin::form.error')

        @include('admin::form.help-block')

    </div>
</div>
