<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Create user</title>
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
        <h3>CREATE USER</h3>
        <hr>

        <form method="POST" name="createUser" action="create">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">NAME</label>
                    <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">  <?php echo form_error('name');?>
                  
                </div>
                <div class="form-group" >
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php echo set_value('email');?>" class="form-control">
                    <?php echo form_error('email');?>
                </div>
                <div class="form-group" style="padding-top:10px;">

            <button class="btn btn-primary">CREATE</button>
            <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">CANCEL</a>
                </div>
               
            </div>

            
        </div>

        </form>
    </div>
</body>

<script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</script>
</html>