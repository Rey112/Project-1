<?php

      $email = filter_input(INPUT_POST, 'email');
      $password = filter_input(INPUT_POST, 'password');

    if (strpos($email, '@') == false ) {
        echo 'Email must contain an @ character';
    }

    if (empty($password)) {
            echo 'password is required';
    } elseif (strlen($password) <= 8){
        echo 'password must be 8 characters';
        echo "<br>";
    } else {
        echo 'password is valid';
        echo "<br>";
    }

    function input_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
?>

<html>
<head><title>Display Login Information</title></head>
<body>

    <h2>Login Inputs</h2>
    <div>
        Email: <?php echo $email; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>
    <a href="question.html">Click Next to go to Questions</a>
</body>
</html>



