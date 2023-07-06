@extends('layout.user.masterView')

@section('title-us', 'Pemilihan Kursi Bioskop')

@section('sidebar-user-booking')
    @include('app.booking.sidebar-booking')
@endsection

@section('content-booking')
    <section class="section">
        <div class="section-header">
            <h1>Pemilihan Kursi Bioskop - {{ $film->title }}</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Denah Kursi</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="col-6 text-center">
                            <a href="#" class="badge badge-primary">Film Screen</a>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        @foreach ($film->filmSeat as $item)
                            <div class="col-lg-1 px-1 py-1">
                                <a href="#" onclick="event.preventDefault()"
                                    @if ($item->is_ordered) class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Sudah Dipesan"
                                    @else
                                        class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Masih Kosong" @endif">
                                    {{ $item->seat->seat_number }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Memilih Kursi</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('films.book.checkout', $film) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="">Pilih Kursi</label>
                            <select class="form-control" style="height: 150px" name="seats[]" multiple>
                                @foreach ($film->filmSeat as $item)
                                    @if ($item->is_ordered == 1)
                                        @continue
                                    @endif
                                    <option value="{{ $item->seat->id }}">{{ $item->seat->seat_number }}</option>
                                @endforeach
                            </select>
                            <p class="mt-1">*Tahan tombol <strong>CTRL(Windows)</strong> atau
                                <strong>Command(Mac)</strong> untuk memilih lebih dari satu.
                            </p>
                        </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4> Form Pemesanan </h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Judul Film Pesanan</label>
                        <input type="text" value="{{ $film->title }}" class="form-control" readonly>
                        <input type="hidden" value="{{ $film->id }}" name="film_id">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name_form" value="{{ auth()->user()->name }}"
                            placeholder="Masukkan nama" readonly>
                    </div>
                    <div class="form-group">
                        <label>Usia</label>
                        <input type="number" class="form-control" name="age_form" value="{{ $ageUser }}" readonly>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <a href="{{ route('films.index')}}" class="btn btn-warning btn-lg btn-block text-white">
                                Kembali
                            </a>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Konfirmasi
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
