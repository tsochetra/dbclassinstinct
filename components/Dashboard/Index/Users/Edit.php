<?php

$getData = $conn->query("SELECT * FROM user WHERE id = $id");

if($getData->num_rows > 0) {
   $row = $getData->fetch_assoc();

?>
   <div class="content" id="user-edit">
      <div class="container-fluid">
         <div class="row">

<div class="col-md-8">
   <div class="card">
     <div class="card-header" data-background-color="purple">
         <h4 class="title">Edit Profile</h4>
         <p class="category">Complete your profile</p>
     </div>
     <div class="card-content">
         <form action="dashboard.php?page=users" method="POST" enctype="multipart/form-data">
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group label-floating">
                         <label class="control-label">Username</label>
                         <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" @keyup="validate()">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group label-floating">
                         <label class="control-label">Full name</label>
                         <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>" @keyup="validate()">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="form-group label-floating">
                         <label class="control-label">Email address</label>
                         <input type="email" name="email" class="form-control" @keyup="validate()" value="<?php echo $row['email']; ?>">
                     </div>
                 </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                     <div class="form-group label-floating">
                        <label class="control-label">Password</label>
                        <input type="password" name="password" class="form-control" v-model="password" @keyup="validate()">
                     </div>
                </div>
             </div>
             <div class="row">
                 <div class="col-md-9">
                     <label class="control-label">Change Profile</label>
                     <input type="file" name="picture">
                 </div>
                 <div class="col-md-3">
                     <div class="form-group label-floating">
                         <label class="control-label">Gender</label>
                         <select class="form-control" name="gender">
                           <option value="1">M</option>
                           <option value="2">F</option>
                           <option value="3">Other</option>
                         </select>
                     </div>
                 </div>
             </div>
             <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
             <button type="submit" class="btn btn-primary pull-right" :disabled="disabled">Update Profile</button>
             <div class="clearfix"></div>
         </form>
     </div>
   </div>
</div>
<div class="col-md-4">
   <div class="card card-profile">
     <div class="card-avatar">
         <a href="#pablo">
             <img class="img" src="<?php echo "https://dtbbucket.oss-ap-southeast-1.aliyuncs.com/profiles/".$row['picture_url'].".jpg?x-oss-process=style/profile" ?>" />
         </a>
     </div>
     <div class="content">
        <h4 class="card-title"><?php echo $row['fullname']; ?></h4>
   <h6 class="text-gray"><?php echo $row['email']; ?></h6>
         <p class="text-gray">@<?php echo $row['username']; ?></p>



         <a href="dashboard.php?page=users&delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-round">Delete</a>
     </div>
   </div>
</div>
</div></div></div>
<?php
}
?>
<script type="text/javascript">
   var app = new Vue({
      el: '#user-edit',
         data: {
            fullname: "",
            username: "",
            email: "",
            password: "",
            disabled: true
      },
      methods: {
         validate() {
            if(this.password.length > 0) {
               this.disabled = false
            } else {
               this.disabled = true
            }
         }
      }
   })
</script>
