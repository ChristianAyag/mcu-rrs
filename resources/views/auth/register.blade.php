@section('title', 'Register')
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" id="studentForm">
        @csrf
        <!-- Name -->
        <div id="pi-wrapper">
            <x-input-label for="pi_name" :value="__('Principal Investigator')" />
            <div class="flex space-x-2">
                <div class="w-1/3">
                    <x-text-input id="pi_Lname" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                        type="text" name="pi_Lname" :value="old('pi_Lname')" required autofocus
                        autocomplete="pi_Lname" placeholder="Last name" />
                    <x-input-error :messages="$errors->get('pi_Lname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="pi_fname" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                        type="text" name="pi_fname" :value="old('pi_fname')" required autofocus autocomplete="pi_fname"
                        placeholder="First name" />
                    <x-input-error :messages="$errors->get('pi_fname')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <x-text-input id="pi_MI" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                        type="text" name="pi_MI" maxlength="4" :value="old('pi_MI')" required autofocus
                        autocomplete="pi_MI" placeholder="M.I." />
                    <x-input-error :messages="$errors->get('pi_MI')" class="mt-2" />
                </div>
            </div>
        </div>

        <div id="co-wrapper">
            <x-input-label for="Co_Investigators" :value="__('Co-Investigator/s (type N/A if none)')" />
            <x-text-input id="Co_Investigators" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                type="text" name="Co_Investigators" :value="old('Co_Investigators')"
                autocomplete="Co_Investigators" placeholder="e.g. (John Doe, Carlos González)" />
            <x-input-error :messages="$errors->get('Co_Investigators')" class="mt-2" />
        </div>

        <!-- If MCU Student or not -->
        <div class="mt-3">
            <label for="checkmcu" class="flex items-center space-x-1">
                <input id="toggleCheckBox" type="checkbox" class="rounded max-sm:w-[14px] max-sm:h-[14px]"
                    name="checkmcu" />
                <span class="text-[14px] text-primary max-sm:text-[13px]">{{ __('Check if not MCU student') }}</span>
            </label>
            <input type="text" id="textBox"
                class="h-[35px] text-[14px] block mt-1 w-full border-gray hover:bg-gray rounded-md duration-200"
                placeholder="School" name="pi_school" disabled />
        </div>

        <!-- Research Title -->
        <div class="mt-2">
            <x-input-label for="pi_title" :value="__('Research Title')" />
            <x-text-input id="pi_title" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="text"
                name="pi_title" :value="old('pi_title')" required autocomplete="pi_title" placeholder="Research Title" />
            <x-input-error :messages="$errors->get('pi_title')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="pi_Email" :value="__('Email')" />
            <x-text-input id="pi_Email" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="email"
                name="pi_Email" :value="old('pi_Email')" required autocomplete="username"
                placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('pi_Email')" class="mt-2" />
        </div>

        <!-- Program -->
        <div class="mt-2">
            <x-input-label for="pi_program" :value="__('Select Program')" />
            <x-combo-box id="pi_program" name="pi_program"
                class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] leading-[15px]" />
            <x-input-error :messages="$errors->get('pi_program')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="pi_Password" :value="__('Password')" />
            <x-text-input id="pi_Password" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                type="password" name="pi_Password" required autocomplete="pi_Password" placeholder="Password" />
            <x-input-error :messages="$errors->get('pi_Password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="pi_Password" :value="__('Confirm Password')" />
            <x-text-input id="pi_Password_confirmation" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                type="password" name="pi_Password_confirmation" required autocomplete="pi_Password"
                placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('pi_Password_confirmation')" class="mt-2" />
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