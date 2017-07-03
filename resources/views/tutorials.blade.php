@extends('layouts.app')
@section('content')

    <div class="heading">
        <h1>{{$pageTitle or "Project Manager"}}</h1>
    </div>

    <div class="card card-block content" style="height:60vh;background-color: antiquewhite">
        <div class="text-info"><h1> Table Of Contents</h1></div>
        <ul class="nv-bullet"><li><a href="">What Do I Need?</a></li>
        <li><a href="{{url('/about')}}">Is this Your First Laravel Application?</a></li>
        <li><a href="{{url('/')}}">Dealing With Forms</a></li>
        <li><a href="{{url('')}}">Dealing With Database Migrations</a></li>
        <li><a href="{{url('')}}">Defining Parameters to Projects</a></li>
        <li><a href="{{url('')}}">See Initialization Demo</a></li>
        </ul>
        <p class="body">
            Here we would like to show the very basics of Project Manager in a short, simple
            tutorial. This text only deals with dynamic web page creation with
            PHP, though PHP is not only capable of creating web pages. See
            the section titled <a href="" class="link">What can PHP
                do</a> for more information. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
        </p>


    </div>
@endsection