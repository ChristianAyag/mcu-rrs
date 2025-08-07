@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'w-50 border-gray-300 mt-0']) }}>
    <option value="" disabled selected>-- Choose one --</option>
    <option value="erb">ERB</option>
    <option value="iacuc">IACUC</option>
</select>