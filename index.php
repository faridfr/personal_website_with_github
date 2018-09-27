<?php 

include_once 'config.php';
include("src/header.php");

?>


<div class="container" style="padding-top:80px;">
	<div class="row">
		<div class="col-sm-12">
		<center>

			<img src='<?=$user->avatar_url?>' class='img-responsive img-circle' width="250" alt='<?=$user->name?>'>
			<br>
			<h1><?=$user->name?></h1>
			<h4><?=$user->bio?> at <?=$user->company?></h4>
			<h5><?=MOBILE?></h5>
			<a target="_blank" href="http://instagram.com/<?=INSTAGRAM_USERNAME?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a target="_blank" href="https://github.com/<?=GITHUB_USERNAME?>"><i class="fa fa-github" aria-hidden="true"></i></a>
			<a target="_blank" href="https://ir.linkedin.com/in/<?=LINKEDIN_USERNAME?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<br><br><br>
			<h5>My Latest Github Push</h5>
			<ul class="list-group">
				<?php 
				$i = 0;
					foreach ($repos as $repo) {
						if($i>=REPO_COUNT) break;
						echo "<li style='margin-top:5px;'><i class='fa fa-code'></i> 
						<a href='".$repo->html_url."' target='_blank'>".$repo->name."</a> ( ".$repo->language." )
						<br><span style='color:silver; font-weight:300;'>".$repo->description."</span>
						</li>";
						$i++;
				 	} 
				?>
			</ul>

		</center>
		</div>
	</div>
</div>


<?php 
curl_close($ch); 
include("src/footer.php");
?>