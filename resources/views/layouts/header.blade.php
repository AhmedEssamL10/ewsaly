<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Rubik+Doodle+Shadow&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('/dist/output.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="bg-slate-100">
       <!-- start header -->
       <header class="mb-4 bg-white">
        <nav
          class="container flex gap-4 justify-between items-center p-4 flex-wrap relative"
        >
          <div>
            <h1 class="text-primary_colour">EWSLY</h1>
          </div>
  
          <div>
            <button class="flex md:hidden">
              <i
                id="open_nav"
                class="fa-solid fa-bars text-text_primary hover:text-primary_colour fa-xl"
              ></i>
            </button>
          </div>
  
          <ul
            class="md:flex items-center md:gap-4 gap-2 off"
            id="container_links"
          >
            <li class="md:hidden">
              <button class="absolute top-2 left-2">
                <i
                  id="close_nav"
                  class="fa-solid fa-xmark text-text_primary hover:text-primary_colour fa-xl"
                ></i>
              </button>
            </li>
            <li>
              <a href="{{ route('home') }}"  class="nav-links {{ Route::currentRouteName() === 'home' ? ' active' : '' }} "
              >Home</a
            >
            </li>
  
            <li>
              <a href="" class="nav-links">About</a>
            </li>
            <li>
              <a href="" class="nav-links">Contact us</a>
            </li>
            @auth

            <li class="user_con_links p-4 md:p-0">
              <b class="">{{ ucfirst(Auth::user()->name) }}</b>
              <span><i class="fa-solid fa-caret-down"></i></span>
              <ul class="user_links">
                <li>
                  <a href="{{route('profile.edit')}}" class="nav-links {{ Route::currentRouteName() === 'profile.edit' ? ' active' : '' }} "
                    >Profile</a
                  >
                </li>
                <li>
                  <a href="" class="nav-links">My massage</a>
                </li>
                <li>
                  <form method="POST" class="nav-links" action="{{ route('logout') }}">
                    @csrf
    
                    <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                  </a>
                </form>
                </li>
              
              </ul>
            </li>
            @endauth
                @guest
                <li>
                  <a href="{{route('login')}}" class="nav-links"
                    >Sign in</a
                  >
                </li>
                @endguest
             
          </ul>
        </nav>
      </header>
      <!-- end header -->
      <main class="container p-2 flex flex-col gap-16">
        <section>
        @yield('content')
      </section>
    </main>
  
   

    <footer class="bg-light mt-4">
      <div class="container p-6">
        <div class="grid md:grid-cols-2 grid-cols-1 md:h-[300px]">
          <div class="h-full flex flex-col p-2 gap-4">
            <p class="text-text_primary text-[11px] tracking-wider">ADDRESS</p>
            <p class="text-2xl">
              290 Maryam Springs 260,
              <br />
              Courbevoie, Paris, France
            </p>
          </div>
          <hr class="block md:hidden my-4" />
          <div class="h-full flex flex-col p-2 gap-5">
            <p class="text-text_primary text-[11px] tracking-wider">
              CONTACT US
            </p>
            <div>
              <p class="text-text_primary text-[11px] tracking-wider">
                CALL US DIRECTLY
              </p>
              <p class="text-2xl">(812) 721-1236</p>
            </div>
            <div>
              <p class="text-text_primary text-[11px] tracking-wider">
                MAIL US DIRECTLY
              </p>
              <p class="text-2xl">info@liquid.com</p>
            </div>
          </div>
        </div>
        <ul class="flex justify-center flex-wrap md:justify-end mt-8 gap-5 ">
          <li>
            <a target="_blank" href=""
              ><i class="fa-brands fa-linkedin text-text_primary"></i>
              linkedin</a
            >
          </li>
          <li>
            <a target="_blank" href=""
              ><i class="fa-brands fa-x-twitter text-text_primary"></i>
              Linkedin</a
            >
          </li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
        <hr class="block my-8" />
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
      </div>
    </footer>
    <!-- end footer -->

    <script>
      const openNav = document.getElementById("open_nav");
      const closeNav = document.getElementById("close_nav");
      const container_links = document.getElementById("container_links");
      const userConLinks = document.querySelector(".user_con_links");
      const userLinks = document.querySelector(".user_links");
      const navLinks = document.querySelector(".nav-links");

      document.addEventListener("click", (e) => {
        if (
          e.target === container_links ||
          e.target === openNav ||
          e.target === userConLinks ||
          e.target == userLinks ||
          e.target == navLinks
        ) {
          container_links.classList.add("on");
          container_links.classList.remove("off");
        } else {
          container_links.classList.add("off");
          container_links.classList.remove("on");
        }
      });
    </script>
  </body>
  @yield('js')

</html>
