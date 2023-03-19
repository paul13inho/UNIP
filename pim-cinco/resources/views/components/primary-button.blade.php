<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-purple-600 text-white rounded-lg w-44 py-4 text-center shadow-2xl text-2xl']) }}>
    {{ $slot }}
</button>
