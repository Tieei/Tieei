<?php 
include 'config.php';
include 'includes/head.php';

$v_id=$_GET['portcall'];
$sql=mysqli_query($conn, "SELECT * FROM v_table WHERE v_id='$v_id' ");
$row=mysqli_fetch_assoc($sql);

if(isset($_POST['submit'])){
    
    $v_id=$_POST['v_id'];
    $arr=$_POST['arrive'];
    $arr_t=$_POST['arr_t'];
    $depart=$_POST['depart'];
    $dep_t=$_POST['dep_t'];
    $bo_arr=$_POST['bo_arr'];
    $bo_dep=$_POST['bo_dep'];
    
    $in_skj=$_POST['in_skj'];
    $in_ytf=$_POST['in_ytf'];
    $in_bet=$_POST['in_bet'];
    $in_alb=$_POST['in_alb'];
    $in_mls=$_POST['in_mls'];
    $in_swo=$_POST['in_swo'];
    $in_oth=$_POST['in_oth'];
    $in_mix=$_POST['in_mix'];
    $in_total=$_POST['in_total'];
    
    $tm_skj=$_POST['tm_skj'];
    $tm_ytf=$_POST['tm_ytf'];
    $tm_bet=$_POST['tm_bet'];
    $tm_mix=$_POST['tm_mix'];
    $tm_total=$_POST['tm_total'];
    
    $off_skj=$_POST['off_skj'];
    $off_ytf=$_POST['off_ytf'];
    $off_bet=$_POST['off_bet'];
    $off_alb=$_POST['off_alb'];
    $off_mls=$_POST['off_mls'];
    $off_swo=$_POST['off_swo'];
    $off_oth=$_POST['off_oth'];
    $off_mix=$_POST['off_mix'];
    $off_total=$_POST['off_total'];
    
    $rec_koil=$_POST['rec_koil'];
    $rec_kfl=$_POST['rec_kfl'];
    $rec_rc=$_POST['rec_rc'];
    
    $st_scan=$_POST['st_scan'];
    $st_file=$_POST['st_file'];
    
    $sql=mysqli_query($conn, "INSERT INTO v_portcall (
    v_id, 
    arrive, 
    arr_t,
    depart, 
    dep_t,
    bo_arr, 
    bo_dep, 
    
    in_skj, 
    in_ytf, 
    in_bet, 
    in_alb, 
    in_mls, 
    in_swo, 
    in_oth, 
    in_mix, 
    in_total, 
    
    tm_skj, 
    tm_ytf, 
    tm_bet, 
    tm_mix, 
    tm_total, 
    
    off_skj, 
    off_ytf, 
    off_bet, 
    off_alb, 
    off_mls, 
    off_swo, 
    off_oth, 
    off_mix, 
    off_total, 
    
    rec_koil, 
    rec_kfl,
    rec_rc, 
    
    st_scan, 
    st_file, 
    
    added
    ) VALUES (
    '$v_id',
    '$arr',
    '$arr_t',
    '$depart',
    '$dep_t',
    '$bo_arr',
    '$bo_dep',
    
    '$in_skj',
    '$in_ytf',
    '$in_bet',
    '$in_alb',
    '$in_mls',
    '$in_swo',
    '$in_oth',
    '$in_mix',
    '$in_total',
    
    '$tm_skj',
    '$tm_ytf',
    '$tm_bet',
    '$tm_mix',
    '$tm_total',
    
    '$off_skj',
    '$off_ytf',
    '$off_bet',
    '$off_alb',
    '$off_mls',
    '$off_swo',
    '$off_oth',
    '$off_mix',
    '$off_total',
    
    '$rec_koil',
    '$rec_kfl',
    '$rec_rc',
    
    '$st_scan',
    '$st_file',
    
    '$added')");
    if(!$sql){
        echo "<script type='text/javascript'>alert('Fail to insert');</script>";
    }else{
        echo "<script type='text/javascript'>alert('Portcall Inserted Successfully');location.href='index.php';</script>";
        
    }
}

