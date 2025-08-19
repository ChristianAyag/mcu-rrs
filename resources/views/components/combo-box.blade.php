@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-gray-300']) }}>
    <option value="" disabled selected>-- Choose Program --</option>
    <option value="CAS - BS Information Technology">CAS - BS Information Technology</option>
    <option value="CAS - BS Computer Science">CAS - BS Computer Science</option>
    <option value="CAS - BS Entertainment and Multimedia Computing">CAS - BS Entertainment and Multimedia Computing</option>
    <option value="CAS - BS Biology">CAS - BS Biology</option>
    <option value="CAS - Bachelor of Arts in Communication">CAS - Bachelor of Arts in Communication</option>
    <option value="College of Pharmacy">College of Pharmacy</option>
    <option value="College of Physical Therapy">College of Physical Therapy</option>
    <option value="IOE - Bachelor of Seconary Major in English">IOE - Bachelor of Seconary Major in English</option>
    <option value="IOE - Doctor of Philosophy">IOE - Doctor of Philosophy</option>
    <option value="IOE - Master of Arts in Education">IOE - Master of Arts in Education</option>
    <option value="SBM - BS Entrepreneurship">SBM - BS Entrepreneurship</option>
    <option value="SBM - BS Hospitality Management">SBM - BS Hospitality Management</option>
    <option value="SBM - BS Tourism Management">SBM - BS Tourism Management</option>
    <option value="SBM - BS Business Administration">SBM - BS Business Administration</option>
    <option value="SBM - BS Accountancy">SBM - BS Accountancy</option>
    <option value="SBM - Master in Business Administration">SBM - Master in Business Administration</option>
    <option value="College of Dentistry - Doctor of Dental Medicine">College of Dentistry - Doctor of Dental Medicine</option>
    <option value="College of Dentistry - Master of Science in Dentistry">College of Dentistry - Master of Science in Dentistry</option>
    <option value="College of Medical Technology - BS Medical Technology">College of Medical Technology - BS Medical Technology</option>
    <option value="College of Medical Technology - BS Radiologic Technology">College of Medical Technology - BS Radiologic Technology</option>
    <option value="College of Medicine">College of Medicine</option>
    <option value="College of Nursing - Master of Arts in Nursing">College of Nursing - Master of Arts in Nursing</option>
    <option value="College of Optometry">College of Optometry</option>
</select>