<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" id="studentForm">
        @csrf
        <!-- Name -->
        <div id="pi-wrapper">
            <x-input-label for="pi_name" :value="__('Principal Investigator')" />
            <div class="flex space-x-2">
                <div class="w-1/3">
                    <x-text-input id="userFname" class="block mt-1 w-full" type="text" name="userLname"
                        :value="old('userLname')" required autofocus autocomplete="userLname" placeholder="Last name" />
                    <x-input-error :messages="$errors->get('userLname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="userFname" class="block mt-1 w-full" type="text" name="pi_fname"
                        :value="old('userFname')" required autofocus autocomplete="pi_fname" placeholder="First name" />
                    <x-input-error :messages="$errors->get('userFname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="userMI" class="block mt-1 w-full" type="text" name="userMI" maxlength="4"
                        :value="old('userMI')" required autofocus autocomplete="userMI" placeholder="Middle Initial" />
                    <x-input-error :messages="$errors->get('userMI')" class="mt-2" />
                </div>
            </div>
        </div>

        <div id="co-wrapper">
            <x-input-label for="co_name" :value="__('Co-Investigator/s')" />
            <div class="flex space-x-2">
                <div class="w-1/3">
                    <x-text-input id="co_lname" class="block mt-1 w-full" type="text" name="co_lname"
                        :value="old('co_lname')" required autofocus autocomplete="co_lname" placeholder="Last name" />
                    <x-input-error :messages="$errors->get('co_lname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="co_fname" class="block mt-1 w-full" type="text" name="co_fname"
                        :value="old('co_fname')" required autofocus autocomplete="co_fname" placeholder="First name" />
                    <x-input-error :messages="$errors->get('co_fname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="co_mname" class="block mt-1 w-full" type="text" name="co_mname" maxlength="4"
                        :value="old('co_mname')" required autofocus autocomplete="co_mname"
                        placeholder="Middle Initial" />
                    <x-input-error :messages="$errors->get('co_mname')" class="mt-2" />
                </div>
            </div>
        </div>

        <!-- Add/Delete Button -->
        <div class="add-delete mt-4 flex space-x-2">
            <x-primary-button id="add" type="button" class="text-sm w-1/2 justify-center items-center">
                Add Co-Investigator
            </x-primary-button>
            <x-primary-button id="delete" type="button" class="text-sm w-1/2 justify-center items-center">
                Delete
            </x-primary-button>
        </div>

        <!-- If MCU Student or not -->
        <div class="mt-3">
            <input type="checkbox" id="toggleCheckBox" class="rounded-md" />
            <span>{{ __('If MCU student or not') }}</span>
            <input type="text" id="textBox" class="block mt-1 w-full border-gray hover:bg-gray rounded-md duration-200"
                placeholder="School" name="userSchool" disabled />
        </div>

        <!-- Research Title -->
        <div class="mt-2">
            <x-input-label for="title" :value="__('Research Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required
                autocomplete="title" placeholder="Research Title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="userEmail" :value="__('Email')" />
            <x-text-input id="userEmail" class="block mt-1 w-full" type="email" name="userEmail"
                :value="old('userEmail')" required autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('userEmail')" class="mt-2" />
        </div>

        <!-- Program -->
        <div class="mt-2">
            <x-input-label for="userProgram" :value="__('Select Program')" />
            <x-combo-box id="userProgram" name="userProgram" class="mt-1 w-full" />
            <x-input-error :messages="$errors->get('userProgram')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="userPassword" :value="__('Password')" />
            <x-text-input id="userPassword" class="block mt-1 w-full" type="password" name="userPassword" required
                autocomplete="userPassword" placeholder="Password" />
            <x-input-error :messages="$errors->get('userPassword')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="userPassword" :value="__('Confirm Password')" />
            <x-text-input id="userPassword" class="block mt-1 w-full" type="password" name="userPassword" required
                autocomplete="userPassword" placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('userPassword')" class="mt-2" />
        </div>

        <!-- Attach Endorsement Letter File -->
        <div class="mt-2">
            <x-input-label for="attachments" :value="__('Endorsement Letter')" />
            <x-text-input id="endorsement" class="block mt-1 w-full rounded-md p-1 hover:bg-transparent" type="file"
                name="endorsement[]" multiple />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-primary hover:text-secondary duration-200 rounded-md focus:outline-none"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<script>
    // add delete co-investigator textbox
    document.addEventListener("DOMContentLoaded", function () {
        const addBtn = document.getElementById('add');
        const deleteBtn = document.getElementById('delete');
        // Wrap the original group if not already wrapped preventing buttons to be deleted
        let wrapper = document.getElementById('co-wrapper');
        if (!wrapper) {
            const firstGroup = document.querySelector('.flex.space-x-2');
            wrapper = document.createElement('div');
            wrapper.id = 'co-wrapper';
            firstGroup.parentNode.insertBefore(wrapper, firstGroup);
            wrapper.appendChild(firstGroup);
        }
        addBtn.addEventListener('click', () => {
            const groups = wrapper.querySelectorAll('.flex.space-x-2');
            const lastGroup = groups[groups.length - 1];
            const clone = lastGroup.cloneNode(true);

            // Clear input values
            clone.querySelectorAll('input').forEach(input => input.value = '');

            // Clear errors
            clone.querySelectorAll('.mt-2').forEach(err => err.innerHTML = '');

            // add margin-top
            clone.classList.add('mt-2');

            wrapper.appendChild(clone);
        });
        deleteBtn.addEventListener('click', () => {
            const groups = wrapper.querySelectorAll('.flex.space-x-2');

            if (groups.length > 1) {
                groups[groups.length - 1].remove();
            }
        });
    });

    // disable enable textbox
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('toggleCheckBox');
        const textbox = document.getElementById('textBox');

        checkbox.addEventListener('change', function () {
            textbox.disabled = !this.checked;
        });
    });
</script>