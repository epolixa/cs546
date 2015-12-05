<!DOCTYPE html>

<html>
  <?php include_once 'head.php' ?>

  <body>
    <div class="container">

      <?php include_once 'header.php' ?>

      <div class="content-wrap">
        <div class="content">

					<?php

					include_once '../includes/db_connect.php';
					include_once '../includes/functions.php';
					sec_session_start();

					if( isset($_SESSION['role']) && $_SESSION['role'] == 1 ){

					require_once('data.php');
					$data = new reviewsFormation();
					 //$data->getUser ("1");
					$alluser = $data -> getAllUsers();
					//var_dump($latestPost);
					}

					?>


					<table width="960" border="0" align="center" cellspacing="0" cellpadding="0">
						<tr>
							<td align="left">
								<?php
								if( !isset($_SESSION['username']) ){
									?>
									<table border="0" class="f14" cellspacing="1" cellpadding="4">
										<tr >
											<td width="120"><a style="text-decoration:none" href="register.html">Register</a> | <a style="text-decoration:none" href="login.html">Login</a></td>
										</tr>
									</table>
									<?php
								}else{
									?>
									<table border="0" class="f14" cellspacing="1" cellpadding="4">
										<tr >
											<td colspan="3">Welcome <?php if ($_SESSION['role'] == 1) echo "Administrator "?>

											<?php echo $_SESSION['username'] ?> | <a href="../home.html">Back to home </a>| <a href="login.php?action=logout">Log out</a></td>
										</tr>


									</table>
									<?php
								}
								?>
							</td>
						</tr>
					</table>


					<table width="960" border="1" align="center" cellspacing="0" cellpadding="0">

						<tr>
							<td>ID</td>
							<td>First Name</td>
							<td>Last Name</td>
							<td>User Name</td>
							<td>Email</td>
							<td>Manage</td>

						</tr>





						<?php
						foreach($alluser as $key => $value){
							?>

							<form id="deleteUser" enctype="multipart/form-data" method="POST" action="deleteUsers.php" name="userdeletion_form">

							<tr>
								<td>
										<?php
										echo $value['id'];
										?>
								</td>

								<td>
									<?php
									echo $value['firstName'];
									?>
								</td>
								<td>
									<?php
									echo $value['lastName'];
									?>
								</td>
								<td>
									<?php
									echo $value['username'];
									?>

								</td>
								<td>
									<?php
									echo $value['email'];
									?>

								</td>

								   <td>
											<input type="text" name="userID" value="<?php
											echo $value['id'];
											?>" style="display:none">
											<input type="submit" value="delete" />

								   </td>
							</tr>

						</form>
							<?php
						};
						?>

					</table>

        </div>
      </div>

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
