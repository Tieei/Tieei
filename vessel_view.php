<?php 
include 'config.php';
include 'includes/head.php';
//get row id from index page
$v_id=$_GET['view'];
$sql=mysqli_query($conn, "SELECT * FROM v_table WHERE v_id='$v_id' ");
$row=mysqli_fetch_assoc($sql);


//after submit button in update form has been clicked
$date = date('Y-m-d');
?>

    <div class="container mt-5 pt-5">
        <div class="row border shadow">
            <div class="header text-center p-3" style="background-color:#3c6382;color:white;"><img src="img/Logo-Blue-02.webp" height="50px"></div><hr>
            <div class="col-md-4">
                <div class="card-body">
                    VID : <strong><?php echo $row['v_id']; ?></strong><br>
                    Vessel: <strong><?php echo $row['name']; ?></strong><br>
                    Flag: <strong><?php echo $row['flag']; ?></strong><br>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    Company: <strong><?php echo $row['company']; ?></strong><br>
                    Master: <strong><?php echo $row['master']; ?></strong><br>
                    Nationality: <strong><?php echo $row['m_nationality']; ?></strong><br>
                    Local Crew: <strong><?php echo $row['lc']; ?></strong><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    Agent: <strong><?php echo $row['agent']; ?></strong><br>
                    Purpose of Visit: <strong><?php echo $row['pov']; ?></strong><br>
                    Portcall Details: <strong><?php echo $row['dopc']; ?></strong><br>
                    Transhipment Monitor: <strong><?php echo $row['tm']; ?></strong><br>
                    Next Port: <strong><?php echo $row['np']; ?></strong><br>
                </div>
            </div>
        </div>
    </div>


<div class="container mt-5 mb-5">
    <div class="row shadow">
        <div class="col-md-12">
            <div class="card border-0 pt-3 pb-3">
                <div class="card-header heading">Portcall Records</div>
                <div class="card-body overflow-auto">
                    
                        <?php $sql=mysqli_query($conn, " SELECT * FROM v_portcall WHERE v_id='$v_id' "); ?>
                        
                        <table class="table table-striped" id="views">
                        <thead class="table-dark">
                            <tr>
                                <th>PC_ID</th>
                                <th>Registered</th>
                                <th>VID</th>
                                <th>arrive</th>
                                <th>time</th>
                                <th>depart</th>
                                <th>time</th>
                                <th>bo arr</th>
                                <th>bo dep</th>
                                
                                <th><i class="fa fa-arrow-up text-success"></i>skj</th>
                                <th><i class="fa fa-arrow-up text-success"></i>ytf</th>
                                <th><i class="fa fa-arrow-up text-success"></i>bet</th>
                                <th><i class="fa fa-arrow-up text-success"></i>alb</th>
                                <th><i class="fa fa-arrow-up text-success"></i>mls</th>
                                <th><i class="fa fa-arrow-up text-success"></i>swo</th>
                                <th><i class="fa fa-arrow-up text-success"></i>oth</th>
                                <th><i class="fa fa-arrow-up text-success"></i>mix</th>
                                <th><i class="fa fa-arrow-up text-success"></i>total</th>
                                
                                
                                <th><i class="fa fa-arrow-down text-danger"></i>skj</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>ytf</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>bet</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>alb</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>mls</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>swo</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>oth</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>mix</th>
                                <th><i class="fa fa-arrow-down text-danger"></i>total</th>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td><?php echo $row['d_id']; ?></td>
                                <td><?php echo $row['added']; ?></td>
                                <td><?php echo $row['v_id']; ?></td>
                                <td><?php echo $row['arrive']; ?></td>
                                <td><?php echo $row['arr_t']; ?></td>
                                <td><?php echo $row['depart']; ?></td>
                                <td><?php echo $row['dep_t']; ?></td>
                                <td><?php echo $row['bo_arr']; ?></td>
                                <td><?php echo $row['bo_dep']; ?></td>
                                
                                <td><?php echo $row['in_skj']; ?></td>
                                <td><?php echo $row['in_ytf']; ?></td>
                                <td><?php echo $row['in_bet']; ?></td>
                                <td><?php echo $row['in_alb']; ?></td>
                                <td><?php echo $row['in_mls']; ?></td>
                                <td><?php echo $row['in_swo']; ?></td>
                                <td><?php echo $row['in_oth']; ?></td>
                                <td><?php echo $row['in_mix']; ?></td>
                                <td><?php echo $row['in_total']; ?></td>
                                
                                <td><?php echo $row['off_skj']; ?></td>
                                <td><?php echo $row['off_ytf']; ?></td>
                                <td><?php echo $row['off_bet']; ?></td>
                                <td><?php echo $row['off_alb']; ?></td>
                                <td><?php echo $row['off_mls']; ?></td>
                                <td><?php echo $row['off_swo']; ?></td>
                                <td><?php echo $row['off_oth']; ?></td>
                                <td><?php echo $row['off_mix']; ?></td>
                                <td><?php echo $row['off_total']; ?></td>
                            </tr>
                        <?php } ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'includes/footer.php'; ?>