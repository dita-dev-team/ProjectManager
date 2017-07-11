@extends('layouts.app')
@section('content')

{{--<div class="heading">--}}
    {{--<h1>{{ $pageTitle or "Project Manager" }}</h1>--}}
{{--</div>--}}

<div class="container">
    {{--<br>--}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="/img/pm1.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Project Manager</h3>
                    <p>Project ManagerProject ManagerProject ManagerProject Manager.</p>
                </div>
            </div>

            <div class="item">
                <img src="/img/pm3.jpeg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Project Manager</h3>
                    <p>Project ManagerProject ManagerProject ManagerProject ManagerProject ManagerProject Manager</p>
                </div>
            </div>



        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row"></div>
    {{--New Row with 3 Columns--}}

    <div class="row">
        <div class="col-md-4">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn btn-primary btn-large" href="#">Learn more</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn btn-primary btn-large" href="#">Learn more</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn btn-primary btn-large" href="#">Learn more</a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">
                    PROJECT TEAM
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle" />
                <dl>
                    <dt>
                        Description lists
                    </dt>
                    <dd>
                        A description list is perfect for defining terms.
                    </dd>
                    <dt>
                        Euismod
                    </dt>
                    <dd>
                        Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                    </dd>
                    <dd>
                        Donec id elit non mi porta gravida at eget metus.
                    </dd>
                   
                </dl>
            </div>
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle" />
                <dl>
                    <dt>
                        Description lists
                    </dt>
                    <dd>
                        A description list is perfect for defining terms.
                    </dd>
                    <dt>
                        Euismod
                    </dt>
                    <dd>
                        Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                    </dd>

                </dl>
            </div>
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle" />
                <dl>
                    <dt>
                        Description lists
                    </dt>
                    <dd>
                        A description list is perfect for defining terms.
                    </dd>
                    <dt>
                        Euismod
                    </dt>
                    <dd>
                        Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                    </dd>

                </dl>
            </div>
        </div>
    </div>
</div>
@endsection