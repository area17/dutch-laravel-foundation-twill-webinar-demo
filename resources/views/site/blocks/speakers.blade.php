@php
    $speakers = \App\Models\Person::published()->find($block->browserIds('speakers'));
@endphp

<h3>Speakers</h3>

<div class="section-about--management--founders">
    @forelse($speakers as $speaker)
        <a href="{{ $speaker->url }}" target="_blank" class="present-block">
            <div class="present-block--img-holder">
                <img src="{{ $speaker->image('profile', 'default', ['w' => 256]) }}" alt="{{ $speaker->imageAltText('profile') }}" />
            </div>
            <div class="present-block--text-holder">
                <p>{{ $speaker->title }}</p>
            </div>
        </a>
    @empty
        No speakers announced yet!
    @endforelse
</div>
