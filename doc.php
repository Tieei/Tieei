<?php include'includes/head.php'; ?>
<div class="container mt-5 ">
    <div class="card">
        <div class="card-header">Documentation</div>
        <div class="card-body">
            <strong>About</strong>
            <p>Portcall is a system of recording vessels informations upon their arrival and departure dates via ports. recording details such as inward and outward catches, as well as noting its observers and many other more.</p>
            <hr>
            <strong class="border-bottom">Development Environment</strong>
            <ul>
                <strong>Database server</strong>
                <li>Server: 127.0.0.1 via TCP/IP</li>
                <li>Server type: MariaDB</li>
                <li>Server connection: SSL is not being used</li>
                <li>Server version: 10.4.24-MariaDB - mariadb.org binary distribution</li>
                <li>Protocol version: 10</li>
                <li>User: root@localhost</li>
                <li>Server charset: UTF-8 Unicode (utf8mb4)</li><br>
                <strong>Web server</strong>
                <li>Apache/2.4.52 (Win64) OpenSSL/1.1.1m PHP/8.1.4</li>
                <li>Database client version: libmysql - mysqlnd 8.1.4</li>
                <li>PHP extension: mysqli Documentation curl Documentation mbstring Documentation</li><br>
                <strong>XAMPP</strong>
                <li>Version information: 5.1.3</li>
                <li>Documentation</li><br>
                <strong>Frameworks and Libraries</strong>
                <li>Boostrap 5.1.3</li>
                <li>jQuery 3.6</li>
                <li>@popperjs/core@2.9.2</li>
                <li>Datatable 1.12.1</li>
            </ul>
            <hr>
            <strong class="border-bottom">Offshore Database Developer</strong>
            <ul>
                <li>Tieei Eita</li>
                <li>Email: shadye208@gmail.com | tieeie@mfmrd.gov.ki</li>
                <li>Mobile: 73034937 &amp; 73035012</li>
            </ul>
            <hr>
            <strong class="border-bottom">Development progress log</strong>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">date</th>
      <th scope="col">progress</th>
      <th scope="col">OFD Advice</th>
      <th scope="col">solutions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>30/5/2022, Monday</th>
      <td>discussed with OFD team on the type of database systems they're working with and what manual systems must have its database developed</td>
      <td>none</td>
      <td>nil</td>
    </tr>
    <tr>
      <th>1/6/2022, Tuesday</th>
      <td>learned about purposes and host providers of RIMF, FIMS, VMS and TUFMAN2 and what systems need to be developed besides maintance</td>
      <td>none</td>
      <td>nil</td>
    </tr>
    <tr>
      <th>2/6/2022, Wedesday</th>
      <td>learning more about Port Call and getting an idea on how to build its database system from the template provided by the team</td>
      <td>none</td>
      <td>nil</td>
    </tr>
    <tr>
      <th>2/6/2022, Thursday</th>
      <td>Developed the first design of Port Call database system that has only one 1 table called vessel and has only the columns for vessels information. Showed the system to OFD team and discuss with the structure and architechure of how the system and noted their advice for future development</td>
      <td>vessel table must not duplicate vessel names but rather have another table that record the arrival and departure of vessels multiple times whilst not duplicating vessels.</td>
      <td>seperate vessel table from time(arrival) table and create a one to many relationship from vessel to time table.</td>
    </tr>
    <tr>
      <td> 2/6/2022 - 9/6/2022</td>
      <td>Modify system to OFD Advice from 2/6/2022 - 9/6/2022</td>
      <td></td>
      <td>Redesign interface to provide a more intuitive user experience</td>
    </tr>
  </tbody>
</table>  
            <hr>
        </div>
    </div>
</div>
<?php include'includes/footer.php'; ?>