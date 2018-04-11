
   <div class="content" id="user">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="card card-nav-tabs">
               	<div class="card-header" data-background-color="purple">
               		<div class="nav-tabs-navigation">
               			<div class="nav-tabs-wrapper">
               				<ul class="nav nav-tabs" data-tabs="tabs">
               					<li class="active">
               						<a href="#profile" data-toggle="tab">
               							<i class="material-icons">assessment</i>
               							OVERVIEW
               						</a>
               					</li>
                              <li>
               						<a href="#messages" data-toggle="tab">
               							<i class="material-icons">add</i>
               							Create
               						</a>
               					</li>
               				</ul>
               			</div>
               		</div>
               	</div>

               	<div class="card-content">
               		<div class="tab-content">
               			<div class="tab-pane active" id="profile">

                          <table class="table table-hover">
                              <thead class="text-primary">
                                  <th class="khmer-title">រ.ល</th>
                                  <th class="khmer-title">រូបភាព</th>
                                 <th class="khmer-title">ឈ្មោះ</th>
                                 <th class="khmer-title">ភេទ</th>
                                 <th class="khmer-title">អ៊ីមែល</th>
                                 <th></th>
                              </thead>
                              <tbody>
                                 <?php
                                    $getData = $conn->query("SELECT * FROM gender JOIN user ON gender.id = user.gender_id LIMIT 10");

                                    while($row = $getData->fetch_assoc()) {

                                 ?>
                                  <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><div class="user-profile"><img src="<?php echo "https://dtbbucket.oss-ap-southeast-1.aliyuncs.com/profiles/".$row['picture_url'].".jpg?x-oss-process=style/profile" ?>" alt=""></div></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td class="td-actions text-right">
                                       <a href="<?php echo $_SERVER['REQUEST_URI']."&edit=" . $row['id']; ?>">
                                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit">
                                             <i class="material-icons">edit</i>
                                          </button>
                                       </a>
                                       <a href="<?php echo $_SERVER['REQUEST_URI']."&delete=" . $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this ?');">
                                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                              <i class="material-icons">close</i>
                                          </button>
                                       </a>
                                    </td>
                                  </tr>


                              <?php }?>
                              </tbody>

                          </table>
               			</div>
               			<div class="tab-pane" id="messages">
                           <div class="card-content">
                               <form action="dashboard.php?page=users" method="POST" enctype="multipart/form-data">
                                   <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Full name</label>
                                              <input type="text" name="fullname" class="form-control" v-model="fullname" @keyup="validate()">
                                          </div>
                                      </div>
                                       <div class="col-md-6">
                                           <div class="form-group label-floating">
                                               <label class="control-label">Username</label>
                                               <input type="text" name="username" class="form-control" v-model="username" @keyup="validate()">
                                           </div>
                                       </div>

                                   </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group label-floating">
                                               <label class="control-label">Email address</label>
                                               <input type="email" name="email" class="form-control" v-model="email" @keyup="validate()">
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
                                              <!-- <div class="form-group label-floating"> -->
                                                 <label class="control-label">Add Picture</label>
                                                 <input type="file" name="picture">
                                              <!-- </div> -->
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
                                   <button type="submit" class="btn btn-primary pull-right" :disabled="disabled">Create</button>
                                   <div class="clearfix"></div>
                               </form>
                           </div>
               			</div>
               		</div>
               	</div>

               </div>
            </div>
         </div> <!--endrow -->
      </div>
   </div>
   <script type="text/javascript">
      var app = new Vue({
         el: '#user',
            data: {
               fullname: "",
               username: "",
               email: "",
               password: "",
               disabled: true
         },
         methods: {
            validate() {
               if(this.fullname.length > 0 && this.username.length > 0 && this.email.length > 0 && this.password.length > 0) {
                  this.disabled = false
               } else {
                  this.disabled = true
               }
            }
         }
      })
   </script>
