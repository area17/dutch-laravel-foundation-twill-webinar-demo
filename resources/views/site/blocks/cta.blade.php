<a href="{{ $block->input('url') }}" @if ($block->checkbox('open_in_new_tab')) target="_blank" @endif class="button button--primary">
    {{ $block->translatedInput('label') }}
</a>
