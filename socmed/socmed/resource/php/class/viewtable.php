<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';
require_once 'config.php';




class viewtable extends config{


public function viewAccountTable(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_accounts`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='text-center'> Discounts for Review </h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='accountTable' class='table table-bordered table-sm table-bordered table-hover shadow display' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th>Fullname</th>";
  echo "<th class='d-none d-sm-table-cell'>Date of registration</th>";
  echo "<th class='d-none d-sm-table-cell'>College</th>";

  echo "<th class='d-none d-sm-table-cell'>Email Address</th>";

  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr>";
  echo "<td class='d-none d-sm-table-cell' >$data[name]</td>";
  echo "<td style='font-size: 85%;'>$data[joined]</td>";
  echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['colleges']."</td>";
  echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['email']."</td>";



 
  }
  echo "</table>";

}

public function viewAdminPostTable(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_statuspost`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='text-center'> User Post Management </h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='accountTable' class='table table-bordered table-sm table-bordered table-hover shadow display' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th>Posted By</th>";
  echo "<th class='d-none d-sm-table-cell'>Post</th>";
  echo "<th class='d-none d-sm-table-cell'>Date Posted</th>";

  echo "<th class='d-none d-sm-table-cell'>Action</th>";

  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr>";
  echo "<td class='d-none d-sm-table-cell' >$data[posted_by]</td>";
  echo "<td style='font-size: 85%;'>$data[post]</td>";
  echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['date_posted']."</td>";
  echo "<td>
    <a href = 'deletepost.php?id=$data[id]'class= 'btn btn-danger'>Delete Post</a>
 </td>";



 
  }
  echo "</table>";

}

public function viewAccountTable2(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_accounts`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
 
  foreach ($result as $data) {
  echo "<h6 class='text-primary'> <a href='friendportal.php?id=$data[id]'>$data[name]</a></h6>";
  
  }
  echo "</table>";

}





public function viewPost(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_statuspost`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
 
  foreach ($result as $data) {
 

  echo"    <div class='facebook-status'>
  <div class='status-header'>
      <span class='username'>$data[posted_by]</span>
      <span class='post-time'>$data[date_posted]</span>
  </div>
  <div class='status-content'>
      $data[post]
  </div>
</div>";
  }
  echo "</table>";
}

public function viewFriendsPost($friendId) {
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_statuspost` WHERE `user_id` = :friendId";
  $data = $con->prepare($sql);
  $data->bindParam(':friendId', $friendId); 
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $data) {
      echo "
      <div class='facebook-status'>
          <div class='status-header'>
              <span class='username'>$data[posted_by]</span>
              <span class='post-time'>$data[date_posted]</span>
          </div>
          <div class='status-content'>
              $data[post]
          </div>
      </div>";
  }
 
}


public function viewApproveTable(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_std` WHERE `status`='APPROVE'";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='text-center'> Discounts for Review </h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='scholartable' class='table table-bordered table-sm table-bordered table-hover shadow display' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th class='d-none d-sm-table-cell'>Student Number</th>";
  echo "<th>Fullname</th>";
  echo "<th class='d-none d-sm-table-cell'>Application Type</th>";
  echo "<th class='d-none d-sm-table-cell'>Email Address</th>";
  echo "<th class='d-none d-sm-table-cell'>Status</th>";
  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr>";
  echo "<td class='d-none d-sm-table-cell' >$data[stdnumber]</td>";
  echo "<td style='font-size: 85%;'>$data[fullname]</td>";
  echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['application_type']."</td>";
  echo "<td class='d-none d-sm-table-cell'>$data[email]</td>";
  echo "<td class='d-none d-sm-table-cell'>$data[status]</td>";


  echo "</tr>";
  }
  echo "</table>";

}


}
