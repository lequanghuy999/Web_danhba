<?php
    session_start();
    error_reporting(0);
    include('include/header1.php');
?>

<?php
include('db/connection.php');
$id=$_GET['edit'];
$query=mysqli_query($conn,"select * from category where id='$id' ");

while($row=mysqli_fetch_array($query)) {
    $category=$row['category_name'];
  echo  $des=$row['des'];

}

?>

<div class="content">
    <div class="info" style="width: 80%; margin-left: 10%;padding-top:10%;">
        <div class="container">
            <div class="row">
                <div class="col">
                Column
                </div>
                <div class="col">
                Column
                </div>
                <div class="col">
                Column
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div style="width: 70%; margin-left: 15%; margin-top: 5%">
        <form action="edit.php" method="post" name="categoryform" onsubmit=" return validateform() ">
        <p class="h1">Update Category</p>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category:</label>
                <input type="text" name="category" value="<?php echo $category;?>" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Description:</label>
                <textarea name="des" class="form-control" id="comment" rows="5"><?php echo $des;?></textarea>
            </div>
                <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Update Category">
            
        </form>
        <script>
            function validateform(){
                var x = document.forms['categoryform']['category'].value;
                if (x=="") {
                    alert('category Must Be Filled Out !'); // báo lỗi kho bỏ trống category hay categoryform
                    return false;
                }
            }

        </script>

    </div>
</div>
<?php
include('db/connection.php');
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $category = $_POST['category'];
    $des=$_POST['des'];

    $query1=mysqli_query($conn,"update category set category_name='$category', des='$des' where id='$id' ");

    if($query1) {
        echo "<script> alert(' Category Update Successfully!')</script>";
        echo "<script>window.location='http://localhost:8081/Project-visionedu/category.php';</script>";
    }else {
        echo "Category Not Update";
    }
}

?>

<?php
    include('include/footer.php');
?>