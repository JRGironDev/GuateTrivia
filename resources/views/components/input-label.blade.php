@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-500 mb-2 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
