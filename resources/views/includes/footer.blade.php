<footer class="page-footer teal center-on-small-only">
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">About Project Manager</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">Links</h5>
                <ul>
                    @if($navbar)
                        @foreach($navbar as $item)
                            <li>
                                <a href="{{ $item['link'] }}"> {{ $item['text'] }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <!--/.Second column-->
        </div>
        <div class="footer-copyright">
            <div class="container-fluid">
                Copyright &copy {{ date('Y') }} DevTeam
            </div>
        </div>
    </div>

</footer>