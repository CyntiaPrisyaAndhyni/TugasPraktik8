<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
.warning {color: #FF0000;}
</style>
</head>
<body>

<?php

include("connect.php");


$error_kodeform = "";
$error_tanggal = "";
$error_jenisPendaftaran = "";
$error_tglMasuk = "";
$error_nis = "";
$error_noPesertaUjian = "";
$error_paud = "";
$error_tk = "";
$error_noSkhun = "";
$error_noIjazah = "";
$error_hobi = "";
$error_citaCita = "";
$error_nama = "";
$error_kelamin = "";
$error_nisn = "";
$error_nik = "";
$error_tmptLahir = "";
$error_tglLahir = "";
$error_agama = "";
$error_kebutuhanKhusus = "";
$error_alamatJln = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kodePos = "";
$error_tmptTinggal = "";
$error_transportasi = "";
$error_noHp = "";
$error_noTelp = "";
$error_email = "";
$error_kps = "";
$error_noKps = "";
$error_kewarganegaraan = "";

$kodeform = "";
$tanggal = "";
$jenisPendaftaran = "";
$tglMasuk = "";
$nis = ""; 
$noPesertaUjian = "";
$paud = "";
$tk = "";
$noSkhun = "";
$noIjazah = "";
$hobi = "";
$citaCita = "";
$nama = "";
$kelamin = "";
$nisn = "";
$nik = "";
$tmptLahir = "";
$tglLahir = "";
$agama = "";
$kebutuhanKhusus = "";
$alamatJln = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kodePos = "";
$tmptTinggal = "";
$transportasi = "";
$noHp = "";
$noTelp = "";
$email = "";
$kps = "";
$noKps = "";
$kewarganegaraan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (empty($_POST["kodeform"]))
    {
        $error_kodeform = "kode formulir tidak boleh kosong";
    }
    else
    {
        $kodeform = cek_input($_POST["kodeform"]);

        if(!is_numeric($kodeform))
        {
            $error_kodeform = 'Kode formulir hanya boleh angka';
        }
    }

    if (empty($_POST["tanggal"]))
    {
        $error_tanggal = "Tanggal tidak boleh kosong";
    }
    else
    {
        $tanggal = cek_input($_POST["tanggal"]);
    }

    if (empty($_POST["jenisPendaftaran"]))
    {
        $error_jenisPendaftaran = "jenis Pendaftaran tidak boleh kosong";
    }
    else
    {
        $jenisPendaftaran = cek_input($_POST["jenisPendaftaran"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$jenisPendaftaran))
        {
            $error_jenisPendaftaran = "Inputan hanya boleh huruf dan spasi";
        }
    }

    if (empty($_POST["tglMasuk"]))
    {
        $error_tglMasuk = "Tanggal tidak boleh kosong";
    }
    else
    {
        $tglMasuk = cek_input($_POST["tglMasuk"]);
    }

    if(empty($_POST["nis"]))
    {
        $error_nis = "NIS tidak boleh kosong";
    }
    else
    {
        $nis = cek_input($_POST["nis"]);

        if(!is_numeric($nis))
        {
            $error_nis = 'NIS hanya boleh angka';
        }
    }

    if(empty($_POST["noPesertaUjian"]))
    {
        $error_noPesertaUjian = "No Peserta Ujian tidak boleh kosong";
    }
    else
    {
        $noPesertaUjian = cek_input($_POST["noPesertaUjian"]);

        if(!is_numeric($noPesertaUjian))
        {
            $error_noPesertaUjian = 'No Peserta Ujian hanya boleh angka';
        }
    }

    if (empty($_POST["paud"]))
    {
        $error_paud = "Pengalaman pernah PAUD tidak boleh kosong";
    }
    else
    {
        $paud = cek_input($_POST["paud"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$paud))
        {
            $error_paud = "Inputan hanya boleh huruf dan spasi";
        }
    }

    
    if (empty($_POST["tk"]))
    {
        $error_tk = "Pengalaman pernah TK tidak boleh kosong";
    }
    else
    {
        $tk = cek_input($_POST["tk"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$tk))
        {
            $error_tk = "Inputan hanya boleh huruf dan spasi";
        }
    }

    if(empty($_POST["noSkhun"]))
    {
        $error_noSkhun = "Nomor SKHUN tidak boleh kosong";
    }
    else
    {
        $noSkhun = cek_input($_POST["noSkhun"]);

        if(!is_numeric($noSkhun))
        {
            $error_noSkhun = 'Nomor SKHUN hanya boleh angka';
        }
    }

    if(empty($_POST["noIjazah"]))
    {
        $error_noIjazah = "Nomor Ijazah tidak boleh kosong";
    }
    else
    {
        $noIjazah = cek_input($_POST["noIjazah"]);

        if(!is_numeric($noIjazah))
        {
            $error_noIjazah = 'Nomor Ijazah hanya boleh angka';
        }
    }

    if (empty($_POST["hobi"]))
    {
        $error_hobi = "Hobi tidak boleh kosong";
    }
    else
    {
        $hobi = cek_input($_POST["hobi"]);
    }

    if (empty($_POST["citaCita"]))
    {
        $error_citaCita = "Cita-Cita tidak boleh kosong";
    }
    else
    {
        $citaCita = cek_input($_POST["citaCita"]);
    }

    if (empty($_POST["nama"]))
    {
        $error_nama = "Nama tidak boleh kosong";
    }
    else
    {
        $nama = cek_input($_POST["nama"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$nama))
        {
            $error_nama = "Inputan hanya boleh huruf dan spasi";
        }
    }

    if (empty($_POST["kelamin"]))
    {
        $error_kelamin = "Jenis Kelamin tidak boleh kosong";
    }
    else
    {
        $kelamin = cek_input($_POST["kelamin"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$kelamin))
        {
            $error_kelamin = "Inputan hanya boleh huruf dan spasi";
        }
    }

    if(empty($_POST["nisn"]))
    {
        $error_nisn = "NISN tidak boleh kosong";
    }
    else
    {
        $nisn = cek_input($_POST["nisn"]);

        if(!is_numeric($nisn))
        {
            $error_nisn = 'NISN hanya boleh angka';
        }
    }

    if(empty($_POST["nik"]))
    {
        $error_nik = "NIK tidak boleh kosong";
    }
    else
    {
        $nik = cek_input($_POST["nik"]);

        if(!is_numeric($nik))
        {
            $error_nik = 'NIK hanya boleh angka';
        }
    }

    if (empty($_POST["tmptLahir"]))
    {
        $error_tmptLahir = "Tempat Lahir tidak boleh kosong";
    }
    else
    {
        $tmptLahir = cek_input($_POST["tmptLahir"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$tmptLahir))
        {
            $error_tmptLahir = "Inputan hanya boleh huruf dan spasi";
        }
    }

    if (empty($_POST["tglLahir"]))
    {
        $error_tglLahir = "Tanggal Lahir tidak boleh kosong";
    }
    else
    {
        $tglLahir = cek_input($_POST["tglLahir"]);
    }

    if (empty($_POST["agama"]))
    {
        $error_agama = "Agama tidak boleh kosong";
    }
    else
    {
        $agama = cek_input($_POST["agama"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$agama))
        {
            $error_agama = "Inputan hanya boleh huruf dan spasi";
        }
    }

    if (empty($_POST["kebutuhanKhusus"]))
    {
        $error_kebutuhanKhusus = "Berkebutuhan Khusus tidak boleh kosong";
    }
    else
    {
        $kebutuhanKhusus = cek_input($_POST["kebutuhanKhusus"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$kebutuhanKhusus))
        {
            $error_kebutuhanKhusus = "Inputan hanya boleh huruf dan spasi";
        }
    }  

    if (empty($_POST["alamatJln"]))
    {
        $error_alamatJln = "Alamat Jalan tidak boleh kosong";
    }
    else
    {
        $alamatJln = cek_input($_POST["alamatJln"]);
    }

    if(empty($_POST["rt"]))
    {
        $error_rt = "Nomor RT tidak boleh kosong";
    }
    else
    {
        $rt = cek_input($_POST["rt"]);

        if(!is_numeric($rt))
        {
            $error_rt = 'Nomor RT hanya boleh angka';
        }
    }

    if(empty($_POST["rw"]))
    {
        $error_rw = "Nomor RW tidak boleh kosong";
    }
    else
    {
        $rw = cek_input($_POST["rw"]);

        if(!is_numeric($rw))
        {
            $error_rw = 'Nomor RW hanya boleh angka';
        }
    }

    if (empty($_POST["dusun"]))
    {
        $error_dusun = "Dusun tidak boleh kosong";
    }
    else
    {
        $dusun = cek_input($_POST["dusun"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$dusun))
        {
            $error_dusun = "Inputan hanya boleh huruf dan spasi";
        }
    }
    
    if (empty($_POST["kelurahan"]))
    {
        $error_kelurahan= "Kelurahan tidak boleh kosong";
    }
    else
    {
        $kelurahan = cek_input($_POST["kelurahan"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$kelurahan))
        {
            $error_kelurahan = "Inputan hanya boleh huruf dan spasi";
        }
    } 

    if (empty($_POST["kecamatan"]))
    {
        $error_kecamatan= "Kecamatan tidak boleh kosong";
    }
    else
    {
        $kecamatan = cek_input($_POST["kecamatan"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$kecamatan))
        {
            $error_kecamatan = "Inputan hanya boleh huruf dan spasi";
        }
    } 

    if(empty($_POST["kodePos"]))
    {
        $error_kodePos = "Kode Pos tidak boleh kosong";
    }
    else
    {
        $kodePos = cek_input($_POST["kodePos"]);

        if(!is_numeric($kodePos))
        {
            $error_kodePos = 'Kode Pos hanya boleh angka';
        }
    }

    if (empty($_POST["tmptTinggal"]))
    {
        $error_tmptTinggal= "Tempat Tinggal tidak boleh kosong";
    }
    else
    {
        $tmptTinggal = cek_input($_POST["tmptTinggal"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$tmptTinggal))
        {
            $error_tmptTinggal = "Inputan hanya boleh huruf dan spasi";
        }
    } 

    if (empty($_POST["transportasi"]))
    {
        $error_transportasi= "Transportasi tidak boleh kosong";
    }
    else
    {
        $transportasi = cek_input($_POST["transportasi"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$tmptTinggal))
        {
            $error_transportasi = "Inputan hanya boleh huruf dan spasi";
        }
    } 

    if(empty($_POST["noHp"]))
    {
        $error_noHp = "No HP tidak boleh kosong";
    }
    else
    {
        $noHp = cek_input($_POST["noHp"]);

        if(!is_numeric($noHp))
        {
            $error_noHp = 'No HP hanya boleh angka';
        }
    }

    if(empty($_POST["noTelp"]))
    {
        $error_noTelp = "No Telepon tidak boleh kosong";
    }
    else
    {
        $noTelp = cek_input($_POST["noTelp"]);

        if(!is_numeric($noTelp))
        {
            $error_noTelp = 'No Telepon hanya boleh angka';
        }
    }

    if (empty($_POST["email"]))
    {
        $error_email = "Email tidak boleh kosong";
    }
    else 
    {
        $email = cek_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error_email = "Format email invalid";
        }
    }

    if (empty($_POST["kps"]))
    {
        $error_kps= "Penerima KPS/PKH/KIP tidak boleh kosong";
    }
    else
    {
        $kps = cek_input($_POST["kps"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$kps))
        {
            $error_kps = "Inputan hanya boleh huruf dan spasi";
        }
    } 

    if (empty($_POST["noKps"]))
    {
        $error_noKps = "No KPS/PKH/KIP tidak boleh kosong, jika tidak ada ketik (-)";
    }
    else
    {
        $noKps = cek_input($_POST["noKps"]);
    }


    if (empty($_POST["kewarganegaraan"]))
    {
        $error_kewarganegaraan= "Kewarganegaraan tidak boleh kosong";
    }
    else
    {
        $kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
        if (!preg_match("/^ [a-zA-Z] *$/",$kewarganegaraan))
        {
            $error_kewarganegaraan = "Inputan hanya boleh huruf dan spasi";
        }
    } 

}

