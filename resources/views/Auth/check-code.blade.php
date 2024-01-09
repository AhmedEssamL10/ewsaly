@extends('layouts.header')
@section('title','Home')
@section('content')
<main class="md:h-[70vh] p-2">
    <section class="container flex justify-center items-center h-full">
      <div
        class="bg-white md:p-16 p-8 rounded-2xl md:w-[600px] flex flex-col gap-2"
      >
        <p class="text-text_primary text-lg">
          Put the verification code here:
        </p>
        <form action="{{ route('checkCode') }}" method="post">
            @csrf
          <div class="flex gap-2">
            <input class="input-field num" type="number" name="code" placeholder="Code" />
            <button type="submit" class="btn-submit">Check</button>
          </div>
          {{-- <p class="error_masg ps-1">erorr</p> --}}
          @if ($errors->any())
            <div class="error_masg ps-1">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </form>
        <p class="text-text_primary underline hover:text-primary_colour">
          <a href="">Resend</a>
        </p>
      </div>
    </section>
  </main>
@endsection