<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card w3-text-teal" id="myNavbar">
<a href="http://www.mmmut.ac.in/" class="w3-bar-item w3-button"><img  src="../image/logo-sm.png" style="height:25px;"></a>
	 <?php  if (isset($_SESSION['username'])) : ?>
	<a href="http://localhost/time-table/admin/index.php" class="w3-bar-item w3-button w3-wide"><i class="fa fa-user w3-large"> 
			<strong><?php echo $_SESSION['username']; ?></strong>
			
		</i>
	
	</a>
    <a href="http://localhost/time-table/admin/index.php?logout='1'" class="w3-bar-item w3-button w3-wide" style="color: red;"><i class="w3-large fa fa-sign-out">Logout</i></a>
     
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	
	
	  <a href="http://localhost/time-table/time_table/display_tt.php" class="w3-bar-item w3-button">Display Table</a>
      <a href="http://localhost/Time-Table/time_table/upload.php" class="w3-bar-item w3-button">Add Time Table</a>
      <a href="http://localhost/Time-Table/time_table/t_registration.php" class="w3-bar-item w3-button">Teacher Registration</a>
      <a href="http://localhost/Time-Table/time_table/search_t.php" class="w3-bar-item w3-button">Search Teacher</a>
      <a href="http://localhost/Time-Table/time_table/sub_add.php" class="w3-bar-item w3-button">Add Subject</a>
      
      </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
<?php endif ?>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
