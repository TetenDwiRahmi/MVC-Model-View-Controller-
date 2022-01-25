$(function () {
    //jenis
    $('.tombolTambah').on('click', function () {
        $('#formJenisLabel').html('Tambah Data Jenis');
        $('.modal-footer button[type=submit]').html('Simpan');

    });


    $('.modalUbahJenis').on('click', function () {
        $('#formJenisLabel').html('Ubah Data Jenis');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', 'http://localhost/php/mvc/public/jenis/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/php/mvc/public/jenis/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama_jenis').val(data.nama_jenis);
                $('#keterangan').val(data.keterangan);
                $('#id').val(data.id);

            }
        });
    });

    //supplier
    $('.tombolTambah').on('click', function () {
        $('#formSupplierLabel').html('Tambah Data Supplier');
        $('.modal-footer button[type=submit]').html('Simpan');

    });


    $('.modalUbahSupplier').on('click', function () {
        $('#formSupplierLabel').html('Ubah Data Supplier');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', 'http://localhost/php/mvc/public/supplier/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/php/mvc/public/supplier/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama_supplier').val(data.nama_supplier);
                $('#notelp').val(data.notelp);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);

            }
        });
    });

    //barang
    $('.tombolTambah').on('click', function () {
        $('#formBarangLabel').html('Tambah Data Barang');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahBarang').on('click', function () {
        $('#formBarangLabel').html('Ubah Data Barang');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', 'http://localhost/php/mvc/public/barang/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/php/mvc/public/barang/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#kode_barang').val(data.kode_barang);
                $('#nama_barang').val(data.nama_barang);
                $('#satuan').val(data.satuan);
                $('#id_jenis').val(data.id_jenis);
                $('#id_supplier').val(data.id_supplier);
                $('#harga').val(data.harga);
                $('#stok').val(data.stok);
                $('#id').val(data.id);
            }
        });
    });



});