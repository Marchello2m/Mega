@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-6 col-md-4">
                    <form action="signUp" method="POST">
                        @csrf
                    Name :
                    <input type="text" name="name" placeholder="Name" required>
                    <br>
                    Email :
                    <input type="email" name="email" placeholder="Email" required>
                    <br>
                    <button name="Submit" class="buttonLM" href="route('signUp')"  >Submit</button>

                    </form>
                </div>

                <div class="col-md-8"><img src="{{ asset('img/illustration.jpg') }}" alt="description of myimage"></div>

            </div>
        </div>
    </div>
@endsection
