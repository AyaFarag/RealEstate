@extends('website.app')

@section('content')
<body class="h-100">
    
<!-- Header Section !-->
@include('website.header')
<div class="clearfix"></div>

<!-- Slidehow Section !-->
@include('website.slider')
<div class="clearfix"></div>

@include('website.whatwedo')
<!-- What We Do Section !-->

<!-- About Section !-->
@include('website.about')
@include('website.aboutcourses')
<div class="clearfix"></div>

<!-- Work Section !-->
@include('website.ourwork')
<div class="clearfix"></div>

<!-- Services Section !-->
@include('website.service')
<div class="clearfix"></div>

<!-- team Section !-->
@include('website.team')
<div class="clearfix"></div>

<!-- Contact Section !-->
@include('website.contactus')

@include('website.contactform')

<!-- Branches -->
@include('website.branches')

<!-- subscribers -->
@include('website.subscribers')
<div class="clearfix"></div>

@endsection