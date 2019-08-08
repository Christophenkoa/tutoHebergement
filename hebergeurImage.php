<?php

$error = 1;

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){


        if ($_FILES['image']['size'] <= 3000000) {
            $imagInfo = pathinfo($_FILES['image']['name']);
            $extension = $imagInfo['extension'];
            $extensionArray = array('png' , 'jpg' , 'jpeg' , 'gif');


            if(in_array($extension, $extensionArray)) {

                $destination =  'upload/'.time().basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'] ,$destination);
                $error = 0;
            }
        }
    } 

?>

<!DOCTYPE html >
<html>
    <head>
        <meta charset = "utf-8">
        <title>hebergeurImage</title>
    </head>

    <body>
        <h2> welcome sur notre hebergeur </h1><br/>
            <form method = "POST" action = "hebergeurImage.php" enctype = "multipart/form-data">
            <table>
                <tr>
                    <td><input type = "file" required name ="image" /><br/> 
                </tr>
                <tr>
                    <td><button type = "submit" name = "send" >SEND</button></td>
                </tr> 
            </table>
        </form>
            <?php

                if(isset($error) && $error == 0) {
                    echo'<img src = "'.$destination.'"/>';
                }

            ?>
    </body>
</html>