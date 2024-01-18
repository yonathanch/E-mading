<?php
include('config_query.php');
$db = new database();
session_start();
$id_users = $_SESSION['id_users'];
$action = $_GET ['action'];

if ($action == "add") {
    //cek file sudah dipilih atau belum
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    // die;

    if($_FILES ["header"]["name"] != ''){
        $tmp = explode('.', $_FILES["header"]["name"]); //memecah nama file dan extension
        $ext = end($tmp); //mengambil extension
        $filename = $tmp[0]; //mengambil nilai nama file tanpa extension
        $allowed_ext = array("jpg", "png", "jpeg"); //extension file yang diizinkan

        if(in_array($ext,$allowed_ext)){ //cek validasi extension
            if($_FILES ["header"]["size"] <= 10240000){ //cek ukuran gambar max 10mb
                $name = $filename . '_' . rand() . '.' . $ext; //rename nama file gambar
                $path = "../files/" . $name; //lokasi upload file
                $uploaded = move_uploaded_file($_FILES["header"]["tmp_name"], $path); //memindahkan file
                
                if($uploaded){
                    $insertData = $db->add_data($name, $_POST["judul_artikel"], $_POST["isi_artikel"], $_POST["status_publish"], 
                    $id_users);  //query insert data 
                    
                    if($insertData){
                        echo "<script>alert ('data added successfully');document.location.href = 'index.php'; </script>";
                    }else{
                        echo "<script>alert ('upss Sorry data failed to add');document.location.href = 'index.php'; </script>";
                    }
                }else{
                    echo "<script>alert ('upss Failed to upload file');document.location.href = 'add_data.php'; </script>";
                }

            }else{
                echo "<script>alert ('upss image size is more than 10mb');document.location.href = 'add_data.php'; </script>";
            }
        }else{
            echo "<script>alert ('The file uploaded is not an permitted extension');document.location.href = 'add_data.php'; </script>";
        }

    } else{
        echo "<script>alert ('please select an image!');document.location.href = 'add_data.php'; </script>";
    }

} else if ($action == "update") {
    //disini operasi edit data
    $id_artikel = $_POST['id_artikel'];
    if(!empty($id_artikel)){ //cek apakah id artikel tersedia

        if($_FILES ['header']['name']!=''){ // cek apakah melakukan upload file

            $data = $db->get_by_id($id_artikel);

            //operasi hapus file
            if(file_exists('../files/'.$data['header']) && $data['header']) 
                unlink('../files/'.$data['header']);

                $tmp = explode('.', $_FILES["header"]["name"]); //memecah nama file dan extension
                $ext = end($tmp); //mengambil extension
                $filename = $tmp[0]; //mengambil nilai nama file tanpa extension
                $allowed_ext = array("jpg", "png", "jpeg"); //extension file yang diizinkan
        
                if(in_array($ext,$allowed_ext)){ //cek validasi extension
                    if($_FILES ["header"]["size"] <= 10240000){ //cek ukuran gambar max 10mb
                        $name = $filename . '_' . rand() . '.' . $ext; //rename nama file gambar
                        $path = "../files/" . $name; //lokasi upload file
                        $uploaded = move_uploaded_file($_FILES["header"]["tmp_name"], $path); //memindahkan file
                        
                        if($uploaded){
                            $updateData = $db->update_data($name, $_POST["judul_artikel"], $_POST["isi_artikel"], $_POST["status_publish"], 
                           $_POST['id_artikel'], $id_users);  //query update data 
                            
                            if($updateData){
                                echo "<script>alert ('data changed successfully');document.location.href = 'index.php'; </script>";
                            }else{
                                echo "<script>alert ('upss Sorry data failed to update');document.location.href = 'index.php'; </script>";
                            }
                        }else{
                            echo "<script>alert ('upss Failed to upload file');document.location.href = 'edit.php?id". $id_artikel ."';
                                </script>";
                        }
        
                    }else{
                        echo "<script>alert ('upss image size is more than 10mb');document.location.href = 'edit.php?id". $id_artikel ."'; </script>";
                    }
                }else{
                    echo "<script>alert ('The file uploaded is not an permitted extension');document.location.href = 'add_data.php'; </script>";
                }


            //eksekusi yang upload file
        }else{
            $updateData = $db->update_data('not_set',$_POST['judul_artikel'],$_POST['isi_artikel'],$_POST['status_publish'],
            $_POST['id_artikel'],$id_users);
            if($updateData){
                echo "<script>alert ('data changed successfully!');document.location.href = 'index.php'; </script>";
            }else{
                echo "<script>alert ('data failed to change!');document.location.href = 'index.php'; </script>";
            }
        }

    } else{
        echo "<script>alert ('You havent selected an article yet');document.location.href = 'index.php'; </script>";
    }

} elseif ($action == "delete") {
    //disini operasi delete data

    $id_artikel = $_GET['id'];
    if(!empty($id_artikel)){
      $data = $db->get_by_id($id_artikel);

      //operasi hapus file
      if(file_exists('../files/'.$data['header']) && $data['header']) 
      unlink('../files/'.$data['header']);
    
        $deleteData = $db->delete_data($id_artikel);

        if($deleteData){
            echo "<script>alert ('data deleted successfully!');document.location.href = 'index.php'; </script>";
        }else{
            echo "<script>alert ('data failed to delete!');document.location.href = 'index.php'; </script>";
        }

    }else{
        echo "<script>alert ('You haven't selected an article yet!');document.location.href = 'index.php'; </script>";

    }

} else{
    echo "<script>alert ('you do not get access to this operation!');document.location.href = 'index.php'; </script>";
}

?>