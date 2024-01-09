@extends('layouts.header')
@section('title','sendCode')
@section('content')
<main class="md:h-[70vh] p-2">
    <section class="container flex justify-center items-center h-full">
      <div class="bg-white md:p-16 p-8 rounded-2xl md:w-[600px]  flex  flex-col items-center gap-4">
        <p class="text-text_primary text-lg">Hello <span class="text-primary_colour text-2xl">{{$user->name}}</span> please click in send verification code to send code in your email</p>
        <p>Your email is: <span class="text-primary_colour text-2xl">{{$user->email}}</span></p>
        <div class="space-y-4">
          <button class="btn-submit"><a href="{{ route('sendCode') }}">Send verification code</a></button>
          <button class="btn-submit bg-slate-400 hover:bg-slate-600"><a href="">Change email</a></button>
        </div>
      </div>
    </section>
  </main>
@endsection