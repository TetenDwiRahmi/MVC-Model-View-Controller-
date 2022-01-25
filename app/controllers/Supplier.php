<?php
class Supplier extends Controller {
    public function index()
    {
        $data['judul']='Daftar Supplier';
        $data['spp']=$this->model('Supplier_model')->getAllSupplier();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('supplier/index',$data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Supplier_model')->tambahSupplier($_POST)>0) {
            FlashMessage::setflash('Berhasil','disimpan','primary');
            header('location:'.BASEURL. '/supplier');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','disimpan','danger');
            header('location:'.BASEURL. '/supplier');
            exit;
        }
        
    }
    public function hapus($id)
    {
        if ($this->model('Supplier_model')->hapusSupplier($id)>0) {
            FlashMessage::setflash('Berhasil','dihapus','success');
            header('location:'.BASEURL. '/supplier');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','dihapus','danger');
            header('location:'.BASEURL. '/supplier');
            exit;
        }
        
    }
    public function getUbah()
    {
        echo json_encode($this->model('Supplier_model')->getSupplierById($_POST['id']));
    }
    public function Ubah()
    {
        {
            if ($this->model('Supplier_model')->ubahSupplier($_POST)>0) {
                FlashMessage::setflash('Berhasil','diubah','primary');
                header('location:'.BASEURL. '/supplier');
                exit;
            }
            else {
                FlashMessage::setflash('Gagal','diubah','danger');
                header('location:'.BASEURL. '/supplier');
                exit;
            }
            
        }       
    }
}