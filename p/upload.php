<?php include("../config.php") ?>

<?php 
    if(isset($_POST['submit'])){
        $name       = $_FILES['file']['name'];
        $title       = $_FILES['file']['name'];
        $yess       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        if(isset($name) and !empty($name)){
            $location = '../files/';      
            if(move_uploaded_file($temp_name, $location.$name)){
              $name = '/files/' . $name;
            



              if ($extension == "mp4") {
                $type = "video";
              }
              else {
                $type = "image";
              }

              echo $extension;

            echo $type;


              
            $title = str_replace('.png', '', $title);
            $title = str_replace('.jpg', '', $title);
            $title = str_replace('.jpeg', '', $title);
            $title = str_replace('.mp4', '', $title);
            

              $query = "INSERT INTO files (id, title, filename, author, date_created, public, file_type) VALUES ('', ?, ?, 'waterboi', '', 'public', ?)";
              $stmt = $pdo->prepare($query);
              $stmt->execute([$title, $name, $type]);
              header("Location: /");

            }
        } else {
            echo 'You should select a file to upload !!';
        }
    }
?>
