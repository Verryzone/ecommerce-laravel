@extends('public.layouts.app')

@section('content')
    <div class="grid grid-cols-6 md:grid-cols-3 gap-4 p-6 min-h-screen">
        {{-- @foreach ($products as $product) --}}
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden flex-1">
            <div class="p-4 w-full flex justify-center items-center">
                <img class="w-36 h-20 object-cover" src="{{ asset('src/images/products/imac.png') }}" alt="">
            </div>
            <div class="p-4">
                <h5 class="text-md tracking-tight text-gray-900">Komputer</h5>
                <p class="text-lg font-semibold text-blue-600">Rp.120.000</p>
                <p class="text-gray-700 text-sm">Surakarta</p>
                <p class="mb-1 text-gray-700 text-sm">⭐ 4.9 | 11 terjual</p>
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Beli Sekarang
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection
