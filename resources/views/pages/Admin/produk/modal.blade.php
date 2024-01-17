<!-- Logout Modal-->
<div class="modal fade" id="editproduk-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Produk - {{ $item->nama }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('produk.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                            <option value="">Pilih Kategori</option>
                            @foreach ($category as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ $item->category_id == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama produk</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                            placeholder="Nama produk" value="{{ $item->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control @error('deskripsi') is-invalid @enderror"
                            placeholder="Deskripsi produk">{{ $item->deskripsi }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga produk</label>
                        <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror"
                            placeholder="Harga produk" value="{{ $item->harga }}">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{ url($item->gambar) }}" alt="gambar" width="100" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar produk</label>
                        <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
                        @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
