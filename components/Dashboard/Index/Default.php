<div class="content" >
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="card card-stats">
                  <div class="card-header" data-background-color="orange">
                     <i class="material-icons">event</i>
                  </div>
                  <div class="card-content">
                     <p class="category khmer-title">ចំនួនព្រឹត្តិកាណ៏ទាំងអស់</p>
                     <h3 class="title"><?php
                        $getData = $conn->query("SELECT COUNT(id) AS total FROM event");
                        echo $getData->fetch_assoc()['total'];
                     ?><small><!--gb--></small></h3>
                  </div>
                  <div class="card-footer">
                     <div class="stats">
                        <!-- <i class="material-icons text-danger">warning</i> <a href="#pablo">some info</a> -->
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="card card-stats">
                  <div class="card-header" data-background-color="red">
                     <i class="material-icons">supervisor_account</i>
                  </div>
                  <div class="card-content">
                     <p class="category khmer-title">ចំនួនអ្នកប្រើប្រាស់ទាំងអស់</p>
                     <h3 class="title"><?php
                        $getData = $conn->query("SELECT COUNT(id) AS total FROM user");
                        echo $getData->fetch_assoc()['total'];
                     ?></h3>
                  </div>
                  <div class="card-footer">
                     <div class="stats">
                        <!-- <i class="material-icons">local_offer</i> Tracked from Github -->
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="card">
                   <div class="card-header" data-background-color="green">
                       <h4 class="title khmer-title">ព្រឹត្តិការណ៏ដែលបង្ហោះចុងក្រោយបំផុត</h4>
                       <p class="category"></p>
                   </div>
                   <div class="card-content table-responsive">
                       <table class="table table-hover">
                           <thead class="text-primary">
                               <th class="khmer-title">រ.ល</th>
                              <th class="khmer-title">ឈ្មោះព្រឹត្តិការណ៏</th>
                              <th class="khmer-title">ធ្វើនៅទីតាំង</th>
                              <th class="khmer-title">ធ្វើនៅថ្ងៃ</th>
                              <th></th>
                           </thead>
                           <tbody>
                              <?php
                                 $getData = $conn->query("SELECT * FROM event LIMIT 10");

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


                                 </td>
                               </tr>
                               <?php } ?>
                           </tbody>
                       </table>
                   </div>
               </div>
            </div>

         </div>
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="card">
                   <div class="card-header" data-background-color="orange">
                       <h4 class="title khmer-title">គណនីយរបស់អ្នកប្រើប្រាស់ដែលបង្កើតចុងក្រោយបំផុត</h4>
                       <p class="category"></p>
                   </div>
                   <div class="card-content table-responsive">
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
                                 $getData = $conn->query("SELECT * FROM user JOIN gender ON user.gender_id = gender.id LIMIT 10");

                                 while($row = $getData->fetch_assoc()) {

                              ?>
                               <tr>
                                 <td><?php echo $row['id']; ?></td>
                                 <td><div class="user-profile"><img src="<?php echo "https://dtbbucket.oss-ap-southeast-1.aliyuncs.com/profiles/".$row['picture_url'].".jpg?x-oss-process=style/profile" ?>" alt=""></div></td>
                                 <td><?php echo $row['fullname']; ?></td>
                                 <td><?php echo $row['name']; ?></td>
                                 <td><?php echo $row['email']; ?></td>
                                 <td class="td-actions text-right">


                                 </td>
                               </tr>


                           <?php }?>
                           </tbody>
                       </table>
                   </div>
               </div>
            </div>

         </div> <!--endrow -->
      </div>
   </div>
