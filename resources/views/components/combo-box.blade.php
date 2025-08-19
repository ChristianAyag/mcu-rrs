@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-gray-300']) }}>
    <option value="" disabled selected>-- Choose Program --</option>
    <option value="bsit">CAS - BS Information Technology</option>
    <option value="bscs">CAS - BS Computer Science</option>
    <option value="bsemc">CAS - BS Entertainment and Multimedia Computing</option>
    <option value="bsbio">CAS - BS Biology</option>
    <option value="bac">CAS - Bachelor of Arts in Communication</option>
    <option value="pharma">College of Pharmacy</option>
    <option value="therapy">College of Physical Therapy</option>
    <option value="english">IOE - Bachelor of Seconary Major in English</option>
    <option value="philosophy">IOE - Doctor of Philosophy</option>
    <option value="educ">IOE - Master of Arts in Education</option>
    <option value="entrep">SBM - BS Entrepreneurship</option>
    <option value="hm">SBM - BS Hospitality Management</option>
    <option value="tourism">SBM - BS Tourism Management</option>
    <option value="ba">SBM - BS Business Administration</option>
    <option value="accountancy">SBM - BS Accountancy</option>
    <option value="master_ba">SBM - Master in Business Administration</option>
    <option value="dental">College of Dentistry - Doctor of Dental Medicine</option>
    <option value="dentistry">College of Dentistry - Master of Science in Dentistry</option>
    <option value="medtech">College of Medical Technology - BS Medical Technology</option>
    <option value="radtech">College of Medical Technology - BS Radiologic Technology</option>
    <option value="medicine">College of Medicine</option>
    <option value="nursing">College of Nursing - Master of Arts in Nursing</option>
    <option value="opto">College of Optometry</option>
</select>