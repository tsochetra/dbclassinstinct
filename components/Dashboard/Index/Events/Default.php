<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <div class="content" id="event">
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
               					<!-- <li class="">
               						<a href="#messages" data-toggle="tab">
               							<i class="material-icons">code</i>
               							Second
               						<div class="ripple-container"></div></a>
               					</li>
               					<li class="">
               						<a href="#settings" data-toggle="tab">
               							<i class="material-icons">cloud</i>
               							Third
               						<div class="ripple-container"></div></a>
               					</li> -->
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
                                 <th class="khmer-title">ឈ្មោះព្រឹត្តិការណ៏</th>
                                 <th class="khmer-title">ធ្វើនៅទីតាំង</th>
                                 <th class="khmer-title">ធ្វើនៅថ្ងៃ</th>
                                 <th class="khmer-title">សកម្មភាព</th>
                              </thead>
                              <tbody>
                                 <?php
                                    $getData = $conn->query("SELECT * FROM event");

                                    while($row = $getData->fetch_assoc()) {



                                 ?>
                                  <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['location']; ?></td>
                                    <td><?php echo $row['host_date']; ?></td>
                                    <td class="td-actions text-right">
                                       <a href="view.php?id=<?php echo $row['id']; ?>">
                                       <button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs" data-original-title="View">
                                           <i class="material-icons">remove_red_eye</i>
                                       </button>
                                       </a>
                                       <a href="<?php echo $_SERVER['REQUEST_URI']."&edit=" . $row['id']; ?>">
                                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit">
                                             <i class="material-icons">edit</i>
                                          </button>
                                       </a>
                                       <a href="<?php echo $_SERVER['REQUEST_URI']."&delete=" . $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this ?');">
                                          <button type="button" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                              <i class="material-icons">close</i>
                                          </button>
                                       </a>

                                    </td>
                                  </tr>
                                  <?php } ?>
                              </tbody>
                          </table>



               			</div>
                        <div class="tab-pane" id="messages">
                           <div class="card-content">
                               <form action="dashboard.php?page=events" method="POST" enctype="multipart/form-data">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group label-floating">
                                               <label class="control-label">Title</label>
                                               <input type="text" name="name" class="form-control" @keyup="validate" v-model="title" >
                                           </div>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group label-floating">
                                               <label class="control-label">Host Date</label>
                                               <input  id="datepicker" class="form-control">
                                               <script type="text/javascript">

                                               $( function() {
                                                 $( "#datepicker" ).datepicker();
                                               } );
                                               </script>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group label-floating">
                                               <label class="control-label">Location</label>
                                               <input type="text" name="location" class="form-control"  @keyup="validate" v-model="location" >
                                           </div>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-12">
                                           <!-- <div class="form-group label-floating"> -->
                                               <label class="control-label">Add Picture</label>
                                               <input type="file" name="picture">
                                           <!-- </div> -->
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group label-floating">
                                               <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
                                               <textarea id="text" class="form-control" name="description" rows="20"
                                               ></textarea>

                                               <script>
                                                   $(document).ready(function() {
                                                      CKEDITOR.replace('text');
                                                   })
                                               </script>
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
         el: '#event',
            data: {
               disabled: true,
               title: "",
               location: "",
               description: "",
               host_date: ""
         },
         methods: {
            validate() {
               if(this.title.length > 0 && this.location.length > 0) {
                  this.disabled = false
               } else {
                  this.disabled = true
               }
            }
         }
      })
   </script>
