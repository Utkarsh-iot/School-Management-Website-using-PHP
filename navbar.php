<div class="navbar">

			<ul class="list">
				<b style="color:white;float:left;line-height:50px;margin-left:15px;font-family:Cooper Black;">
				School Management System</b>
			<?php
				if(isset($_SESSION["AID"]))
				{
					echo'
				
						<li><a href="admin_home.php">Admin Home</a></li>
				<li><a href="change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["TID"]))
				{
					echo'
				
						<li><a href="teacher_home.php">Teacher Home</a></li>
				<li><a href="teacher_change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["ID"]))
				{
					echo'
				
						<li><a href="student_home.php">Student Home</a></li>
				<li><a href="student_change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				
				else{
					echo'
					
					<li><a href="index.php">Home</a></li>
					<li><a href="home.php">Admin</a></li>
				<li><a href="teacher_login.php">Teacher</a></li>
				<li><a href="student_login.php">Student</a></li>
				
				';
				}
			?>
				
			</ul>
		</div>
		