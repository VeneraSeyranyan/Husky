<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="forgotPass">
            <!-- FORGOT PASSWORD -->
            <div class="forgotpass"> FORGOT PASSWORD </div>
            <!-- Email Address -->
            <div class="EAdd">
                <x-input-label  :value="__('Email Address')" />
                <x-text-input  class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="send">
                    {{ __('Send') }}
                </x-primary-button>
            <x-primary-button class="sIn">
                <a href="{{ route('login')}}" >
                    {{ __('SIGN IN') }}
                </a>
            </x-primary-button>
            </div>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>
