@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Column -->
        <div class="offset-md-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Token: {{ $user->token }}</p>
                    <a href="{{ route('users.index') }}" class="btn btn-primary pull-right">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection