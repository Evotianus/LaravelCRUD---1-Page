@extends('template.template')

<body>

    <div class="container mt-5">
        <form method="post" action="/tambah" name="crud_form">
            @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kodebrg" name="kodebrg"
                        placeholder="Masukkan Kode Barang...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan Jenis...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan"
                        placeholder="Masukkan Satuan...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Jlh Stok</label>
                    <input type="text" class="form-control" id="jlh_stok" name="jlh_stok"
                        placeholder="Masukkan Jlh Stok...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Harga Jual</label>
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual"
                        placeholder="Masukkan Harga Jual...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Harga Beli</label>
                    <input type="text" class="form-control" id="harga_beli" name="harga_beli"
                        placeholder="Masukkan harga Beli...">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" name="ket" id="ket"
                        placeholder="Masukkan Keterangan..."></textarea>
                </div>
            </div>
            <input type="hidden" id="item_id">
            <button type="submit" class="btn btn-primary" id="form-btn">Tambah</button>
        </form>

        <br><br><br>

        <table class="table">
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
            @foreach ($datatable as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
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
                        <a href="/hapus/{{ $data->id }}"><button class="btn btn-danger">Delete</button></a>
                        <button class="btn btn-success"
                            onclick="edit('{{ $data->id }}', '{{ $data->kodebarang }}', '{{ $data->nama }}', '{{ $data->jenis }}', '{{ $data->merk }}', '{{ $data->satuan }}', '{{ $data->jlh_stok }}', '{{ $data->hargajual }}', '{{ $data->hargabeli }}', '{{ $data->ket }}')">Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <script>
        function edit(id, kodebarang, nama, jenis, merk, satuan, jlh_stok, hargajual, hargabeli, ket) {
            document.getElementById('item_id').value = id;

            document.getElementById("kodebrg").value = kodebarang;
            document.getElementById('nama').value = nama;
            document.getElementById('jenis').value = jenis;
            document.getElementById('merk').value = merk;
            document.getElementById('satuan').value = satuan;
            document.getElementById('jlh_stok').value = jlh_stok;
            document.getElementById('harga_jual').value = hargajual;
            document.getElementById('harga_beli').value = hargabeli;
            document.getElementById('ket').value = ket;

            document.getElementById('form-btn').innerHTML = "Update";

            document.crud_form.action = "/update/" + id;
        }
    </script>
</body>
