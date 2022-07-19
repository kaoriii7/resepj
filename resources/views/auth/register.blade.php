
<x-guest-layout>
    <x-menu-title>
    <header class="header">
        <div class="menu-wrap">
          <nav class="nav" id="nav">
            <ul>
              <li><a href="/">HOME</a></li>
              <li><a href="/register">REGISTRATION</a></li>
              <li><a href="/auth">LOGIN</a></li>
            </ul>
          </nav>
          <div class="menu" id="menu">
            <span class="menu__line--top"></span>
            <span class="menu__line--middle"></span>
            <span class="menu__line--bottom"></span>
          </div>
        </div>
        <h1>Rese</h1>
    </header>
    </x-menu-title>
        <x-ttl>
          <h2>Registration</h2>
        </x-ttl>    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <!-- <x-label for="name" :value="__('')" /> -->

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Username" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <!-- <x-label for="email" :value="__('Email')" /> -->

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <!-- <x-label for="password" :value="__('Password')" /> -->

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password" placeholder="Password"                         required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <!-- <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div> -->

            <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
