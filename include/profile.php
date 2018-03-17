<div class="row">
	<div class="col-md-12  admin-content" id="profile">
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">First Name</h3>
			</div>
			<div class="panel-body">
				<?php echo isset($results->firstName) ? ucfirst($results->firstName) : ""; ?>
			</div>
		</div>
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">Last Name</h3>
			</div>
			<div class="panel-body">
				<?php echo isset($results->lastName) ? ucfirst($results->lastName) : ""; ?>
			</div>
		</div>
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">Email</h3>
			</div>
			<div class="panel-body">
				<?php echo isset($results->email) ? $results->email : ""; ?>
			</div>
		</div>
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">Submited Characters</h3>
			</div>
			<div class="panel-body">
					<?php
					$characterCount = $connection->prepare("
					select count(*)
					from characterdnd a inner join user b on a.user=b.id
					where b.username like :username;
					");
					$characterCount->execute(array(
					"username" => $_SESSION[$appID."authorized"]->username));
					$totalCount = $characterCount->fetchColumn();
					echo $totalCount;
					?>
			</div>
		</div>
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">User Level</h3>
			</div>
			<div class="panel-body">
				<?php echo $results->level; ?>
			</div>
		</div>
	</div>
	<div class="col-md-12  admin-content" id="userCharacters">
	<div class="12u 12u(narrower)">
		<div style="max-height: 700px; overflow: auto;">
					<?php
					$topCharacters = $connection->prepare("
					select
					a.id as 'ID',
					a.name as 'Name',
					c.name as 'Race',
					d.name as 'Class',
					e.name as 'Background'
					from characterdnd a inner join user b on a.user=b.id
					inner join subrace c on a.subrace=c.id
					inner join class d on a.class=d.id
					inner join background e on a.background=e.id
					where b.username like :username
					order by a.id desc;");
					$topCharacters->execute(array(
					"username" => $_SESSION[$appID."authorized"]->username));
					$results = $topCharacters->fetchAll(PDO::FETCH_OBJ);
				    ?>				  	
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Race</th>
							<th>Class</th>
							<th>Background</th>
							<th>Download PDF</th>
						</tr>
					</thead>
					
					<tbody>
					<?php
					foreach ($results as $option):
					?>
						<tr>
							<td><?php echo $option->ID ?></td>
							<td><?php echo $option->Name ?></td>
							<td><?php echo $option->Race ?></td>
							<td><?php echo $option->Class ?></td>
							<td><?php echo $option->Background ?></td>
							<td>
							<a href="<?php echo $sourceAPP; ?>creator/download.php<?php echo '?characterID=' . $option->ID; ?>" target = "_blank">
								<button class="button special small">
								Download
							</button>
							</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>					
				</table>
				</form>
			</div>
		</div>
		
	</div>
	<div class="col-md-12  admin-content" id="settings">
		<form action="#" method="post">
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">First Name</h3>
			</div>
			<div class="panel-body">
				<input type="text" class="form-control" name="firstNameUpdate" id="firstNameUpdate" value="">
			</div>
		</div>
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">Last Name</h3>
			</div>
			<div class="panel-body">
				<input type="text" class="form-control" name="lastNameUpdate" id="lastNameUpdate" value="">
			</div>
		</div>
		<div class="panel panel-info" style="margin: 1em;">
			<div class="panel-heading">
				<h3 class="panel-title">Email</h3>
			</div>
			<div class="panel-body">
				<input type="email" class="form-control" name="emailUpdate" id="emailUpdate" value="">
			</div>
		</div>
			<div class="panel panel-info border" style="margin: 1em;">
				<div class="panel-body">
					<div class="form-group">
						<div class="pull-left">
							<input type="submit" class="button" name="updateProfile" id="updateProfile" value="Update">
						</div>
					</div>
				</div>
			</div>
		</form>		
	</div>
	
	<div class="col-md-12  admin-content" id="profilePicture">
		
			<img class="profilePicture" id="image">				
			<input type="file" id="inputImage" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">            
        	<hr />
			<a class="button small" href="#" id="saveProfilePicture">Preview</a>			
			<a class="button small" href="index.php">Finish</a>	
	</div>

	<div class="col-md-12  admin-content" id="change-password">
		<form action="#" method="post">
			<div class="panel panel-info" style="margin: 1em;">
				<div class="panel-heading">
					<h3 class="panel-title"><label for="oldPassword" class="control-label panel-title">Old Password</label></h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-sm-10">
							<input type="password" class="form-control" name="oldPassword" id="oldPassword" >
						</div>
					</div>

				</div>
			</div>

			<div class="panel panel-info" style="margin: 1em;">
				<div class="panel-heading">
					<h3 class="panel-title"><label for="newPassword" class="control-label panel-title">New Password</label></h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-sm-10">
							<input type="password" class="form-control" name="newPassword" id="newPassword" >
						</div>
					</div>

				</div>
			</div>

			<div class="panel panel-info" style="margin: 1em;">
				<div class="panel-heading">
					<h3 class="panel-title"><label for="passwordConfirm" class="control-label panel-title">Confirm Password</label></h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-sm-10">
							<input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" >
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-info border" style="margin: 1em;">
				<div class="panel-body">
					<div class="form-group">
						<div class="pull-left">
							<input type="submit" class="button" name="passwordChange" id="passwordChange">
						</div>
					</div>
				</div>
			</div>
		</form>	
	</div>	
</div>
