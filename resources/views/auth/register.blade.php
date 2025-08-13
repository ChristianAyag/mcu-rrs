@section('title', 'Register')
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" id="studentForm">
        @csrf
        <!-- Name -->
        <div id="pi-wrapper">
            <x-input-label for="pi_name" :value="__('Principal Investigator')" />
            <div class="flex space-x-2">
                <div class="w-1/3">
                    <x-text-input id="userFname" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                        type="text" name="userLname" :value="old('userLname')" required autofocus
                        autocomplete="userLname" placeholder="Last name" />
                    <x-input-error :messages="$errors->get('userLname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="userFname" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                        type="text" name="pi_fname" :value="old('userFname')" required autofocus autocomplete="pi_fname"
                        placeholder="First name" />
                    <x-input-error :messages="$errors->get('userFname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="userMI" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                        type="text" name="userMI" maxlength="4" :value="old('userMI')" required autofocus
                        autocomplete="userMI" placeholder="M.I." />
                    <x-input-error :messages="$errors->get('userMI')" class="mt-2" />
                </div>
            </div>
        </div>

        <div id="co-wrapper">
            <x-input-label for="userCoInvestigators" :value="__('Co-Investigator/s (type N/A if none)')" />
            <x-text-input id="userCoInvestigators" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                type="text" name="userCoInvestigators" :value="old('userCoInvestigators')"
                autocomplete="userCoInvestigators" placeholder="e.g. (John Doe, Carlos González)" />
            <x-input-error :messages="$errors->get('userCoInvestigators')" class="mt-2" />
        </div>

        <!-- If MCU Student or not -->
        <div class="mt-3">
            <label for="remember_me" class="flex items-center space-x-1">
                <input id="toggleCheckBox" type="checkbox" class="rounded max-sm:w-[14px] max-sm:h-[14px]"
                    name="remember" />
                <span class="text-[14px] text-primary max-sm:text-[13px]">{{ __('If MCU student or not') }}</span>
            </label>
            <input type="text" id="textBox"
                class="h-[35px] text-[14px] block mt-1 w-full border-gray hover:bg-gray rounded-md duration-200"
                placeholder="School" name="userSchool" disabled />
        </div>

        <!-- Research Title -->
        <div class="mt-2">
            <x-input-label for="title" :value="__('Research Title')" />
            <x-text-input id="title" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="text"
                name="title" :value="old('title')" required autocomplete="title" placeholder="Research Title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="userEmail" :value="__('Email')" />
            <x-text-input id="userEmail" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="email"
                name="userEmail" :value="old('userEmail')" required autocomplete="username"
                placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('userEmail')" class="mt-2" />
        </div>

        <!-- Program -->
        <div class="mt-2">
            <x-input-label for="userProgram" :value="__('Select Program')" />
            <x-combo-box id="userProgram" name="userProgram"
                class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] leading-[15px]" />
            <x-input-error :messages="$errors->get('userProgram')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="userPassword" :value="__('Password')" />
            <x-text-input id="userPassword" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                type="password" name="userPassword" required autocomplete="userPassword" placeholder="Password" />
            <x-input-error :messages="$errors->get('userPassword')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="userPassword" :value="__('Confirm Password')" />
            <x-text-input id="userPassword" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                type="password" name="userPassword" required autocomplete="userPassword"
                placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('userPassword')" class="mt-2" />
        </div>

        <!-- Attach Endorsement Letter File -->
        <div class="mt-2">
            <x-input-label for="attachments" :value="__('Endorsement Letter')" />
            <x-text-input id="endorsement"
                class="block mt-1 w-full rounded-md p-1 hover:bg-transparent text-[14px] max-sm:text-[13px] h-[35px]"
                type="file" name="endorsement[]" multiple />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm max-sm:text-[13px] text-primary hover:text-secondary duration-200 rounded-md focus:outline-none"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 text-[15px] max-sm:text-[13px]">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<script>
    // disable enable textbox
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('toggleCheckBox');
        const textbox = document.getElementById('textBox');

        checkbox.addEventListener('change', function () {
            textbox.disabled = !this.checked;
        });
    });
</script>