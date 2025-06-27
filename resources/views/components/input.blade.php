@props([
    'type' => 'text',
    'name',
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'error' => null,
])
<div>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        {{ $attributes->merge(['class' => 'w-full border-2 border-blue-200 dark:border-gray-700 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition p-2 rounded-lg shadow-sm bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100']) }}
    >
    @if($error)
        <div class="text-red-500 dark:text-red-400 text-xs mt-1">{{ $error }}</div>
    @endif
</div> 