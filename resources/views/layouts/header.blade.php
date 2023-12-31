<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@yield('title')</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/dist/output.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>

  <body>
    <header class=" shadow-nav shadow-primary_colour">
      <nav class="container flex gap-4 justify-between items-center p-4 flex-wrap">
        <div>
          <h1 class="text-primary_colour">EWSLY</h1>    
        </div>
  
        <div>
          <ul class="flex md:gap-4 gap-2 flex-wrap">
            <li>
              <a href="" class="hover:border-b-2 hover:border-primary_colour"
                >Home</a
              >
            </li>
            <li>
              <a href="" class="hover:border-b-2 hover:border-primary_colour"
                >Profile</a
              >
            </li>
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
            <li>
              <a href="" class="hover:border-b-2 hover:border-primary_colour"
                >Log out</a
              >
            </li>
            <li>
              <a href="" class="hover:border-b-2 hover:border-primary_colour"
                >Sign in</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="h-screen ">
      <section>
        <p></p>
      </section>
    </main>
    @yield('content')
   

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
  </html>