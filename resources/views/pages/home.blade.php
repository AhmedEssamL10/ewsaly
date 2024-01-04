@extends('layouts.header')
@section('title','Home')
@section('content')
    <!-- start main -->
    <main class="container p-2 flex flex-col gap-16">
        <!-- start section 1 (landing) -->
        <section class="landing_page">
          <div class="landing_page_img"></div>
          <div class="landing_page_overlay"></div>
          <div
            class="flex flex-col items-start py-12 h-1/2 max-w-[800px] mx-auto"
          >
            <p class="text-white max-w-[450px] text-2xl">
              <span class="text-primary_colour text-4xl font-cursive">EWSLY</span
              >, Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur, nemo dolorem repellendus.
            </p>
            <div class="mt-4">
              <button class="btn-submit px-6 py-3 rounded-xl">join now</button>
              <button class="btn-submit px-6 py-3 rounded-xl">Buy QR code</button>
            </div>
            <button></button>
          </div>
        </section>
        <!-- end section 1 (landing) -->
  
        <!-- start section 2 (Our Services) -->
        <section
          class="container flex flex-col gap-6 justify-center items-center"
        >
          <div class="flex flex-col gap-2 items-center max-w-[500px]">
            <p
              class="text-text_primary bg-white px-2 py-1 rounded-xl text-center"
            >
              BUSINESS SOLUTIONS
            </p>
            <h1 class="text-primary_colour text-4xl font-bold">Our Services</h1>
            <p class="text-center">
              Flexible layouts, and instant results! Choose a pre-built header or
              create a custom layout that perfectly suits
              <span class="text-primary_colour text-xl">your needs.</span>
            </p>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-6 md:grid-cols-4 gap-5">
            <div class="card_our_services">
              <div class="box">
                <i class="fa-solid fa-house icon"></i>
                <p>Search Engine Opt.</p>
              </div>
            </div>
            <div class="card_our_services">
              <div class="box">
                <i class="fa-solid fa-house icon"></i>
                <p>Search Engine Opt.</p>
              </div>
            </div>
            <div class="card_our_services">
              <div class="box">
                <i class="fa-solid fa-house icon"></i>
                <p>Search Engine Opt.</p>
              </div>
            </div>
            <div class="card_our_services">
              <div class="box">
                <i class="fa-solid fa-house icon"></i>
                <p>Search Engine Opt.</p>
              </div>
            </div>
            <div class="card_our_services">
              <div class="box">
                <i class="fa-solid fa-house icon"></i>
                <p>Search Engine Opt.</p>
              </div>
            </div>
            <div class="card_our_services">
              <div class="box">
                <i class="fa-solid fa-house icon"></i>
                <p>Search Engine Opt.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- end section 2 (Our Services) -->
  
        <!-- start section 3  (explain)-->
        <section class="container grid grid-cols-1 gap-8">
          <article class="explain_con">
            <div class="card_img md:col-span-2 md:col-start-2"></div>
            <div class="card md:col-span-3">
              <p
                class="text-text_primary bg-slate-100 px-2 py-1 rounded-xl text-center"
              >
                SELECTED PROJECTS
              </p>
              <h2 class="text-4xl">
                Magical Design
                <br />
                Solutions💡
              </h2>
              <p class="max-w-[400px]">
                Adjust your design through a wide range of theme options in the
                <span class="text-primary_colour text-xl"
                  >WordPress Customizer</span
                >
                and see the changes instantly.
              </p>
              <button class="btn-submit px-6 py-3 rounded-xl">join now</button>
            </div>
          </article>
  
          <article class="explain_con">
            <div class="card md:col-span-3 md:col-start-2">
              <p
                class="text-text_primary bg-slate-100 px-2 py-1 rounded-xl text-center"
              >
                SELECTED PROJECTS
              </p>
              <h2 class="text-4xl">
                Magical Design
                <br />
                Solutions💡
              </h2>
              <p class="max-w-[400px]">
                Adjust your design through a wide range of theme options in the
                <span class="text-primary_colour text-xl"
                  >WordPress Customizer</span
                >
                and see the changes instantly.
              </p>
              <button class="btn-submit px-6 py-3 rounded-xl">join now</button>
            </div>
            <div class="card_img md:col-span-2"></div>
          </article>
        </section>
        <!-- end section 3  (explain)-->
  
        <!-- start section 4  (email adrise)-->
        <section class="container bg-slate-50 rounded-xl">
          <div class="flex flex-col justify-center items-center p-10 gap-3">
            <p
              class="text-text_primary bg-slate-100 px-2 py-1 rounded-xl text-center"
            >
              GET FOR FREE
            </p>
            <h3 class="text-center text-text_primary">
              Have a project in mind?<br />
              <span class="text-primary_colour text-xl">Let's talk.</span>
            </h3>
            <div
              class="bg-slate-100 w-3/4 gap-8 p-8 grid md:grid-cols-2 grid-cols-1 rounded-xl"
            >
              <div>
                <input
                  type="text"
                  name="name"
                  placeholder="Name"
                  class="input-field"
                />
                <p class="error_masg"></p>
              </div>
              <div>
                <input
                  type="number"
                  name="phone"
                  placeholder="Phone"
                  class="input-field"
                />
                <p class="error_masg"></p>
              </div>
              <div>
                <input
                  type="email"
                  name="email"
                  placeholder="Email address"
                  class="input-field"
                />
                <p class="error_masg"></p>
              </div>
              <div class="md:col-span-2">
                <textarea
                  placeholder="Write your message"
                  cols="30"
                  rows="10"
                  class="input-field"
                ></textarea>
                <p class="error_masg"></p>
              </div>
              <button class="btn-submit px-4 mx-auto">Send</button>
            </div>
          </div>
        </section>
        <!-- end section 4  (email adrise)-->
      </main>
      <!-- end main -->
@endsection

