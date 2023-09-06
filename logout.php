<?php 
	session_start();
	session_destroy();
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
            color: #82EEFD;
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
                <div id="wrapper">
                    <div id="main">
                        <div class="row">
                            <h1 class="col-12 mt-4 mb-4">Logout</h1>
                            <div class="col-12">You are logged out.</div>
                            <div class="col-12 mt-3">Click <a href="login.php">here</a> to login again.</div>
                         </div> 
                    </div>
                </div> 
        </div>
    </header>

</body>

</html>

2