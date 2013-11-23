@extends('layout.website')
@section('title')
	Highly Succeed Ltd | DARTS v0.1
@stop
@section('styles')
	{{ HTML::style('assets/stylesheets/website.css') }}
@stop
@section('header')
	<div id="top" class="header">
      <div class="vert-text">
      	<img style="margin-right:20px;"src="{{ asset('assets/img/company_logo.png') }}" alt="Highly Succeed Ltd.">
        <h1 style="color:#333333">You're Awesome</h1>
        <a href="{{ URL::to('auth/login') }}" class="btn btn-default btn-lg">Make a Report</a>
      </div>
    </div>
@stop
