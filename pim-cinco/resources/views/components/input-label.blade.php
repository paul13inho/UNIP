@props(['value'])

<label {{ $attributes->merge(['class' => 'text-xl']) }}>
    {{ $value ?? $slot }}
</label>
