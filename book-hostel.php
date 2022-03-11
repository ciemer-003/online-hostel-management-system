<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for registration
if($_POST['submit'])
{
    $roomno=$_POST['room'];
    $seater=$_POST['seater'];
    $feespm=$_POST['fpm'];
    $foodstatus=$_POST['foodstatus'];
    $stayfrom=$_POST['stayf'];
    $duration=$_POST['duration'];
    $regno=$_POST['regno'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $contactno=$_POST['contact'];
    $emailid=$_POST['email'];
    $emcntno=$_POST['econtact'];
    $gurname=$_POST['gname'];
    $gurrelation=$_POST['grelation'];
    $gurcntno=$_POST['gcontact'];

    $query="insert into  booking(roomno,seater,feespm,foodstatus,stayfrom,duration,regno,firstName,middleName,lastName,gender,contactno,emailid,egycontactno,guardianName,guardianRelation,guardianContactno) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('iiiisiissssisissi',$roomno,$seater,$feespm,$foodstatus,$stayfrom,$duration,$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$emcntno,$gurname,$gurrelation,$gurcntno);
    $stmt->execute();
    $stmt->close();


    $query1="insert into  userregistration(regNo,firstName,middleName,lastName,gender,contactNo,email,password) values(?,?,?,?,?,?,?,?)";
    $stmt1= $mysqli->prepare($query1);
    $stmt1->bind_param('sssssiss',$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$contactno);
    $stmt1->execute();
    echo"<script>alert('Room Succssfully Booked');</script>";
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>Student Hostel Registration</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script>
        function getSeater(val) {
            $.ajax({
                type: "POST",
                url: "get_seater.php",
                data:'roomid='+val,
                success: function(data){
//alert(data);
                    $('#seater').val(data);
                }
            });

            $.ajax({
                type: "POST",
                url: "get_seater.php",
                data:'rid='+val,
                success: function(data){
//alert(data);
                    $('#fpm').val(data);
                }
            });
        }
    </script>

</head>
<body>
<?php include('includes/header.php');?>
<div class="ts-main-content">
    <?php include('includes/sidebar.php');?>
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <h2 class="page-title">Booking Process </h2>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Fill all Required Details*</div>
                                <div class="panel-body">
                                    <form method="post" action="" class="form-horizontal">
<?php
                                        $aid=$_SESSION['id'];
                                        $ret="select * from userregistration where id=?";
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->bind_param('i',$aid);
                                        $stmt->execute() ;//ok
                                        $res=$stmt->get_result();
                                        //$cnt=1;
                                        while($row=$res->fetch_object())
                                        {
                                        ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-primary">

                                                            <div class="form-group">
                                                                <label class="col-sm-4 control-label"><h4 style="color: green" align="left">Personal info </h4> </label>
                                                            </div>

                                                            <div class="panel-body">
                                                                <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"> Registration No : </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="regno" id="regno"  class="form-control" required="required" value="<?php echo $row->regNo;?>" >
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label">First Name : </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="fname" id="fname"  class="form-control" value="<?php echo $row->firstName;?>"   required="required" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label">Middle Name : </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="mname" id="mname"  class="form-control" value="<?php echo $row->middleName;?>"  >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label">Last Name : </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="lname" id="lname"  class="form-control" value="<?php echo $row->lastName;?>" required="required">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label">Gender : </label>
                                                                        <div class="col-sm-8">
                                                                            <select name="gender" class="form-control" required="required">
                                                                                <option value="<?php echo $row->gender;?>"><?php echo $row->gender;?></option>
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>
                                                                                <option value="others">Others</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label">Contact No : </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="contact" id="contact"  class="form-control" maxlength="10" value="<?php echo $row->contactNo;?>" required="required">
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label">Email id: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="email" name="email" id="email"  class="form-control" value="<?php echo $row->email;?>" readonly>
                                                                            <span id="user-availability-status" style="font-size:12px;"></span>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><h4 style="color: green" align="left">Room Related info </h4> </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Room no. </label>
                                            <div class="col-sm-8">
                                                <select name="room" id="room"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required>
                                                    <option value="">Select Room</option>
                                                    <?php $query ="SELECT * FROM rooms";
                                                    $stmt2 = $mysqli->prepare($query);
                                                    $stmt2->execute();
                                                    $res=$stmt2->get_result();
                                                    while($row=$res->fetch_object())
                                                    {
                                                        ?>
                                                        <option value="<?php echo $row->room_no;?>"> <?php echo $row->room_no;?></option>
                                                    <?php } ?>
                                                </select>
                                                <span id="room-availability-status" style="font-size:12px;"></span>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Seater</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="seater" id="seater"  class="form-control"  >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Fees Per Month</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="fpm" id="fpm"  class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Food Status</label>
                                            <div class="col-sm-8">
                                                <input type="radio" value="0" name="foodstatus" checked="checked"> Without Food
                                                <input type="radio" value="1" name="foodstatus"> Food inclusive(2000.00 Per Month Extra)
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Stay From</label>
                                            <div class="col-sm-8">
                                                <input type="date" name="stayf" id="stayf"  class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Duration</label>
                                            <div class="col-sm-8">
                                                <select name="duration" id="duration" class="form-control">
                                                    <option value="">Select Duration in Month(s)</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><h4 style="color: green" align="left">Contact info </h4> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Contact No* : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="contact" id="contact"  class="form-control" required="required">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Emergency Contact*: </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="econtact" id="econtact"  class="form-control" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Guardian  Name* : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="gname" id="gname"  class="form-control" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Guardian  Relation* : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="grelation" id="grelation"  class="form-control" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Guardian Contact no* : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="gcontact" id="gcontact"  class="form-control" required="required">
                                            </div>
                                        </div>






                                        <div class="col-sm-6 col-sm-offset-4">
                                            <button class="btn btn-default" type="submit" href="dashboard.php">Cancel</button>
                                            <input type="submit" name="submit" Value="Book Room" class="btn btn-primary">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>
</body>
<script>
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data:'roomno='+$("#room").val(),
            type: "POST",
            success:function(data){
                $("#room-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error:function (){}
        });
    }
</script>

</html>