<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">게시판</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>메인 페이지</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php
if($_SESSION['id'] != null){
?>
<!-- Heading -->
<div class="sidebar-heading">
  글 보기
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <span>글 조회</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">선택해주세요</h6>
      <a class="collapse-item" href="all_board_view.php">전체 글 조회</a>
      <a class="collapse-item" href="my_board_view.php">내가 쓴 글 조회</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  글 쓰기, 수정
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="write.php">
    <span>글 쓰기</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<?php
}
?>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->