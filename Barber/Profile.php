    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
 <!-- Profile Image -->
 <div class="card card-primary card-outline mt-5">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="./img/gobarber-logo.png" 
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">
                    <?php 
                    echo $_SESSION['name'];
                    ?>
                </h3>

                <p class="text-muted text-center">Barber Saloon</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b>
                     <h5 class="float-right"> <?php 
                    echo $_SESSION['email'];
                    ?></h5>
                  </li>
                  <li class="list-group-item">
                    <b>Clients</b>
                     <h5 class="float-right"> <?php 
                      echo  getTotalClient();
                    ?></h5>
                  </li>
                  <li class="list-group-item">
                    <b>Appointments</b>
                     <h5 class="float-right"> <?php 
                      echo  getTotalApp();
                    ?></h5>
                  </li>
                  <li class="list-group-item">
                    <b>Earning</b>
                     <h5 class="float-right"> <?php 
                    echo  getTotalEarning();
                    ?></h5>
                  </li>
                
                </ul>

                <a href="Barber.php?PageName=UpdateProfile" class="btn btn-info btn-block"><b>Update Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
   