<!DOCTYPE html>

<head>
    <title>Review Materi MVC</title>
</head>

<style>
    fieldset {
        width: 30%;
        margin: 20px auto;
        border-radius: 5px;
    }
    select{
        width: 100%
    }
</style>

<body>
<fieldset>
        <legend>Menginput Data Siswa</legend>
        <form action="<?= base_url('review/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th>Nama Siswa</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" id="nama" placeholder="Input Data">
                        </td>
                    </tr>

                    <tr>
                        <th>Nomor Induk Siswa</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nis" id="nis" placeholder="Input Data">
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Kelas</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="kls" id="kls" placeholder="Input Data">

                        </td>
                    </tr>
                    

                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                        </td>
                    </tr>

                    <tr>
                        <th>Tempat Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Input Data">
                        </td>
                    </tr>

                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" id="alamat" cols="18" rows="3" placeholder="Input Data"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                            <input type="radio" name="jenis_kelamin" value="laki-laki" /> Perempuan</label>
                        </td>
                    </tr>

                    <tr>
                        <th>Agama</th>
                        <td>:</td>
                        <td>
                            <select name="agama" id="agama">
                                <option>-- PILIH --</option>
                                <option value="Islam"> Islam</option>
                                <option value="Kristen"> Kristen</option>
                                <option value="Katolik"> Katolik</option>
                                <option value="Budha"> Budha</option>
                                <option value="Hindu"> Hindu</option>
                                <option value="Protestan"> Protestan</option>
                                <option value="Khonghucu"> Khonghucu</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" align="center">
                        <hr>
                            <button type="Submit">Simpan</button>
                        </td>
                    </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>