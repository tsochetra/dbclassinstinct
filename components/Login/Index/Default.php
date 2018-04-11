<?php
   session_start();

   if(isset($_SESSION['id'])) {
      ?><script type="text/javascript">
         window.location.href="dashboard.php";
      </script> <?php
   }

   if(isset($_POST['username']) && isset($_POST['password'])) {
      $select = $conn->prepare("SELECT * FROM user WHERE username=? AND password=?");
      $select->bind_param("ss", $_POST['username'], sha1($_POST['password']));
      $select->execute();
      $user = $select->get_result();

      if($user->num_rows > 0) {

         $_SESSION['id'] = $_POST['username'];
         ?><script type="text/javascript">
            window.location.href="dashboard.php"
         </script> <?php
      } else {
         ?><script type="text/javascript">
            alert("incorrect password.")
         </script> <?php
      }
   }

?>
<div class="content" style="padding-top: 18vh" id="login">
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
            <form action="" method="POST">
               <div class="card card-login">
                    <div class="card-header text-center" data-background-color="purple">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <div class="card-content">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" v-model="username" @keyup="validate" name="username">
                            <span class="material-input text-warning"></span></div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" v-model="password" @keyup="validate" name="password">
                            <span class="material-input"></span></div>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button class="btn btn-primary" :disabled="disabled">Login</button>
                    </div>
               </div>
            </form>
        </div>
    </div>
   </div>
</div>
<script type="text/javascript">
   var app = new Vue({
      el: '#login',
         data: {
            disabled: true,
            username: "",
            password: ""
      },
      methods: {
         getLogin() {
            if(this.username == "admin" && this.password == "password") {
               window.location.href = "dashboard.php";
            } else {
               alert("error");
            }
         },
         validate() {
            if(this.username.length > 0 && this.password.length > 0) {
               this.disabled = false
            } else {
               this.disabled = true
            }
         }
      }
   })
</script>
