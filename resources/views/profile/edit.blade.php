@extends('layouts.header')
@section('content')
    
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>

                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
    @endsection
    @section('js')

    <script>
        const acc = document.getElementsByClassName("accordion");
        let i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                const panel = this.nextElementSibling;
                if (panel.style.display === "grid") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "grid";
                }
            });
        }
    </script>
    </body>

    </html>
@endsection