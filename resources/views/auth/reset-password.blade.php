<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <div class="rectangleReset">
                <div class="title">CREATE NEW PASSWORD </div>
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- add email -->
                <div class="addemail">
                    <x-input-label :value="__('Email')" />
                    <x-text-input class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    <x-input-error :messages="$errors->get('email')"></x-input-error>
                </div>
            <!-- New Password -->
            <div class="newpass">
                <x-input-label for="password" :value="__('New Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="passConfirm4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="save">
                <x-primary-button class="savefont">
                    {{ __('Save') }}
                </x-primary-button>
            </div>
                <x-primary-button class="signin">
                    <a href="{{ route('login')}}" >
                        {{ __('SIGN IN') }}
                    </a>
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