function cek_input($data){
    $data =  trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<div class="container">
<h1 class="alert alert-dark text-center mt-4">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <p class="alert alert-dark text-left mt-3"> REGISTRASI PESERTA DIDIK</p>

    <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Kode Formulir</label>
    <div class="col-sm-10">
    <input type="text" name="kodeform" class="form-control <?php echo ($error_kodeform !="" ? "is-invalid" : ""); ?>" 
    id="kodeform" placeholder="Kode Formulir" value="<?php echo $kodeform; ?>"><span class="warning"><?php echo $error_kodeform; ?></span>
    </div> 
    </div>

    <div class="form-group row">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
    <input type="text" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : ""); ?>" 
    id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span>
    </div>
    </div> 

    <div class="form-group row">
    <label for="jenisPendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
    <div class="col-sm-10">
    <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="jenisPendaftaran" id="jenisPendaftaran" value="Siswa Baru" checked> 
    <label for="jenisPendaftaran">Siswa Baru</label>
    </div>
    <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="jenisPendaftaran" id="jenisPendaftaran" value="Pindahan" checked> 
    <label for="jenisPendaftaran">Pindahan</label>
    </div>
    </div>
    </div>

    <div class="form-group row">
    <label for="tglMasuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
    <div class="col-sm-10">
    <input type="text" name="tglMasuk" class="form-control <?php echo($error_tglMasuk !="" ? "is-invalid" : ""); ?>" 
    id="tglMasuk" placeholder="Tanggal Masuk" value="<?php echo $tglMasuk; ?>"><span class="warning"><?php echo $error_tglMasuk; ?></span>
    </div>
    </div>

    <div class="form-group row">
    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
    <input type="text" name="nis" class="form-control <?php echo($error_nis !="" ? "is-invalid" : ""); ?>" id="nis"
    placeholder="NIS" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
    </div>
    </div>
    </div>
