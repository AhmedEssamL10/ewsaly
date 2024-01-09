@extends('layouts.header')
@section('title','Home')
@section('content')
<main class="grid grid-cols-12 gap-4   min-h-[70vh] ">
    <!-- start section one (user tabs) -->
    <section class="tabs_con close">
      <button class="tablinks active" onclick="openTab(event, 'user_info')">
        <p class="md:block hidden tab_text">User information</p>
        <span class="block md:hidden tabs_icon">
          <i class="fa-solid fa-user text-2xl"></i>
        </span>
      </button>
      <button class="tablinks" onclick="openTab(event, 'password')">
        <p class="md:block hidden tab_text">Password</p>
        <span class="block md:hidden tabs_icon">
          <i class="fa-solid fa-lock text-2xl"></i>
        </span>
      </button>
      <button class="tablinks" onclick="openTab(event, 'delete_user')">
        <p class="md:block hidden tab_text">Delete account</p>
        <span class="block md:hidden tabs_icon">
          <i class="fa-solid fa-trash text-2xl"></i>
        </span>
      </button>
      <button
        class="md:hidden block p-2 close"
        id="btn_tabs_drawer"
        onclick="togglTabsDrawer()"
      >
        <i class="fa-solid fa-arrow-right"></i>
      </button>
    </section>
    <!-- end section one (user tabs) -->

    <!-- start section two (user actions) -->
    <section class="user_actions close h-[600px]">
      <!-- start user name & img -->
      <!-- <div class="flex justify-start gap-6 items-center">
        <div
          class="bg-landing_page md:w-[9rem] md:h-[9rem] w-[80px] h-[80px] bg-cover rounded-full my-4 shadow-xl"
        ></div>
        <h1 class="text-text_primary text-3xl">Joe 3ogail</h1>
      </div> -->
      <!-- end user name & img -->

      <!-- start user info  -->
      <div id="user_info" class="tabcontent block">
        <form class="panel" action="{{route('profile.update')}}" method="post">
            @csrf
          <div>
            <label for="name" class="label">Name:</label>
            <input id="name" type="text" class="input-field" name="name" value="{{old('name', $user->name)}}" />
            <p class="error_masg"></p>
          </div>
          <div>
            <label for="email" class="label">Email:</label>
            <input id="email" type="email" class="input-field" name="email" value="{{old('email', $user->email)}}"/>
            <p class="error_masg"></p>
          </div>
          <div>
            <label for="phone" class="label">Phone:</label>
            <input type="number" id="phone" class="input-field" name="phone" value="{{old('phone', $user->phone)}}"/>
            <p class="error_masg"></p>
          </div>
          <div>
            <label for="car-color" class="label">Car color:</label>
            <input id="car-color" type="text" class="input-field" name="car_color" value="{{old('car_color', $user->car_color)}}"/>
            <p class="error_masg"></p>
          </div>
          <div>
            <label for="car-model" class="label">Car model:</label>
            <input type="text" id="car-model" class="input-field" name="car_model" value="{{old('car_model', $user->car_model)}}"/>
            <p class="error_masg"></p>
          </div>
          <div>
            <label for="plate-number" class="label">Plate number:</label>
            <input id="plate-number" type="text" class="input-field" name="plate_number" value="{{old('plate_number', $user->plate_number)}}" />
            <p class="error_masg"></p>
          </div>

          <button type="submit" class="btn-submit">Save changes</button>
        </form>
      </div>
      <!-- end user info  -->

      <!-- start user password -->
      <div id="password" class="tabcontent hidden">
        <form class="panel">
          <div>
            <label for="password" class="label">Old password:</label>
            <input id="password" type="password" class="input-field" />
            <p class="error_masg"></p>
          </div>
          <div>
            <label for="new-password" class="label">New password:</label>
            <input id="new-password" type="password" class="input-field" />
            <p class="error_masg"></p>
          </div>
          <div>
            <label for="password-confirmation" class="label"
              >Password confirmation:</label
            >
            <input
              type="password"
              class="input-field"
              id="password-confirmation"
            />
            <p class="error_masg"></p>
          </div>

          <button class="btn-submit">Save changes</button>
        </form>
      </div>
      <!-- end user password -->

      <!-- start delete account -->
      <div id="delete_user" class="tabcontent hidden">
        <form action="" class="panel">
          <div>
            <p>Are you sure you want to delete your account?</p>
            <button class="btn-error my-8">Delete account</button>
          </div>
        </form>
      </div>
      <!-- end delete account -->
    </section>
    <!-- end section two (user actions) -->
  </main>
  <!-- end main -->


@endsection
@section('js')
    <script>
       

        // tabs logic
        const openTab = (evt, cityName) => {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        };

        const btnTabsDrawer = document.getElementById("btn_tabs_drawer");
        const tabsText = document.querySelectorAll(".tab_text");
        const tabsIcon = document.querySelectorAll(".tabs_icon");

        const togglTabsDrawer = () => {
        if (btnTabsDrawer.className === "md:hidden block p-2 close") {
            btnTabsDrawer.classList.remove("close");
            btnTabsDrawer.classList.add("open");
            tabsText.forEach((tabText) => {
            tabText.className = "block tab_text";
            });
            tabsIcon.forEach((tabIcon) => {
            tabIcon.className = "hidden  tabs_icon";
            });
            document.querySelector(".tabs_con.close").classList = "tabs_con open";
            document.querySelector(".user_actions.close").className =
            "user_actions open";
            document.querySelector(".fa-solid.fa-arrow-right").className =
            "fa-solid fa-arrow-left";
        } else {
            btnTabsDrawer.classList.remove("open");
            btnTabsDrawer.classList.add("close");
            tabsText.forEach((tabText) => {
            tabText.className = "hidden tab_text";
            });
            tabsIcon.forEach((tabIcon) => {
            tabIcon.className = "block  tabs_icon";
            });
            document.querySelector(".tabs_con.open").classList = "tabs_con close";
            document.querySelector(".user_actions.open").className =
            "user_actions close";
            document.querySelector(".fa-solid.fa-arrow-left").className =
            "fa-solid fa-arrow-right";
        }
        };
    </script>
@endsection

