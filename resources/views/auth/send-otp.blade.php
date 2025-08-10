<x-guest-layout>
    <form method="POST" action="" class="">
        <span class="text-center font-bold text-2xl text-primary">Enter OTP</span>
        <p class="text-primary">{{ __('The OTP has been sent to your email address.') }}</p>
        <div class="inputContainer w-[200px] flex m-auto items-center justify-center flex-row gap-4 mt-4">
            <input type="text" maxlength="1"
                class="w-[70px] h-[75px] border-darkgray rounded-lg text-[25px] text-center" required>
            <input type="text" maxlength="1"
                class="w-[70px] h-[75px] border-darkgray rounded-lg text-[25px] text-center" required>
            <input type="text" maxlength="1"
                class="w-[70px] h-[75px] border-darkgray rounded-lg text-[25px] text-center" required>
            <input type="text" maxlength="1"
                class="w-[70px] h-[75px] border-darkgray rounded-lg text-[25px] text-center" required>
            <input type="text" maxlength="1"
                class="w-[70px] h-[75px] border-darkgray rounded-lg text-[25px] text-center" required>
            <input type="text" maxlength="1"
                class="w-[70px] h-[75px] border-darkgray rounded-lg text-[25px] text-center" required>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="mr-3 bg-primary text-orangeyellow hover:bg-orangeyellow hover:text-primary">
                RESEND OTP
            </x-primary-button>
            @if (Route::has('password.store'))
            <x-primary-button>
                <a href="{{ route('password.store') }}">VERIFY</a>
            </x-primary-button>
            @endif
        </div>
    </form>
</x-guest-layout>