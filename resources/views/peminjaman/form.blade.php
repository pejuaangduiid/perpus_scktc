@extends('layouts.app')
@section('content')

   <div class="flex items-center justify-center min-h-screen pt-4 pb-12 px-4 sm:px-6 lg:px-8 bg-gray-50 rounded-md">
      <div class="w-full max-w-sm bg-white shadow-xl rounded-2xl p-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir Peminjaman Buku</h2>
        <form>
          <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama</label>
            <input type="text" id="nama" value="{{ auth()->user()->name }}" readonly
               class="w-full rounded-lg border border-gray-300 p-3 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          </div>
          <div class="mb-4">
            <label for="nisn" class="block text-gray-700 font-semibold mb-2">NISN</label>
            <input type="text" id="nisn" value="{{ auth()->user()->nisn }}" readonly
               class="w-full rounded-lg border border-gray-300 p-3 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          </div>
          <div class="mb-4">
            <label for="tanggalPinjam" class="block text-gray-700 font-semibold mb-2">Tanggal Peminjaman</label>
            <input type="date" id="tanggalPinjam" value="{{ now()->format('Y-m-d') }}" readonly
               class="w-full rounded-lg border border-gray-300 p-3 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          </div>
          <div class="mb-4">
            <label for="pengembalian" class="block text-gray-700 font-semibold mb-2">Pengembalian</label>
            <input type="date" id="pengembalian" value="{{ now()->format('Y-m-d') }}" min="{{ now()->format('Y-m-d') }}"
               max="{{ now()->addWeeks(2)->format('Y-m-d') }}"
               class="w-full rounded-lg border border-gray-300 p-3 bg-white focus:outline-none focus:ring-2 focus:ring-blue-400" />
          </div>
          <div class="mb-4">
            <label for="judul_buku" class="block text-gray-700 font-semibold mb-2">Judul Buku</label>
            <input type="text" id="judul_buku" value="" disabled
               class="w-full rounded-lg border border-gray-300 p-3 bg-gray-100" />
          </div>
          <div class="mb-6">
            <label for="penulis_buku" class="block text-gray-700 font-semibold mb-2">Penulis Buku</label>
            <input type="text" id="penulis_buku" value="" disabled
               class="w-full rounded-lg border border-gray-300 p-3 bg-gray-100" />
          </div>
          <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-200">Pinjam
            Buku</button>
        </form>
      </div>
   </div>

@endsection