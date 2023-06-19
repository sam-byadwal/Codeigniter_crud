<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - View user</title>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url().'assets\css\bootstrap.min.css';?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand"> CRUD _ APPLICATION</a>
        </div>

    </div>

    <div class="container" style="padding-top:10px;">
    <div class="row">
        <div class="col-md-12">
            <?php
             $success = $this->session -> userdata('success');

             if($success  != "") {
                ?>
<div class="alert alert-success">
    <?php  
    echo $success ;
    ?>

</div>



          <?php  
           }
         ?>
          <?php
             $failure = $this->session -> userdata('failure');

             if($failure  != "") {
                ?>
<div class="alert alert-success">
<?php  echo $failure ?>
</div>



          <?php  
           }
           ?>
        </div>
    </div>
    <div class="col-md-8">
       <div class="row">
        <div class="col-10"><h3>view users</h3> </div>

        <div class="col-2 text-align:right;">
        <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">CREATE</a>
        </div>

        </div>
       
        <hr>
        </div>
        

       <div class="row">
     
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th width="100">EDIT</th>
                    <th width="100">DELETE</th>
                </tr>
                <?php  if(!empty($users)){ foreach($users as $user){?> 
                       <tr>
                       <td><?php echo $user['user_id'] ?></td>
                       <td><?php echo $user['name'] ?></td>
                       <td><?php echo $user['email'] ?></td>
                       <td><a href="<?php echo base_url().'index.php/user/edit/'. $user['user_id'] ?>" class="btn btn-primary">EDIT</a>
                    </td>
                    <td><a href="<?php echo base_url().'index.php/user/delete/'. $user['user_id'] ?>" class="btn btn-danger">DELETE</a>
                    </td>
                       </tr>
               <?php
                }
             }
             else{ ?>


            
             <tr>
                <td colspan="5"> Records not found</td>
             </tr>
           <?php } ?>
             
             
            </table>
        </div>
       </div>

    </div>
</body>

<script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</script>
</html>