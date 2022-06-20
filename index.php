<?php 
include 'config.php';
include 'includes/head.php';
include 'functions.php';

if(isset($_POST['submit'])){
    //declare variables
    
    $v_id=$_POST['v_id'];
    $name=$_POST['name'];
    $gear=$_POST['gear'];
    $flag=$_POST['flag'];
    $company=$_POST['company'];
    $master=$_POST['master'];
    $m_nationality=$_POST['m_nationality'];
    $observer=$_POST['observer'];
    $o_nationality=$_POST['o_nationality'];
    $lc=$_POST['lc'];
    $agent=$_POST['agent'];
    $pov=$_POST['pov'];
    $tm=$_POST['tm'];
    $np=$_POST['np'];
    $added=$_POST['added'];
    
    $sqlcheck = mysqli_query($conn, "SELECT * FROM v_table WHERE name = '$name'; ");
    $row = mysqli_num_rows($sqlcheck);
    //Code is successful and working prevent duplicate entry dont rewrite this code
    if($row > 0){
        echo "<script>alert('Duplicate Entry! This vessel has been registered before'); location.href = 'index.php';</script>";
        
    }else{    
        mysqli_query($conn, "INSERT INTO v_table (
        v_id, 
        name, 
        gear, 
        flag,
        company,
        master,
        m_nationality,
        observer,
        o_nationality,
        lc,
        agent,
        pov,
        tm,
        np,
        added
        ) VALUES (
        '$v_id',
        '$name',
        '$gear',
        '$flag',
        '$company',
        '$master',
        '$m_nationality',
        '$observer',
        '$o_nationality',
        '$lc',
        '$agent',
        '$pov',
        '$tm',
        '$np',
        '$added')");
        echo "<script>alert('Added Successfully!')</script>";
    }
}

$myuid = uniqid('');
$date = date('Y-m-d');



