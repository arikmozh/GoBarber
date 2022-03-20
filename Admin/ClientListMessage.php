
 

        <div class="card m-3">
        <div class="card-header">
                        <h3> Search For Client</h3>
                        <input type="text" class='form-control' placeholder="Search..." id="myInput">
                </div>
                       
                          
                       
                       
                </div>
                <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
                        <table id="myTable" class="table table-bordered  text-center table-striped bg-dark">
                                <thead>
                                        <tr>
                                       
                                        <th> Name</th>
                    <th> Email</th>
                    <th> Phone Number</th>
                    <th>Action</th>
                                             
                                         
                                                
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                         $barberId = $_SESSION['id'];
                                     $sql = " SELECT *  FROM client_tb ";
                                        $result = mysqli_query($con, $sql);
                                        if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                        <tr>
                                                       
                                                        
                        

                                                        <td><?php echo $row['clientName'];
                            ?></td>
                        <td><?php echo $row['clientEmail'];
                                    ?></td>
                                    <td><?php echo $row['clientNumber'];
                                    ?></td>
                                  
 <td align="center">
                                                                               <?php

echo '

<a title="Edit" href="Admin.php?PageName=SendClientMessage&clientEmail=' . $row['clientEmail'] . '" class="btn btn-primary btn-xs  ">Message</a>';
?>
                                                                               </td>


                                                        </tr>
                                        <?php
                                                }
                                        }
                                        ?>
                                </tbody>

                        </table>
                </div>
                </div>
                <!-- /.card-body -->
        </div>
       

<script>

</script>