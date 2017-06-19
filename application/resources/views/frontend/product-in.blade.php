@extends('frontend.layout.main')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/home.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/home-dekstop.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/home-mobile.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
@endsection

@section('content')
<img src="{{ asset('amadeo/image/base/Landing-page-product-in-30mar.jpg') }}" style="position: relative; margin-top: -65px; width: 100%;">
@endsection

@section('script')

@endsection
