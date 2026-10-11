@props(['title' => null])

<div {{ $attributes->merge(['class' => 'bg-white rounded-lg shadow-md p-6']) }}>
    @if ($title)
        <h3 class="text-lg font-bold text-slate-800 mb-4 pb-2 border-b">
            {{ $title }}
        </h3>
    @endif

    {{ $slot }}
</div>