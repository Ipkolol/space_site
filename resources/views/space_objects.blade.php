@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <title>Vesmírne objekty</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        .col-sm-4 {
            border: 2px solid #dadada;
            box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.5);
            padding: 100px 10px 5px;
        }

        #mesiac {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://wallpaperstock.net/grayscale-moon_wallpapers_10997_1920x1080.jpg) top/100% auto no-repeat;
            background-repeat:no-repeat;
        } /* source: https://stackoverflow.com/questions/54403770/how-to-create-a-card-with-image-as-background-in-css-diagonally-sliced */

        #hviezda {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://www.extremetech.com/wp-content/uploads/2020/01/NASA-Sun.jpg) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }

        #cd {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fstartswithabang%2Ffiles%2F2017%2F04%2Fmaxresdefault-1200x675.jpg) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }

        #galaxia {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://www.esa.int/var/esa/storage/images/esa_multimedia/videos/2013/11/guide_to_our_galaxy/13409760-3-eng-GB/Guide_to_our_Galaxy_pillars.png) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }

        #kometa {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://specials-images.forbesimg.com/imageserve/5ebe4d4659928a0006430e77/960x0.jpg?fit=scale) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }

        #kvazar {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://innovationorigins.com/app/uploads/2019/01/heic1902a-1004x565.jpg) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }

        #planeta {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://cdn.theatlantic.com/thumbor/15quMKEnEf-XT4AkB87Bu2LW3b0=/347x135:5734x3165/720x405/media/img/mt/2016/01/Saturn3/original.jpg) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }

        #asteroid {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://ipravda.sk/res/2020/04/29/thumbs/asteroid20161103-16-3-clanokW.jpg) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }

        #hmlovina {
            background:
                linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
                linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
                url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/M8HunterWilson.jpg/500px-M8HunterWilson.jpg) top/100% auto no-repeat;
            background-repeat:no-repeat;
        }
    </style>
</head>

<!-- obsah stranky -->

<div class="jumbotron">
    <div class="container">
        <h1>Vesmírne objekty</h1>
        <h4>Čo všetko považujeme za vesmírne objekty ?</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
        <h4>Čo všetko nepovažujeme za vesmírne objekty ?</h4>
        <p>Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. </p>
    </div>
</div>


<div class="container">
    <div class="row">
        <!-- Hviezda -->
        <div class="col-sm-4" id="hviezda">
            <h1>Hviezda</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <!-- Planeta -->
        <div class="col-sm-4" id="planeta">
            <h1>Planéta</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4" id="cd">
            <h1>Čierna diera</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
    </div> <!-- koniec prveho riadku -->
    <hr>
    <div class="row">
        <div class="col-sm-4" id="asteroid">
            <h1>Asteroid</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4" id="kometa">
            <h1>Kométa</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4" id="hmlovina">
            <h1>Hmlovina</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
    </div> <!-- koniec druheho riadku -->
    <hr>
    <div class="row">
        <div class="col-sm-4" id="kvazar" >
            <h1>Kvazar</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4" id="mesiac">
            <h1>Mesiac</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
        <div class="col-sm-4" id="galaxia">
            <h1>Galaxia</h1>
            <p> Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <a href="#" class="btn btn-outline-secondary">Dozvedieť sa viac</a>
        </div>
    </div> <!-- koniec tretieho riadku -->
</div>

@endsection
