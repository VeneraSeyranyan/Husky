<x-app-layout>
    <x-slot name="header">
        <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
        <nav role="navigation" class="primary-navigation">
            <ul>
                <li class="menu-item"><a href="#">Home</a></li>
                <li class="menu-item2"><a href="#">About Us</a></li>
                <li class="menu-item3">
                    <select>
                        <option selected> Blog</option>
                    </select>
                </li>
                <li class="menu-item4">
                    <select>
                        <option selected> Partners</option>
                    </select>
                </li>
                <li class="menu-item5"><a href="#">Contact Us</a></li>
            </ul>
            <li class="menu-item6">
                <div class="matit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                         class="bi bi-pencil" viewBox="0 0 16 16">
                        <path
                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"
                            fill="white"></path>
                    </svg>
                </div>
            </li>
        </nav>
    </x-slot>

    <div class="card-body">
        <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
            @csrf
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="pic">
                <img src="/storage/images/{{ Auth::user()->image }}">
            </div>
            <label class="input--file" for="image">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="24" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="3.2"/>
                    <path
                        d="M9 2l-1.83 2h-3.17c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2h-3.17l-1.83-2h-6zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                    <path d="M0 0h24v24h-24z" fill="none"/>
                </svg>
            </label>
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                   value="{{ old('image') }}" required autocomplete="image">
            <button class="upload" type="submit">
                {{ __('Upload') }}
            </button>
        </form>
    </div>
        <div class="fname">
            <x-input-label  :value="__('First Name')"/>
            <input class="fnameinput" name="firstname" value={{$user->firstname}}>
        </div>

        <div class="lname">
            <x-input-label  :value="__('Last Name')"/>
            <input class="lnameinput" name="lastname" value={{$user->lastname}}>
        </div>
        <div class="Email">
            <x-input-label :value="__('Email')"/>
            <input class="einput" name="email" value={{$user->email}}>
        </div>
        <div class="phone">
            <x-input-label  :value="__('Phone')"/>
            <input class="einput"  name="phone" value={{$user->phone}}>
        </div>
        <div class="editcolor">
            <x-dropdown-link class="edit" :href="route('profile.edit')">
                {{ __('Edit') }}
            </x-dropdown-link>
        </div>
        <form class="logOut" method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault();
                                               this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>
</x-app-layout>
