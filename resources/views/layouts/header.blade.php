<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/dist/output.css') }}" />
  </head>
  <body>

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
  </html>