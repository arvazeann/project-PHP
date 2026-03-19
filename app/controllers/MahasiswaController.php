<?php
require_once "app/models/Mahasiswa.php";

class MahasiswaController
{

    function index()
    {
        $data = null;
        require "app/views/form.php";
    }

    function process()
    {
        $action = $_POST['action'] ?? '';

        if ($action == 'simpan') {
            $firstname = $_POST['firstname'] ?? '';
            $lastname = $_POST['lastname'] ?? '';
            $phone_number = $_POST['phone_number'] ?? '';
            $address = $_POST['address'] ?? '';

            if (empty($firstname) || empty($lastname) || empty($phone_number) || empty($address)) {
                echo "<script>alert('Semua input wajib di isi.')</script>";
                require "app/views/form.php";
                return;
            }

            $mhs = new Mahasiswa($firstname, $lastname, $phone_number, $address);
            $data = $mhs->getData();
            require "app/views/form.php";
        } elseif ($action == 'hapus') {
            $this->index();
        }
    }
}
