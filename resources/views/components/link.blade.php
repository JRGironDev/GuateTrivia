@php
    $classes = "underline text-md text-green-400 dark:text-green-400 hover:text-white dark:hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:focus:ring-offset-green-800"
@endphp

<a {{ $attributes->merge(['class' => $classes])}}>
    {{ $slot}}
</a>