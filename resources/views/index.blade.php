@extends('layouts.app')
@section('content')
  <div class="mt-6 flex justify-center">
    <div class="max-w-sm rounded-xl bg-white p-6 shadow-lg text-center">
    <div>
      <div class="text-xl font-medium text-black">Selamat Datang, {{ auth()->user()->name }}!</div>
      <p class="text-black">
      Selamat Datang di Perpustakaan <br><mark>Sekolah Cinta Kasih Tzu Chi</mark>
      </p>
      <div class="flex gap-x-4 mt-4 justify-center">
      <form action="{{ route('scan') }}" method="GET">
        @csrf
        <button
        class="bg-sky-500 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
        Pinjam Buku
        </button>
      </form>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button
        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
        Logout
        </button>
      </form>
      </div>
    </div>
    </div>
  </div>
@endsection