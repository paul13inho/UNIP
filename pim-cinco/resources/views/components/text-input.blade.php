@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full py-4 px-4 rounded-lg my-4 outline-none']) !!}>
