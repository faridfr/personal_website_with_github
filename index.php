<?php 

include_once 'config.php';
include("src/header.php");

?>


<div class="container" style="padding-top:80px;">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-0" style="text-align:right;">
			<img src='<?=$user->avatar_url?>' class='img-responsive img-thumbnail' width="240" alt='<?=$user->name?>'>
			<br>
			<h1><b><?=$user->name?></b></h1>
			<h4><?=$user->bio?><br><br>At <?=$user->company?></h4>
			<h5><?=MOBILE?></h5>
			<a target="_blank" href="http://instagram.com/<?=INSTAGRAM_USERNAME?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a target="_blank" href="https://github.com/<?=GITHUB_USERNAME?>"><i class="fa fa-github" aria-hidden="true"></i></a>
			<a target="_blank" href="https://ir.linkedin.com/in/<?=LINKEDIN_USERNAME?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			
		</div>
		<div class="col-sm-6 col-sm-offset-0">
			<h3 style="margin-top:0px;"><b>My Latest Github Push</b></h3>
			<ul class="list-group" style="margin-top:30px;">
				<?php 
				$i = 0;
					foreach ($repos as $repo) {
						if($i>=REPO_COUNT) break;
						echo "<li style='margin-top:15px;'><i class='fa fa-code'></i> 
						<a href='".$repo->html_url."' target='_blank' style='font-size:14px;'>".$repo->name."</a> ( ".$repo->language." )
						<br><span style='color:silver; font-weight:300;'>".$repo->description."</span>
						</li>";
						$i++;
				 	} 
				?>
			</ul>

		</div>
	</div>
</div>


<?php 
curl_close($ch); 
include("src/footer.php");
?>