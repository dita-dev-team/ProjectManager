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
            <div class="main-col">
                <div class="col">
                    <ul>
                        <div class="display-details">
                            <label>Name: </label>
                            <li>John Doe</li>
                        </div>

                        <div class="display-details">
                            <label>username: </label>
                            <li>JD</li>
                        </div>

                        <div class="display-details">
                            <label>email: </label>
                            <li>JohnDoe@mail.com</li>
                        </div>
                    </ul>
                    <i class="fa fa-edit fa-2x" id="editProfile"></i>
                </div>
                <div class="col2">
                    <form class="form-group">
                        {{ csrf_field() }}
                        <input class="form-control" id="name" type="text" placeholder="New Name: Hit Enter To Save">
                        <input class="form-control" id="username" type="text"
                               placeholder="New Username: Hit Enter To Save">
                        <input class="form-control" id="email" type="email" placeholder="New email: Hit Enter To Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
