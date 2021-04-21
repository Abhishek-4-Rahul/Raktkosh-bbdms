<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Logout Session</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logout Session</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>



</head>
<body>
<div class="container"> <?php  ?>
<div class="signup-form">
    <form action="home.php" method="post" enctype="multipart/form-data">
    	
        <h1 class="mt-4 mb-3">Logout</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="firstpage.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Logout</li>
            <!--<li class="breadcrumb-item active"><?php   echo htmlentities($result->PageName); ?></li>-->
        </ol>

        <p><?php  echo $result->detail; ?> </p>

    </div>
    <!-- /.container -->
    <?php  ?>
		<h2>Welcome</h2>	
</div>
<div class="container">
                    
            <?php
                include('includes/header.php');
				session_start();
				include 'database.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>
            
        <p class="hint-text"><h3><b>Hi </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></h3></p>
        <div class=" ">
		 <img src="images\banner3.png" height="400" width="800" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
		<br>

        <div class="text-center"><h5>Want to Leave the Page? </h5><br><a href="logout.php"><h4>Logout</h4></a></div>
    </form>
     ?>
    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    
</body>
</html>

