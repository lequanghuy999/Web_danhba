<?php
    session_start();
    include('include/header1.php');
?>

<div class="content">
    <div style="width: 60%; margin-left: 15%;padding-top: 85px;">
        <div style="width:80%, margin-left:17%;">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a href="admin-home.php">Admin Home</a></li>
                <li class="breadcrumb-item active"><a href="canbo.php">Cán bộ</a></li>
                <li class="breadcrumb-item active">Thêm cán bộ</li>
            </ul>
        </div>
        <form  method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
            <p class="h1">Thêm cán bộ</p>
            <hr>
            <div class="mb-3 form-group">
                <label for="email">Tên cán bộ :</label>
                <input type="text" name="ho_ten" placeholder="Tên cán bộ ..." class="form-control" id="email">
            </div>

            <div class="mb-3 form-group">
                <label for="comment">Địa chỉ:</label>
                <input type="text" name="dia_chi" placeholder="Địa chỉ ..." class="form-control" id="email">
            </div>

            <div class="mb-3 form-group">
                <label for="comment">Email:</label>
                <input type="text" name="email" placeholder="Email ..." class="form-control" id="email">
            </div>
            
            <div class="mb-3 form-group">
                <label for="comment">Chức vụ:</label>
                <input type="text" name="chuc_vu" placeholder="Chức vụ ..." class="form-control" id="email">
            </div>

            <div class="mb-3 form-group">
                <label for="comment">Điện thoại cơ quan:</label>
                <input type="text" name="dt_coquan" placeholder="Điện thoại cơ quan ..." class="form-control" id="email">
            </div>
            <div class="mb-3 form-group">
                <label for="comment">Điện thoại di động:</label>
                <input type="text" name="dt_didong" placeholder="Điện thoại di động ..." class="form-control" id="email">
            </div>
            <div class="mb-3 form-group">
                <label for="comment">Phòng ban:</label>
                <input type="text" name="phong_ban" placeholder="Phòng ban ..." class="form-control" id="email">
            </div>

            <div class="mb-3 form-group">
                <label for="email">Images:</label>
                <input type="file" name="image" class="form-control img-thumbnail" id="email">
            </div>

            

            <input type="submit" name="submit" class="btn btn-primary" value="Thêm cán bộ">
        </form>
        <script>
			
       function validateform(){
         var x = document.forms['categoryform']['ho_ten'].value;
         var y = document.forms['categoryform']['dia_chi'].value;
         var z = document.forms['categoryform']['email'].value;
         var t = document.forms['categoryform']['chuc_vu'].value;
         var q = document.forms['categoryform']['dt_coquan'].value;
         var k = document.forms['categoryform']['dt_didong'].value;
         var r = document.forms['categoryform']['phong_ban'].value;
         if (x=="") {
          	alert('Chưa nhập họ tên !');
          	return false;
          }
          
          if (y=="") {
          	alert('Chưa nhập địa chỉ !');
          	return false;
          }
          if (t=="") {
          	alert('Chưa nhập chức vụ !');
          	return false;
          }
          if (q=="") {
          	alert('Chưa nhập điện thoại cơ quan !');
          	return false;
          }
          if (k=="") {
          	alert('Chưa nhập điện thoại di động !');
          	return false;
          }
          if (r=="") {
          	alert('Chưa nhập phòng ban !');
          	return false;
          }
          
          
       }
 
		</script>

    </div>
</div>

<?php
    include('db/connection.php');
    if(isset($_POST['submit'])) {
        $ho_ten=$_POST['ho_ten'];
        $dia_chi=$_POST['dia_chi'];
        $email=$_POST['email'];
        $chuc_vu=$_POST['chuc_vu'];
        $dt_coquan=$_POST['dt_coquan'];
        $dt_didong=$_POST['dt_didong'];
        $phong_ban=$_POST['phong_ban'];
        $image=$_FILES['image']['name'];
        $tmp_image=$_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_image,"images/.$image");

        $query=mysqli_query($conn,"insert into can_bo(ho_ten,dia_chi,email,chuc_vu,dt_coquan,dt_didong,phong_ban,image)values('$ho_ten','$dia_chi','$email','$chuc_vu','$dt_coquan','$dt_didong','$phong_ban','$image')");
        echo "$query";
        if ($query) {
            echo "<script>alert('News upload Successfully !!')<script/>";
        }else {
            echo "<script>alert('Something wrong! Please try Again !!')<script/>";
        }

    }

?>


