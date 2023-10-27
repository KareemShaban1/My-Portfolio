@extends('frontend.Template2.layouts.front')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="{{ route('template2.home') }}">Home</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section>

        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="portfolio-details-container">


                    <div class="owl-carousel portfolio-details-carousel">
                        <?php $images = explode('|', $project->images); ?>
                        @foreach ($images as $key => $value)
                            <img src="{{ asset('storage/projects/' . $value) }}" class="img-fluid" alt="">
                        @endforeach
                    </div>

                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $project->project_category->name }}</li>
                            @isset($project->client)
                                <li><strong>Client</strong>: {{ $project->client }}</li>
                            @endisset
                            <li><strong>Project date</strong>: {{ $project->date }}</li>
                            <li><strong>Project URL</strong>: <a href="{{ $project->url }}">{{ $project->url }}</a></li>
                        </ul>
                    </div>

                </div>

                <div class="portfolio-description">

                    <h2>{{ $project->title }}</h2>
                    <p>
                        {!! $project->info !!}
                    </p>
                </div>

            </div>
        </section>
    </main>
@endsection
