<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';
isLogin();
$viewtable = new viewtable();
$user = new user();
isStudent($user->data()->groups);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <script src="vendor/js/jquery.js"></script>
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.css">
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/buttons.print.min.js"></script>

</head>
<body>

        <?php
        require_once('nav/studentnav.php');
        ?> 

      

        <div class="container-fluid mt-4 puff-in-center">
         
        <div class="row">
            <div class="col-md-2 border pr-5">
                <?php  profilePic();?>
                <h6 class ="text-center mt-4 text-primary">Account Name: <?php echo $user->data()->name ?></h6>
                <h6 class ="mt-4 text-secondary">Account Registered: <br><?php echo $user->data()->joined ?></h6>
                <h6 class ="mt-4 text-secondary">Account Email: <br><?php echo $user->data()->email ?></h6>
            </div>
            <div class="col-md-8 border pr-5">
                <div class="facebook-post">
                    <div class="post-header">
                        <div class = "profile-picture"> <?php profilePic() ?></div>
                        <span class="username"><?php echo $user->data()->name ?></span>
                    </div>

                    <div class="post-content">
                        <form action="insertpost.php" method = "post">
                        <textarea name ="statuspost" placeholder="What's on your mind?"></textarea>
                        <input type="submit" value="insert-post">
                        </form>
                    </div>
                </div>

                <h4 class = "text-center my-4">Timeline</h4>

                <?php  $viewtable->viewPost();?> 

            </div>

            <div class="col-md-2 border pr-5">
                <h6>Registered users of this site</h6>
                <?php  $viewtable->viewAccountTable2();?>
            </div>
        </div>
        </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/bootstrap-select.min.js"></script>

</body>
</html>
