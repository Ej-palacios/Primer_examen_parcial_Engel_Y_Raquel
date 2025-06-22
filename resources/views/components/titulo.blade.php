<div class="title-underline mb-4">
    <h1 class="h2 fw-bold mb-0 d-flex align-items-center">
        @if(isset($icon))
        <i class="{{ $icon }} me-3 text-primary"></i>
        @endif
        {{ $slot }}
    </h1>
</div>