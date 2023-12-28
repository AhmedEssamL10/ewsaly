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
        <section class="w-full flex md:flex-row flex-col bg-white container gap-4">
            <div class="md:w-1/2 rounded-xl flex flex-col justify-center content-center">
                <img src="{{ asset('/images/1.jpg') }}" alt="img1" />
            </div>
            <div
                class="md:w-1/2 bg-gradient-to-bl from-[rgba(227,249,237,1)] to-[rgba(217,217,217,0)] rounded-xl flex flex-col justify-evenly gap-4 p-10">
                <h1 class="text-text_primary font-serif w-full text-center font-bold text-xl md:text-6xl">
                    Welcome to <span class="text-primary_colour">EWSLY</span>
                </h1>

                <form method="POST" action="{{ route('register') }}"> 
                    @csrf
                    <div class="flex flex-col gap-4">
                        <input type="hidden" class="form-control" name="code" value="{{ $code??'' }}">

                        <div class="grid md:grid-cols-2 gap-5">
                            <x-text-input id="name"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent grid-cols-2"
                                type="text" name="name" :value="old('name')" required autofocus placeholder="Name"
                                autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />


                            <x-text-input id="phone" placeholder="Phone"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent grid-cols-2"
                                type="text" name="phone" :value="old('phone')" required autofocus
                                autocomplete="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />



                            <x-text-input id="email" placeholder="Email address"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent grid-cols-2"
                                type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            <x-text-input id="car_color" placeholder="Car color"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent grid-cols-2"
                                type="text" name="car_color" :value="old('car_color')" required autofocus
                                autocomplete="car_color" />
                            <x-input-error :messages="$errors->get('car_color')" class="mt-2" />

                            <x-text-input id="password" placeholder="Password"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent grid-cols-2"
                                type="password" name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <x-text-input id="password_confirmation" placeholder="Password confirmation"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent"
                                type="password" name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />



                            <x-text-input id="car_model" placeholder="Car model"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent grid-cols-2"
                                type="text" name="car_model" :value="old('car_model')" required autofocus
                                autocomplete="car_model" />
                            <x-input-error :messages="$errors->get('car_model')" class="mt-2" />

                            <x-text-input id="plate_number" placeholder="Plate number"
                                class="focus:outline-none focus: border-b-2 focus:border-primary_colour bg-transparent grid-cols-2"
                                type="text" name="plate_number" :value="old('plate_number')" required autofocus
                                autocomplete="plate_number" />
                            <x-input-error :messages="$errors->get('plate_number')" class="mt-2" />



                        </div>
                        <div class="flex flex-col gap-2 justify-center items-center">
                            <button type="submit"
                                class="p-2 rounded-md bg-primary_colour text-white transition hover:scale-95 hover:bg-[#52e9d2]">
                                Sign Up
                            </button>
                            <p>
                                Are you have Email?
                                <a href="{{ route('login') }}   " class="text-primary_colour border-b-2 border-primary_colour">Sign
                                    In</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
