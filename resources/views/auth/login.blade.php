@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="card">
                    <div class="card-block">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            <!--Header-->
                            <div class="form-header teal">
                                <h3>Login</h3>
                            </div>
                            {{ csrf_field() }}
                            <div class="md-form form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="username" name="username" class="form-control"
                                       value="{{ old('username') }}" required autofocus>
                                <label for="username">Username</label>
                            </div>
                            <div class="md-form form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="password" name="password" class="form-control" required>
                                <label for="password" data-error="wrong" data-success="right">Password</label>
                            </div>

                            <div class="md-form form-group">
                                <button type="submit" class="btn btn-default btn-lg pull-right">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
