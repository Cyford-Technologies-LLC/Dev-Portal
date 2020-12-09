


<?php 

if(isset($_POST['btnregister'])){

// $_POST[''];

// firstname

// middlename lastname username email password

// }

{}
        
 ?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container mt-5">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">

                                <form class="form-horizontal" action="" method="post" >

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">First Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                               
                                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your First Name" required>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Middle Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Enter your Middle Name" />
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Last Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your Last Name" required />
                                            </div>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">User Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Last Name" required/>
                                            </div>
                                        </div>
                                    </div>


                                      <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Last Name" required/>
                                            </div>
                                        </div>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required/>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="form-group ">
                                        <button type="button" id="btnregister" name="btnregister" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                    </div>
                                    <div class="login-register">
                                        <a href="login.php">Login</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>