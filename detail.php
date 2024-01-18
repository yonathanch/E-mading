<?php
include('template/header.php');
include('admin/config_query.php');
$db = new database();
$id_artikel = $_GET['id'];
if (!empty($id_artikel)){
    $data = $db->get_by_id($id_artikel);
    if(empty($data)){
        echo "<script>alert('article id not found!!');document.location.href='index.php';</script>";
    }elseif($data['status_publish']!='publish'){
        echo "<script>alert('The article you selected is not yet available!');document.location.href='index.php';</script>";
    }

}   else{
        echo "<script>alert('You havent selected an article yet!!');document.location.href='index.php';</script>";
}

// Dapatkan ID artikel sebelum dan sesudahnya
$previousArticleId = $db->get_previous_article_id($id_artikel);
$nextArticleId = $db->get_next_article_id($id_artikel);
?>
?>

    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-post">
                        <div class="post-header mb-5 text-center">
                            <div class="meta-cat">
                                <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                    href="index.php">Announcement</a>
                            </div>
                            <h2 class="post-title mt-2">
                               <?= $data['judul_artikel']; ?>
                            </h2>

                            <div class="post-meta">
                                <span class="text-uppercase font-sm letter-spacing-1 mr-3">by <?= $data['name']; ?></span>
                                <span class="text-uppercase font-sm letter-spacing-1">
                                    <?php  
										if($data['updated_at'] == '') {
										echo date ('d M Y H:i:s', strtotime($data['created_at']));
										}else{
										echo date ('d M Y H:i:s', strtotime($data['updated_at']));
										}
                                  	?></span>
                            </div>
                            <div class="post-featured-image mt-5">
                                <img src="files/<?= $data['header']; ?>" class="img-fluid w-100" alt="featured-image">
                            </div>
                        </div>
                        <div class="post-body">
                            <div class="entry-content">
                            <?= $data['isi_artikel']; ?>
                            </div>

                            <div class="post-tags py-4">
                                <a href="#">#Announcement</a>
                                <a href="#">#E-mading</a>
                                <a href="#">#JeWePe</a>
                            </div>
                        </div>
                    </div>

                
                    <nav class="post-pagination clearfix border-top border-bottom py-4">
                        <div class="prev-post">
                            <?php if ($nextArticleId) : ?>
                                <a href="detail.php?id=<?= $nextArticleId; ?>">
                                    <span class="text-uppercase font-sm letter-spacing">Next</span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="next-post">
                            <?php if ($previousArticleId) : ?>
                                <a href="detail.php?id=<?= $previousArticleId; ?>">
                                    <span class="text-uppercase font-sm letter-spacing">Previous</span>
                                </a>
                            <?php endif; ?>
                        </div>
                </nav>
                
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-5 mt-lg-0">
                            <div class="sidebar-widget about mb-5 text-center p-3 ">
                                <div class="about-author">
                                    <img src="files/profil/profil.jpg" alt="" class="img-fluid">
                                </div>
                                <h4 class="mb-0 mt-4">Yonathan Ch</h4>
                                <p>Junio Web Programmer</p>
                                <p>I'm Yonathan, My role is to manage the Jewepe e-mading website</p>
                            </div>

                            <div class="sidebar-widget follow mb-5 text-center">
                                <h4 class="text-center widget-title">Follow Other JeWePe E-Mading Accounts</h4>
                                <div class="follow-socials">
                                    <a href="https://github.com/yonathanch"><i class="ti-github"></i></a>                               
                                    <a href="https://www.linkedin.com/in/yonathan-christianto-005935276/"><i class="ti-linkedin"></i></a>
                                    <a href="https://www.instagram.com/natann.ch?igsh=MTJkam5sMzdlazZqNQ=="><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
include('template/footer.php');
?>