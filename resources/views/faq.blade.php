@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-md-8">
                    <h1>FAQ?</h1>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">WEBSITE</th>
                            <th scope="col">QUESTION</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td class="p-3 ">{{$item->nameContact}}</td>
                                <td class="p-3 ">{{$item->emailContact}}</td>
                                <td class="p-3 ">{{$item->phoneContact}}</td>
                                <td class="p-3 ">{{$item->webContact}}</td>
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
