<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/dist/output.css') }}" />
  </head>
  <body>
    <header class="bg-light shadow-nav shadow-primary_colour mb-4">
      <nav class="container flex gap-4 justify-between items-center p-4 flex-wrap">
        <div>
          <h1 class="text-primary_colour">EWSLY</h1>    
        </div>
  
        <div>
          <ul class="flex md:gap-4 gap-2 flex-wrap">
            <li>
              <a href="{{ route('home') }}"  class="nav-links {{ Route::currentRouteName() === 'home' ? ' active' : '' }} "
                >Home</a
              >
            </li>
            @auth
            <li>
              <a href="{{route('profile.edit')}}" class="nav-links {{ Route::currentRouteName() === 'profile.edit' ? ' active' : '' }} "
                >Profile</a
              >
            </li>
            @endauth
         
            <li>
              <a href="" class="hover:border-b-2 hover:border-primary_colour"
                >About</a
              >
            </li>
            <li>
              <a href="" class="hover:border-b-2 hover:border-primary_colour"
                >Contact us</a
              >
            </li>
            @auth
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log out') }}
                </x-dropdown-link>
            </form>
            </li>
            @endauth
            @guest
            <li>
              <a href="{{route('login')}}" class="hover:border-b-2 hover:border-primary_colour"
                >Sign in</a
              >
            </li>
            @endguest
          </ul>
        </div>
      </nav>
    </header>
    <main class="h-screen ">
      <section>
        @yield('content')
        <p></p>
      </section>
    </main>
  
   

    <footer>
      <p class="text-text_primary text-center p-2">
        © 2023, Made with ❤️ by
        <span
          ><a
            href=""
            class="text-primary_colour border-b-2 border-primary_colour"
            >KyanLabs</a
          ></span
        >
      </p>
    </footer>
   
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  @yield('js')
  </html>