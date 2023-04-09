@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 show-info']) }}>
    {{ $value ?? $slot }}
</label>
