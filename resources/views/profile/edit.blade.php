@extends('partials.layout')
@section('title', 'Profile')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Page Header -->
            <h1 class="text-4xl font-bold text-base-content">
                Welcome, {{ Auth::user()->name }}
            </h1>

            <div class="card bg-base-100 mx-auto">
                    @include('profile.partials.account-info')
            </div>

            <!-- Update Profile Information -->
            <div class="card bg-base-100 shadow-xl mx-auto">
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="card bg-base-100 shadow-xl mx-auto">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Account -->
            <div class="card bg-base-100 shadow-xl mx-auto">
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
@endsection