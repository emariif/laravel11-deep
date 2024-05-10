<div {{ $attributes->merge([
    'class' => 'bg-white dark:bg-gray-800 shadow-sm border border-zinc-200 rounded-lg'
]) }}>
    {{ $slot }}
</div>