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

<div class="container">
  <h2>Projects List</h2>
  <div class="text-right"><a href="<?php echo base_url('addrecord');?>"class="btn btn-success mb-1 float-right">Add</a></div>            
  <table class="table table-bordered">
    <thead>
      <tr>
      <tr>
      <th>NO.</th>
        <th>Project Name</th>
        <th>Description</th>
        <th>Status</th>
        <th colspan='2'>Action</th>
      
      </tr>
    </thead>
    <tbody>
    <?php
    $count=1;
     if($users):?>

        <?php foreach($users as $data):?>
            <tr><td> <?php echo $count++ ?></td>
                <td> <?php echo $data['projectname']?></td>
                <td> <?php echo $data['description']?></td>
                <td> <?php echo $data['status']?></td>
                
                <td><a href="<?php echo base_url();?>update/<?php echo $data["id"];?>" class="btn btn-sm btn-warning">Edit</a></td>
                <td><a href="<?php echo base_url();?>delete/<?php echo $data["id"];?>" class="btn btn-sm btn-warning">Delete</a></td>
              
                

     
                

     
    </tbody>
    <?php endforeach;?>
    <?php endif;?>
   
  

  </table>
</div>

</body>
</html>
