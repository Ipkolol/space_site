@extends('layouts.app')

@section('content')
<!-- Slideshow -->
<div class="container">
    <div id="sliderHomePage" class="carousel slide" data-ride="carousel">
        <!-- indikatory -->
        <ol class="carousel-indicators">
            <li data-target="#sliderHomePage" data-slide-to="0" class="active"></li>
            <li data-target="#sliderHomePage" data-slide-to="1"></li>
            <li data-target="#sliderHomePage" data-slide-to="2"></li>
        </ol>

        <!-- samotne slidy(obrazky) -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('/storage/home_page_imgs/andromeda_slide2.jpg') }}" alt="andromeda" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Andromeda Galaxy</h5>
                    <p>Špirálová galaxia vzdialená asi 2,5 miliónov svetelných rokov.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/storage/home_page_imgs/europa_slide.jpg') }}" alt="europa" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Moon Europa</h5>
                    <p>Jeden zo štyroch veľkých mesiacov Jupitera</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/storage/home_page_imgs/pillars_slide.jpg') }}" alt="pillars of creation" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pillars of Creation</h5>
                    <p>Ide o hmlovinu o dĺžke niekoľkých svetlných rokov, ktorá sa nachádza v Orlej hmlovine, vzdialenej od nás asi 6500 svetelných rokov.</p>
                </div>
            </div>
        </div>

        <!-- sipky, dolava, doprava -->
        <a class="carousel-control-prev" href="#sliderHomePage" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sliderHomePage" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- random nadpisy a clanky, ktore by si mohol ocakavat na domovskej stranke...or something like that idk -->
<div class="container" id="welcome">
    <h1 id="title1">Welcome</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>
    <p>Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>
    <p>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. </p>
    <p>Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. </p>
    <p>Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. </p>
    <p>Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales. Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus. Vivamus consectetuer risus et tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. </p>
    <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. </p>
    <hr>
</div>

<div class="container">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-sm-md-lg-4">
            <div class="card welcome-card">
                <img class="card-img-top" src="{{ asset('/storage/home_page_imgs/einstein_img.jpg') }}" alt="einstein">
                <div class="card-body d-flex flex-column welcome-card-body">
                    <h5 class="card-title">Article n.1</h5>
                    <p class="card-text">Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit...</p>
                    <a href="#" class="btn btn-outline-info mt-auto">Prečítať</a>
                </div>
            </div>
        </div>
        <div class="col-sm-md-lg-4">
            <div class="card welcome-card">
                <img class="card-img-top" src="{{ asset('/storage/home_page_imgs/exo_planet_img2.jpg') }}" alt="exo planet">
                <div class="card-body d-flex flex-column welcome-card-body">
                    <h5 class="card-title">Article n.2</h5>
                    <p class="card-text">Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem...</p>
                    <a href="#" class="btn btn-outline-info mt-auto">Prečítať</a>
                </div>
            </div>
        </div>
        <div class="col-sm-md-4">
            <div class="card welcome-card">
                <img class="card-img-top" src="{{ asset('/storage/home_page_imgs/atom_img.jpg') }}" alt="atom">
                <div class="card-body d-flex flex-column welcome-card-body">
                    <h5 class="card-title">Article n.3</h5>
                    <p class="card-text">Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor...</p>
                    <a href="#" class="btn btn-outline-info mt-auto">Prečítať</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


