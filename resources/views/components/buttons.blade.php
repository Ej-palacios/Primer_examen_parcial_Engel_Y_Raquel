@props([
    'type' => 'button',
    'variant' => 'primary',
    'icon' => null,
    'href' => null,
    'class' => '',
    'disabled' => false
])

@php
    $baseClasses = 'inline-flex items-center justify-center px-4 py-2 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all';
    
    $variantClasses = [
        'primary' => 'bg-primary hover:bg-primary-hover text-white shadow hover:shadow-md',
        'secondary' => 'bg-secondary hover:bg-secondary-dark text-dark',
        'outline-primary' => 'border border-primary text-primary hover:bg-primary hover:text-white',
        'outline-light' => 'border border-gray-600 text-light hover:bg-gray-700',
        'danger' => 'bg-danger hover:bg-danger-dark text-white',
        'success' => 'bg-success hover:bg-success-dark text-white',
        'link' => 'text-primary hover:text-primary-hover underline'
    ];
    
    $disabledClasses = 'opacity-50 cursor-not-allowed';
    
    $classes = $baseClasses . ' ' . ($variantClasses[$variant] ?? $variantClasses['primary']) . ' ' . $class;
    
    if ($disabled) {
        $classes .= ' ' . $disabledClasses;
    }
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }} @if($disabled) aria-disabled="true" @endif>
        @if($icon)<i class="{{ $icon }} mr-2"></i>@endif
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }} @if($disabled) disabled @endif>
        @if($icon)<i class="{{ $icon }} mr-2"></i>@endif
        {{ $slot }}
    </button>
@endif