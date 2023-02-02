<x-guest-layout>
          <x-auth-card>
        <x-slot name="logo">

        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="rectangle1">
            <div class="sign">SIGN IN</div>
            <!-- Email Address -->
            <div class="mail">
                <x-input-label :value="__('Email Address')"/>
                <x-text-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <div class="bottom">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Sign In') }}
                </x-primary-button>
                <button class="ml-k"  >
                    <a href="{{ route('register')}}" >
                    {{ __('SIGN UP') }}
                    </a>
                </button>
            </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
