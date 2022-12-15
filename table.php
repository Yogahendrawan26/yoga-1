<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border : 1px solid;
            text-align: left;
        }
        table{
            border-collapse: collapse;
            font-family: arial, sans-serif;
        }
        
    </style>
</head>
<body>
    <?php
        $mahasiswa=[
            [
                "nama"=>"Yoga",
                "NIM"=>"20200040156",
                "Jurusan"=>"Teknik Informatika",
                "Nilai"=>80,
            ],
            [
                "nama"=>"Asep",
                "NIM"=>"20200040151",
                "Jurusan"=>"Teknik Informatika",
                "Nilai"=>75,
            ],
            [
                "nama"=>"febri",
                "NIM"=>"20200040158",
                "Jurusan"=>"Teknik Informatika",
                "Nilai"=>70,
            ],
        ];
    ?>
    <table >
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td ><?= $mhs['nama'];?></td>
                <td><?= $mhs['NIM'];?></td>
                <td><?= $mhs['Jurusan'];?></td>
                <td><?= $mhs['Nilai'];?></td>
                <td><?php if ($mhs['Nilai'] > 60){
                    echo 'LULUS';
                }else{
                    echo 'TIDAK';
                }
                 ?></td>
            </tr>
        <?php endforeach;?>
    </table>
    
</body>
</html>
