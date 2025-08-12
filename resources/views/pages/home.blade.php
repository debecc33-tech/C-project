@extends('layouts.app')

@section('title', 'Home - Slow')

@section('content')
    <x-home.hero-section :heroData="$heroData" />
@endsection