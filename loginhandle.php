<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">LOG IN</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="logininsert.php" method="Post">
      <div class="modal-body">
       
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email Address</label>
        <div class="col-sm-10">
        <input type="text" name="email" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="text" name="pass" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Password">
        </div>
        </div>
        
        
        
        
        
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-info" >LOGIN</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>  
      </div>
    </div>
  </div>
</div>