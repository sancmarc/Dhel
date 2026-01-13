<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.header')

    <title>Hi-QM Furniture</title>
    <meta name="description" content="Furnitures that will surely exceed your Expectation! We provide classic, unique and artistic furniture design">
    
    <meta name="keywords" content="Customized Furniture, Steel Furnitures, Wrought Iron works, Philippines Customized, Self Design, Iron furnitures">
    <meta name="author" content="Marco Polo Gonzales Sanchez:CodeWeb">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <!-- <style>
        .card img:hover {
            opacity: 0.3;
        }
    </style> -->
</head>

<body>
    @include('partials.nav')
    <!-- loader -->

    <div id="loader-section">
        <div id="loader">
            <div id="loader">
            </div>
        </div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!-- end loader -->
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

    <div class="container-fluid px-0 " id="purpose">
        <section class="container text-center container-box scroll-reveal bot " id="purposeAnimate">
            <div class="row">
                <h2 class="mt-5">OUR PURPOSE</h2>
                <p class="mb-5">Our purpose is to help you create inviting and inspiring indoor and outdoor living spaces with the finest wrought iron.</p>
            </div>
        </section>
    </div>
    <section class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4 container-box scroll-reveal bot" id="chairAnimation">
                <div class="card shadow p-3 mb-5">
                    <img src="/images/chair/{{$chair->chair_image}}" class="card-img-top img-fluid mx-auto" alt="{{$chair->alt_description}}">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>

                </div>

            </div>
            <div class="col-md-4 container-box scroll-reveal bot" id="tableAnimation">
                <div class="card shadow p-3 mb-5">
                    <img src="/images/table/{{$table->table_image}}" class="card-img-top img-fluid mx-auto" alt="{{$table->alt_description}}">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 container-box scroll-reveal bot" id="bedAnimation">
                <div class="card shadow p-3 mb-5">
                    <img src="/images/beds/{{$Beds->bed_image}}" class="card-img-top img-fluid mx-auto" alt="{{$Beds->alt_description}}">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="container my-3">
        <div class="row text-center" >
            <div class="col-md-4 container-box scroll-reveal bot" id="ligthAnimation">
                <div class="card shadow p-3 mb-5">
                    <img src="/images/chandelier/{{$Chandelier->chandelier_image}}" class="card-img-top img-fluid mx-auto" alt="{{$Chandelier->alt_description}}">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 container-box scroll-reveal bot" id="doorAnimation">
                <div class="card shadow p-3 mb-5">
                    <img src="/images/doors/{{$Doors->door_image}}" class="card-img-top img-fluid mx-auto" alt="{{$Doors->alt_description}}">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 container-box scroll-reveal bot" id="gateAnimation">
                <div class="card shadow p-3 mb-5">
                    <img src="/images/gates/{{$Gates->gate_image}}" class="card-img-top img-fluid mx-auto" alt="{{$Gates->alt_description}}">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="container-fluid" id="contactUs">
        <div class="container">
            <div class="row">
                <h2 class="text-mute text-center mt-5">CONTACT US</h2>
                <div class="col-md-4 text-center">
                    <h3 class="text-center"><i class="bi bi-telephone-fill"></i> CALL US!</h3>
                    <p class="text-mute">Globe&sol;TM : 0997-7942-104 <br> Smart or Talk &lsquo;N Text : 0929-6412-578</p>
                    <h3 class="text-center mt-3"><i class="bi bi-envelope-fill"></i> EMAIL US!</h3>
                    <p class="text-mute">sales@hiqm-furniture.com</p>
                    <h3 class="text-center mt-3"><i class="bi bi-geo-alt-fill"></i>LOCATION!</h3>
                    <p class="text-mute">Mablacat City Pampanga Philippines</p>
                    <h3 class="text-center mt-3"><i class="bi bi-hourglass-split"></i>HOURS</h3>
                    <p class="text-mute">Monday - Saturday</p>
                    <p class="text-mute">9:00 am - 6:00 pm</p>
                </div>
                <div class="col-md-8 my-5">
                    <form action="{{ route('inquiry') }}" method="post" id="inquiryForm">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            <span class="error-text text-danger email_error">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                            <span class="error-text text-danger name_error">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact #</label>
                            <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact Number">
                            <span class="error-text text-danger contact_error">
                        </div>
                        <div class="mb-3">
                            <label for="inquiry" class="form-label">Inquiry</label>
                            <textarea class="form-control" name="inquiry" id="inquiry" rows="3"></textarea>
                            <span class="error-text text-danger inquiry_error">
                        </div>
                        <div class="row d-flex justify-content-center align-content-center my-3">
                                <button type="submit" class="btn btn-primary col-2">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
        $('#inquiryForm').on('submit', function(e) {
            e.preventDefault();
           
            var form = this;
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $(form).find('span.error-text').text('');
                },
                success: function(data) {
                    
                    if (data.code == 0) {
                        $.each(data.error, function(prefix, val) {
                            $(form).find('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $(form)[0].reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Successfully',
                            text: data.msg
                            
                        });
                    }
                }
            });
        });
        });
    </script>

</body>

</html>