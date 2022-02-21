@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="overflow:auto">


        <div class="container" style="overflow:auto">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="main col-md-4">

                   <h1 class="digital"><strong>DIGITAL</strong></h1>
                    <h2 class="marketing" >M A R K E  T I N G</h2>
                    <p style="padding-bottom: 10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolorem dolores dolorum eius exercitationem id, ipsa iste labore nobis odit quibusdam ullam unde!</p>

                     <a class=" buttonLM"  href="https://magecode.io/">LEARN MORE</a>
                    </div>


                <div class="right col-md-8"><img src="{{ asset('img/illustration.jpg') }}" alt="#" style="width: 100%"></div>

            </div>
        </div>
    </div>


@endsection



