<?php
include('template/header.php');
include('admin/config_query.php');
$db = new database();
$data_artikel = $db->show_data_landing();
?>

<section class="slider mt-4">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                    $counter = 0;
                    foreach ($data_artikel as $row) {
                        $activeClass = ($counter == 0) ? 'active' : '';
                        $isi_artikel = $row['isi_artikel'];

                        // Potong isi artikel jika lebih dari 100 kata
                        if (str_word_count($isi_artikel) > 100) {
                            $isi_artikel = implode(' ', array_slice(str_word_count($isi_artikel, 2), 0, 100)) . '...';
                        }
                ?>
                <div class="carousel-item <?= $activeClass; ?>">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="slider-item">
                                <div class="slider-item-content">
                                    <div class="post-thumb mb-4">
                                        <a href="detail.php?id=<?= $row['id_artikel'];?>">
                                            <img src="files/<?= $row['header']; ?>" alt="" class="img-fluid" style="max-width:100%">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-item bg-light">
                                <div class="slider-item-content">
                                    <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">announcement</span>
                                    <h3 class="post-title mt-1"><a href="detail.php?id=<?= $row['id_artikel'];?>"><?= $row['judul_artikel']; ?> </a></h3>
                                    <span class="text-muted text-capitalize"> 
									<?php  
										if($row['updated_at'] == '') {
										echo date ('d M Y H:i:s', strtotime($row['created_at']));
										}else{
										echo date ('d M Y H:i:s', strtotime($row['updated_at']));
										}
                                  	?></span>
                                    <hr>
                                    <div class="article-content">
                                        <?= $isi_artikel; ?>
                                    </div>
                                    <p>
                                        <a href="detail.php?id=<?= $row['id_artikel'];?>" style="color: tan;">Read more..</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $counter++;
                    }
                ?>
            </div>

            <!-- Navigasi Kiri dan Kanan -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<?php
$articlesPerPage = 8; // Jumlah artikel per halaman
$totalArticles = count($data_artikel); // Total jumlah artikel
$totalPages = ceil($totalArticles / $articlesPerPage); // Jumlah total halaman

// Mendapatkan halaman yang sedang aktif
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Mengatur batasan indeks untuk menampilkan artikel
$startIndex = ($currentPage - 1) * $articlesPerPage;
$endIndex = $startIndex + $articlesPerPage;

// Mengatur batasan loop untuk menampilkan artikel sesuai dengan halaman
?>
<div class="container">
    <div class="row">
        <?php for ($i = $startIndex; $i < $endIndex && $i < $totalArticles; $i++) { 
            $row = $data_artikel[$i];
        ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <article class="post-grid mb-5">
                    <a class="post-thumb mb-4 d-block" href="detail.php?id=<?= $row['id_artikel'];?>">
                        <img src="files/<?= $row['header']; ?>" alt="" class="img-fluid w-100">
                    </a>
                    <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">Announcement</span>
                    <h3 class="post-title mt-1"><a href="detail.php?id=<?= $row['id_artikel'];?>"><?= $row['judul_artikel']; ?></a></h3>
                    <span class="text-muted letter-spacing text-uppercase font-sm">
                        <?php
                        if ($row['updated_at'] == '') {
                            echo date('d M Y H:i:s', strtotime($row['created_at']));
                        } else {
                            echo date('d M Y H:i:s', strtotime($row['updated_at']));
                        }
                        ?>
                    </span>
                </article>
            </div>
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="pagination mt-5 pt-4">
                <ul class="list-inline">
                    <?php for ($page = 1; $page <= $totalPages; $page++) { ?>
                        <li class="list-inline-item <?= ($page == $currentPage) ? 'active' : ''; ?>">
                            <a href="?page=<?= $page; ?>"><?= $page; ?></a>
                        </li>
                    <?php } ?>
                    <li class="list-inline-item"><a href="?page=<?= ($currentPage < $totalPages) ? $currentPage + 1 : $totalPages; ?>" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php
include('template/footer.php');
?>