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
                        <img src="{{ Storage::url($feature->image) }}" alt="Image of {{ $feature->title }}" </div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
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


<section class="article">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Articles</h2>
            </div>
            <div class="articles-slider multiple-items col-md border">
                @foreach ($articles as $article)
                    <div class="d-flex">
                        <div class="card h-100">
                            <a href="{{ route('articles.showArticle', ['article' => $article->slug]) }}"
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
                            <a href="{{ route('articles.show', ['article' => $article->slug]) }}" class="card-link">
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

<!-- FAQ -->
<section class="faq mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Pertanyaan umum Yang sering Di tanyakan</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="accordion" id="faqAccordion">
                    @foreach ($questions as $question)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $question->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $question->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $question->id }}">
                                    {{ $question->pertanyaan }}
                                </button>
                            </h2>
                            <div id="collapse{{ $question->id }}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $question->id }}" data-bs-parent="#faqAccordion">
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
<!-- END FAQ -->

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
                            <div class="col d-flex align-items-center justify-content-center">
                                <div class="card text-center d-flex flex-column align-items-center">
                                    <img src="{{ $service->deskripsi }}" alt="Image of {{ $service->nama }}"
                                        class="mx-auto">
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
