<div class="row">
<?php
$getList = $conn->query("SELECT * FROM event");


while($row = $getList->fetch_assoc()) {



?>


   <div class="col-lg-4 col-md-4">
      <div class="card card-blog">
      <div class="card-header card-header-image">
         <a href="view.php?id=<?php echo $row['id'] ?>">
            <img class="img" src="<?php echo "https://dtbbucket.oss-ap-southeast-1.aliyuncs.com/cover/".$row['picture_url'].".jpg?x-oss-process=style/cover" ?>">
         </a>
         <div class="colored-shadow" style="background-image: url('<?php echo "https://dtbbucket.oss-ap-southeast-1.aliyuncs.com/cover/".$row['picture_url'].".jpg?x-oss-process=style/cover" ?>'); opacity: 1;"></div>
      </div>
      <div class="card-body ">
         <h6 class="card-category text-danger">
            <i class="material-icons">event</i> <?php echo $row['host_date'] ?>
            <i class="material-icons">location_on</i> <?php echo $row['location'] ?>
         </h6>
         <h4 class="card-title index-card khmer-title">
            <a href="view.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
         </h4>
      </div>
      <!-- <div class="card-footer">
         <div class="author">
            <img src="https://z-p3-scontent.fpnh5-1.fna.fbcdn.net/v/t31.0-8/15591190_355812504798365_6349514709789101571_o.jpg?oh=42e780bc21b41e0c35f0db099becf894&oe=5AE3FA6E" alt="..." class="avatar img-raised">
            <span>WEduShare</span>
         </div>
         <div class="stats ml-auto">
            <i class="material-icons">schedule</i> 30 minutes ago
         </div>
      </div> -->
      </div>
   </div>

<?php
}
?>
</div>
