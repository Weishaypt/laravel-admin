<div class="row {{$viewClass['form-group']}}">
    <label class="{{$viewClass['label']}} col-form-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        <input value="{!! $value !!}" class="form-control" readonly>

        @include('admin::form.help-block')

    </div>
</div>
