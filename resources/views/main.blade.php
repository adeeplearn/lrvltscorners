<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name') }}</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <header>
        @include('_includes.nav.navigate')
    </header>{{-- end of header --}}
    <div id="app">        
        <section class="hero is-fullheight m-t-50">
            <div class="hero-head m-t-25 container">
                <h1 class="title has-text-centered">Nikmati Keseruan Wisatamu Tanpa Mati Gaya</h1>
            </div>
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <figure class="image">
                                <img src="{{ asset('images/undraw_traveling_t8y2.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="column m-t-10">
                            <div class="order-box box">
                                <h1 class="subtitle is-4 has-text-weight-semibold has-text-centered"> Ayo Buat Rencana Wisatamu Sekarang </h1>
                                <p class="subtitle is-5">
                                    Beritahu kami semua keperluan untuk liburan anda, kami bantu secara gratis 
                                </p>
                            <form action="#" method="get">
                                <div class="field m-t-20">
                                    <div class="control has-icons-left">
                                        <input type="text" name="nama" class="input" placeholder="Nama Lengkap Anda">
                                        <span class="icon is-left is-small">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field m-t-20">
                                    <div class="control has-icons-left">
                                        <input type="email" name="email" class="input" placeholder="Alamat Email Anda">
                                        <span class="icon is-left is-small">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field has-addons m-t-20">
                                    <div class="control">
                                        <a class="button is-static">
                                            +62
                                        </a>
                                    </div>
                                    <div class="control is-expanded">
                                        <input type="number" name="phone" class="input" placeholder="Phone Number Anda">
                                    </div>
                                </div>
                                <div class="field m-t-25">
                                    <b-radio v-model="radio" type="is-link" native-value="small" name="tourgroup">
                                        Small tour group
                                    </b-radio>
                                    <b-radio v-model="radio" type="is-link" native-value="large" name="tourgroup">
                                        Large tour group
                                    </b-radio>
                                </div>
                                <div class="buttons is-centered m-t-25">
                                    <button class="button is-link is-medium is-rounded is-outlined">
                                        <i class="fas fa-paper-plane m-r-10"></i> Next Step
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>{{-- end of hero section --}}
        
        <section class="deals-landing section">
                <div class="container">
                <p class="title is-size-4">Jelajahi List tours<span class="has-text-weight-light">corners</span> Hot Deals</p>
                <p class="subtitle is-size-5 has-text-justified">Nikmati keseruan aktifitas wisatamu bersama teman, gebetan, atau keluargamu tanpa perlu ribet  dengan berbagai pilihan penawaran terbaik dari kami yang sesuai kebutuhanmu</p>
                <div class="columns is-multiline m-t-15">
                    <a href="#" class="column">
                        <div class="card media">
                            <figure class="media-left image is-64x64">
                                <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                            </figure>
                            <div class="media-content has-text-justify">
                                <div class="content">
                                    <p class="has-text-weight-semibold">Romance Corners</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="column">
                        <div class="card media">
                            <figure class="media-left image is-64x64">
                                <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                            </figure>
                            <div class="media-content has-text-justify">
                                <div class="content">
                                    <p class="has-text-weight-semibold">Culture Corners</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="column">
                        <div class="card media">
                            <figure class="media-left image is-64x64">
                                <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                            </figure>
                            <div class="media-content has-text-justify">
                                <div class="content">
                                    <p class="has-text-weight-semibold">Fun Corners</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="column">
                        <div class="card media">
                            <figure class="media-left image is-64x64">
                                <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                            </figure>
                            <div class="media-content has-text-justify">
                                <div class="content">
                                    <p class="has-text-weight-semibold">Adventure Corners</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="column">
                        <div class="card media">
                            <figure class="media-left image is-64x64">
                                <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                            </figure>
                            <div class="media-content has-text-justify">
                                <div class="content">
                                    <p class="has-text-weight-semibold">Family Corners</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        </section>{{-- end of deals-landing section --}}
        
        <section class="packages-landing section">
            <div class="container">
                <p class="title is-size-4">Penawaran Paket Wisata Terpopuler </p>
                <p class="subtitle is-size-5">Ayo tentukan tujuan wisata favoritmu, biar kami yang akan menghandlenya</p>
                <div class="columns is-multiline m-t-15">
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <div class="category has-text-centered">
                                        <span class="tag">adventure</span>
                                        <span class="tag">culture</span>
                                        <span class="tag">fun</span>
                                    </div>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <span class="tag">adventure</span>
                                    <span class="tag">culture</span>
                                    <span class="tag">fun</span>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <span class="tag">adventure</span>
                                    <span class="tag">culture</span>
                                    <span class="tag">fun</span>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <span class="tag">adventure</span>
                                    <span class="tag">culture</span>
                                    <span class="tag">fun</span>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <span class="tag">adventure</span>
                                    <span class="tag">culture</span>
                                    <span class="tag">fun</span>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <span class="tag">adventure</span>
                                    <span class="tag">culture</span>
                                    <span class="tag">fun</span>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <span class="tag">adventure</span>
                                    <span class="tag">culture</span>
                                    <span class="tag">fun</span>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages column is-3">
                        <div class="card">
                            <a href="#" class="card-image">
                                <figure class="image is-3by2">
                                    <img src="{{ asset('images/nat-10.jpg') }}" alt="Placeholder image">
                                </figure>
                            </a>
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-4 has-text-centered">4H3M - Yogyakarta</h2>
                                    <span class="tag">adventure</span>
                                    <span class="tag">culture</span>
                                    <span class="tag">fun</span>
                                    <hr>
                                    <div class="price">
                                        <p class="title has-text-weight-semi-bold is-5"> Mulai dari </p>
                                        <p class="subtitle has-text-wight-light has-text-right is-4"> Rp 1,099,000 /org </p>
                                    </div>
                                    <hr>
                                    <div class="ratings level">
                                        <span class="rateusers level-left">
                                            <span role="img" aria-label="ratings users">
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                                <span class="icon" style="font-size:10px !important;">
                                                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height:1em;width:1em;display:block;fill:sky;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="uscount">
                                            <span>213</span>
                                        </span>
                                    </div>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-link is-outlined"> Lihat Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons is-centered m-t-40">
                    <a href="{{ route('login')}}" class="button is-medium is-inverted">
                        <span class="icon m-r-10">
                            <i class="fas fa-spinner"></i>
                        </span>
                        Selengkapnya
                    </a>
                </div>
            </div>
        </section>{{-- end of  packages-landing section--}}

        <section class="why-landing section">
            <div class="container">
                <h1 class="title is-size-4">Berlibur bersama tours<span class="has-text-weight-light">corners</span> ?</h1>
                <hr>
				<div class="columns is-multiline">
					<div class="column is-3">
						<article class="media notification has-background-white">
							<figure class="media-left">
								<span class="icon">
									<i class="fab fa-lg fa-wpforms has-text-link"></i>
								</span>
							</figure>
							<div class="media-content">
								<div class="content">
									<h1 class="title is-size-4">Pembayaran Mudah dan Aman</h1>
									<p class="subtitle is-size-5">
										Tersedia berbagai metode pembayaran yang <strong>terjamin keamanannya</strong>
									</p>
								</div>
							</div>
						</article>
					</div>
					<div class="column is-3">
						<article class="media notification has-background-white">
							<figure class="media-left">   
								<span class="icon has-text-success">
									<i class="fas fa-lg fa-headset"></i>
								</span>
							</figure>
							<div class="media-content">
								<div class="content">
									<h1 class="title is-size-4">Penawaran Wisata dengan Harga yang Jujur</h1>
									<p class="subtitle is-size-5">
										Penawaran wisata terbaik dengan <strong>harga yang murah</strong>, tidak ada biaya tersembunyi, dan <strong>gratis konsultasi</strong> rencana wisata
									</p>
								</div>
							</div>
						</article>
					</div>
					<div class="column is-3">
						<article class="media notification has-background-white">
							<figure class="media-left">
								<span class="icon has-text-danger">
									<i class="fas fa-lg fa-heart"></i>
								</span>
							</figure>
							<div class="media-content">
								<div class="content">
									<h1 class="title is-size-4">Customer Asisten 24/7</h1>
									<p class="subtitle is-size-5">
										Customer asisten kami yang ramah, selalu <strong> siap membantu dalam kebutuhan wisata anda selama 24 jam </strong>
									</p>
								</div>
							</div>
						</article>
					</div>
					<div class="column is-3">
						<article class="media notification has-background-white">
							<figure class="media-left">
								<span class="icon has-text-primary">
									<i class="fas fa-lg fa-tags"></i>
								</span>
							</figure>
							<div class="media-content">
								<div class="content">
									<h1 class="title is-size-4">Promo Terbaik Setiap Hari</h1>
									<p class="subtitle is-size-5">
										Selalu dapatkan <strong>harga termurah</strong>, dengan menjadi subscriber kami 
									</p>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
        </section>

        <section class="client-landing section">
            <div class="container">
                <h1 class="title is-size-4"> Our Recent Client </h1>
                <div class="columns">
                    <div class="column">
                        <p class="subtitle has-text-justified">Memastikan kenyamanan wisata anda merupakan hal utama bagi kami. Oleh karena itu kami bekerja sama dengan berbagai penyedia jasa transportasi, jaringan hotel dan restoran agar mewujudkan wisata yang menyenangkan serta dapat memberi kenangan wisata terbaik untuk anda dan keluarga. Berikut ini beberapa klien kami yang telah kami layani sejak 2009.</p>
                        <a href="#" class="button is-outlined is-medium m-t-40">
                            Lihat Gallery
                        </a>
                    </div>
                    <div class="column">
                        <div class="columns is-multiline">
                            <div class="column is-4">
                                <div class="logo box" title="Goebox Cofee Jogja">
                                    <figure class="image">
                                        <img src="{{ asset('images/Logo GBX.png') }}" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="logo box" title="vidio.com">
                                    <figure class="image">
                                        <img src="{{ asset('images/Vidiologo_New.png') }}" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="logo box" title="Panin Bank">
                                    <figure class="image">
                                        <img src="{{ asset('images/logo-bank-panin-png-4.png') }}" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="logo box" title="Binus University">
                                    <figure class="image">
                                        <img src="{{ asset('images/logo-binus-university-png-6.png') }}" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="logo box" title="PLN Persero">
                                    <figure class="image">
                                        <img src="{{ asset('images/Logo_PLN.png') }}" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="logo box" title="Kementrian PUPR">
                                    <figure class="image">
                                        <img src="{{ asset('images/logopupr2.png') }}" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="container">

        <section class="social-landing section">
            <div class="container">
                <h1 class="title is-size-4 has-text-centered"> Social Media Rebound </h1>
                <div class="level m-t-40">
                <div class="level-item has-text-centered">
                    <a href="#">
                        <p class="heading">Instagram</p>
                        <span class="icon">
                            <i class="fab fa-2x fa-instagram"></i>
                        </span>
                        <p class="subtitle">3,456</p>
                    </a>
                </div>
                <div class="level-item has-text-centered">
                    <a href="#">
                        <p class="heading">Twitter</p>
                        <span class="icon">
                            <i class="fab fa-2x fa-twitter"></i>
                        </span>
                        <p class="subtitle">123</p>
                    </a>
                </div>
                <div class="level-item has-text-centered">
                    <a href="#">
                        <p class="heading">Facebook</p>
                        <span class="icon">
                            <i class="fab fa-2x fa-facebook"></i>
                        </span>
                        <p class="subtitle">456K</p>
                    </a>
                </div>
                <div class="level-item has-text-centered">
                    <a href="#">
                        <p class="heading">Youtube</p>
                        <span class="icon">
                            <i class="fab fa-2x fa-youtube"></i>
                        </span>
                        <p class="subtitle">789</p>
                    </a>
                </div>
            </div>
        </div>
        </section>

        <section class="subscribe-landing section has-background-link">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <h2 class="subtitle has-text-white">
                                Subscribe sekarang untuk menjadi lebih dekat dengan setiap promo Tourscorners!
                            </h2>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <div class="field has-addons">
                                <div class="control has-icons-left">
                                    <input type="email" class="input is-hoverable" placeholder="Masukkan Alamat Email">
                                    <span class="icon is-left is-small">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <div class="control">
                                    <a href="#" class="button is-white is-outlined">Subscribe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
        <section class="navbtm-landing section has-background-grey-dark">
            <div class="container">
                <div class="columns">
                    <div class="column is-4">
                        <div class="content">
                            <h2 class="subtitle is-6 has-text-white has-text-weight-semibold">
                                Tentang Tourscorners
                            </h2>
                            <a >
                                <p class="has-text-white">Karir</p>
                            </a>
                            <a>
                                <p class="has-text-white">Pusat Bantuan</p>
                            </a>
                            <a>
                                <p class="has-text-white">About Us</p>
                            </a>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="content">
                            <div class="logo-bottom has-text-centered">
                                <div class="logo-tcwh">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 201.5 100" enable-background="new 0 0 201.5 100" xml:space="preserve">
                                   <g id="XMLID_1_">
                                       <path id="XMLID_14_" fill="#FFFFFF" d="M120.4,46c-0.9-0.4-1.9-0.6-3.1-0.6c-2.5,0-4.4,1.7-4.4,5.5c0,3.9,1.9,5.6,4.6,5.6
                                           c1.1,0,2.2-0.2,3.2-0.5l0.3,1.3c-1.3,0.5-2.4,0.7-3.5,0.7c-1.9,0-3.4-0.6-4.6-1.7c-1.2-1.2-1.8-2.9-1.8-5.3c0-2.3,0.6-4.1,1.8-5.3
                                           s2.6-1.8,4.4-1.8c1.4,0,2.6,0.2,3.6,0.7L120.4,46z"/>
                                       <path id="XMLID_17_" fill="#FFFFFF" d="M122.9,50.9c0-5,2.1-7,6-7c3.9,0,5.8,2,5.8,7c0,5-2.1,7-5.9,7
                                           C124.7,57.9,122.9,56,122.9,50.9z M125.8,46.5c-0.7,0.8-1.1,2.2-1.1,4.3c0,4,1.3,5.5,4.1,5.5c2.7,0,4.1-1.8,4.1-5.5
                                           c0-2.1-0.3-3.6-1-4.4s-1.7-1.2-3.1-1.2C127.6,45.4,126.5,45.8,125.8,46.5z"/>
                                       <path id="XMLID_22_" fill="#FFFFFF" d="M144.2,45.8c-0.3-0.1-0.7-0.1-1.2-0.1c-1.3,0-2.4,0.3-3.3,1v10.9H138V44.2h1.5l0.1,1.2
                                           c1.1-0.9,2.4-1.4,3.9-1.4c0.3,0,0.6,0,0.9,0.1L144.2,45.8z"/>
                                       <path id="XMLID_24_" fill="#FFFFFF" d="M146.8,45.2c2.3-0.9,4.3-1.3,6-1.3c2.9,0,4.5,1.1,4.5,4.4v9.3h-1.6v-8.9
                                           c0-2.6-1.1-3.3-3.3-3.3c-1.6,0-2.8,0.3-3.8,0.9v11.3h-1.7V45.2z"/>
                                       <path id="XMLID_26_" fill="#FFFFFF" d="M170.4,55.4l0.3,1.4c-1.5,0.7-3,1-4.5,1c-3.8,0-5.7-2.7-5.7-6.7c0-2.1,0.6-3.8,1.8-5.1
                                           s2.8-2,4.9-2c2.6,0,4.1,1.6,4.1,3.6c0,4.6-5.9,5.3-8.8,4.4c0.1,1.2,0.4,2.2,1,3.1c0.6,0.8,1.6,1.2,3,1.2
                                           C168,56.3,169.4,56,170.4,55.4z M166.9,45.5c-1.5,0-2.6,0.5-3.3,1.6c-0.7,1-1.1,2.3-1.2,3.6c2,0.8,6.9,0.4,6.9-2.8
                                           C169.3,46.5,168.4,45.5,166.9,45.5z"/>
                                       <path id="XMLID_29_" fill="#FFFFFF" d="M180.6,45.8c-0.3-0.1-0.7-0.1-1.2-0.1c-1.3,0-2.4,0.3-3.3,1v10.9h-1.7V44.2h1.5l0.1,1.2
                                           c1.1-0.9,2.4-1.4,3.9-1.4c0.3,0,0.6,0,0.9,0.1L180.6,45.8z"/>
                                       <path id="XMLID_31_" fill="#FFFFFF" d="M182.7,55.5c1.3,0.6,2.4,0.9,3.5,0.9c2.1,0,3.1-0.7,3.1-2.2c0-1.3-1.1-2.1-2.4-2.5
                                           c-1.9-0.7-4.4-1.3-4.4-3.9c0-2.5,1.7-3.8,4.7-3.8c1.2,0,2.3,0.3,3.2,0.8l-0.3,1.4c-0.9-0.5-1.9-0.7-2.9-0.7c-2,0-2.9,0.7-2.9,2.2
                                           c0,3.2,6.8,2.1,6.8,6.3c0,1.2-0.4,2.2-1.3,3c-0.8,0.7-2.1,1.1-3.7,1.1s-2.9-0.3-3.8-0.9L182.7,55.5z"/>
                                       <path id="XMLID_2_" fill="#FFFFFF" d="M12,46.1H9.7v-2.6h2.5v-3.1l3.7-0.3v3.4h3.9l-0.2,2.6h-3.7v7c0,1,0.3,1.4,1.1,1.4
                                           c0.6,0,1.2-0.1,1.9-0.2l0.4,2.6c-0.9,0.4-1.9,0.6-3,0.6c-1.8,0-2.9-0.5-3.4-1.1c-0.4-0.6-0.6-0.9-0.7-1.6C12,53.9,12,53.7,12,52.8
                                           V46.1z"/>
                                       <path id="XMLID_4_" fill="#FFFFFF" d="M20.8,50.4c0-4.8,2.1-7.1,6.3-7.1c4.1,0,6.3,2,6.3,7.1c0,4.8-2.2,7.1-6.5,7.1
                                           C22.9,57.5,20.8,55.1,20.8,50.4z M27.1,54.7c1.7,0,2.7-1.1,2.7-4.3c0-1.7-0.2-2.8-0.7-3.4c-0.5-0.6-1.1-0.9-2-0.9
                                           c-0.9,0-1.5,0.3-2,0.9s-0.7,1.7-0.7,3.4C24.5,53.6,25.4,54.7,27.1,54.7z"/>
                                       <path id="XMLID_7_" fill="#FFFFFF" d="M47.8,54.2c0,1,0.2,2.1,0.5,3.1h-3.4L44.4,56c-1,1-2.4,1.4-4.1,1.4c-2.8,0-4.7-1.5-4.7-4.5
                                           v-9.4h3.7v8.6c0,1.6,1,2.5,2.4,2.5c0.8,0,1.5-0.2,2.3-0.7V43.5h3.7V54.2z"/>
                                       <path id="XMLID_9_" fill="#FFFFFF" d="M54.2,57.2h-3.7V43.5h3.2l0.1,1.3c1.2-1,2.6-1.5,4.1-1.5c0.5,0,0.9,0,1.3,0.1l-0.4,3
                                           c-0.4-0.1-0.9-0.1-1.4-0.1c-1.6,0-2.6,0.2-3.2,0.6V57.2z"/>
                                       <path id="XMLID_11_" fill="#FFFFFF" d="M69.6,47.3c-0.2-0.2-0.7-0.5-1.5-0.7c-0.8-0.3-1.6-0.4-2.3-0.4c-1.2,0-1.8,0.4-1.8,1.2
                                           c0,0.3,0.1,0.6,0.4,0.8c0.6,0.5,1.1,0.7,2.2,1.1c0.5,0.2,0.9,0.3,1.1,0.4c0.2,0.1,0.5,0.2,1,0.5c0.5,0.2,0.8,0.5,1,0.7
                                           c0.4,0.4,0.8,1.2,0.8,2.1c0,3-1.9,4.5-5.7,4.5c-0.9,0-1.8-0.1-2.7-0.3c-0.9-0.2-1.5-0.4-2-0.6l0.6-2.8c1.7,0.6,3.1,0.9,4.1,0.9
                                           c1.4,0,2-0.4,2-1.2c0-0.3-0.1-0.6-0.4-0.8c-0.5-0.5-0.9-0.7-2-1.1L63,50.9c-0.3-0.2-0.7-0.4-1.2-0.7c-1-0.7-1.4-1.5-1.4-2.6
                                           c0-1.4,0.5-2.5,1.5-3.2c1-0.7,2.3-1.1,3.7-1.1c1.9,0,3.3,0.4,4.5,1.2L69.6,47.3z"/>
                                       <g id="XMLID_320_">
                                           <g id="XMLID_375_">
                                               <path id="XMLID_376_" fill="#FFFFFF" d="M90.7,59.8c0,0.2-0.2,0.4-0.4,0.4H77.4v3.1c0,0.2-0.2,0.4-0.4,0.4
                                                   c-0.2,0-0.4-0.2-0.4-0.4v-3.1h-2.9c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4h2.9V46.8c0-0.2,0.2-0.4,0.4-0.4
                                                   c0.2,0,0.4,0.2,0.4,0.4v10.4c0,1.3,1,2.3,2.3,2.3h10.6C90.5,59.5,90.7,59.6,90.7,59.8z"/>
                                           </g>
                                       </g>
                                       <g id="XMLID_297_">
                                           <g id="XMLID_37_">
                                               <g id="XMLID_38_">
                                                   <path id="XMLID_39_" fill="#FFFFFF" d="M105.9,53.6c0.2,0,0.4-0.2,0.4-0.4V40.3h3.1c0.2,0,0.4-0.2,0.4-0.4
                                                       c0-0.2-0.2-0.4-0.4-0.4h-3.1v-2.9c0-0.2-0.2-0.4-0.4-0.4c-0.2,0-0.4,0.2-0.4,0.4v2.9H92.8c-0.2,0-0.4,0.2-0.4,0.4
                                                       c0,0.2,0.2,0.4,0.4,0.4h10.4c1.3,0,2.3,1,2.3,2.3v10.6C105.5,53.4,105.7,53.6,105.9,53.6z"/>
                                               </g>
                                           </g>
                                       </g>
                                       <g id="XMLID_283_">
                                           <g id="XMLID_295_">
                                               <path id="XMLID_296_" fill="#FFFFFF" d="M94.2,53l4-4.9l3.5-4.2c0.3-0.4,0-0.9-0.5-0.8L96,44.4l-6.2,1.5
                                                   c-0.2,0.1-0.3,0.3-0.2,0.5l1,1.6c0.9-0.4,1.9,0,2.4,0.9c0.5,0.8,0.4,1.9-0.3,2.5l1,1.6C93.8,53.2,94.1,53.2,94.2,53z"/>
                                           </g>
                                           <g id="XMLID_290_">
                                               <g id="XMLID_19_">
                                                   <path id="XMLID_20_" fill="#FFFFFF" d="M92.7,54l-6.3,1.5l-5.3,1.3c-0.5,0.1-0.8-0.4-0.5-0.8l3.5-4.2l4.1-5
                                                       c0.1-0.2,0.3-0.1,0.4,0.1l1,1.6c-0.7,0.7-0.8,1.7-0.3,2.5c0.5,0.8,1.5,1.2,2.4,0.9l1,1.6C92.9,53.7,92.9,53.9,92.7,54z"/>
                                               </g>
                                           </g>
                                           <g id="XMLID_288_">
                                               <circle id="XMLID_289_" fill="#FFFFFF" cx="91.2" cy="50" r="1.1"/>
                                           </g>
                                       </g>
                                   </g>
                                   </svg>
                                </div>
                            </div>
                            <div class="contact has-text-white has-text-centered m-t-25">
                                <span class="icon m-t-10">
                                    <i class="fas fa-3x fa-phone-square"></i>
                                </span>
                                <span class="subtitle is-3 has-text-white has-text-weight-light m-b-10" style="padding: 0 1rem;">
                                        +62812 2808 9257
                                </span>
                            </div>
                            <p class="title is-5 has-text-white has-text-centered">Jam Kerja</p>
                            <p class="subtitle is-6 has-text-white has-text-centered">Senin-Minggu : 24 jam</p>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="content has-text-right">
                            <h2 class="subtitle is-6 has-text-white has-text-weight-semibold">
                                Hubungi Tourscorners
                            </h2>
                            <a href="https://goo.gl/maps/shu2LUbkjir" target="_blank">
                                <span class="icon m-r-5">
                                    <i class="fas fa-map"></i>
                                </span>
                                <span class="has-text-white">
                                    Jl Parangtritis No 73 Prawirotaman Brontokusuman, Mergangsan, Yogyakarta
                                </span>
                            </a>
                            <br>
                            <a>
                                <span class="icon m-r-5">
                                    <i class="fas fa-headset"></i>
                                </span>
                                <span class="has-text-white">
                                         +62 812-2808-9257
                                </span>
                            </a>
                            <br>
                            <a>
                                <span class="icon m-r-5">
                                    <i class="fas fa-headset"></i>
                                </span>
                                <span class="has-text-white">
                                        +62 896-6690-7444
                                </span>
                            </a>
                            <br>
                            <a href="https://api.whatsapp.com/send?phone=6282326330723&text=Assalamualaikum%20kak,%20jalin%20silaturahmi%20yuk?">
                                <span class="icon m-r-5">
                                    <i class="fab fa-whatsapp"></i>
                                </span>
                                <span class="has-text-white">
                                        +62 823-2633-0723
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer has-background-grey-darker">
            <div class="content has-text-white has-text-centered">
                <p class="has-text-weight-semibold">
                    Copyright Tourscorners &copy; 2019
                </p>  
            </div>
        </footer>
    </div>{{-- end of #app --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>