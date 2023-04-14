@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 rounded-lg outline-none w-full py-2 px-8 mt-6 text-4xl font-logo']) !!}>
