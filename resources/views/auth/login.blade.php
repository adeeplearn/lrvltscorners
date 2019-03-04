@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-150">
        <div class="card">
            <div class="card-content">
                <h1 class="title is-4">Masuk</h1>
                <h5>Belum punya akun tourscorners? <a href="{{ route('register') }}" class="has-text-primary"><strong>Daftar</strong></a></h5>
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
                    </div>
                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control">
                                <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password">
                            </p>
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <b-checkbox name="remember m-t-20">Remember me</b-checkbox>
                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Log in</button>
                </form>
            </div>{{-- end of .card-content --}}
        </div>{{-- end of .card --}}
        <h5 class="has-text-centered m-t-15"><a href="{{ route('password.request') }}" class="has-text-grey-lighter">Forgot your password?</a></h5>
    </div>
</div>
@endsection