<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
  <h1 class="fs-3 text-center">User info</h1> 
  <button class="btn btn-success m-1" id="add">Add student</button>
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>class</th>
            <th>Action</th>
        </tr>
    </thead>
  </table>
 
    </div>
    </div>
        <div class="modal" tabindex="-1" id="studentmodle">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="">
        <div class="form-group" >
             <input type="text" name="" id="studentid" class="form-control m-2" placeholder="enter student id">
        </div>
      <div class="form-group">
        <input type="text" name="" id="studentname" class="form-control m-2" placeholder="Enter name" >
      </div>
      <div class="form-group">
        <input type="text" name="" id="studentname" class="form-control m-2" placeholder="Enter name" >
      </div>

       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>


      </div>
     
    </div>
  </div>
</div>
   </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>