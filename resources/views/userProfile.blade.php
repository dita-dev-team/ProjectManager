@extends('layouts.app')
@section('content')
    <div class="heading">
        <h1>{{ $pageTitle or "User Profile" }}</h1>
    </div>

    <div class="card card-block content">
        <div class="profile">
            <div class="col">
                <img src="{{ asset('img/user.png') }}" alt="">
            </div>
            <div class="col">
                <ul>
                    <div class="display-details">
                        <label>Name: </label>
                        <li>John Doe</li>
                        <button><i class="fa fa-edit-0 fa-2x"></i></button>
                    </div>

                    <div class="display-details">
                        <label>username: </label>
                        <li>JD</li>
                        <button><i class="fa fa-edit-0 fa-2x"></i></button>
                    </div>

                    <div class="display-details">
                        <label>email: </label>
                        <li>JohnDoe@mail.com</li>
                        <button><i class="fa fa-edit-0 fa-2x"></i></button>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection
