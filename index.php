
<?php
    session_start();
    include('include/header1.php');
?>
<div class="content">
  
    <form class="search-box" action="search.php" method="post">
        <input class="search-txt" type="text" name="search" placeholder="Type to search...">
        <button class="btn search-btn"><i class="fas fa-search"></i></button>
    </form>
  <div class="info" style="width: 80%; margin-left: 10%;padding-top:10%;">
        <div class="container">
          <div class="row">
            <div class="col" style="">
                <i style="margin-left: 10px;"  class="fas fa-users"></i>
              <div class="right_1">
                <h4 style="margin-left: 65px;">Cán bộ</h4>
                <p>5</p>
              </div>
            </div>
            <div class="col" style="">
              <i style="margin-left: 25px;" class="far fa-file-alt"></i>
                <div class="right_1">
                  <h4 style="margin-left: 45px;">Phòng ban</h4>
                  <p>5</p>
                </div>
              </div>
          </div>
      </div>
  </div>

