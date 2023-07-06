@extends('layout.master')

@section('title-pub', $film->title)

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4>About Film</h4>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3" width="250px" src="{{$film->poster_url}}" alt="Generic placeholder image">
                            <div class="media-body">

                                <h5 class="mt-0">{{$film->title}}</h5>

                                 <table class="mt-0">
                                    <tr>
                                        <td>Age Rating</td>
                                        <td> : </td>
                                        <td>{{$film->age_rating}}+</td>
                                    </tr>
                                    <tr>
                                        <td>Release Date</td>
                                        <td> : </td>
                                        <td>{{Carbon\Carbon::parse($film->release_date)->format('d F Y')}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ticket Price</td>
                                        <td> : </td>
                                        <td>IDR {{ $film->ticket_price }}</td>
                                    </tr>
                                </table>

                                <h6 class="mt-4">Deskripsi</h6>
                                <p class="mt-0">{{$film->description}}</p>
                                <div class="d-flex justify-content-center mt-5">
                                    <a href="{{back()->getTargetUrl()}}" class="btn btn-info mr-2">Kembali</a>
                                    <a href="{{ route('films.book', $film) }}" class="btn btn-primary">Pesan Tiket</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
