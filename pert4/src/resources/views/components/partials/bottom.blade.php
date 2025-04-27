@php
    $footer = \App\Models\Footer::first();
@endphp


<!--Footer/Bottom-->
<footer class="section-sm bg-tertiary">
    <div class="container">
        <div class="container d-flex justify-content-center">
            <a wire:navigate href="{{ route('home') }}"> {{ $footer->label ?? '' }}</a>
        </div>
    </div>
</footer>

<!--Footer/Bottom End-->
