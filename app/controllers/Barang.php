<?php

class Barang extends Controller{
    public function index()
    {
        $data['judul']='Daftar Barang';
        $data['brg']=$this->model('Barang_model')->getAllBarang();
        $data['js'] = $this->model('Jenis_model')->getAllJenis();
        $data['spp'] = $this->model('Supplier_model')->getAllSupplier();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('barang/index',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Barang_model')->tambahBarang($_POST)>0) {
            FlashMessage::setflash('Berhasil','disimpan','primary');
            header('location:'.BASEURL. '/barang');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','disimpan','danger');
            header('location:'.BASEURL. '/barang');
            exit;
        }
        
    }

    public function hapus($id)
    {
        if ($this->model('Barang_model')->hapusBarang($id)>0) {
            FlashMessage::setflash('Berhasil','dihapus','success');
            header('location:'.BASEURL. '/barang');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','dihapus','danger');
            header('location:'.BASEURL. '/barang');
            exit;
        }
        
    }
    public function getUbah()
    {
        echo json_encode($this->model('Barang_model')->getBarangById($_POST['id']));
       
    }
    public function Ubah()
    {
        {
            if ($this->model('Barang_model')->ubahbarang($_POST)>0) {
                FlashMessage::setflash('Berhasil','diubah','primary');
                header('location:'.BASEURL. '/barang');
                exit;
            }
            else {
                FlashMessage::setflash('Gagal','diubah','danger');
                header('location:'.BASEURL. '/barang');
                exit;
            }
            
        }       
    }
}

?>