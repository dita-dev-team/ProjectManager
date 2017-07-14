@extends('layouts.app')
@section('content')

    <div class="heading">
        <h1>{{$pageTitle or "Project Manager"}}</h1>
    </div>

    <div class="container">
        <div class="card card-block">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, asperiores
                            assumenda consectetur dolorem earum facilis fuga impedit incidunt maiores necessitatibus
                            odio porro reiciendis tenetur veritatis. Aliquid consequuntur iure repudiandae!
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consectetur dolorum enim eos
                            et exercitationem fugiat incidunt ipsa magni nisi nostrum officiis optio placeat, quae quas,
                            repellat tempora temporibus ullam?
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias blanditiis delectus
                            deleniti dolore eius excepturi fuga iste, mollitia, provident quas quis sunt, voluptate.
                            Aliquid necessitatibus obcaecati quos ut? Odit.
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('img/placeholder.png') }}" alt="" class="responsive">
                </div>
            </div>
        </div>
        <div class="row about-team">
            <div class="col-md-12">
                <h3 class="text-center">
                    PROJECT TEAM
                </h3>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle"/>
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
            <div class="col-md-4" align="center">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle"/>
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
            <div class="col-md-4" align="center">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle"/>
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

@endsection