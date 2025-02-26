@extends('public.layouts.app')

@section('content')
    <div class="grid grid-cols-4 md:grid-cols-3 gap-4 p-6 min-h-screen">
        {{-- @foreach ($products as $product) --}}
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
            <div class="p-4">
                <img class="w-full h-48 object-cover" src="{{ asset('src/images/products/imac.png') }}" alt="">
            </div>
            <div class="p-4">
                <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900">Komputer</h5>
                <p class="mb-1 text-lg font-semibold text-blue-600">Rp.120.000</p>
                <p class="mb-2 text-gray-700">⭐⭐⭐⭐⭐</p>
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
