@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-gray-300']) }}>
    <option value="" disabled selected>-- Choose type of user --</option>
    <option value="reviewer">Reviewer</option>
    <option value="iacucadmin">IACUC Admin</option>
    <option value="erbadmin">ERB Admin</option>
    <option value="superadmin">Superadmin</option>
</select>