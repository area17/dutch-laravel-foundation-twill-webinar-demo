<ul>
    @foreach(\A17\Twill\Models\Feature::forBucket('main_navigation') as $navItem)
        <li>
            <a href="{{ route('page.show', [app()->getLocale(), $navItem->slug]) }}"> {{ $navItem->title }}</a>
        </li>
    @endforeach

    <li>
        <a href="{{ route('calendar') }}">Agenda</a>
    </li>

    @if (app()->isLocale('en') && isset($item) && $item->hasActiveTranslation('nl'))
        <li>
            <a href="{{ route(Route::currentRouteName(), ['nl', $item->getSlug('nl')]) }}">Nederlandse versie</a>
        </li>
    @endif

    @if (app()->isLocale('nl') && isset($item) && $item->hasActiveTranslation('en'))
        <li>
            <a href="{{ route(Route::currentRouteName(), ['en', $item->getSlug('en')]) }}">English version</a>
        </li>
    @endif
</ul>
