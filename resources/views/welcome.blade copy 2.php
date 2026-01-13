<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.header')

    <title>Hi-QM-Furniture</title>
    <meta name="description" content="Furnitures that will surely exceed your Expectation! We provide classic, unique and artistic furniture design">
    <meta name="keywords" content="Customized Furniture, Steel Furnitures, Wrought Iron works, Philippines Customized, Self Design, Iron furnitures">
    <meta name="author" content="Marco Polo Gonzales Sanchez:CodeWeb">
</head>

<body class="d-flex flex-column min-vh-100">
    @include('partials.nav')
    <section class="container-fluid px-0" id="carouselFurniture">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel-cover-1.jpg') }}" class="d-block w-100" alt="Carousel cover 1">
                    <div class="carousel-caption d-md-block">
                        <img src="" alt="">
                        <h1>Hi Q M Furniture</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-cover-2.jpg') }}" class="d-block w-100" alt="Carousel cover 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-cover-3.jpg') }}" class="d-block w-100" alt="Carousel cover 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-cover-4.jpeg') }}" class="d-block w-100" alt="Carousel cover 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="container">
        
        <section class="my-3">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5">
                        <div class="card-body">
                            <h2 class="card-title">Our Purpose</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5">
                      
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5">
                    
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="my-3">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6 text-center">
                    <h2>OUR PURPOSE</h2>
                    <p>To Provide High Quality Wrought Iron Works
                    </p>
                </div>
            </div>
        </section>
        <section class="my-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            
        </section>

    </div>
    @include('partials.footer')
    
</body>

</html>