<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<STYLE>
  body{
    background:#EEE;
  
  }
  </style>
</head>
<body>
<div class="container-fluid p-1 bg-primary text-white text-center">
  <h1>Add new Project</h1>
  
</div>
<div class="container mt-5">
  <div class="row">
    <form id="add_create"name="add_create"action="<?php echo base_url('create');?>"method="post">
    <label class="form-label">Project Name </label>
    
  
    <input type="text"name="projectname"class="form-control form-control-sm" require>
    <label class="form-label">Project Description </label>
    <textarea name="description"class="form-control form-control-sm" rows="10"cols="60" require> 
</textarea>
    <label class="form-label">Project status </label>
    <select name="status"class="form-control form-control-sm" require>
    <option value="">Select Status</option>
        <option>Active</option>
        <option>Inactive</option>
        <option>Completed</option>
</select>

    <input type="submit"name="btn"class="btn btn-primary mt-3"value="Save Changes">
</form>

  </div>
</div>

</body>
</html>
