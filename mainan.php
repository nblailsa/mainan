<!-- Pie Chart -->
<div class="col-xl-2 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div 
            class="card-header py-3 d-flek flek-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Kategori Buku</h6>
        </div>
        <?php 
        include '../koneksi.php';
        $no = 1;
        $data = "SELECT * FROM kategoribuku";
        $result = mysqli_query($koneksi, $data);
        while ($row = mysqli_fetch_assoc($result)) { ?> 
        <!-- Card Body -->
        <div class="card-body">
            <a href="kategori.php?nama_kategori=<?php echo $row['nama_kategori']; ?>"
            class="btn btn-primary">
        <?= $row['nama_kategori']; ?>
    </a>
        </div>
        <?php } ?>
    </div>
</div>




<?php 
include '../koneksi.php';
if (isset($_GET['nama_kategori'])) {
    $nama_kategori = $_GET['nama_kategori'];
} else {
    die("Error, Data Tidak Ditemukan");
}
$data = mysqli_query($koneksi, "SELECT * FROM buku, kategoribuku WHERE buku.id_kategori=kategoribuku.id_kategori AND
nama_kategori= '$nama_kategori' ");
while ($d = mysqli_fetch_array($data)) {
    $id_buku = $d['id_buku']; // Ambil id_buku untuk digunakan dalam query rating

    // Query untuk mengambil rating hanya untuk buku tertentu
    $queryRating = "SELECT rating FROM ulasanbuku WHERE id_buku = $id_buku";
    $resultRating = mysqli_query($koneksi, $queryRating);

    $totalRating = 0;
    $jumlahRating = 0;

    // Loop untuk menghitung jumlah total rating dan jumlah rating
    while ($rowRating = mysqli_fetch_assoc($resultRating)) {
        $totalRating += $rowRating['rating'];
        $jumlahRating++;
    }
}
?>