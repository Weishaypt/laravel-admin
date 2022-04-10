<div class="row {{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} col-form-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <textarea name="{{$name}}" rows="{{ $rows }}" placeholder="{{ $placeholder }}" class="editor editor-{{ $id }}" {!! $attributes !!} >
            {!! old($column, $value) !!}
        </textarea>

        {{--<textarea name="{{$name}}" class="form-control {{$class}}" rows="{{ $rows }}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</textarea>--}}

        @include('admin::form.help-block')

    </div>
</div>
