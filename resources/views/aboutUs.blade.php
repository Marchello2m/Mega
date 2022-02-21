@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="main col-6 col-md-4">
                  <h1 class="h1about">About us</h1>
                    <p class="pmagneto">
                        Our team is working with Magento platform since the very beginning of Magento 1 version. We keep ourselves up to date about everything what's going on in the industry and we're absolutely committed to being the top experts in the field.

                        Whether you need someone to rescue your current project or you're looking for a partner to develop a fast and responsive webstore, we got your back! Our top priority is to achieve the highest levels of customer satisfaction.

                        </p>
                    <a href="https://magecode.io/careers/web-developer">We are hiring!</a>
                </div>

                <div class=" right col-md-8"><img src="{{ asset('img/illustration.jpg') }}" alt="description of myimage" style="width: 100%"></div>

            </div>
        </div>
    </div>
@endsection
