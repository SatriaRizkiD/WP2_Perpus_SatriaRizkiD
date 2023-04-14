<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7 | Review</title>
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
        <legend>Output Data Siswa</legend>

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
                            <a href="<? base_url('Review'); ?>">Kembali</>
                    </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>