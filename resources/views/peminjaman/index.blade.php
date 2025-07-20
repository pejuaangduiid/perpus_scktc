@extends('layouts.app')

@section('content')
    <div class="max-w-sm mx-auto mt-10 pt-3">
        <div class="bg-white shadow-lg rounded-lg border border-gray-800 p-8 flex flex-col items-center">
            <p class="text-gray-800 text-center text-lg">
                Silahkan Scan <span class="font-bold">Barcode Buku</span>
            </p>
            <form action="{{ route('form') }}" method="GET">
                @csrf
                <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Isi Form Manual
                </button>
            </form>

        </div>
    </div>
@endsection