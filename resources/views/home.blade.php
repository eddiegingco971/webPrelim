@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="card card1"></div>
                <p><b>Razer Huntsman v2 Analog</b><br>Razer Huntsman v2 Analog is good enough to get a five-star rating from us.<br>
                <a href="/pricings">Price: 1000.00</a><br>
                Ratings: *****
            </p>
                <div class="card card2"></div>
                <p><b>Roccat Vulkan TKL Pro</b><br>Roccat’s Titan optical switches are not only fast and accurate, but satisfying, quiet and robust as well.<br>
                <a href="/pricings">Price: 1100.00</a><br>
                Ratings: *****
            </p>
                <div class="card card3"></div>
                <p><b>Mountain Everest Max</b><br>Everest Max is the result of a successfully backed Kickstarter campaign design in the community.<br>
                <a href="/pricings">Price: 1200.00</a><br>
                Ratings: *****
            </p>

        </div>

        <style>
            
            .card1{
                background-image: url('/pic1.jpg');
                height: 150px;
                width: 300px;
                margin-top: 10px;
                margin-right: 10px;
                background-position: center;
                background-size: cover;
                display: inline-block;
                border-radius: 10px;
                box-sizing: border-box;
                cursor: pointer;
            }
            .card2{
                background-image: url('/pic2.jpg');
                height: 150px;
                width: 300px;
                margin-top: 10px;
                margin-right: 10px;
                background-position: center;
                background-size: cover;
                display: inline-block;
                border-radius: 10px;
                box-sizing: border-box;
                cursor: pointer;
            }
            .card3{
                background-image: url('/pic3.jpg');
                height: 150px;
                width: 300px;
                margin-top: 10px;
                margin-right: 10px;
                background-position: center;
                background-size: cover;
                display: inline-block;
                border-radius: 10px;
                box-sizing: border-box;
                cursor: pointer;
            }
            p{
                margin-top: 20px;
            }
            b{
                font-size: 25px;
                font-weight: bolder;
            }
        </style>

    </div>
</div>


@endsection
