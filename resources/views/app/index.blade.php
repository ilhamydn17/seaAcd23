@extends('layout.master')

@section('title-pub', 'SeaFlashTix | All Films')

@section('content')
    <section class="section" id="our-films">
        <div class="section-header">
            <h1>Tayang Saat Ini</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Semua Film</a></div>
                <div class="breadcrumb-item"><a href="#">Tayang Saat Ini</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body ">
                    <div class="row">
                        @foreach ($films as $item)
                            <div class="col-12 col-md-4 col-lg-4">
                                <article class="article article-style-c">
                                    <div class="article-header">
                                        <div class="article-image" data-background="{{$item->poster_url}}">
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <div class="article-category">
                                            <a href="#">Age Rating</a>
                                            <div class="bullet"></div>
                                            <span class="badge badge-danger">{{ $item->age_rating }}+</span>
                                        </div>
                                        <div class="article-title">
                                            <h2><a class="" href="{{ route('films.show', $item) }}">{{ $item->title }}</a></h2>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {!!$films->links()!!}
                    </div>

                    {{-- <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sliders</h4>
                                </div>
                                <div class="card-body">
                                    <div class="owl-carousel owl-theme slider" id="slider1">
                                        @foreach ($films as $item)
                                            <div>
                                                <img width="100px" src="{{ $item->poster_url }}">
                                                <div class="slider-caption">
                                                    <div class="slider-title">Image {{ $loop->iteration  }}</div>
                                                    <div class="slider-description">{{ $item->description }}</div>
                                                  </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
    </section>
@endsection

@section('script')
@endsection
