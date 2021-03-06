@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @include('flash-message')
                @yield('content')

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="admin">
                        {{ session('success') }}

                    </div>

                    @endif
                    You are Logged In

                </div>
            </div>
        </div>
    </div>
</div>
@endsection