<section class="wrapper style1 container special">
		<div class="row">
			<div class="12u 12u(narrower)">
				<form enctype="multipart/form-data">
					<form method="get">
					<input type="text" name="search" 
					placeholder="Search.."
					value="<?php echo isset($_GET["search"]) ? $_GET["search"] : "" ?>" />
					</form>
					<?php
					
					$search = "%" . (isset($_GET["search"]) ? $_GET["search"] : "") . "%";
					
					$topCharacters = $connection->prepare("select count(*)from characterdnd
					inner join subrace on characterdnd.subrace=subrace.id
					inner join class on characterdnd.class=class.id
					inner join background on characterdnd.background=background.id
					inner join user on characterdnd.user=user.id
					where concat(characterdnd.id,characterdnd.name,subrace.name,class.name,background.name,user.username) like :search");
					$topCharacters->execute(array("search"=>$search));
					$totalRow = $topCharacters->fetchColumn();
					$totalPage = ceil($totalRow/$pageResults);
					
					if($pageNumber<1){
						$pageNumber=1;
					}
					if($totalPage>0 && $pageNumber>$totalPage){
						$pageNumber=$totalPage;
					}
					

					$topCharacters = $connection->prepare("
					select characterdnd.id as 'ID', characterdnd.name as 'Name', subrace.name as 'Race', class.name as 'Class', background.name as 'Background', user.username as 'Username'
					from characterdnd
					inner join subrace on characterdnd.subrace=subrace.id
					inner join class on characterdnd.class=class.id
					inner join background on characterdnd.background=background.id
					inner join user on characterdnd.user=user.id
					where concat(characterdnd.id,characterdnd.name,subrace.name,class.name,background.name,user.username) like :search
					order by ID desc limit :pageNumber, :pageResults");
					$topCharacters->bindValue("pageNumber", $pageNumber* $pageResults -  $pageResults , PDO::PARAM_INT);
					$topCharacters->bindValue("pageResults", $pageResults, PDO::PARAM_INT);
					$topCharacters->bindParam("search", $search);
					$topCharacters->execute();
					$results = $topCharacters->fetchAll(PDO::FETCH_OBJ);
				    ?>
				  	
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Character Name</th>
							<th>Character Race</th>
							<th>Character Class</th>
							<th>Character Background</th>
							<th>Submited by</th>
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
							<td><?php echo $option->Username ?></td>
							<td>
							<a href="<?php echo $sourceAPP; ?>creator/download.php" target = "_blank">
								<button class="button special small">
								Download
							</button>
							</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>					
				</table>
				<?php if($totalRow>$pageResults){
					include 'pagination.php';
				}?>
				</form>
			</div>
		</div>
	</section>
