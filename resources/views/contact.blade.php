@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-6 col-md-4">
                    <h1 class="h1magneto"><strong>Contact US</strong></h1>
                    <h2 class="h2contact"><strong>How can we help you?</strong></h2>

                    <form action="contact" method="POST" >
                        @csrf
                        Name:
                        <input type="text" name="nameContact" placeholder="name" required>
                        <br>
                        <br>
                       Email:
                        <input type="email" name="emailContact" placeholder="email" required>
                        <br>
                        <br>
                        Phone:
                        <input type="text" name="phoneContact" placeholder="phone" required>
                        <br>
                        <br>
                        Web Site:
                        <input type="text" name="webContact" placeholder="Web site" required>
                        <br>
                        <br>
                        Your Message :

                        <textarea type="text" name="textContact" placeholder="text" required> </textarea>
                        <button name="Submit" class="buttonLM" href="route('contact')"  >Submit</button>
                    </form>

                </div>

                <div class="col-md-8"><img src="{{ asset('img/illustration.jpg') }}" alt="description of myimage"></div>

            </div>
        </div>
    </div>
@endsection
