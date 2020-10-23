               <?php
                $errname = $erremail = $errweb = $errgender = "";
                $name = $email = $web = $gender = "";

                   if($_SERVER["REQUEST_METHOD"] == "POST"){

                    if(empty($_POST["username"])){
                     $errname = "<span style='color:red;'>Name is required</span>";   
                    }else{
                        $name = validate($_POST["username"]);
                    }
                    if(empty($_POST["email"])){
                     $erremail = "<span style='color:red;'>Email is required</span>"; 

                     }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ 
                        $erremail ="<span style='color:red;'>Invalid email formate</span>";

                    }else{
                        $email = validate($_POST["email"]);
                    }
                    if(empty($_POST["web"])){
                     $errweb = "<span style='color:red;'>Web is required</span>";

                     }elseif(!filter_var($_POST["web"], FILTER_VALIDATE_URL)){
                        $errweb ="<span style='color:red;'>Invalid url formate</span>";

                    }else{
                        $web = validate($_POST["web"]);
                    }
                    if(empty($_POST["gender"])){
                     $errgender = "<span style='color:red;'>Gender is required</span>";   
                    }else{
                        $gender = validate($_POST["gender"]);
                    }

                    $comment    = validate($_POST["comment"]);

                   }

                   function validate($data){
                        $data = trim($data);
                        $data = htmlspecialchars($data);
                        $data = stripcslashes($data);
                        return $data;

                   }

                ?>

<!doctype html>
<html>

    <head>
        <title>PHP Fundamental Practice</title>

        <style>
            .phpcode{width: 900px; background-color: #ddd; margin: 0 auto;}
            .header-section, .footer-section{background-color: #444; color: #fff; text-align: center; padding: 20px;}
            .main-content{ min-height: 600px; padding: 20px;}
            .header-section h2, .footer-section h2{margin: 0;}
        </style>

    </head>

    <body>
        <section class="phpcode">
            <div class="header-section">
                <h2>PHP Fundamental Section</h2>
            </div>