$date = date('Y-m-d');
?>
<div class="container-fluid bg-light p-5 mt-5">
    <div class="alert alert-warning">Adding port call for Vessel - <strong><?php echo $row['name']; ?></strong>,  VID: <strong><?php echo $row['v_id']; ?></strong></div>
    <form action="portcall.php" method="post">
            Current Date: <input class="form-control mb-2" name="added" type="date" value="<?php echo"$date"; ?>" readonly>
    <div class="row mt-2 mb-2">
        <div class="col-lg-3 mt-2">
            <div class="card">
            <strong class="card-header heading">Arrival &amp; Departure Dates</strong>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            
                        <div class="row">
                        <input class="form-control" name="v_id" type="text" value="<?php echo $row['v_id']; ?>" readonly hidden>
                        </div>
                        
                        <div class="col-md-6">
                        <label class="form-label">Arrival Date</label>: 
                        <input class="form-control" name="arrive" type="date">
                        </div>
                        
                        <div class="col-md-6">
                        <label class="form-label">Arrival time</label>: 
                        <input class="form-control" name="arr_t" type="text">
                        </div>
                        
                        <div class="col-md-6">
                        <label class="form-label">Depart Date</label>: 
                        <input class="form-control" name="depart" type="date">
                        </div>
                        
                        <div class="col-md-6">
                        <label class="form-label">Depart time</label>: 
                        <input class="form-control" name="dep_t" type="text">
                        </div>
                    
             <hr class="mt-3">
             <strong>Boarding Officer</strong><br>
                        <div class="col-md-6">
                        <label class="form-label">Arrival</label>: 
                        <input class="form-control" name="bo_arr" type="date">
                        </div>
                        <div class="col-md-6">
                        <label class="form-label">Depart</label>: 
                        <input class="form-control" name="bo_dep" type="date">
                        </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-2">
            <div class="card">
            <strong class="card-header heading">INWARD CATCH Arrival Notification</strong>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-4">
                        <label class="form-label">SKJ</label>: 
                        <input class="form-control" name="in_skj" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">YTF</label>: 
                        <input class="form-control" name="in_ytf" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">BET</label>: 
                        <input class="form-control" name="in_bet" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">ALB</label>: 
                        <input class="form-control" name="in_alb" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">MLS</label>: 
                        <input class="form-control" name="in_mls" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">SWO</label>: 
                        <input class="form-control" name="in_swo" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">OTH</label>: 
                        <input class="form-control" name="in_oth" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">MIX</label>: 
                        <input class="form-control" name="in_mix" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">Total</label>: 
                        <input class="form-control" name="in_total" type="number">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-2">
            <div class="card">
            <strong class="card-header heading">TRANSSHIPMENT MONITORING</strong>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-4">
                        <label class="form-label">SKJ</label>: 
                        <input class="form-control" name="tm_skj" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">YTF</label>: 
                        <input class="form-control" name="tm_ytf" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">BET</label>: 
                        <input class="form-control" name="in_bet" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">MIX</label>: 
                        <input class="form-control" name="tm_mix" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">Total</label>: 
                        <input class="form-control" name="tm_total" type="number">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-2">
            <div class="card">
            <strong class="card-header heading">TRANSSHIP/OFFLOAD IN PORT</strong>
                <div class="card-body">
                    
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-4">
                        <label class="form-label">SKJ</label>: 
                        <input class="form-control" name="off_skj" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">YTF</label>: 
                        <input class="form-control" name="off_ytf" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">BET</label>: 
                        <input class="form-control" name="off_bet" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">ALB</label>: 
                        <input class="form-control" name="off_alb" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">MLS</label>: 
                        <input class="form-control" name="off_mls" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">SWO</label>: 
                        <input class="form-control" name="off_swo" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">OTH</label>: 
                        <input class="form-control" name="off_oth" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">MIX</label>: 
                        <input class="form-control" name="off_mix" type="number">
                            </div>
                            
                            <div class="col-md-4">
                        <label class="form-label">Total</label>: 
                        <input class="form-control" name="off_total" type="number">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2 mb-2">
        <div class="col-md-6 mt-2">
            <div class="card">
                <strong class="card-header">Reciever (mt)</strong>
                <div class="card-body">
                    
                    <div class="container">
                        <div class="row">
                    
                    <div class="col-md-4">
                        <label class="form-label">KOIL (KLs)</label>: 
                        <input class="form-control" name="rec_koil" type="number">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">KFL</label>: 
                        <input class="form-control" name="rec_kfl" type="number">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Reef Carrier</label>: 
                        <input class="form-control" name="rec_rc" type="number">
                    </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-2">
            <div class="card">
                <strong class="card-header">Status</strong>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                    
                    <div class="col-md-6">
                        <label class="form-label">Scan</label>: 
                        <input class="form-control" name="st_scan" type="file">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">File</label>: 
                        <input class="form-control" name="st_file" type="file">
                    </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
        <!--submit button-->
        <input type="submit" class="btn btn-sm mt-3 btn-primary" value="submit" name="submit" placeholder="submit">
        </form>
</div>


<?php include 'includes/footer.php'; ?>