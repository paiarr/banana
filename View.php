<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Welcome</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
    <h1>คำนวณจำนวนแคลอรี่ที่กินไป</h1>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-auto">
    <h2>กรอกข้อมูผู้ใช้</h2>
    <form action="Manager.php" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">ชื่อ : </label>
        <div class="col-sm-10">
            <label><input type="text"  name="txtname"> </label> 
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="age">อายุ : </label>
        <div class="col-sm-10">
            <label><input type="number"  name="numage"> </label> 
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="weight">น้ำหนัก : </label>
        <div class="col-sm-10">
            <label><input type="number"  name="numweight"> </label> 
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="height">ส่วนสูง : </label>
        <div class="col-sm-10">
            <label><input type="number"  name="numheight"> </label> 
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="height">รายการอาหาร : </label>
        <div class="col-sm-10">
            <label><input type="checkbox"  name="ckfood[]" value="แกงจืดมะระยัดใส้">แกงจืดมะระยัดใส้</label> 
            <label><input type="checkbox"  name="ckfood[]" value="แกงส้ม">แกงส้ม</label> 
            <label><input type="checkbox"  name="ckfood[]" value="ขนมกล้วย">ขนมกล้วย</label> 
            <label><input type="checkbox"  name="ckfood[]" value="ขนมครก">ขนมครก</label> 
            <label><input type="checkbox"  name="ckfood[]" value="ขนมจีนน้ำยา">ขนมจีนน้ำยา</label> 
        </div>
    </div>

    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <div class="radio">
            
            <p>รวมแคลอรี่ทั้งหมด :  <?php echo $get_cal = isset($_GET['cal']) ? $_GET['cal'] : 0;?> กิโลแคลอรี่</p>
            </div>
        </div>
    </div>
    
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button><br><br>
        </div>
    </div>
    </form>
    
    
    </div>
    <div class="col-sm-3">
    </div>
    </div>
    
  </div>
</div>
<center>
<table border="1">
<?php
    include "Connection.php";
    $sqlc1 = "SELECT * FROM customer";
    $resC1 = mysqli_query($conn,$sqlc1);
    if($resC1){
        $num = 1;
        
        while($row = mysqli_fetch_assoc($resC1)){?>
        <thead>
        <tr>
        <th>ID</th>
        <th>ชื่อ</th>
        <th>อายุ</th>
        <th>น้ำหนัก</th>
        <th>ส่วนสูง</th>
        <th>เวลาคำนวณ</th>
        <th>รายการอาหาร</th>
        <th>ลบข้อมูล/แก้ไข</th>
        </tr>
        </thead>
        <tr>
            <td>
                <?php echo $row['cus_id'];?>
            </td>
            <td>
                <?php echo $row['cus_name'];?>
            </td>
            <td>
                <?php echo $row['cus_age'];?>
            </td>
            <td>
                <?php echo $row['cus_weight'];?>
            </td>
            <td>
                <?php echo $row['cus_height'];?>
            </td>
            <td>
                <?php echo $row['cus_timestamp'];?>
            </td>
            <td>
                <?php echo $row['cus_foodeat'];?>
            </td>
            <td>
            <a href="delete.php?cus_id=<?php echo $row["cus_id"]; ?>">Delete |</a>
            <a href="update.php?cus_id=<?php echo $row["cus_id"]; ?>">Update</a>
            </td>
        </tr>
        <?php 
        }
    }
        ?>
    </table></center>
</body>
</html>