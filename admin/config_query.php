<?php
//create a class with the name database
class database{
    var $host = 'localhost';
    var $username = "id21817542_emading";
    var $password = "Jewepemading123.";
    var $database = "id21817542_db_emading";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        if(mysqli_connect_errno()){
            echo "database connection failed". mysqli_connect_error();
        }
    }

    //get data tb_users
    public function get_data_users($username)
    {
        $data = mysqli_query($this->koneksi,"SELECT * FROM tb_users WHERE username ='$username'");
        return $data;
    }


      //get data tb_articles halaman landing
      public function show_data_landing()
      {
          $data = mysqli_query($this->koneksi,"SELECT id_artikel, header, judul_artikel, isi_artikel, status_publish, tba.created_at, 
          tba.updated_at, name, tba.id_users FROM tb_articles tba join tb_users tbu on tba.id_users = tbu.id_users where status_publish
          ='publish'");
          
         
          if($data) {
              if(mysqli_num_rows ($data) > 0) {
                      while ($row = mysqli_fetch_array($data)){
                          $results[] = $row;
                      }
              } else {
                  $results = '0';
              }
          }
  
              return $results ;
       
      }

    //get data tb_articles halaman admin
    public function show_data()
    {
        $data = mysqli_query($this->koneksi,"SELECT id_artikel, header, judul_artikel, isi_artikel, status_publish, tba.created_at, 
        tba.updated_at, name, tba.id_users FROM tb_articles tba join tb_users tbu on tba.id_users = tbu.id_users");
        
       
        if($data) {
            if(mysqli_num_rows ($data) > 0) {
                    while ($row = mysqli_fetch_array($data)){
                        $results[] = $row;
                    }
            } else {
                $results = '0';
            }
        }

            return $results ;
     
    }

    public function add_data($header, $judul_artikel, $isi_artikel, $status_publish, $id_users)   {
        $datetime = date("Y-m-d H:i:s");
        $insert = mysqli_query($this->koneksi, "INSERT into tb_articles (header, judul_artikel, isi_artikel, status_publish, id_users, 
        created_at) values ('$header','$judul_artikel','$isi_artikel','$status_publish','$id_users','$datetime')") 
        or die (mysqli_error($this->koneksi)); 

        return $insert;
    }

    //UPDATE
    public function get_by_id($id_artikel){
        $query = mysqli_query($this->koneksi,"SELECT id_artikel, header, judul_artikel, isi_artikel, status_publish, tba.created_at, 
        tba.updated_at, name, tba.id_users FROM tb_articles tba join tb_users tbu on tba.id_users = tbu.id_users where id_artikel =
        '$id_artikel' ") or die (mysqli_error($this->koneksi)); 
        return $query->fetch_array();
    }

    public function update_data($header, $judul_artikel, $isi_artikel, $status_publish, $id_artikel, $id_users) {
        $datetime = date("Y-m-d H:i:s");
        if($header== 'not_set'){
            $query = mysqli_query($this->koneksi,"UPDATE tb_articles set judul_artikel = '$judul_artikel', 
            isi_artikel = '$isi_artikel', status_publish = '$status_publish', id_users = '$id_users', updated_at = '$datetime' 
            where id_artikel = '$id_artikel'") or die (mysqli_error($this->koneksi)); 
            return $query;

        }else{
            $query = mysqli_query($this->koneksi,"UPDATE tb_articles set header = '$header', judul_artikel = '$judul_artikel', 
            isi_artikel = '$isi_artikel', status_publish = '$status_publish', id_users = '$id_users', updated_at = '$datetime' 
            where id_artikel = '$id_artikel'") or die (mysqli_error($this->koneksi)); 
             return $query;
        }  
    }
    
    public function delete_data($id_artikel){
        $query = mysqli_query($this->koneksi,"DELETE from tb_articles where id_artikel = '$id_artikel'")or die (mysqli_error($this->koneksi)); 
        return $query;

    }

    //paganation detail.php
    public function get_previous_article_id($current_article_id) {
        $query = "SELECT id_artikel FROM tb_articles WHERE id_artikel < ? AND status_publish = 'publish' ORDER BY id_artikel DESC LIMIT 1";
        $params = array($current_article_id);

        $result = $this->execute_query($query, $params);
        $row = $result->fetch_assoc();

        return $row ? $row['id_artikel'] : null;
    }

    public function get_next_article_id($current_article_id) {
        $query = "SELECT id_artikel FROM tb_articles WHERE id_artikel > ? AND status_publish = 'publish' ORDER BY id_artikel ASC LIMIT 1";
        $params = array($current_article_id);

        $result = $this->execute_query($query, $params);
        $row = $result->fetch_assoc();

        return $row ? $row['id_artikel'] : null;
    }

    private function execute_query($query, $params = array()) {
        $stmt = $this->koneksi->prepare($query);
        
        // Bind parameters
        if (!empty($params)) {
            $types = str_repeat('s', count($params)); // Assuming all parameters are strings
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        return $result;
    }
}


?>