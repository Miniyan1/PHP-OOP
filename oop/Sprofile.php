<html>
<head>
    <style>
        .welcome{
            float: left;
            margin-left: 15px;
        }
        #users {
            float: right;
            width: 30%;
            margin: auto;
            /*margin-right: 12px;*/
        }

        /*}*/
        #users th{
            text-align: center;

        }
        /*#content-right{*/
            /*!*float: right;*!*/
        /*}*/
        /*#content-left{*/
            /*float: left;*/
            /*margin: 0;*/
        }
        #filetable{
            width:35%;
            margin: auto;

        }
        #filetable th{
            text-align: center;

        }
        .imp{
            background-color: #0275d8;
            color: #fff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="Sprofile.php">anif.com.np / control panel</a>
</nav>
<br><br>
<div class="welcome"><h3>WELCOME BACK ANIF...HOPE YOU'RE HAVING A GOOD TIME...</h3></div>
<br><br><br><br>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "uploads";
$connection = mysqli_connect($host,$user,$password,$database);

$query = "Select * from tbl_uploads ";
$result = mysqli_query($connection,$query);
?>
<div class="col-xs-6 .col-sm-3" id="content-left">
<table border="2px" id="filetable" >
    <th colspan="5"> My Documents</th>
    <tr class="imp">
        <td>ID</td>
        <td> File Detail</td>
        <td width="20px">Uploads</td>
        <td width="20px">File type</td>
        <td width="20px">File size</td>
        <td colspan="2" >Action</td>

    </tr>
    <tr>
        <?php
        $details=""; $dfile=""; $filetype="";$filesize="";
        $i = 1;
        while($data = mysqli_fetch_assoc($result)) {
        $details = $data['Details'];
        $dfile = $data['file'];
        $filetype = $data['type'];
        $filesize = $data['size'];


        ?>
        <td><?php echo $i++;?></td>
        <td><?php echo $details; ?></td>
        <td><?php echo $dfile;?></td>
        <td><?php echo $filetype;?></td>
        <td><?php echo $filesize;?></td>
        <td><a href="udelete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            <td><a href="editlist.php?id=<?php echo $data['id']; ?>">Modify</a></td>
    </tr>
    <?php }?>

</table>
    <br>
    <div style="background-color:; height:10em; width:22em;">
    <label><h3>Upload Your File</h3></label>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label class="form-group">File:</label>&nbsp;<input type="file" name="file" class="form-group">
        <label class="form-group"> Details:</label> <input type="text" name="details" class="form-control"><BR>
        <button class="btn btn-primary btn-block" name="btn-upload" >POST</button>
    </form>
    </div>

</div>



<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "anif dai";
$connection = mysqli_connect($host,$user,$password,$database);
$firstname="";$lastname=""; $Email=""; $Address=""; $phone="";
$query = "Select * from users ";
$result = mysqli_query($connection,$query);
//$data = mysqli_fetch_assoc($result) ;





?><div id="content-right" class="col-xs-6 .col-sm-3">

<table border = "2" id="users"   >
  <th colspan="9">User Control Panel</th>
    <tr class="imp">
        <td>ID</td>
        <td>Name</td>

        <td>Username</td>
        <td>Email</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Password</td>
        <td colspan="2">Action</td>


    </tr>

    <?php
    $i = 1;
    while($data = mysqli_fetch_assoc($result)) {
        $fullname = $data['full_name'];
        $username = $data['username'];
        $Email = $data['Email'];
        $Address = $data['address'];
        $phone = $data['phone'];
        $password = $data['password'];
        $id = $data['id'];

        ?>
        <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $fullname?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $Email;?></td>
            <td><?php echo $Address;?></td>
            <td><?php echo $phone;?></td>
            <td><?php echo $password;?></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            <td><a href="editlist.php?id=<?php echo $data['id']; ?>">Modify</a></td>
        </tr>

    <?php }?>

</center></table>
</div>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>
<script src="tether.min.js"></script>
</body>
</html>
