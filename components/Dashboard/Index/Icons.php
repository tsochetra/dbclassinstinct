
   <div class="content">
      <div class="container-fluid">
         <div class="row">
                       <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                           <form method="#" action="#">
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
                                               <input type="text" class="form-control">
                                           <span class="material-input"></span></div>
                                       </div>
                                       <div class="input-group">
                                           <span class="input-group-addon">
                                               <i class="material-icons">lock_outline</i>
                                           </span>
                                           <div class="form-group label-floating is-empty">
                                               <label class="control-label">Password</label>
                                               <input type="password" class="form-control">
                                           <span class="material-input"></span></div>
                                       </div>
                                   </div>
                                   <div class="footer text-center">
                                       <button class="btn btn-primary" @click.prevent="$router.push('/')">Login</button>
                                   </div>
                              </div>
                           </form>
                       </div>
                   </div>
      </div>
   </div>
