<?php 
	session_start();
    $host = "127.0.0.1";
	$user = "root"; 
	$pass = "csci201";
	$db = "filmflix"; 

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}
	$mysqli->set_charset('utf8');
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
		header("Location: home.php");
	}
    if (isset($_POST['login'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $sql = "SELECT users.name FROM users WHERE users.name = '" . $_POST['email'] . "' AND users.passwords ='" . $_POST['password'] . "'";
            $sql = $sql. ";";
            $results = $mysqli->query($sql);
            if ( !$results ) {
                echo $mysqli->error;
                $mysqli->close();
                exit();
            }
            if (empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
                $error = "Please enter email and password.";
            } elseif ( $results->num_rows > 0) {
                $_SESSION['logged_in'] = true;
                $_SESSION['email'] = $_POST['email'];
                header("Location: home.php");
            } else {
                $error = "Invalid email or password.";
            }

        }
    }
    $mysqli->close();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Filmflix is a movie app similar to the format of Netflix">

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <style>

        a {
            color: #fff;
            text-decoration: none;
        }

        .showcase {
            width: 100%;
            height: 100vh;
            position: relative;
            background: url('https://i.ibb.co/vXqDmnh/background.jpg') no-repeat center center/cover;
        }

        .showcase-content {
            position: relative;
            z-index: 2;
            width: 450px;
            height: 500px;
            background: rgba(0, 0, 0, 0.814);
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            text-align: left;
            padding: 60px 65px;
        }


        .formm {
            width: 100%;
        }


        .formm .info .box {
            margin-bottom: 30px;
            width: 100%;
            height: 50px;
            border-radius: 5px;
            border: none;
            padding: 15px;
            font-size: inherit;
        }

        .btn-primary {

            height: 50px;
            border-radius: 5px;
            background: red;
            color: #fff;
            font-size: inherit;
            font-weight: bold;
            border: none;
            cursor: pointer;
            outline: none;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.45);
            width: 100%;
            text-align: center;
        }

        input[type=email] {
            background: #343434;
        }

        input[type=password] {
            background: #343434;
        }

        .signup {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .signup p {
            margin-right: 15px;
        }
        
    </style>
</head>

<body>
    <header class="header">
        <a href="index.html" class="logo">
            <img src="assets/images/logos.png" width="50" height="22" alt="Filmflix home">
        </a>

    </header>
    <header class="showcase">
        <div class="showcase-content">
            <div class="formm">
                <form id="sign-in" action = "index.php" method="POST">
                    <h1>Sign In</h1>
                    <div class="info form-group">
                        <label for="email">Email</label>
                        <input class="box" type="email" id="email" placeholder="Email" name="email"> 
                        <small id="user-error" class="form-text text-danger"></small>
                        <label for="password">Password</label>
                        <input class="box" type="password" id="password" placeholder="Password" name="password">
                        <small id="password-error" class="form-text text-danger"></small>
                    </div>
                    <button role="button" type="submit" class="btn btn-primary" name="login">Login</button>
                    <div class="font-italic text-danger ml-sm-auto">
                        <?php 
                            if (!empty($error)) {
                                echo $error;
                            }
                        ?>
                    </div>
                </form>
            </div>
            <div class="signup">
                <p>New User?</p>
                <p>
                    <a href="sign.php">Sign up</a>
                </p>
            </div>
        </div>
    </header>

</body>

</html>

