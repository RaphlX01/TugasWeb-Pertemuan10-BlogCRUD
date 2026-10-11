@props(['type' => 'info'])

@php
    $classes = [
        'success' => 'bg-green-100 border-green-500 text-green-800',
        'error'   => 'bg-red-100 border-red-500 text-red-800',
        'info'    => 'bg-blue-100 border-blue-500 text-blue-800',
        'warning' => 'bg-yellow-100 border-yellow-500 text-yellow-800',
    ];
    $class = $classes[$type] ?? $classes['info'];
@endphp

<div {{ $attributes->merge(['class' => "border-l-4 p-4 rounded mb-4 $class"]) }}>
    {{ $slot }}
</div>