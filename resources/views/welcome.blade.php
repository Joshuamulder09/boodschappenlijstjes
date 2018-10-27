{{--@include('includes.front_header')--}}
{{--@include('includes.front_nav')--}}

@include('layouts.app')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">


        @foreach($titles as $title)
            <h1 class="display-4">{{$title->title}}</h1>
            <p>{{$title->description}}</p>
                <p><a class="btn btn-primary btn-lg" @if(Auth::guest()) href="{{ $title->url}}" @elseif(Auth::user()->isAdmin())  href="/"  @elseif(Auth::user()->isgebruiker())  href="/user/boodschappenlijst" @endif role="button">{{$title->button}}</a></p>






    </div>
    @endforeach
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @foreach($cms as $kopjes)
            <div class="col-md-4">
                <h2>{{$kopjes->title}}</h2>
                <p>{{$kopjes->description}}</p>
                <p><a class="btn btn-secondary"@if(Auth::guest()) href="/register" @elseif(Auth::user()->isAdmin())  href="/"  @elseif(Auth::user()->isgebruiker())  href="{{ $kopjes->url}}" @endif role="button">{{$kopjes->button}}</a></p>
            </div>
        @endforeach
    </div>

    <hr>

    <footer>
        <p>&copy; Boodschappenlijstjes 2018</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="{{asset('js/boostrap.min.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>
