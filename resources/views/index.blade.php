@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Movies
        </h2>
        <div class="grid grid-cols-4 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('storage/movies/h/HPKF.jpg')}}" class="" alt="hpkf"/>
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">
                        Harry Potter and the philosopher stone
                    </a>
                    <div class="flex items-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Nov 4, 2001</span>
                    </div>
                    <div class="text-gray-400">
                        Famiy / Fantasy / Adventure
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('storage/movies/h/HPKT.jpg')}}" class="" alt="hpkt"/>
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('storage/movies/h/HPWA.jpg')}}" class="" alt="hpwa"/>
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('storage/movies/h/HPCO.jpg')}}" class="" alt="hpco"/>
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('storage/movies/h/HPKP.jpg')}}" class="" alt="hpkp"/>
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('storage/movies/h/HPIS1.jpg')}}" class="" alt="hpis1"/>
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('storage/movies/h/HPIS2.jpg')}}" class="" alt="hpis2"/>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
