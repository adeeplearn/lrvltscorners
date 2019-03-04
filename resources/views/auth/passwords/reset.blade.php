@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="notification is-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title is-4">Daftar Piknik Sekarang</h1>
                <form action="{{ route('password.update') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <p class="control">
                        <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="example@some.mail" required>
                        </p>
                        @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" required>
                                </p>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Konfirmasi Password</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" name="password_confirmation" id="password" required>
                                </p>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <b-checkbox name="offers m-t-20"> Beritahukan setiap ada promo menarik saja.  </b-checkbox>
                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Daftar</button>
                    <h5 class="has-text-centered m-t-20">Dengan mendaftar, saya menyetujui <a href="#" class="has-text-primary">Syarat dan ketentuan</a> dan <a href="#" class="has-text-primary">Kebijakan yang berlaku</a> </h5>
                </form>
            </div>{{-- end of .card-content --}}
        </div>{{-- end of .card --}}
    <h5 class="has-text-centered m-t-15">Sudah punya akun tourscorners? <a href="{{ route('login') }}" class="has-text-success"><strong>Masuk</strong></a></h5>
    </div>
</div>
@endsection
