{{--@include('includes.front_header')--}}
{{--@include('includes.front_nav')--}}

@include('layouts.app')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Boodschappenlijstjes!</h1>
        <p>Met deze webapplicatie is het mogelijk om uw boodschappenlijstjes gemakkelijk bij te houden en op te slaan. Zo vergeet je nooit meer wat!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Maak boodschappenlijstjes! &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Creeren</h2>
            <p>Je kunt zelf uw eigen boodschappenlijstjes creeren. Je hebt de optie om meerdere lijsten te maken!</p>
            <p><a class="btn btn-secondary" href="#" role="button">Creeer nu! &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Aanpassen</h2>
            <p>De lijsten kun je eenvoudig en snel aanpassen. Je hebt de optie om 1 of meer boodscahppen lijsten aan te passen!</p>
            <p><a class="btn btn-secondary" href="#" role="button">Pas lijst aan! &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Verwijderen</h2>
            <p>Je kunt makkelijk boodschappenlijstjes verwijderen. Je hebt de optie om meerdere lijsten aan te passen!</p>
            <p><a class="btn btn-secondary" href="#" role="button">Verwijder nu!&raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Boodschappenlijstjes 2018</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{asset('js/boostrap.min.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>
