<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Quản lý nhân viên</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown">Quản lý nhân viên
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="thongtin.php">Thông tin nhân viên</a></li>
          <li><a href="themnv.php">Thêm</a></li>
          <li><a href="timkiemnv.php">Tìm kiếm</a></li>
        </ul>
		</li>
	  <li><a class="dropdown-toggle" data-toggle="dropdown">Quản lý phòng ban
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="phongban.php">Thông tin phòng ban</a></li>
          <li><a href="thempb.php">Thêm</a></li>
          <li><a href="timkiempb.php">Tìm kiếm</a></li>
        </ul>
		</li>
	  <li><a class="dropdown-toggle" data-toggle="dropdown">Quản lý chức vụ
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="chucvu.php">Thông tin</a></li>
          <li><a href="themcv.php">Thêm</a></li>
          <li><a href="timkiemcv.php">Tìm kiếm</a></li>
        </ul>
		</li>
	  <?php 
       if (isset($_SESSION['name']) && $_SESSION['name']){
           echo 'Xin chào '.$_SESSION['name']."<br/>";
           echo '<li><a href="logout.php">Đăng xuất</a></li>';
       }
       else{
           echo '<li><a href="index.php">Đăng nhập</a></li>';
       }
       ?>
    </ul>
	
  </div>
</nav>