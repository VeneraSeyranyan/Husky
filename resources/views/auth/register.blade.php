<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="rectangleUp">
            <div class="signup">SIGN UP</div>
            <!-- First Name -->
            <div class = "Name">
                <x-input-label for="firstname" :value="__('First Name')" />
                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>
            <!-- Last Name -->
            <div class="lastName">
                <x-input-label for="lastname" :value="__('Last Name')" />
                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Email Address -->
{{--            <div class="mt-4">--}}
            <div class="emailAdd">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
{{--            <div class="mt-4">--}}
            <div class="pass">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

{{--            <!-- Confirm Password -->--}}
{{--       change the class name     <div class="mt-4">--}}
            <div class="confPass">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

{{--            <div class="flex items-center justify-end mt-4">--}}
            <div class="forgot">

                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>

                <x-primary-button class="ml-4">
                    {{ __('Sign Up') }}
                </x-primary-button>
{{--                <x-primary-button class="ml-3">--}}
                    <x-primary-button class="in">
                        <a href="{{ route('login')}}" >
                    {{ __('SIGN IN') }}
                        </a>
                </x-primary-button>
            </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
