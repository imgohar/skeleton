@extends('layouts.app')

@section('content')
<style>
     .success-muted-note {
            color: #34bfa3 !important;
            font-weight: 600 !important;
        }

            div.ex1 {
                background: #eee;
                height: 400px;
                overflow: scroll;
}

</style>



        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Includable CSS --}}
        @yield('styles')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Signup') }}</div>

                <div class="card-body">
                    <p>Create your account</p>
                    <a href="/register" class="p-5 btn btn-primary d-block m-5"><i class="flaticon-email"></i> Signup with email</a>
                    <a href="{{ url('auth/google') }}" class="p-5 btn btn-outline-primary d-block m-5"><i class="flaticon-letter-g"></i>Signup with google</a>
                    <a href="" class="p-5 btn btn-transparent-primary font-weight-bold d-block m-5"><i class="
                        socicon-github"></i> Signup with github</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
