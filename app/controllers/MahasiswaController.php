<?php
require_once "app/models/Mahasiswa.php";

class MahasiswaController {

    function index() {
        require "app/views/form.php";
    }

    function process() {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];

        $mhs = new Mahasiswa($nama, $nim, $jurusan);
        $data = $mhs->tampil();

        require "app/views/result.php";
    }
}