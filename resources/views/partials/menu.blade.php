@if(Admin::user()->visible(\Illuminate\Support\Arr::get($item, 'roles', [])) && Admin::user()->can(\Illuminate\Support\Arr::get($item, 'permission')))
  @if(!isset($item['children']))
    <li>
      @if(url()->isValidUrl($item['uri']))
        <a href="{{ $item['uri'] }}" target="_blank" >
          @else
            <a href="{{ admin_url($item['uri']) }}">
              @endif
              <span class="nav-link-icon">
                <i class="fa {{$item['icon']}}"></i>
              </span>
              @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))
                <span>{{ __($titleTranslation) }}</span>
              @else
                <span>{{ admin_trans($item['title']) }}</span>
              @endif
            </a>
    </li>
  @else
    <li>
      <a href="#">
        <span class="nav-link-icon">
          <i class="fa {{ $item['icon'] }}"></i>
        </span>
        @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))
          <span>{{ __($titleTranslation) }}</span>
        @else
          <span>{{ admin_trans($item['title']) }}</span>
        @endif

      </a>
      <ul>
        @foreach($item['children'] as $item)
          @include('admin::partials.menu', $item)
        @endforeach
      </ul>
    </li>
  @endif
@endif