?>
	<div class="container-fluid bg-light mt-5 pt-5 pb-5">
		<div class="row pt-2 pb-2">
			<!--=====================ACTIONS CARD===============================-->
			<!--=====================DASHBOARD CARD==============================-->
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">Dashboard 
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-sm btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i></button>
                        <a class="btn btn-sm btn-dark float-right" value="Reset" onclick="window.location='index.php'"><i class="fa fa-refresh"></i>
                        </a> 
                    
                    </div>
					<div class="card-body container-fluid overflow-auto"> 
                        <div class="row">
                            <div class="col-md-2">
                    <canvas id="doughnut-chart" width="100%" height="100%"></canvas>
                    <script>
                      new Chart(document.getElementById("doughnut-chart"), {
                          type: 'doughnut',
                          data: {
                            labels: [
                            <?php
                                 $username = "root";
                                 $password = "";
                                 $database = "practice";
                                 $mysqli = new mysqli("localhost", $username, $password, $database);

                                 $query = "SELECT gear, COUNT(*) FROM v_table GROUP BY gear;";

                                 if ($result = $mysqli->query($query)) {

                                     while ($row = $result->fetch_assoc()) {
                                         $village = $row["gear"];;

                                         echo "'".$village."'," ;
                                     }

                                 /*freeresultset*/
                                 $result->free();
                                 } 
                            ?>
                            ],
                            datasets: [
                              {
                                label: "gear ()",
                                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#044e50"],
                                data: [
                                
                            <?php
                                 $username = "root";
                                 $password = "";
                                 $database = "practice";
                                 $mysqli = new mysqli("localhost", $username, $password, $database);

                                 $query = "SELECT gear, COUNT(*) FROM v_table GROUP BY gear;";

                                 if ($result = $mysqli->query($query)) {

                                     while ($row = $result->fetch_assoc()) {
                                         $total = $row["COUNT(*)"];;

                                         echo "".$total."," ;
                                     }

                                 /*freeresultset*/
                                 $result->free();
                                 } 
                            ?>
                                ]
                              }
                            ]
                          },
                          options: {
                            title: {
                              display: true,
                              text: 'Vessel Gears'
                            }
                          }
                      });
                    </script>
                            </div>
                            <div class="col-md-2">
                            </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<!--=====================DASHBOARD CARD==============================-->

		<div class="row pt-2 pb-5">
			<!--=====================VESSEL TABLE===============================-->
			<div class="col-md-4">
				<div class="card shadow">
					<div class="card-header">Registered Vessels</div>
					<div class="card-body overflow-auto">
						<?php 
                    $results = mysqli_query($conn, "SELECT * FROM v_table ORDER BY added "); ?>
							<table id="vessels" class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Name</th>
										<th>VID</th>
										<th>Gear</th>
										<th>Added</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php while ($row = mysqli_fetch_array($results)) { ?>
									<tr class="small">
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['v_id']; ?></td>
										<td><?php echo $row['gear']; ?></td>
										<td><?php echo $row['added']; ?></td>
										<td> 
                                            <a href="vessel_view.php?view=<?php echo $row['v_id'];?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-eye"></i>
                                            </a> 
                                            <a href="update.php?edit=<?php echo $row['v_id']; ?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-pencil"></i>
                                            </a> 
                                            <a href="portcall.php?portcall=<?php echo $row['v_id']; ?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
								            <a href="delete.php?del=<?php echo $row['v_id']; ?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
									</tr>
									<?php } ?>
							</table>
					</div>
				</div>
			</div>
			<!--=====================VESSEL TABLE===============================-->
			<!--=====================PORTCALL TABLE=============================-->
			<div class="col-md-8">
				<div class="card shadow">
					<div class="card-header">Port Calls</div>
					<div class="card-body overflow-auto">
						<?php 
                            $results = mysqli_query($conn, "SELECT * FROM v_portcall"); ?>
							<table class="table table-striped" id="portcalls">
								<thead>
									<tr>
										<th>PC_ID</th>
										<th>VID</th>
										<th>arrive</th>
										<th>depart</th>
										<th>added</th>
										<th>BO Arr</th>
										<th>BO Dep</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php while ($row = mysqli_fetch_array($results)) { ?>
									<tr class="small">
										<td><?php echo $row['d_id']; ?></td>
										<td><?php echo $row['v_id']; ?></td>
										<td><?php echo $row['arrive']; ?></td>
										<td><?php echo $row['depart']; ?></td>
										<td><?php echo $row['registered']; ?></td>
										<td><?php echo $row['bo_arr']; ?></td>
										<td><?php echo $row['bo_dep']; ?></td>
										<td>
                                            <a href="update_portcall.php?edit=<?php echo $row['d_id']; ?>" class="btn btn-sm btn-light">
                                            <i class="fa fa-pencil"></i>
                                            </a> 
                                            <a href="delete_portcall.php?del=<?php echo $row['d_id']; ?>" class="btn btn-sm btn-light">
                                            <i class="fa fa-warning"></i>
                                            </a> 
                                        </td>
									</tr>
									<?php } ?>
							</table>
					</div>
				</div>
			</div>
			<!--=====================PORTCALL TABLE=============================-->
		</div>
	</div>

	<!-- =======================================Registration Modal =========================================-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="background-color:#3c6382;color:white;">
					<h5 class="modal-title" id="exampleModalLabel">Register Vessel</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<p class="p-2 border bg-light">Registration date:
					<?php echo"$date"; ?>
				</p>
				<!--====================REGISTRATION FORM========================-->
				<div class="modal-body">
					<form action="index.php" method="post">
						<div class="container">
							<div class="row">
                                
                                <div class="col-sm-12">
								<label class="form-label">Vessel Name</label>
								<input class="form-control" type="text" name="name" value="" required>
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">VID</label>
								<input class="form-control" type="text" name="v_id" value="<?php echo $myuid; ?>" required readonly>
                                </div>
                                <div class="col-sm-3">
								<label class="form-label">Gear</label>
								<select class="form-select" type="text" name="gear" aria-label="Default select example">
									<option selected>Select Gear</option>
									<option name="gear" value="PS">PS</option>
									<option name="gear" value="RC">RC</option>
									<option name="gear" value="P&L">P&amp;L</option>
									<option name="gear" value="LL">LL</option>
									<option name="gear" value="FC">FC</option>
									<option name="gear" value="BU">BU</option>
								</select>
                                </div>
                                
                                <div class="col-sm-6">
                                <label class="form-label">Flag</label>
                                <select name="flag" class="form-select">
    <option name="flag" value="  " selected>Select a country</option>
    <option name="flag" value="--">Not Specified</option>
    <option name="flag" value="AF">Afghanistan</option>
    <option name="flag" value="AL">Albania</option>
    <option name="flag" value="DZ">Algeria</option>
    <option name="flag" value="AS">American Samoa</option>
    <option name="flag" value="AD">Andorra</option>
    <option name="flag" value="AO">Angola</option>
    <option name="flag" value="AI">Anguilla</option>
    <option name="flag" value="AQ">Antarctica</option>
    <option name="flag" value="AG">Antigua and Barbuda</option>
    <option name="flag" value="AR">Argentina</option>
    <option name="flag" value="AM">Armenia</option>
    <option name="flag" value="AW">Aruba</option>
    <option name="flag" value="AU">Australia</option>
    <option name="flag" value="AT">Austria</option>
    <option name="flag" value="AZ">Azerbaijan</option>
    <option name="flag" value="BS">Bahamas</option>
    <option name="flag" value="BH">Bahrain</option>
    <option name="flag" value="BD">Bangladesh</option>
    <option name="flag" value="BB">Barbados</option>
    <option name="flag" value="BY">Belarus</option>
    <option name="flag" value="BE">Belgium</option>
    <option name="flag" value="BZ">Belize</option>
    <option name="flag" value="BJ">Benin</option>
    <option name="flag" value="BM">Bermuda</option>
    <option name="flag" value="BT">Bhutan</option>
    <option name="flag" value="BO">Bolivia</option>
    <option name="flag" value="BA">Bosnia and Herzegowina</option>
    <option name="flag" value="BW">Botswana</option>
    <option name="flag" value="BV">Bouvet Island</option>
    <option name="flag" value="BR">Brazil</option>
    <option name="flag" value="IO">British Indian Ocean Territory</option>
    <option name="flag" value="BN">Brunei Darussalam</option>
    <option name="flag" value="BG">Bulgaria</option>
    <option name="flag" value="BF">Burkina Faso</option>
    <option name="flag" value="BI">Burundi</option>
    <option name="flag" value="KH">Cambodia</option>
    <option name="flag" value="CM">Cameroon</option>
    <option name="flag" value="CA">Canada</option>
    <option name="flag" value="CV">Cape Verde</option>
    <option name="flag" value="KY">Cayman Islands</option>
    <option name="flag" value="CF">Central African Republic</option>
    <option name="flag" value="TD">Chad</option>
    <option name="flag" value="CL">Chile</option>
    <option name="flag" value="CN">China</option>
    <option name="flag" value="CX">Christmas Island</option>
    <option name="flag" value="CC">Cocos (Keeling) Islands</option>
    <option name="flag" value="CO">Colombia</option>
    <option name="flag" value="KM">Comoros</option>
    <option name="flag" value="CG">Congo</option>
    <option name="flag" value="CD">Congo, the Democratic Republic of the</option>
    <option name="flag" value="CK">Cook Islands</option>
    <option name="flag" value="CR">Costa Rica</option>
    <option name="flag" value="CI">Cote d'Ivoire</option>
    <option name="flag" value="HR">Croatia (Hrvatska)</option>
    <option name="flag" value="CU">Cuba</option>
    <option name="flag" value="CY">Cyprus</option>
    <option name="flag" value="CZ">Czech Republic</option>
    <option name="flag" value="DK">Denmark</option>
    <option name="flag" value="DJ">Djibouti</option>
    <option name="flag" value="DM">Dominica</option>
    <option name="flag" value="DO">Dominican Republic</option>
    <option name="flag" value="TP">East Timor</option>
    <option name="flag" value="EC">Ecuador</option>
    <option name="flag" value="EG">Egypt</option>
    <option name="flag" value="SV">El Salvador</option>
    <option name="flag" value="GQ">Equatorial Guinea</option>
    <option name="flag" value="ER">Eritrea</option>
    <option name="flag" value="EE">Estonia</option>
    <option name="flag" value="ET">Ethiopia</option>
    <option name="flag" value="FK">Falkland Islands (Malvinas)</option>
    <option name="flag" value="FO">Faroe Islands</option>
    <option name="flag" value="FJ">Fiji</option>
    <option name="flag" value="FI">Finland</option>
    <option name="flag" value="FR">France</option>
    <option name="flag" value="FX">France, Metropolitan</option>
    <option name="flag" value="GF">French Guiana</option>
    <option name="flag" value="PF">French Polynesia</option>
    <option name="flag" value="TF">French Southern Territories</option>
    <option name="flag" value="GA">Gabon</option>
    <option name="flag" value="GM">Gambia</option>
    <option name="flag" value="GE">Georgia</option>
    <option name="flag" value="DE">Germany</option>
    <option name="flag" value="GH">Ghana</option>
    <option name="flag" value="GI">Gibraltar</option>
    <option name="country" value="GR">Greece</option>
    <option name="country" value="GL">Greenland</option>
    <option name="country" value="GD">Grenada</option>
    <option name="country" value="GP">Guadeloupe</option>
    <option name="country" value="GU">Guam</option>
    <option name="country" value="GT">Guatemala</option>
    <option name="country" value="GN">Guinea</option>
    <option name="country" value="GW">Guinea-Bissau</option>
    <option name="country" value="GY">Guyana</option>
    <option name="country" value="HT">Haiti</option>
    <option name="country" value="HM">Heard and Mc Donald Islands</option>
    <option name="country" value="VA">Holy See (Vatican City State)</option>
    <option name="country" value="HN">Honduras</option>
    <option name="country" value="HK">Hong Kong</option>
    <option name="country" value="HU">Hungary</option>
    <option name="country" value="IS">Iceland</option>
    <option name="country" value="IN">India</option>
    <option name="country" value="ID">Indonesia</option>
    <option name="country" value="IR">Iran (Islamic Republic of)</option>
    <option name="country" value="IQ">Iraq</option>
    <option name="country" value="IE">Ireland</option>
    <option name="country" value="IL">Israel</option>
    <option name="country" value="IT">Italy</option>
    <option name="country" value="JM">Jamaica</option>
    <option name="country" value="JP">Japan</option>
    <option name="country" value="JO">Jordan</option>
    <option name="country" value="KZ">Kazakhstan</option>
    <option name="country" value="KE">Kenya</option>
    <option name="flag" value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="KN">Saint Kitts and Nevis</option> 
    <option value="LC">Saint LUCIA</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option> 
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia (Slovak Republic)</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SH">St. Helena</option>
    <option name="country" value="PM">St. Pierre and Miquelon</option>
    <option name="country" value="SD">Sudan</option>
    <option name="country" value="SR">Suriname</option>
    <option name="country" value="SJ">Svalbard and Jan Mayen Islands</option>
    <option name="country" value="SZ">Swaziland</option>
    <option name="country" value="SE">Sweden</option>
    <option name="country" value="CH">Switzerland</option>
    <option name="country" value="SY">Syrian Arab Republic</option>
    <option name="country" value="TW">Taiwan, Province of China</option>
    <option name="country" value="TJ">Tajikistan</option>
    <option name="country" value="TZ">Tanzania, United Republic of</option>
    <option name="country" value="TH">Thailand</option>
    <option name="country" value="TG">Togo</option>
    <option name="country" value="TK">Tokelau</option>
    <option name="country" value="TO">Tonga</option>
    <option name="country" value="TT">Trinidad and Tobago</option>
    <option name="country" value="TN">Tunisia</option>
    <option name="country" value="TR">Turkey</option>
    <option name="country" value="TM">Turkmenistan</option>
    <option name="country" value="TC">Turks and Caicos Islands</option>
    <option name="country" value="TV">Tuvalu</option>
    <option name="country" value="UG">Uganda</option>
    <option name="country" value="UA">Ukraine</option>
    <option name="country" value="AE">United Arab Emirates</option>
    <option name="country" value="GB">United Kingdom</option>
    <option name="country" value="US">United States</option>
    <option name="country" value="UM">United States Minor Outlying Islands</option>
    <option name="country" value="UY">Uruguay</option>
    <option name="country" value="UZ">Uzbekistan</option>
    <option name="country" value="VU">Vanuatu</option>
    <option name="country" value="VE">Venezuela</option>
    <option name="country" value="VN">Viet Nam</option>
    <option name="country" value="VG">Virgin Islands (British)</option>
    <option name="country" value="VI">Virgin Islands (U.S.)</option>
    <option name="country" value="WF">Wallis and Futuna Islands</option>
    <option name="country" value="EH">Western Sahara</option>
    <option name="country" value="YE">Yemen</option>
    <option name="country" value="YU">Yugoslavia</option>
    <option name="country" value="ZM">Zambia</option>
    <option name="country" value="ZW">Zimbabwe</option>
