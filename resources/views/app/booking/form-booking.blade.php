@extends('layout.user.masterView')

@section('content-booking')
    <section class="section">
        <div class="section-header">
            <h1>Form Pemesanan Tiket</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('films.book.checkout', $film) }}" method="POST">
                        @csrf
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
                            <input type="number" class="form-control" name="age_form" placeholder="Masukkan usia" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Konfirmasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
