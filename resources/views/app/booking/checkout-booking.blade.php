@extends('layout.user.masterView')

@section('content-booking')
    <section class="section">
        <div class="section-header">
            <h1>Pembayaran Pemesanan</h1>
        </div>

        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>Detail Pemesanan</h2>
                                <div class="invoice-number">Sea Cinema</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-10">
                                    <strong>Ordered by</strong><br>
                                    <table>
                                        <tr>
                                            <td>Judul Film</td>
                                            <td> : </td>
                                            <td>{{ $film->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Age Rating</td>
                                            <td> : </td>
                                            <td>{{ $film->age_rating }}+</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">Nama Pemesan</td>
                                            <td> : </td>
                                            <td>{{ auth()->user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Usia</td>
                                            <td> : </td>
                                            <td>{{ $age_form }} tahun</td>
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
                                    @foreach ($seats_booked as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item }}</td>
                                            <td class="text-right">Rp.{{ $film->ticket_price }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12 text-right">
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">Rp. {{ number_format($total_cost, 0, ',', '.') }}
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
                        <form action="{{ route('films.book.confirm', $film) }}" method="POST">
                            @csrf
                            @method('POST')
                        <input type="hidden" value="{{ $total_cost }}" name="total_cost">
                        @foreach ($confirm_data_seat as $item)
                            <input type="hidden" value="{{ $item }}" name="confirm_data_seat[]">
                        @endforeach
                        <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                        <button class="btn btn-danger" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="window.location.href = '{{ route('films.index')}}'"><i class="fas fa-times"></i> Cancel</button>
                        </form>
                    </div>
                    <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    </section>
@endsection
