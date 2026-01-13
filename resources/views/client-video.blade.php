<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.header')

    <title>Our Client : Hi-QM Furniture</title>
    <meta name="description" content="Finish product of Hi QM Furniture's">
    <meta name="keywords" content="Customized Furniture, Steel Furnitures, Wrought Iron works, Philippines Customized, Self Design, Iron furnitures">
    <meta name="author" content="Marco Polo Gonzales Sanchez:CodeWeb">
</head>

<body class="d-flex flex-column min-vh-100">
    @include('partials.nav')

    <section class="container mt-5">
        <h1 class="text-center mt-5">Our Client &amp; Finish Goods Video</h1>
        <div class="row">
            <div class="col-md-12"> </div>
        </div>
    </section>
    <section class="container mt-5" id="chair-row">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#uploadNewVideo">
                    <i class="bi bi-plus"></i> Upload Video
                </button>
            </div>

            <!-- Modal add Co-Admin-->
            <div class="modal fade" id="uploadNewVideo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="uploadNewVideoLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadNewVideoLabel">Upload Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('client.video.upload')}}" method="post" enctype="multipart/form-data" id="videoUploadForm">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">{{ __('Title') }}</label>
                                        <input id="title" type="text" class="form-control" name="title" autocomplete="title">
                                        <span class="error-text text-danger title_error">
                                    </div>


                                </div>
                                <div class="row my-3">
                                    <div class="col-md-12 ">
                                        <label for="video" class="form-label">{{ __('Video') }}</label>
                                        <input type="file" name="video" id="video" class="form-control">

                                        <span class="error-text text-danger video_error">

                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-12 ">
                                        <label for="alt_decription" class="form-label">{{ __('Alt Description') }}</label>
                                        <input type="text" name="alt_decription" id="alt_decription" class="form-control">

                                        <span class="error-text text-danger alt_decription_error">

                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            @endif
        </div>
        @endif

        <div class="row mt-5" id="dataLoad">


        </div>
        <div class="auto-load text-center">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                </path>
            </svg>
        </div>


    </section>
    @include('partials.footer')
    @if (Route::has('login'))
    @auth
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#videoUploadForm').on('submit', function(e) {
            e.preventDefault();
            var img_holder = $('.img-holder');
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
                    } else if (data.code == 2) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oopss..',
                            text: data.msg,
                            timer: 3500
                        });
                    } else {
                        $(form)[0].reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Successfully',
                            text: data.msg,
                            timer: 3500
                        });
                        $(img_holder).empty();

                        $('#addChair').modal('hide');
                    }
                }
            });
        });
    </script>

    @endif
    @endif
    <script>
        var ENDPOINT = "{{ url('/') }}";
        var page = 1;
        infinteLoadMore(page);
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                infinteLoadMore(page);
            }

        });
        if ($('html,body').bind('touchmove', function(e) {
                page++;
                infinteLoadMore(page);
            }));

        function infinteLoadMore(page) {
            $.ajax({
                    url: ENDPOINT + "/client-video?page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    if (response.length == 0) {
                        $('.auto-load').html("We don't have more data to display ");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#dataLoad").append(response);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>

</body>

</html>