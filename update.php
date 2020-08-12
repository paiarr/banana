<?php
include_once 'Connection.php';
if(count($_POST)>0) {
 $sql = mysqli_query($conn,"UPDATE customer set cus_id='" . $_POST['cus_id'] . "', cus_name='" . $_POST['cus_name'] . "', cus_age='" . $_POST['cus_age'] . "', cus_weight='" . $_POST['cus_weight'] . "' ,cus_height='" . $_POST['cus_height'] . "', cus_foodeat='" . $_POST['cus_foodeat'] . "'  WHERE cus_id='" . $_POST['cus_id'] . "'");
 header("Location:View.php?");
}
$result = mysqli_query($conn,"SELECT * FROM customer WHERE cus_id='" . $_GET['cus_id'] . "'");
$row= mysqli_fetch_assoc($result);
?>
<html>
<head>
<title>Update Customer Data</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Update</h1>
    </div>
    <div class="container">
        <form method="post" action="">
        <div><?php if(isset($message)) { echo $message; } ?>
        </div>
            <a>customerupdate List</a>
                        
                        <div class="col-sm-10">
                            <label>
                            <input type="hidden" name="cus_id" class="txtField" value="<?php echo $row['cus_id']; ?>">
                            </label> 
                        </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="age">ชื่อ : </label>
                        <div class="col-sm-10">
                            <label><input type="text"  name="cus_name" value="<?php echo $row['cus_name']; ?>"> </label> 
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-sm-2" for="weight">อายุ : </label>
                        <div class="col-sm-10">
                            <label><input type="number"  name="cus_age" value="<?php echo $row['cus_age']; ?>"> </label> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="height">น้ำหนัก : </label>
                        <div class="col-sm-10">
                            <label><input type="number"  name="cus_weight" value="<?php echo $row['cus_weight']; ?>"> </label> 
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-sm-2" for="height">ส่วนสูง : </label>
                        <div class="col-sm-10">
                            <label><input type="number"  name="cus_height" value="<?php echo $row['cus_height']; ?>"> </label> 
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-sm-2" for="height">รายการอาหาร : </label>
                        <div class="col-sm-10">
                            <label><input type="text"  name="cus_foodeat" value="<?php echo $row['cus_foodeat']; ?>"> </label><br>
                        </div>
                    </div>
                    
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" value="Submit">Submit</button><br><br>
                        </div>
                    </div>
        </form>
    </div>
</body>
</html>
