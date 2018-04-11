<?php

$getData = $conn->query("SELECT * FROM event WHERE id = $id");

if($getData->num_rows > 0) {
   $row = $getData->fetch_assoc();

?>
   <div class="content">
      <div class="container-fluid">
         <div class="row">

<div class="col-md-12">
   <div class="card">
     <div class="card-header" data-background-color="purple">
         <h4 class="title">Edit Event</h4>
         <!-- <p class="category">Complete your profile</p> -->
     </div>
     <div class="card-content">
         <form action="dashboard.php?page=events" method="POST" enctype="multipart/form-data">
             <div class="row">
                 <div class="col-md-12">
                     <div class="form-group label-floating">
                         <label class="control-label">Name</label>
                         <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group label-floating">
                         <label class="control-label">Host Date</label>
                         <input type="text" name="host_date" class="form-control" value="<?php echo $row['host_date']; ?>">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group label-floating">
                         <label class="control-label">End Date</label>
                         <input type="text" name="end_date" class="form-control" value="<?php echo $row['end_date']; ?>">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="form-group label-floating">
                         <label class="control-label">Location</label>
                         <input type="text" name="location" class="form-control" value="<?php echo $row['location']; ?>">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <!-- <div class="form-group label-floating"> -->
                        <label class="control-label">Change Picture</label>
                        <input type="file" name="picture">
                     <!-- </div> -->
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="form-group label-floating">
                        <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
                        <textarea id="text" class="form-control" name="description" rows="20" value="<?php echo $row['description']; ?>"
                        ></textarea>

                        <script>
                             $(document).ready(function() {
                                CKEDITOR.replace('text');
                             })
                        </script>
                     </div>
                 </div>
             </div>

             <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
             <button type="submit" class="btn btn-primary pull-right">Update</button>
             <div class="clearfix"></div>
         </form>
     </div>
   </div>
</div>
</div></div></div>
<?php
}
?>