<br>
<br>
<br>

    <div class="form-group row">
    <label for="noPesertaUjian" class="col-sm-2 col-form-label">No Peserta Ujian </label>
    <div class="col-sm-10">
    <input type="text" name="noPesertaUjian" class="form-control <?php echo($error_noPesertaUjian !="" ? "is-invalid" : ""); ?>" id="noPesertaUjian"
    placeholder="No Peserta Ujian" value="<?php echo $noPesertaUjian; ?>"><span class="warning"><?php echo $error_noPesertaUjian; ?></span>
    </div>
    </div>
    </div>

    <div class="form-group row">
    <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah PAUD</label>
    <div class="col-sm-10">
    <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="paud" id="paud" value="Ya" checked> 
    <label for="paud">Ya</label>
    </div>
    <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="paud" id="paud" value="Tidak" checked> 
    <label for="paud">Tidak</label>
    </div>
    </div>
    </div>

    <div class="form-group row">
    <label for="tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
    <div class="col-sm-10">
    <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="tk" id="tk" value="Ya" checked> 
    <label for="tk">Ya</label>
    </div>
    <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="tk" id="tk" value="Tidak" checked> 
    <label for="tk">Tidak</label>
    </div>
    </div>
    </div>

    <div class="form-group row">
    <label for="noSkhun" class="col-sm-2 col-form-label">No SKHUN</label>
    <div class="col-sm-10">
    <input type="text" name="noSkhun" class="form-control <?php echo ($error_noSkhun !="" ? "is-invalid" : ""); ?>" 
    id="noSkhun" placeholder="No SKHUN Sebelumnya" value="<?php echo $noSkhun; ?>"><span class="warning"><?php echo $error_noSkhun; ?></span>
    </div> 
    </div>

    <div class="form-group row">
    <label for="noIjazah" class="col-sm-2 col-form-label">No Ijazah</label>
    <div class="col-sm-10">
    <input type="text" name="noIjazah" class="form-control <?php echo ($noIjazah !="" ? "is-invalid" : ""); ?>" 
    id="noIjazah" placeholder="No Ijazah Sebelumnya" value="<?php echo $noIjazah; ?>"><span class="warning"><?php echo $error_noIjazah; ?></span>
    </div> 
    </div>

    <div class="form-group row">
    <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
    <div class="col-sm-10">
    <input type="text" name="hobi" class="form-control <?php echo ($hobi !="" ? "is-invalid" : ""); ?>" 
    id="hobi" placeholder="Hobi" value="<?php echo $hobi; ?>"><span class="warning"><?php echo $error_hobi; ?></span>
    </div> 
    </div>

    <div class="form-group row">
    <label for="citaCita" class="col-sm-2 col-form-label">Cita-Cita</label>
    <div class="col-sm-10">
    <input type="text" name="citaCita" class="form-control <?php echo ($citaCita !="" ? "is-invalid" : ""); ?>" 
    id="citaCita" placeholder="Cita-Cita" value="<?php echo $citaCita; ?>"><span class="warning"><?php echo $error_citaCita; ?></span>
    </div> 
    </div>

    <div class="form-group row">
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>

    </form>

    </div>
</div>
</div>
</div>

<?php
echo "<h2>Hasil Input: </h2>";
echo "Kode Formulir = ".$kodeform;
echo "<br>";
echo "Tanggal = ".$tanggal;
echo "<br>";
echo "Jenis Pendaftaran = ".$jenisPendaftaran;
echo "<br>";
echo "Tanggal Masuk = ".$tglMasuk;
echo "<br>";
echo "NIS = ".$nis;
echo "<br>";
echo "No Peserta Ujian = ".$noPesertaUjian;
echo "<br>";
echo "PAUD = ".$paud;
echo "<br>";
echo "TK = ".$tk;
echo "<br>";
echo "No SKHUN = ".$noSkhun;
echo "<br>";
echo "No Ijazah = ".$noIjazah;
echo "<br>";
echo "Hobi = ".$hobi;
echo "<br>";
echo "Cita-cita = ".$citaCita;
echo "<br>";
?>

    </body>
</html>