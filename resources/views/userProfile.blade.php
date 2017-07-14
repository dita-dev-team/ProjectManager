@extends('layouts.app')
@section('content')
    <div class="heading">
        <h1>{{ $pageTitle or "User Profile" }}</h1>
    </div>

    <div class="container profile">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-block">
                    <img src="{{ asset('img/user.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="row profile-view">
                    <div class="card card-block display-details">
                        <div class="row">
                            <div class="col-md-6">Name</div>
                            <div class="col-md-6">John Doe</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Username</div>
                            <div class="col-md-6">JD</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Email</div>
                            <div class="col-md-6">JohnDoe@mail.com</div>
                        </div>
                        <div class="row">
                            <a id="edit-profile" class="btn btn-defaul pull-right"><i class="fa fa-edit fa-2x left"></i>Edit</a>
                        </div>
                    </div>
                </div>
                <div class="row profile-edit">
                    <div class="col-md-12">
                        <div class="card card-block">
                            <form class="form">
                                {{ csrf_field() }}
                                <div class="md-form form-group">
                                    <input class="form-control" id="name" type="text">
                                    <label for="name">New Name: Hit Enter To Save</label>
                                </div>
                                <div class="md-form form-group">
                                    <input class="form-control" id="email" type="email">
                                    <label for="email">New email: Hit Enter To Save</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
