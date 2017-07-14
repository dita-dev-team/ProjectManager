@extends('layouts.app')
@section('content')

{{--<div class="heading">--}}
    {{--<h1>{{ $pageTitle or "Project Manager" }}</h1>--}}
{{--</div>--}}

<div class="container">
    {{--<br>--}}
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <img src="{{ asset('img/pm6.jpg') }}" alt="Chania">
                <div class="carousel-caption d-none d-md-block">
                    <div class="animated fadeInDown">
                        <h3>Project Manager</h3>
                        <p>Project ManagerProject ManagerProject ManagerProject ManagerProject ManagerProject
                            Manager</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/pm5.jpg') }}" alt="Flower">
                <div class="carousel-caption d-none d-md-block">
                    <div class="animated fadeInDown">
                        <h3>Project Manager</h3>
                        <p>Project ManagerProject ManagerProject ManagerProject ManagerProject ManagerProject
                            Manager</p>
                    </div>

                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{--New Row with 3 Columns--}}

    <div class="row home-description">
        <div class="col-md-4" align="center">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn btn-large" href="#">View more</a>
            </p>
        </div>
        <div class="col-md-4" align="center">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn btn-large" href="#">View more</a>
            </p>
        </div>
        <div class="col-md-4" align="center">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn btn-large" href="#">View more</a>
            </p>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <blockquote class="pull-right">
            <p>
                <span>“It does not take much strength to do things, but it requires a great deal of strength to decide what to do.”</span>
            </p>
            <p>
                <span>―</span> <strong>Elbert Hubbard</strong>
            </p>
        </blockquote>
    </div>
    </div>
</div>
    @endsection