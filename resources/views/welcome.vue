<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bright Bee Excellent - English Course</title>
    <!-- logo favicons -->
    <link rel="shortcut icon" href="img/logo-removebg-preview.png" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />

    <!-- MyStyle -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .card {
            margin: 20px;
            border-radius: 10px;
        }

        .slick-slide img {
            width: 100%;
            height: 200px;
            /* Adjust height as needed */
            object-fit: cover;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-transparant navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @foreach ($profiles as $profile)
                <a class="navbar-brand" href="#">
                    <img src="{{ Storage::url($profile->logo) }}" alt="Image of {{ $profile->nama }}"
                        class="d-inline-block align-text-top me-3" width="40" height="35">
                    BEE Makes You Talk
                </a>
            @endforeach

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Program Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Biaya Kurusus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <div class="btn btn-light">Daftar</div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HERO -->
    <section class="hero">
        <div class="hero-top d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center">
                    @foreach ($profiles as $profile)
                        <div class="col text-center text-white">
                            <h1>{{ $profile->nama }}</h1>
                            @php
                                $words = explode(' ', $profile->title);
                                $firstPart = implode(' ', array_slice($words, 0, 8));
                                $secondPart = implode(' ', array_slice($words, 8));
                            @endphp
                            <h2>{{ $firstPart }}</h2>
                            <p>{{ $secondPart }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- HERO BOTTOM -->
        <div class="hero-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="cards d-flex flex-wrap justify-content-center">
                            @foreach ($services as $service)
                                <div class="col d-flex">
                                    <div class="card h-100 text-center d-flex flex-column align-items-center">
                                        <img src="{{ $service->deskripsi }}" alt="Image of {{ $service->nama }}"
                                            width="100" height="100" class="mx-auto">
                                        <h5 class="card-title mb-4 mt-4">{{ $service->nama }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HERO BOTTOM -->
    </section>
    <!-- END HERO -->

    <!-- COURSE -->
    <section class="course" id="course">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="text-start">Courses</h2>
                </div>
                <div class="d-flex border mb-4">
                    @foreach ($courses as $course)
                        <button class="course-btn btn btn-outline-primary" data-course-id="{{ $course->id }}">
                            {{ $course->name }}
                        </button>
                    @endforeach
                </div>
                <div id="programs" class="programs-slider multiple-items col-md border">
                    <!-- Programs will be dynamically loaded here based on selected course -->

                </div>
            </div>
        </div>
    </section>
    <!-- END COURSE -->

    <!-- ABOUT -->
    <section class="about">
        <div class="containers">
            <div class="row g-3">
                <div class="col-12 text-center">
                    <h2>Mengapa Bright Excelent English ?</h2>
                </div>
                @foreach ($features as $feature)
                    <div class="row g-5 d-flex justify-content-center align-items-center">
                        <div class="col-md-4">
                            <img src="{{ Storage::url($feature->image) }}" alt="Image of {{ $feature->title }}"
                                </div>
                            <div class="col text">
                                <h3 class="text-start">
                                    {{ $feature->title }}
                                </h3>
                                <p>{{ $feature->deskripsi }}</p>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- PRICE -->
    <section class="price">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 text-center mb-5">
                    <h2>Dapatkan Harga Mulai dari 150an</h2>
                </div>
                <div class="col d-flex justify-content-center">
                    @foreach ($prices as $price)
                        <div class="card h-100 cards">
                            <div class="card-body">
                                <h5 class="card-title mb-4 mt-2 text-center">{{ $price->category }}</h5>
                                <h2 class="text-center text-white">{{ $price->price }}</h2>
                                <p class="text-center mt-3 mb-3">
                                    {{ $price->deskripsi }}
                                </p>
                                <div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                        height="20" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(8.53333,8.53333)">
                                                <path
                                                    d="M26.98047,5.99023c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-15.29297,15.29297l-6.29297,-6.29297c-0.25082,-0.26124 -0.62327,-0.36647 -0.97371,-0.27511c-0.35044,0.09136 -0.62411,0.36503 -0.71547,0.71547c-0.09136,0.35044 0.01388,0.72289 0.27511,0.97371l7,7c0.39053,0.39037 1.02353,0.39037 1.41406,0l16,-16c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>3 Bulan pertemuan</span>
                                </div>
                                <div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                        height="20" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(8.53333,8.53333)">
                                                <path
                                                    d="M26.98047,5.99023c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-15.29297,15.29297l-6.29297,-6.29297c-0.25082,-0.26124 -0.62327,-0.36647 -0.97371,-0.27511c-0.35044,0.09136 -0.62411,0.36503 -0.71547,0.71547c-0.09136,0.35044 0.01388,0.72289 0.27511,0.97371l7,7c0.39053,0.39037 1.02353,0.39037 1.41406,0l16,-16c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>2x Pertemuan dalam seminggu</span>
                                </div>
                                <div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                        height="20" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(8.53333,8.53333)">
                                                <path
                                                    d="M26.98047,5.99023c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-15.29297,15.29297l-6.29297,-6.29297c-0.25082,-0.26124 -0.62327,-0.36647 -0.97371,-0.27511c-0.35044,0.09136 -0.62411,0.36503 -0.71547,0.71547c-0.09136,0.35044 0.01388,0.72289 0.27511,0.97371l7,7c0.39053,0.39037 1.02353,0.39037 1.41406,0l16,-16c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Kuis dan Latihan Soal <br />
                                        Berbasis internasional</span>
                                </div>
                                <div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                        height="20" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(8.53333,8.53333)">
                                                <path
                                                    d="M26.98047,5.99023c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-15.29297,15.29297l-6.29297,-6.29297c-0.25082,-0.26124 -0.62327,-0.36647 -0.97371,-0.27511c-0.35044,0.09136 -0.62411,0.36503 -0.71547,0.71547c-0.09136,0.35044 0.01388,0.72289 0.27511,0.97371l7,7c0.39053,0.39037 1.02353,0.39037 1.41406,0l16,-16c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Metode Pembelajaran <br />
                                        Berbasis Komunitas</span>
                                </div>
                                <div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                        height="20" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(8.53333,8.53333)">
                                                <path
                                                    d="M26.98047,5.99023c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-15.29297,15.29297l-6.29297,-6.29297c-0.25082,-0.26124 -0.62327,-0.36647 -0.97371,-0.27511c-0.35044,0.09136 -0.62411,0.36503 -0.71547,0.71547c-0.09136,0.35044 0.01388,0.72289 0.27511,0.97371l7,7c0.39053,0.39037 1.02353,0.39037 1.41406,0l16,-16c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>E - Book</span>
                                </div>
                            </div>
                            <!-- <a href="#" class="btn btn-light card-link text-center">
                    Daftar Sekarang
                    <img src="img/icon-arrow-right.png" alt="" />
                    </a> -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- END PRICE -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Articles</h2>
                </div>
                <div class="articles-slider multiple-items col-md border">
                    @foreach ($articles as $article)
                        <div class="d-flex">
                            <div class="card h-100">
                                <a href="{{ route('articles.show', ['article' => $article->slug]) }}"
                                    class="card-link">
                                    <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                        alt="image of {{ $article->title }}" style="height: 200px" />
                                    <div class="card-body">
                                        <h5 class="card-title mb-4 mt-2">{{ $article->title }}</h5>
                                        <p class="card-text">
                                            {{ \Illuminate\Support\Str::limit($article->content, 20, '...') }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ACCORDIONS -->
    <section class="accordions">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2>Pertanyaan Yang Sering Diajukan (FAQ)</h2>
                </div>
                <div class="col">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach ($questions as $question)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed p-4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        {{ $question->pertanyaan }}
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        {{ $question->jawaban }}
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ACCORDIONS -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/axios@1.7.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize slick slider for Articles
            $(".articles-slider").slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            // Function to load programs based on course ID using Axios
            function loadPrograms(courseId) {
                axios.get('/courses/' + courseId + '/programs')
                    .then(function(response) {
                        displayPrograms(response.data);
                    })
                    .catch(function(error) {
                        console.error('Error loading programs:', error);
                    });
            }

            // Function to display programs in slick slider
            function displayPrograms(programs) {
                var programsHtml = '';
                programs.forEach(function(program) {
                    programsHtml += `
                        <div class="card">
                            <a href="/programs/${program.slug}" class="card-link">
                                <img src="{{ asset('storage/') }}/${program.image}" class="card-img-top"
                                    alt="image of ${program.name}" style="height: 200px" />
                                <div class="card-body">
                                    <h5 class="card-title mb-4 mt-2">${program.name}</h5>
                                    <p class="card-text">
                                        ${program.description ? program.description.substring(0, 20) + (program.description.length > 20 ? '...' : '') : ''}
                                    </p>
                                    <p class="card-text">
                                        <strong>Price:</strong> ${program.fees.length > 0 ? program.fees[0].fee : 'Not specified'}
                                    </p>
                                </div>
                            </a>
                        </div>
                    `;
                });

                // Check if programs-slider is initialized as a slick slider
                var programsSlider = $(".programs-slider");
                if (programsSlider.hasClass('slick-initialized')) {
                    programsSlider.slick('unslick').html(programsHtml).slick({
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: true,
                        responsive: [{
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                } else {
                    programsSlider.html(programsHtml).slick({
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: true,
                        responsive: [{
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                }
            }

            // Default: Load programs for the default course
            var defaultCourseId = '{{ $defaultCourseId }}'; // Get the default course ID from PHP
            loadPrograms(defaultCourseId);

            // Handle button click for courses
            $(document).on("click", ".course-btn", function() {
                var courseId = $(this).data("course-id");
                loadPrograms(courseId);
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
