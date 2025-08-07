@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium mt-2 text-[15px] text-[var(--primary)]']) }}>
    {{ $value ?? $slot }}
</label>