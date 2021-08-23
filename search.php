
<?php
session_start();
include('include/header1.php');
?>
<div class="content">
    <?php
        include('db/connection.php');
        if(isset($_POST['search'])) {
            $keyword = $_POST['search'];
            $sql = "SELECT * FROM can_bo WHERE ho_ten LIKE '%$keyword%' || dt_didong LIKE '%$keyword%' || dt_coquan LIKE '%$keyword%' ";
        }else
        $sql = "SELECT * FROM can_bo";
        $result = mysqli_query($conn, $sql);
    ?>
<div style="width: 80%; margin-left: 5%; padding-top: 8%;">
    <a style="text-decoration:none; padding-bottom:10px;" href="canbo.php">Trở về trang chủ</a>
    <table style="padding-top:10px;"  class="table table-bordered">
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
        <?php while($row = mysqli_fetch_array($result)) { ?>
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