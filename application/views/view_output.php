<html>

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
        <legend>Tampil Data Siswa</legend>

        <form method="POST">
            <table>
                <tr>
                    <th>Nama Siswa</th>
                        <td>:</td>
                        <td>
                            <?= $nama; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Nomor Induk Siswa</th>
                        <td>:</td>
                        <td>
                            <?= $nis; ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Kelas</th>
                        <td>:</td>
                        <td>
                            <?= $kls; ?>
                        </td>
                    </tr>
                    

                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>:</td>
                        <td>
                            <?= $tanggal_lahir; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Tempat Lahir</th>
                        <td>:</td>
                        <td>
                            <?= $tempat_lahir; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td>
                            <?= $alamat; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td>
                            <?= $jenis_kelamin; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Agama</th>
                        <td>:</td>
                        <td>
                            <?= $agama; ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" align="center">
                            <a href="<? base_url('review'); ?>">Kembali</a>
                    </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>