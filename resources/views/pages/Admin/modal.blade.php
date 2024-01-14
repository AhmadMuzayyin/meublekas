<!-- Logout Modal-->
<div class="modal fade" id="detailOrder-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Order - {{ $item['nama'] }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $item['nama'] }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $item['alamat'] }}</td>
                        </tr>
                        <tr>
                            <th>Whatsapp</th>
                            <td>{{ $item['wa'] }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td>{{ $item['tanggal'] }}</td>
                        </tr>
                        <tr>
                            <th>Total Order</th>
                            <td>{{ $item['total_order'] }}</td>
                        </tr>
                        <tr>
                            <th>Produk</th>
                            <td>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item['produk'] as $produk)
                                            <tr>
                                                <td>{{ $produk['nama'] }}</td>
                                                <td>{{ 'Rp.' . number_format($produk['harga']) }}</td>
                                                <td>{{ $produk['quantity'] }}</td>
                                                <td>{{ 'Rp.' . number_format($produk['subtotal']) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <th>{{ 'Rp.' . number_format($item['total_harga']) }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
