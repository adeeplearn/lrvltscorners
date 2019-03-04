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
            <form action="{{ route('password.email') }}" method="POST" role="form">
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
@endsection
