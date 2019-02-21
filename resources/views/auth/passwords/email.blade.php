@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="columns">
<div class="column is-one-third is-offset-one-third m-t-150">
    <div class="card">
        <div class="card-content">
            <h1 class="title is-4">Lupa Password Anda?</h1>
            <form action="{{ route('login') }}" method="POST" role="form">
                {{ csrf_field() }}
                <div class="field m-t-20">
                    <label for="email" class="label">Email Address</label>
                    <p class="control">
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="example@some.mail">
                    </p>
                    @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Dapatkan Reset link</button>
            </form>
        </div>{{-- end of .card-content --}}
    </div>{{-- end of .card --}}
</div>
<h5 class="has-text-centered m-t-15"><a href="{{ route('login') }}" class="has-text-grey-lighter"><i class="fas fa-caret-left"></i>     <span>Coba masuk kembali<span></a></h5>        
</div>
        {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
