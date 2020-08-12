<?php
    include "Connection.php";
    if(isset($_POST['txtname'])&& isset($_POST['numage'])&& isset($_POST['numweight'])&& isset($_POST['numheight'])&& isset($_POST['ckfood'])){
        $cus_name = $_POST['txtname'];
        $cus_age = $_POST['numage'];
        $cus_weight = $_POST['numweight'];
        $cus_height = $_POST['numheight'];
        $cus_food1 = $_POST['ckfood'];
        // = ($_POST['food'].','.$_POST['food2'].','.$_POST['food3']);
        
        
        
        $r1 = $_POST['ckfood'][0];
        $r2 = $_POST['ckfood'][1];
        $r3 = $_POST['ckfood'][2];
        $r4 = $_POST['ckfood'][3];
        $r5 = $_POST['ckfood'][4];
        $cus_allfood = $r1.$r2.$r3.$r4.$r5;
        $cus_allfoodtxt = ($r1." ".$r2." ".$r3." ".$r4." ".$r5);
        $f1 = "แกงจืดมะระยัดใส้";
        $f2 = "แกงส้ม";
        $f3 = "ขนมกล้วย";
        $f4 = "ขนมครก";
        $f5 = "ขนมจีนน้ำยา";
        //$x = array(90,28,120,92,332);

        $cal ;

        if($cus_allfood == $f1){
            $cal = 90;
        }elseif($cus_allfood == $f2){
            $cal = 28;
        }elseif($cus_allfood == $f3){
            $cal = 120;
        }elseif($cus_allfood == $f4){
            $cal = 92;
        }elseif($cus_allfood == $f5){
            $cal = 332;
        }elseif($cus_allfood == $f1.$f2){
            $cal = 90+28;
        }elseif($cus_allfood == $f1.$f3){
            $cal = 90+120;
        }elseif($cus_allfood == $f1.$f4){
            $cal = 90+92;
        }elseif($cus_allfood == $f1.$f5){
            $cal = 90+332;
        }elseif($cus_allfood == $f1.$f2.$f3){
            $cal = 90+28+120;
        }elseif($cus_allfood == $f1.$f2.$f4){
            $cal = 90+28+92;
        }elseif($cus_allfood == $f1.$f2.$f5){
            $cal = 90+28+332;
        }elseif($cus_allfood == $f1.$f2.$f3.$f4){
            $cal = 90+28+120+92;
        }elseif($cus_allfood == $f1.$f2.$f3.$f5){
            $cal = 90+28+120+332;
        }elseif($cus_allfood == $f1.$f2.$f3.$f4.$f5){
            $cal = 90+28+120+92+332;
        }elseif($cus_allfood == $f2.$f3){
            $cal = 28+120;
        }elseif($cus_allfood == $f2.$f4){
            $cal = 28+92;
        }elseif($cus_allfood == $f2.$f5){
            $cal = 28+332;
        }elseif($cus_allfood == $f2.$f3.$f4){
            $cal = 28+120+92;
        }elseif($cus_allfood == $f2.$f3.$f5){
            $cal = 28+120+332;
        }elseif($cus_allfood == $f2.$f3.$f4.$f5){
            $cal = 28+120+92+332;
        }elseif($cus_allfood == $f3.$f4){
            $cal = 120+92;
        }elseif($cus_allfood == $f3.$f5){
            $cal = 120+332;
        }elseif($cus_allfood == $f3.$f4.$f5){
            $cal = 120+92+332;
        }elseif($cus_allfood == $f4.$f5){
            $cal = 92+332;
        }
       $sql="insert into customer(cus_name,cus_age,cus_weight,cus_height,cus_foodeat) values('$cus_name','$cus_age','$cus_weight','$cus_height','$cus_allfoodtxt')";
       //$sqlDel = "DELETE FROM customer WHERE cus_id = " + $_POST['cus_id'];
       if(mysqli_query($conn,$sql)){
                header("Location:View.php?cal=$cal");
        }
    }
    
?>