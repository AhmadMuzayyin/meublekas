@extends('layouts.Backend.BackendLayout')
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Profil Toko</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('profil.update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Toko</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ $profile != null ? $profile->nama : '' }}" placeholder="Nama Toko">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{ $profile != null ? $profile->alamat : '' }}" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="nama">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                value="{{ $profile != null ? $profile->whatsapp : '' }}" placeholder="Whatsapp">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
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
