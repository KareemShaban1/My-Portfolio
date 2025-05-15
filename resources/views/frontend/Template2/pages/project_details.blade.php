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

                        @foreach ($project->images_urls as $image)

                            <img src="{{ $image }}" class="img-fluid" alt=""
                            style="height: 260px; width: 350px;">
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
                            @isset($project->github_link)
                                <li><strong>Github URL</strong>: <a
                                        href="{{ $project->github_link }}">{{ $project->github_link }}</a></li>
                            @endisset

                            @isset($project->live_link)
                                <li><strong>Live URL</strong>: <a href="{{ $project->live_link }}">{{ $project->live_link }}</a>
                                </li>
                            @endisset
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
