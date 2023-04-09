@props(['disabled' => false, 'autofocus' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!} {{ $errors->has($attributes['id']) ? 'autofocus' : '' }}>
