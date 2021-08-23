<?php
    session_start();
    include('include/header1.php');
?>
<div class="content">
    <div style="width: 90%; margin-left: 5%; padding-top: 6.5%;">
        <div style="width:80%, margin-left:17%; margin-bottom:50px;">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="index.php">Admin Home</a></li>
                    <li class="breadcrumb-item active">Danh bạ</li>
                </ul>
        </div>
        <div class="text-right">
            <button style="margin-bottom:20px;" class="btn btn-primary"><a style="color:#fff;text-decoration: none;" href="themcanbo.php">Thêm thông tin cán bộ</a></button>
        </div>
        <table class="table table-bordered" style="width:100%;">
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Điện thoại cơ quan</th>
                <th>Điện thoại di động</th>
                <th>Phòng ban</th>
                <th>Hình cán bộ</th>
            </tr>
            <?php
                include('db/connection.php');
            
                $query=mysqli_query($conn,"select * from can_bo");
                while ($row=mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_canbo']; ?></td>
                    <td><?php echo $row['ho_ten']; ?></td>
                    <td><?php echo $row['dia_chi']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['chuc_vu']; ?></td>
                    <td><?php echo $row['dt_coquan']; ?></td>
                    <td><?php echo $row['dt_didong']; ?></td>
                    <td><?php echo $row['phong_ban']; ?></td>
                    <td><img style="width:100px;" src="images/<?php echo $row['image']; ?>" alt=""></td>
                    
                </tr>

            <?php } ?>
        </table>
    </div>
</div>

<?php
include('include/footer.php');
?>