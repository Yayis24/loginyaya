@extends('layouts.adminlte')
@section('bc')
     <li class="breadcrumb-item">Home</li>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('home.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('home.Message') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
