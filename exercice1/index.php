<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nom</label>
        <input type="text" name="name"  required placeholder="entrer votre nom"><br><br>
        <label for="">email</label>
        <input type="text" name="email" requored placeholder="john.doe@example.com"><br><br>
        <label for="">password</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $email = "john.doe@example.com";

        if(!$name   &&  filter_var($email, FILTER_VALIDATE_EMAIL) && ctype_alnum($password) == true || strlen($password) < 8){
            echo " vous êtes connecté!!!!";
        }
        else{
          echo" error";
        }

   
      
    } 
    ?>
</body>
</html>