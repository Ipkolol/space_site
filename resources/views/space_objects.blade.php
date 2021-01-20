@extends('layouts.app')

@section('content')
<!-- obsah stranky -->
<div class="jumbotron">
    <div class="container">
        <h1 class="space-object-title">Vesmírne objekty</h1>
        <h4>Čo všetko považujeme za vesmírne objekty ?</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
        <h4>Čo všetko nepovažujeme za vesmírne objekty ?</h4>
        <p>Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. </p>
    </div>
</div>

<div class="container">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <div class="row">
        <!-- Hviezda -->
        <div class="col-sm-4 space-object" id="hviezda">
            <h1>Hviezda</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <!-- Planeta -->
        <div class="col-sm-4 space-object" id="planeta">
            <h1>Planéta</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4 space-object" id="cd">
            <h1>Čierna diera</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
    </div> <!-- koniec prveho riadku -->
    <hr>
    <div class="row">
        <div class="col-sm-4 space-object" id="asteroid">
            <h1>Asteroid</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4 space-object" id="kometa">
            <h1>Kométa</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4 space-object" id="hmlovina">
            <h1>Hmlovina</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
    </div> <!-- koniec druheho riadku -->
    <hr>
    <div class="row">
        <div class="col-sm-4 space-object" id="kvazar" >
            <h1>Kvazar</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4 space-object" id="mesiac">
            <h1>Mesiac</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4 space-object" id="galaxia">
            <h1>Galaxia</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
    </div> <!-- koniec tretieho riadku -->
</div>

@endsection
