@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                @can('isAdmin')
                    <h1>Cette page est dedier a l'adminitrateur</h1>
                @endcan
                @can('isUser')
                    <h1>Cette page est dedier aux utilisateur</h1>
                @endcan
                @can('isEditor')
                    <h1>Cette page est dedier aux editeurs</h1>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
