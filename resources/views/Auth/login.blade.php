{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Rubik+Doodle+Shadow&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/dist/output.css') }}" />
</head>

<body class="h-screen">
    <main class="flex h-full justify-center items-center px-2">
      <section
        class="w-full flex md:flex-row flex-col bg-white container gap-4"
      >
        <div
          class="md:w-1/2 rounded-xl flex flex-col justify-center content-center"
        >
          <img src="./images/1.jpg" alt="img1" />
        </div>
        <div
          class="md:w-1/2 bg-gradient-to-bl from-[rgba(227,249,237,1)] to-[rgba(217,217,217,0)] rounded-xl flex flex-col justify-evenly gap-4 p-10"
        >
          <h1
            class="text-text_primary font-serif w-full text-center font-bold text-xl md:text-6xl"
          >
            Wlecom to <span class="text-primary_colour">EWSLY</span>
          </h1>

          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col gap-4">
              <div class="grid md:grid-cols-2  grid-cols-1 gap-5 p-10">

                <x-text-input id="email"   class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent "  placeholder="Email address" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
  <x-text-input id="password"   placeholder="Password"
  class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent "
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />


                 <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif


              </div>
              <div class="flex flex-col gap-2 justify-center items-center">
                <button
                  type="submit"
                  class="p-2 rounded-md bg-primary_colour text-white transition hover:scale-95 hover:bg-[#52e9d2]"
                >
                  Sign In
                </button>
                <!-- <p>
                  Are you have Email?
                  <a
                    href=""
                    class="text-primary_colour border-b-2 border-primary_colour"
                    >Sign In</a
                  >
                </p> -->
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>
