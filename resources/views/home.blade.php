@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card m-t-150">
        <div class="card-content">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="notification is-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
    
                You are logged in!
            </div>
        </div>
    </div>
</div>
@endsection
