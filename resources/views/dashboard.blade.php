@extends('layouts.app')

@section('content')

<div class="card-body">

    {{-- <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot> --}}
        <!-- Earnings (Monthly) Card Example -->
        
        @if (Auth::user()->role=='0')
        <div class="col-xl-12 col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dokumen
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">{{ $jumlah_dokumen }}
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-x-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 space-x-6">
                        {{ __("Anda sudah login") }}
                    </div>
                </div>
            </div>
        </div>
        
        {{-- </x-app-layout> --}}
</div>
        
@endsection