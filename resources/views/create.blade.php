@extends('template.template')

<div class="container mt-5">
    <form method="post" action="/tambah">
        @csrf
        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">Kode Barang</label>
                <input type="text" class="form-control" name="kodebrg" placeholder="Masukkan Kode Barang...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Jenis</label>
                <input type="text" class="form-control" name="jenis" placeholder="Masukkan Jenis...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Merk</label>
                <input type="text" class="form-control" name="merk" placeholder="Masukkan Merk...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Satuan</label>
                <input type="text" class="form-control" name="satuan" placeholder="Masukkan Satuan...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Jlh Stok</label>
                <input type="text" class="form-control" name="jlh_stok" placeholder="Masukkan Jlh Stok...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Harga Jual</label>
                <input type="text" class="form-control" name="harga_jual" placeholder="Masukkan Harga Jual...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Harga Beli</label>
                <input type="text" class="form-control" name="harga_beli" placeholder="Masukkan harga Beli...">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" name="ket" placeholder="Masukkan Keterangan..."></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    <br><br><br>

    {{-- <table class="table">
        <tr class="table-primary">
            <td>No</td>
            <td>Kode Barang</td>
            <td>Nama</td>
            <td>Jenis</td>
            <td>Merk</td>
            <td>Satuan</td>
            <td>Jlh Stok</td>
            <td>Harga Jual</td>
            <td>Harga Beli</td>
            <td>Ket</td>
            <td>Action</td>
        </tr>
        <tr>
            @foreach ($datatable as $data)
                <td>{{ $data->id }}</td>
                <td>{{ $data->kodebarang }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jenis }}</td>
                <td>{{ $data->merk }}</td>
                <td>{{ $data->satuan }}</td>
                <td>{{ $data->jlh_stok }}</td>
                <td>{{ $data->hargajual }}</td>
                <td>{{ $data->hargabeli }}</td>
                <td>{{ $data->ket }}</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </td>
            @endforeach
        </tr>
    </table> --}}
</div>