</select>
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Company</label>
								<input class="form-control" type="text" name="company" value="">
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Master</label>
								<input class="form-control" type="text" name="master" value="">
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Master nationality</label>
								<input class="form-control" type="text" name="m_nationality" value="">
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Observer</label>
								<input class="form-control" type="text" name="observer" value="">
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Observer nationality</label>
								<input class="form-control" type="text" name="o_nationality" value=""> 
                                </div>
                                
                                <div class="col-sm-3">
								<label class="form-label">Loca Crew</label>
								<input class="form-control" type="number" name="lc" value=""> 
                                </div>
                                
                                <div class="col-sm-3">
								<label class="form-label">Agent</label>
								<input class="form-control" type="text" name="agent" value=""> 
                                </div>
                                
                                <div class="col-sm-12">
								<label class="form-label">Purpose of visit</label>
								<input class="form-control" type="text" name="pov" value=""> 
                                </div>
                                
                                <div class="col-sm-12">
								<label class="form-label">Detail of portcall</label>
								<input class="form-control" type="text" name="dopc" value=""> 
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Transhipment Monitor</label>
								<input class="form-control" type="text" name="tm" value=""> 
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Next port</label>
								<input class="form-control" type="text" name="np" value=""> 
                                </div>
                                
                                <div class="col-sm-6">
								<label class="form-label">Registration Date</label>
						        <input class="form-control" type="date" name="added" >
                                </div>
                                
                                
                            </div>
                                
                                
                                
						</div> 
                        </div>
				<div class="modal-footer">
					<input class="btn btn-sm btn-primary" type="submit" name="submit" placeholder="submit">
					<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</form>
				<!--====================REGISTRATION FORM========================-->
			</div>
		</div>
	</div>
	<?php  include 'includes/footer.php'; ?>