@extends('layouts.app')
@section('content')

    <div class="heading">
        <h1>{{$pageTitle or "Project Manager"}}</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 well">
                <h1>About Project Manager</h1>
                <ul class="list-unstyled">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, asperiores assumenda consectetur dolorem earum facilis fuga impedit incidunt maiores necessitatibus odio porro reiciendis tenetur veritatis. Aliquid consequuntur iure repudiandae!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consectetur dolorum enim eos et exercitationem fugiat incidunt ipsa magni nisi nostrum officiis optio placeat, quae quas, repellat tempora temporibus ullam?</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias blanditiis delectus deleniti dolore eius excepturi fuga iste, mollitia, provident quas quis sunt, voluptate. Aliquid necessitatibus obcaecati quos ut? Odit.</li>
                </ul>
            </div>

            <div class="well col-md-6">
                <img src="img/placeholder.png" alt="" class="responsive">
            </div>
        </div>
    </div>
@endsection