{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.admin')

@section('content')
    <div class="hk-row">
        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Users</span>
                        </div>
                        <div>
                            <span class="text-success font-14 font-weight-500">+10%</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5">168M</span>
                        <small class="d-block">172,458 Target Users</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
