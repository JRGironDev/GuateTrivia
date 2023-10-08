@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-green-400 mb-2 dark:text-green-300']) }}>
    {{ $value ?? $slot }}
</label>
