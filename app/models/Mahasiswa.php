<?php
class Mahasiswa {
    public $nama, $nim, $jurusan;

    function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    function tampil() {
        return [
            "nama" => $this->nama,
            "nim" => $this->nim,
            "jurusan" => $this->jurusan
        ];
    }
}