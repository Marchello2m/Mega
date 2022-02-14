@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-md-6">
                    <h1>FAQ?</h1>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">QUESTION</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td class="p-3 ">{{$item->nameContact}}</td>
                                <td class="p-3 ">{{$item->textContact}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="col-md-4"><img src="{{ asset('img/illustration.jpg') }}" alt="description of myimage"></div>

            </div>
        </div>
    </div>
@endsection
