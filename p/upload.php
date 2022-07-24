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
            



              if ($extension == "mp4" || $extension == "mov" || $extension == "mkv" || $extension == "avi") {
                $type = "video";
              }
              else {

                $type = "image";

                }

                if($extension == "php" || $extension == "html") {
                  die("lol you cant upload that");
                }

                echo $extension . "<br>" . $type;
                

              // use this for when the upload code wont work
               //die();
            $title = str_replace('.png', '', $title);
            $title = str_replace('.jpg', '', $title);
            $title = str_replace('.jpeg', '', $title);
            $title = str_replace('.mp4', '', $title);
            $title = str_replace('.avi', '', $title);
            $title = str_replace('.mov', '', $title);
            $title = str_replace('.mkv', '', $title);
            
            session_start();

            $author = $_SESSION['username'];

              $query = "INSERT INTO files (id, title, filename, author, date_created, public, file_type) VALUES ('', ?, ?, ?, '', 'public', ?)";
              $stmt = $pdo->prepare($query);
              $stmt->execute([$title, $name, $author, $type]);
              header("Location: /");

            }
        } else {
            echo 'You should select a file to upload !!';
        }
    }
?>
