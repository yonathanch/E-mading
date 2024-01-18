<?php
include("template/header.php");
include ("config_query.php");
$db = new database() ;
$article_data= $db->show_data();
?>

      <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manage /</span> Article</h4>
              <!-- Responsive Table -->
              <div class="card">
                <div class="card-header">
                  <div class="row">
                      <div class="col-lg-6">
                          <h5>List Of Articles</h5>
                      </div>
                      <div class="col-lg-6" >
                          <div class="float-end">
                             <a href="add_data.php" class="btn btn-info">
                                <i class="bx bx-plus" ></i>
                                  Add Data
                             </a>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="card-body" >
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th class= "bg-info text-center text-white">No</th>
                        <th class= "bg-info text-center text-white">Header Image</th>
                        <th class= "bg-info text-center text-white">Article Title</th>
                        <th class= "bg-info text-center text-white">Published Status</th>
                        <th class= "bg-info text-center text-white">Update Date</th>
                        <th class= "bg-info text-center text-white">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        if($article_data == '0') {
                            echo "<tr> <td>Data not available!! </td> </tr>";
                        } else{
                          $no = 1;  
                          foreach($article_data as $row) {
                      ?>  
                            <tr>
                              <td class="text-center" ><?= $no++; ?> </td>
                              <td class="text-center">
                                <a href="../files/<?= $row['header']; ?>" target="_blank">
                                <img src="../files/<?= $row['header']; ?>" alt="img" class="img-thumnail rounded" style="max-width:100px" >
                                </a>

                              </td>
                              <td class="text-center"><?= $row['judul_artikel']; ?></td>
                              <td class="text-center"><?= $row['status_publish']; ?></td>
                              <td class="text-center">
                                  <?php  
                                    if($row['updated_at'] == '') {
                                      echo date ('d M Y H:i:s', strtotime($row['created_at']));
                                    }else{
                                      echo date ('d M Y H:i:s', strtotime($row['updated_at']));
                                    }
                                  ?>  
                              </td>
                              <td class="text-center">
                                  <a href="edit.php?id=<?= $row['id_artikel']; ?>" class="btn btn-sm btn-warning">Update</a>
                                  <a href="action_process.php?id=<?= $row['id_artikel']; ?>&action=delete" class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete it?');">Delete</a>
                              </td>
                            </tr>
                    <?php }
                     } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->

            <?php
include("template/footer.php");
?>