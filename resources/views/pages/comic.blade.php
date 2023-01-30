@extends('layouts.main-layout')

@section('comic_content')
<div class="background-comic">
    <div class="strip">

    </div>
    <div class="d-flex flex-column">
        <div class="conteiner-top d-flex">
            <div class="left">
                <div class="image text-center">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                </div>
                <h3 class="pt-4">title</h3>
                <div class="d-flex">
                    <div class="green-strip-left d-flex justify-content-between p-2">
                        <span>U.S Price:</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="green-strip-right text-center p-2">
                        <span>Check Availability</span>
                    </div>
                </div>
                <p class="p-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis maxime similique ipsum veniam unde repudiandae dolorem consequuntur iure ab animi, consequatur quo aut molestias sint ut facere? Iure, optio corporis?</p>
            </div>
            <div class="right">
                <h6> ADVERTISEMENT</h6>
                <div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="logo">
                </div>
            </div>
        </div>
        <div class="container-bottom">
            <div class="middle d-flex">
                <div class="talent px-1">
                    <div class="talent-content d-flex justify-content-between">
                        <h6 class="talent-text p-3">Talent</h6>
                    </div>
                    <div class="art-by-content d-flex justify-content-between">
                        <h6 class="art-by text p-3">Art by:</h6> 
                        <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="written-by-content d-flex justify-content-between">
                        <h6 class="written-by text p-3">written-by:</h6>
                        <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="specs px-1">
                    <div class="specs-content d-flex justify-content-between">
                        <h6 class="talent-text p-3">Specs</h6>
                    </div>
                    <div class="series-content d-flex justify-content-between">
                        <h6 class="series text p-3">Series:</h6> 
                        <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="us-content d-flex justify-content-between">
                        <h6 class="us text p-3">U.S. Price:</h6>
                        <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class="on-sale-content d-flex justify-content-between">
                        <h6 class="on-sale text p-3">On Sale Date:</h6>
                        <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    
@endsection