<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if (!empty($proses)) {
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;

    $nilai = (30 * $nilai_uts / 100) + (35 * $nilai_uas / 100) + (35 * $nilai_tugas / 100);

    if ($nilai >= 0 && $nilai <= 35) {
        echo '<br/> Grade E';
    } else if ($nilai >= 36 && $nilai <= 55) {
        echo '<br/> Grade D';
    } else if ($nilai >= 56 && $nilai <= 69) {
        echo '<br/> Grade C';
    } else if ($nilai >= 70 && $nilai <= 84) {
        echo '<br/> Grade B';
    } else if ($nilai >= 85 && $nilai <= 100) {
        echo '<br/> Grade A';
    } else {
        echo '<br/> Grade I';
    }
}
