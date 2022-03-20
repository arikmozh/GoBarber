<?php
if($_GET['editClientId']){
    $id = $_GET['editClientId'];
    $query = "select * from client_tb where ClientId = $id";
    $result = mysqli_query($con,$query);
    $client = mysqli_fetch_assoc($result);
   
} 
?>
 
<div class="container">
        <div class="row">
                <div class="col-lg-8">
                <div class="card m-3">
                <div class="card-header ">
                        <h3> Update Client Profile</h3>
                </div>
                <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
<div class="container"></div>
                <form action='Admin.php?PageName=EditClient&editClientId=<?php echo $_GET["editClientId"];?>' method="post" class="">
                <div class="row ">
                            <div class="col-lg-12 col-md-6  form-group">
                                <?php
                                if (count($errors) > 0) {
                                ?>
                                    <div class="alert alert-danger text-center p-2">
                                        <?php
                                        foreach ($errors as $showerror) {
                                            echo $showerror;
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>

<?php
                                if (isset($success['success'])) {
                                ?>
                                    <div class="alert alert-success text-center p-2">
                                        <?php
                                        echo $success['success'];
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
<div class="row">
  
     

    
    <div class="col-lg-1">
        <input type="text" name="clientId" value="<?php echo $_GET['editClientId'];?>" hidden>
    </div>
    
    <div class="col-lg-3">
        <label for=""> Client Name</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="text" name="clientName" id="clientName"  placeholder="Enter  Name"  value="<?php echo $client['clientName'];?>"  class="form-control" required>
    </div>
   
    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for=""> Client Email</label>
    </div>
    <div class="col-lg-8  form-group">
    <input type="text" name="clientEmail" id="clientEmail"  placeholder="Enter Email " value="<?php echo $client['clientEmail'];?>"  class="form-control" required>
    </div>

    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for="">Contact Number</label>
    </div>
    <div class="col-lg-8  form-group">
    <input type="text" name="clientNumber" id="clientNumber" value="<?php echo $client['clientNumber'];?>" placeholder="+" class="form-control" required>
    </div>


    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3">
        <label for=""> Client Dob</label>
    </div>
    <div class="col-lg-7  form-group">
        <input type="date" name="clientDob" id="clientDob"  value="<?php echo $client['clientDob'];?>" class="form-control" required>
    </div>
</div>

<div class="row">
<div class="col-lg-4">
       </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-dark " type="submit"  name="submitEditClientForm" value="Submit" required>
    </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-outline-danger " type="submit" name="deleteClientId"  value="Delete" required>
    </div>
</div>

</form>
                </div>

                </div>
                </div>
                <!-- /.card-body -->
        </div>
       


                </div>
        </div>
</div>
