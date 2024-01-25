<?php
    include('template/header.php')
?>
 
 
        <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> <a href="index.php"> Manage Articles </a> /</span> Add Data</h4>

              <div class="row">

                <!-- Form controls -->
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-header" >
                        <h3>Add New Article</h3>
                    </div>
                    <div class="card-body">
                        <form action="action_process.php?action=add" method="POST" enctype="multipart/form-data">
                            <div class="row" >
                                <div class="col-lg-9">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Article Title*</label>
                                        <input
                                            type="text"
                                            name="judul_artikel"
                                            class="form-control"
                                            id="exampleFormControlInput1"
                                            placeholder="article-title.." required/>
                                    </div>
                                    <div class="mb-3" >
                                        <label for="exampleFormControlTextarea1" class="form-label">Content of the Article</label>
                                        <textarea class="form-control summernote" name="isi_artikel" id="exampleFormControlTextarea1" rows="3"
                                        required></textarea>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="col-md mb-3">
                                        <small class="form-label d-block">Status Publish*</small>
                                        <div class="form-check mt-3">
                                            <input name="status_publish" class="form-check-input" type="radio" value="publish" id="defaultRadio1">
                                            <label class="form-check-label" for="defaultRadio1"> Publish </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="status_publish" class="form-check-input" type="radio" value="draft" id="defaultRadio2" checked required>
                                            <label class="form-check-label" for="defaultRadio2"> Draft </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="uploadHeader" class="form-label">Header Image*</label>
                                        <input
                                            type="file"
                                            name="header"
                                            class="form-control"
                                            id="uploadHeader"
                                            required
                                        />
                                        <small class="text-danger" > Max Size 10MB, ext. png, jpg, jpeg</small>
                                    </div>
                                </div>
                            </div> 
                            <hr>
                            <div class="mb3 float-end">
                                <a href="index.php" class="btn btn-danger" >Cancel</a>
                                <button type="submit" class="btn btn-primary " >Submit</button>
                            </div>   
                        </form>
                    </div>
                  </div>
                </div>

              
              </div>
            </div>
            <!-- / Content -->

<?php
    include('template/footer.php')
?>