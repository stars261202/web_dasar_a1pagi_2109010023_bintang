<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahan Mahasiswa</title>
</head>
<body>
<h1>Form Edit Mahasiswa</h1>
    <a href="index.php"> Back To Dashboard</a>
    <table>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input type="number" name="npm" id="">
            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td><input type="text" name="nama_mahasiswa"></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>
                <select name="prodi" id="">
                    <option value="" selected>Pilih Program Studi</option>
                    <option value="si">Sistem Informasi</option>
                    <option value="ti">Teknologi Informasi</option>
                    <option value="ds">Data Sains</option>
                </select>
            </td>
        </tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jk" id="">
                    <option value="" selected>Pilih Jenis Kelamin</option>
                    <option value="lk">Laki laki</option>
                    <option value="pr">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <input type="date" name="tgl_lahir" id="">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>
                <select name="ps" id="">
                    <option value="" selected>Pilih Program Studi</option>
                    <option value="si">Sistem Informasi</option>
                    <option value="ti">Teknik Informasi</option>
                    <option value="ds">Data Sains</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan = "3" style = "text-align-right">
            <a href="../Pertemuan 5/">
            <button>Kembali</button> 
            </a>

            <button>Simpan</button>
            </td>
        </tr>
    </table>
</body>
</html>