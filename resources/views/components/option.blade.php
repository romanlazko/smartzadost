@props(['value' => '', 'selected' => ''])

<option @selected($selected === $value) value="{{ $value }}">{{ $slot }}</option>