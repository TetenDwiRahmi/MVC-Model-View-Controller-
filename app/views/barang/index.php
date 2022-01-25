<h2>Daftar Barang</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-success tombolTambah" data-bs-toggle="modal" data-bs-target="#formBarang">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Jenis Barang</th>
            <th>Supplier</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['brg'] as $brg) : ?><!--controller-->
            <tr>
                <td><?= $no; ?></td>
                <td><?= $brg['kode_barang']; ?></td>
                <td><?= $brg['nama_barang']; ?></td>
                <td><?= $brg['satuan']; ?></td>
                <td><?= $brg['nama_jenis']; ?></td>
                <td><?= $brg['nama_supplier']; ?></td>
                <td><?= $brg['harga']; ?></td>
                <td><?= $brg['stok']; ?></td>
                <td>
                    <a href="<?= BASEURL;?>/barang/hapus/<?= $brg['id'] ?>" class="mb-1 mr-1 btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><span data-feather='trash'></span></a>  
                    <a href="<?= BASEURL;?>/barang/ubah/<?= $brg['id'] ?>" data-bs-toggle="modal" data-bs-target="#formBarang" class="modalUbahBarang mb-2 mr-2 btn btn-warning" data-id="<?= $brg['id']?>"><span data-feather='edit'></span></a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formBarang" tabindex="-1" aria-labelledby="formBarangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formBarangLabel">Tambah data barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/barang/tambah">
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="kode_barang" name="kode_barang">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="satuan" name="satuan">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-8">
            <select class="form-control" id="id_jenis" name="id_jenis">
              <?php
                foreach($data['js'] as $dataJenis) {
                  echo "<option value=".$dataJenis['id']. ">" .$dataJenis['nama_jenis']. "</option>";
                }
              ?>   
            </select>
            </div>
        </div>

         <div class="row mb-3">
            <label for="inputSupplier" class="col-sm-2 col-form-label">Supplier</label>
            <div class="col-sm-8">
            <select class="form-control" id="id_supplier" name="id_supplier">
              <?php
                foreach($data['spp'] as $dataSupplier) {
                  echo "<option value=".$dataSupplier['id']. ">" .$dataSupplier['nama_supplier']. "</option>";
                }
              ?>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="harga" name="harga">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="stok" name="stok">
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable(); ///pada table tambahkan id example
		} );
	</script>