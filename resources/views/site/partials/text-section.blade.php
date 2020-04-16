@php
    $sectionClass = ($centered ?? false) ? 'section-about--intro' : 'section-about--main';
@endphp

<article class="{{ $sectionClass }}">
    {{ $slot }}
</article>
