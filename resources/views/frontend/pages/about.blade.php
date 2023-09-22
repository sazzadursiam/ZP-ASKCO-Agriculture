@extends('frontend.layout.master')
@section('about_menu_active', 'active')
@section('page_title')
    About us
@endsection
@section('content')
    <main id="main">
        <div class="container-fluid pt-5">
            <div class="row">
                <img src="{{ asset('frontend_assets/common/hero/about_hero.png') }}" alt=""
                    class="img-fluid d-block w-100">
            </div>
        </div>


    </main>


@endsection
