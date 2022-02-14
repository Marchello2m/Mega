@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-6 col-md-4">
                   <h1 class="digital"><strong>DIGITAL</strong></h1>
                    <h2 class="marketing"><strong>MARKETING</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolorem dolores dolorum eius exercitationem id, ipsa iste labore nobis odit quibusdam ullam unde!</p>

                    <button class="button buttonLM"> <a style="color: white" href="https://magecode.io/">LEARN MORE</a></button>
                </div>

                <div class="col-md-8"><img src="{{ asset('img/illustration.jpg') }}" alt="#"></div>

            </div>
        </div>
    </div>
@endsection



