<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Datatable -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    <title>Menampilkan Data Dengan PHP Ajax</title>
</head>
<body>
    <div class="table-responvise">
        <table id="data" class="table table-striped table-bordered" style="width:100">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Siswa</td>
                    <td>Alamat</td>
                    <td>Jurusan</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Masuk</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'koneksi.php';
                    $no = 1;
                    $query = "SELECT * FROM tbl_siswa ORDER BY id DESC";
                    $dewan1 = $db1->prepare($query);
                    $dewan1->execute();
                    $res1 = $dewan1->get_result();
                    while($row = $res1->fetch_assoc()){
                        $id = $row['id'];
                        $nama_siswa = $row['nama_siswa'];
                        $alamat = $row['alamat'];
                        $jurusan = $row['jurusan'];
                        $jenis_kelamin = $row['jenis_kelamin'];
                        $tgl_masuk = $row['tgl_masuk'];
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama_siswa; ?></td>
                    <td><?php echo $alamat; ?></td>
                    <td><?php echo $jurusan; ?></td>
                    <td><?php echo $jenis_kelamin; ?></td>
                    <td><?php echo $tgl_masuk; ?></td>
                    <td><button style="font-size : 11px;" class="btn btn-primary" id="detail" name="detail" title="Lihat Detail">
                    <i class="fa fa-search"></i>
                    </button></td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>


    </div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#data').DataTable();
    });
</script>
    
</body>
</html>