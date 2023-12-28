<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Code -->
        <div>
            <input type="hidden" class="form-control" name="code" value="{{ $code??'' }}">
            {{-- <x-text-input id="code" class="block mt-1 w-full" type="hidden" name="code" :value="{{ $code }}" /> --}}
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Car model -->
        <div>
            <x-input-label for="car_model" :value="__('Car model')" />
            <x-text-input id="car_model" class="block mt-1 w-full" type="text" name="car_model" :value="old('car_model')" required autofocus autocomplete="car_model" />
            <x-input-error :messages="$errors->get('car_model')" class="mt-2" />
        </div>

        <!-- Car color -->
        <div>
            <x-input-label for="car_color" :value="__('Car color')" />
            <x-text-input id="car_color" class="block mt-1 w-full" type="text" name="car_color" :value="old('car_color')" required autofocus autocomplete="car_color" />
            <x-input-error :messages="$errors->get('car_color')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Plate Number -->
        <div>
            <x-input-label for="plate_number" :value="__('plate number')" />
            <x-text-input id="plate_number" class="block mt-1 w-full" type="text" name="plate_number" :value="old('plate_number')" required autofocus autocomplete="plate_number" />
            <x-input-error :messages="$errors->get('plate_number')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
