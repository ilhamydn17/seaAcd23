@extends('layout.user.masterView')

@section('title-us', 'History Transaksi')

@section('sidebar-user-booking')
    @include('app.userPage.sidebar-userPage')
@endsection


@section('content-booking')
    <section class="section">
        <div class="section-header">
            <h1>History Transaksi Anda</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="activities">
                        @forelse ($transact_history as $item)
                            <div class="activity">
                                <div class="activity-icon bg-primary text-white shadow-primary">
                                    <i class="fas fa-clipboard"></i>
                                </div>
                                <div class="activity-detail">
                                    <div class="mb-2">
                                        <span
                                            class="text-job text-primary">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                        <span class="bullet"></span>
                                        <div class="float-right dropdown">
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">Info</div>
                                                <a href="#" class="dropdown-item has-icon">
                                                    <i class="fas fa-list"></i>
                                                    Detail
                                                </a>
                                                <div class="dropdown-divider></i>"></div>
                                                {{-- <a href="#" class="dropdown-item has-icon text-danger"
                                                    data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                                    data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i>
                                                    Archive</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <table>
                                        <tr>
                                            <td>Jumlah Tiket</td>
                                            <td> : </td>
                                            <td> {{ $item->detailTransaction->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Pembayaran</td>
                                            <td> : </td>
                                            <td>Rp. {{ number_format($item->total_cost, 0, ',', '.') }}</td>
                                        </tr>
                                    </table>
                                    <a href="{{ route('user.detail-transaction', $item->id) }}"
                                        class="btn btn-sm btn-primary mt-4">
                                        <i class="fas fa-info-circle"></i>
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="activity">
                                <div class="activity-icon bg-primary text-white shadow-primary">
                                    <i class="fas fa-clipboard"></i>
                                </div>
                                <div class="activity-detail">
                                    <div class="mb-2">
                                        <span class="text-job text-primary">Belum ada transaksi</span>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
    </section>
@endsection
