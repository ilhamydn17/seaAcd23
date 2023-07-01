@extends('layout.user.masterView')

@section('content-booking')
    <section class="section">
        <div class="section-header">
            <h1>Detail Info User</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <div class="author-box-left">
                                <img alt="image" src="../assets/img/avatar/avatar-1.png"
                                    class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                                <a href="#" class="btn btn-info mt-3">Premium</a>
                            </div>
                            <div class="author-box-details">
                                <div class="author-box-name">
                                    <a href="#">{{ auth()->user()->name }}</a>
                                </div>
                                <div class="author-box-job">{{ auth()->user()->username }}</div>
                                <div class="author-box-description">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card shadow-primary border border-primary">
                                                <div class="card-body">
                                                    <h6>Jumlah Saldo</h6>
                                                    <h6>Rp. {{ number_format(auth()->user()->balance, 0, ',', '.') }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card shadow-primary border border-primary">
                                                <div class="card-body">
                                                    <h6>Pengeluaran Terakhir</h6>
                                                    <h6>Rp. {{ number_format(90000, 0, ',', '.') }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card shadow-primary border border-primary">
                                                <div class="card-body">
                                                    <h6>Top Up</h6>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-toggle="modal" data-target="#exampleModalCenter">
                                                        + Tambah Saldo
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Saldo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.topup') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="">Pilih Pihak Ketiga</label>
                            <select class="form-control">
                                <option value="">Link Aja</option>
                                <option value="">BRI</option>
                                <option value="">BCA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="number" class="form-control @error('nominal')
                            is-invalid
                            @enderror" name="nominal" placeholder="Masukkan nominal">

                            @error('nominal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
