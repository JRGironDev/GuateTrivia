@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-green-400 dark:text-green-300 w-60']) }}>
    {{ $value ?? $slot }}
</label>
