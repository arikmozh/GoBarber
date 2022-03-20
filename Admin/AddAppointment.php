
 
<div class="container">
        <div class="row">
                <div class="col-lg-8">
                <div class="card m-3">
                <div class="card-header ">
                        <h3>  New Client Appointment</h3>
                      
                <a type="submit" class='btn btn-info text-end' href='http://localhost/GoBarber/Barber.php?PageName=ClientList'>
                    Add New Appointment
                </a>
                </div>
               
                 
                <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
<div class="container"></div>
                <form action="Admin.php?PageName=AddAppointment&clientId=<?php echo $_GET["clientId"]; ?>" method="post" class="">
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
    </div>
    
    <div class="col-lg-3">
        <label for=""> Client Id</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="text" name='id' value='<?php if(isset($_GET["clientId"])) echo $_GET["clientId"];?>'   class="form-control" disabled>
        <div hidden class="div">
        <input type="text" name="clientId" value='<?php echo $_GET["clientId"]?>'   class="form-control">
        </div>
       
    </div>

    
    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3">
        <label for="">Date</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="date" name="appointmentDate" id="appointmentDate"   class="form-control" required>
    </div>
   
    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for="">  Hour Time</label>
    </div>
    <div class="col-lg-8  form-group">
        <select name='appointmentTime' class='form-control'> 
           <option value="09:00:00">09:00</option>
           <option value="09:30:00">09:30</option>
           <option value="10:00:00">10:00</option>
           <option value="10:30:00">10:30</option>
           <option value="11:00:00">11:00</option>
           <option value="11:30:00">11:30</option>
           <option value="12:00:00">12:00</option>
           <option value="12:30:00">12:30</option>
           <option value="13:00:00">13:00</option>
           <option value="13:30:00">13:30</option>
           <option value="14:00:00">14:00</option>
           <option value="14:30:00">14:30</option>
           <option value="15:00:00">15:00</option>
           <option value="15:30:00">15:30</option>
           <option value="16:00:00">16:00</option>
           <option value="16:30:00">16:30</option>
           <option value="17:00:00">17:00</option>
           <option value="17:30:00">17:30</option>
           <option value="18:00:00">18:00</option>
           <option value="18:30:00">18:30</option>
           <option value="19:00:00">19:00</option>
           <option value="19:30:00">19:30</option>
           <option value="20:00:00">20:00</option>
           <option value="20:30:00">20:30</option>
           <option value="21:00:00">21:00</option>
           <option value="21:30:00">21:30</option>
           <option value="22:00:00">22:00</option>
           <option value="22:30:00">22:30</option>
        </select>
   
    </div>

    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for="">Hair Cut</label>
    </div>
    <div class="col-lg-6  form-group">
        <select name="clientHaircut" id="clientHaircut" class="form-control">
<option value="Regular Hair Cut">Regular Hair Cut</option>
<option value="Full Scissor Cut">Full Scissor Cut</option>
<option value="Beard Shave">Beard Shave</option>
<option value="Beared Trim">Beared Trim</option>
<option value="Shape Up">Shape Up</option>
<option value="Hot Tool Shave">Hot Tool Shave</option>
        </select>
    </div>
    <div class="col-lg-2">
       </div>
    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for=""> Appointment Charges</label>
    </div>
    <div class="col-lg-5  form-group">
    <input type="text" name="appointmentCharges" id="appointmentCharges"   class="form-control" required>
    </div>

</div>

<div class="row">
<div class="col-lg-4">
       </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-dark " type="submit"  name="submitAppointmentForm" value="Submit" required>
    </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-outline-danger " type="reset" value="Reset" required>
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
