@extends('layouts.Backend.BackendLayout')
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Order</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Whatsapp</th>
                                    <th>Tanggal</th>
                                    <th>Total Order</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Whatsapp</th>
                                    <th>Tanggal</th>
                                    <th>Total Order</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item['nama'] }}</td>
                                        <td>{{ $item['alamat'] }}</td>
                                        <td>{{ $item['wa'] }}</td>
                                        <td>{{ $item['tanggal'] }}</td>
                                        <td>{{ $item['total_order'] }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn-sm"
                                                data-toggle="modal" data-target="#detailOrder-{{ $loop->iteration }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @include('pages.Admin.modal')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
