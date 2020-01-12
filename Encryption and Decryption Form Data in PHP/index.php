<!DOCTYPE html>
<html>
 <head>
  <title>How to Encrypt & Decrypt Form Data using PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <h2 align="center">How to Encrypt & Decrypt Form Data using PHP</h2>
  <br />
  <div class="container">
  <div class="row">
   <div class="col-lg-12">
    <div class="panel panel-default">
     <div class="panel-heading">
      <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
       <div class="row">
        <h3 class="panel-title">User List</h3>
       </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
       <div class="row" align="right">
        <button type="button" name="add" id="add_button" class="btn btn-success btn-xs">Add</button>     
       </div>
      </div>
      <div style="clear:both"></div>
     </div>
     <div class="panel-body">
      <div class="row">
       <div class="col-sm-12 table-responsive">
        <span id="alert_action"></span>
        <table id="user_data" class="table table-bordered table-striped">
         <thead><tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
         </tr></thead>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div></div>
  <div id="userModal" class="modal fade">
   <div class="modal-dialog">
    <form method="post" id="user_form">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Add User</h4>
      </div>
      <div class="modal-body">
       <span id="validation_error"></span>
       <div class="form-group">
        <label>Enter First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control" />
       </div>
       <div class="form-group">
        <label>Enter Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control" />
       </div>
       <div class="form-group">
        <label>Enter Phone No.</label>
        <input type="text" name="phone" id="phone" class="form-control" />
       </div>
       <div class="form-group">
        <label>Enter Email</label>
        <input type="email" name="email_address" id="email_address" class="form-control" />
       </div>
      </div>
      <div class="modal-footer">
       <input type="hidden" name="id" id="id"/>
       <input type="hidden" name="crud_action" id="crud_action"/>
       <input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
  $('#add_button').click(function(){
    $('#userModal').modal('show');
    $('#user_form')[0].reset();
    $('.modal-title').html("<i class='fa fa-plus'></i> Add User");
    $('#action').val('Add');
    $('#crud_action').val('Add');
  });
 
 var crud_action = 'fetch_all';
 
 var userdataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"user_action.php",
   type:"POST",
   data:{crud_action:crud_action}
  },
  "columnDefs":[
   {
    "targets":[4, 5],
    "orderable":false,
   },
  ],
  "pageLength": 10
 });
 
 $(document).on('submit', '#user_form', function(event){
  
  event.preventDefault();
  
  var form_data = $(this).serialize();
  
  $.ajax({
   url:"user_action.php",
   method:"POST",
   data:form_data,
   dataType:"json",
   success:function(data) {
    if(data.error != '') {
      $('#validation_error').html(data.error);
    } else {
      $('#alert_action').html(data.message);
      $('#user_form')[0].reset();
      $('#userModal').modal('hide');
      userdataTable.ajax.reload();
    }
   }
  });  
 });
 
 $(document).on('click', '.update', function(){
  var id = $(this).attr("id");
  crud_action = "fetch_single";
  $.ajax({
    url:"user_action.php",
    method:"POST",
    data:{id:id, crud_action:crud_action},
    dataType:"JSON",
    success:function(data) {
      $('#validation_error').html('');
      $('#userModal').modal('show');
      $('.modal-title').text('Edit User');
      $('#first_name').val(data.first_name);
      $('#last_name').val(data.last_name);
      $('#phone').val(data.phone);
      $('#email_address').val(data.email_address);
      $('#id').val(id);
      $('#crud_action').val('Edit');
      $('#action').val('Edit');
    }
  });
 });

  $(document).on('click', '.delete', function(){
    var id = $(this).attr("id");
    crud_action = "Delete";
    if(confirm("Are you sure you want to delete this?")) {
      $.ajax({
        url:"user_action.php",
        method:"POST",
        data:{id:id, crud_action:crud_action},
        dataType:"json",
        success:function(data) {
          $('#alert_action').html(data.message);
          $('#userModal').modal('hide');
          userdataTable.ajax.reload();
        }
      });
    } else {
      return false;
    }
  });
});
</script>