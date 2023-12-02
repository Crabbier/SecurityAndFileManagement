<!DOCTYPE html>
<html lang="en" id="index">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Revolution | Admin</title>
    <link rel="stylesheet" href="css/styles2.css"/>
    <link rel="shortcut icon" href="../images/Logo4R.png" type="image/x-icon" />
    <!--  Add our Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--  Add our custom CSS  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="./css/styles2.css">
</head>
<body>
    <header>
        <section id="socialMediaHeader">
            <div class="socialMediaHeader">
                <p>4Revolution</p>
                <img src="images/facebook.png" height="20" alt="Facebook logo">
                <img src="images/instagram.png" height="20" alt="Instagram logo">
            </div>
        </section>
        
        <section id="menu01">
            <div class="mainMenu">
                <img src="images/LogoBlack.png" height="50" alt="4Revolution Logo">
                <nav>
                    <ul>
                        <li><a class="names" href="signInUp.php" title="Home Page">HOME</a></li>
                        <li><a class="names" href="view.php" title="View Products">SEE RECORDS</a></li>
                        <li><a class="names" href="index.php" title="Add Proucts">ADD RECORDS</a></li>
                        <a href="signInUp.php" title="Add Proucts"><img href="signInUp.php" class="options" src="images/user (1).png" alt="login" height="30px"></a>
                    </ul>
                </nav>
            </div>
        </section>
    </header>
    <main>
        <section id="upper">
            <div>
                <h1><?php echo $pageTitle; ?></h1>
            </div>
        </section>
        <section id="middle">

        