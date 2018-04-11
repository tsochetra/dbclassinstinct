
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="card card-nav-tabs">
               	<div class="card-header" data-background-color="purple">
               		<div class="nav-tabs-navigation">
               			<div class="nav-tabs-wrapper">
               				<ul class="nav nav-tabs" data-tabs="tabs">
               					<li>
               						<a href="" data-toggle="tab">
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

                           <div class="row">
                              <div class="col-lg-12 col-md-12">
                                 <div class="card">
                                     <div class="card-content table-responsive">
                                         <table class="table table-hover">
                                             <thead class="text-primary">
                                                 <th class="khmer-title">រ.ល</th>
                                                <th class="khmer-title">ឈ្មោះព្រឹត្តិការណ៏</th>
                                                <th class="khmer-title">អ្នករៀបចំ</th>
                                                <th class="khmer-title">ធ្វើនៅទីតាំង</th>
                                                <th class="khmer-title">ធ្វើនៅថ្ងៃ</th>
                                                <td></td>
                                             </thead>
                                             <tbody>
                                                 <tr v-for="i in 10">
                                                   <td>{{i}}</td>
                                                   <td>AIESEC</td>
                                                   <td>Anussa Event Planner</td>
                                                   <td>ITC</td>
                                                   <td>20 Jan 2018</td>
                                                   <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs" data-original-title="Remove">
                                                          <i class="material-icons">remove_red_eye</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                         <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                          <i class="material-icons">close</i>
                                                      </button>

                                                   </td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                              </div>

                           </div>


               			</div>
               			<div class="tab-pane" id="messages">
               				Second Tab
               			</div>
               			<div class="tab-pane" id="settings">
               				Third Tab
               			</div>
               		</div>
               	</div>

               </div>
            </div>
         </div> <!--endrow -->
      </div>
   </div>
