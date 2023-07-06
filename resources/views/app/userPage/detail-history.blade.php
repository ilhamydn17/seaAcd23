@extends('layout.user.masterView')

@section('title-us', 'Detail Transaksi')

@section('sidebar-user-booking')
    @include('app.userPage.sidebar-userPage')
@endsection


@section('content-booking')
    <section class="section">
        <div class="section-header">
            <h1>Detail Transaksi</h1>
        </div>

        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>Detail Transaksi</h2>
                                <div class="invoice-number">Sea Cinema</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-10">
                                    <strong>Ordered by</strong><br>
                                    <table>
                                        <tr>
                                            <td>Judul Film</td>
                                            <td> : </td>
                                            <td>{{ $detail_transact[0]->filmSeat->film->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Age Rating</td>
                                            <td> : </td>
                                            <td>{{ $detail_transact[0]->filmSeat->film->age_rating  }}+</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">Nama Pemesan</td>
                                            <td> : </td>
                                            <td>{{ auth()->user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Usia</td>
                                            <td> : </td>
                                            <td>{{ $ageUser }} tahun</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">#</th>
                                        <th>Nomor Kursi</th>
                                        <th class="text-right">Harga</th>
                                    </tr>
                                    @foreach ($detail_transact as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->filmSeat->seat->seat_number }}</td>
                                            <td class="text-right">Rp.{{ $item->filmSeat->film->ticket_price }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12 text-right">
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">Rp. {{ number_format($detail_transact[0]->transaction->total_cost, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-md-right">
                    <div class="float-lg-left mb-lg-0 mb-3">
                        <button class="btn btn-danger" data-confirm="Anda Yakin?|Batalkan transaksi pemesanan?" data-confirm-yes="document.getElementById('form-cancel').submit()"><i class="fas fa-times"></i> Batalkan Transaksi</button>
                        <form id="form-cancel" action="{{ route('films.transaction.cancel', $detail_transact[0]->transaction_id) }}" method="POST">
                            @csrf
                            @method('POST')
                        </form>
                    </div>
                    <a class="btn btn-success btn-icon icon-left" href="{{  route('user.history-transaction') }}">Kembali</a>
                </div>
            </div>
        </div>
    </section>
@endsection
