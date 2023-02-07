<?php
include("display.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>All Providers</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styletable.css">
  
</head>
<body >
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table  class="table table-bordered">
       <thead><tr>

         <th>Id</th>
         <th>Name</th>
         <th>Phone</th>
         <th>Address</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
 
      foreach($fetchData as $data){
    ?>
      <tr>
      
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['phone_nb']??''; ?></td>
      <td><?php echo $data['address']??''; ?></td> 
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="5">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>