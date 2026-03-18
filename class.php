<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    public $nilai;

    public function __construct($nama, $nim, $jurusan, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->nilai = $nilai;
    }

    public function getGrade() {
        if ($this->nilai >= 85) return "A";
        elseif ($this->nilai >= 70) return "B";
        elseif ($this->nilai >= 60) return "C";
        elseif ($this->nilai >= 50) return "D";
        else return "E";
    }

    public function tampilData() {
        return "
        Nama: $this->nama <br>
        NIM: $this->nim <br>
        Jurusan: $this->jurusan <br>
        Nilai: $this->nilai <br>
        Grade: " . $this->getGrade();
    }
}
?>