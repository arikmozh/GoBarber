<?php
 $barberId = $_SESSION['id'];

?>

<div class="card m-3">
        <div class="card-header">
                        <div class="container">
                            <div class="row" align='center'>
                                <div class="col-lg-6">
                                <h3>Yearly </h3>
                                            <form  action='Admin.php?PageName=EarningPage' method='post'>
                                                <select class='form-control' name='Year'>
                                                    <option value='<?php echo date("Y");?>' >Select Year</option>
                                                     <?php  $years = range(2020,2030);
                                                       foreach($years as $year) : ?>
                                                      <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                                      <?php endforeach; ?>
                                                       </select>
                                                <input type="submit" value="Search" name='year' class='btn btn-info  m-2'>
                                            </form>
                                </div>
                                <div class="col-lg-6">
                                <h3>Monthly </h3>
                                            <form action="Admin.php?PageName=EarningPage" method='post'>
                                                <select class='form-control' name='Year'>
                                                    <option value='<?php echo date("Y");?>'>Select Year</option>
                                                     <?php  $years = range(2020,2030);
                                                       foreach($years as $year) : ?>
                                                      <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                                      <?php endforeach; ?>
                                                       </select>

                                                    <select class='form-control mt-3' name='Month'>
                                                    <option value='<?php echo date("m");?>'>Select Month</option>
                                                     <?php  $month = range(1,12);
                                                       foreach($month as $month) : ?>
                                                      <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                                                      <?php endforeach; ?>
                                                       </select>
                                                <input type="submit" value="Search" name='month' class='btn btn-info m-2'>
                                            </form>
                                    </div>
                            </div>
                        </div>
                </div>
                              
                </div>
 
                <div class="table-responsive">
            
                <div class="card-body">
                        <table id="myTable" class="table table-bordered  text-center table-striped bg-dark">
                                <thead>
                                    <tr>
                                        <th colspan='6' class='h2'>INCOME REPORT </th>
                                    </tr>

                                    <tr>
                                        <th colspan='2' class='h4'>Last Month Income </th>
                                        <th class='h5'><?php echo getMonthlyIncomeAdmin();?></th>
                                        <th colspan='2' class='h4'>Last Year Income </th>
                                        <th class='h5'><?php echo getYearlyIncomeAdmin();?></th>
                                    </tr>
                      
                                  
                                       
                                </thead>
                                <tbody>
                                       
                                                     <?php
if(isset($_POST['year']))
{
    $year = $_POST['Year'];
    
    $query =  " SELECT  appointment_tb.appointmentDate ,  sum(appointmentCharges) as appointmentCharges
    FROM client_tb , appointment_tb 
    WHERE client_tb.clientId = appointment_tb.clientId and client_tb.BarberId = $barberId and  appointment_tb.appointmentStatus = 'Active'
    and Year(appointmentDate) = $year
    GROUP BY appointment_tb.appointmentDate";
    $result = mysqli_query($con,$query);
    ?>
    <tr>
        <th colspan='3' class='h4'>Date</th>
        <th colspan='3'class='h4'>Earning</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
              
             echo '<tr>';
             echo '<td colspan="3">';
             echo $row['appointmentDate'];
             echo '</td>';
             echo '<td colspan="3">';
             echo $row['appointmentCharges'];
             echo '</td>';
             echo '</tr>';
    }
}
if(isset($_POST['month']))
{
    $year = $_POST['Year'];
    $month = $_POST['Month'];
   
    $query =  " SELECT  appointment_tb.appointmentDate ,  sum(appointmentCharges) as appointmentCharges
    FROM client_tb , appointment_tb 
    WHERE client_tb.clientId = appointment_tb.clientId and client_tb.BarberId = $barberId and  appointment_tb.appointmentStatus = 'Active'
    and Year(appointmentDate) = $year and  Month(appointmentDate) = $month
    GROUP BY appointment_tb.appointmentDate";
    $result = mysqli_query($con,$query);
    ?>
    <tr>
        <th colspan='3' class='h4'>Date</th>
        <th colspan='3'class='h4'>Earning</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
              
             echo '<tr>';
             echo '<td colspan="3">';
             echo $row['appointmentDate'];
             echo '</td>';
             echo '<td colspan="3">';
             echo $row['appointmentCharges'];
             echo '</td>';
             echo '</tr>';
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