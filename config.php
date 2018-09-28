<?php 



define("GITHUB_USERNAME", "XXXXX");
define("INSTAGRAM_USERNAME", "XXXXX");
define("LINKEDIN_USERNAME", "XXXXX");
define("REPO_COUNT", 7);
define("MOBILE", 'XXXXX');
define("GITHUB_CLIENT_ID", 'XXXXX');
define("GITHUB_CLIENT_SECRET", 'XXXXX');




// Don't change bellow 
$append = "client_id=".GITHUB_CLIENT_ID."&client_secret=".GITHUB_CLIENT_SECRET;
ini_set('max_execution_time', 300);
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://api.github.com/users/".GITHUB_USERNAME."/repos?sort=pushed&".$append); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch,CURLOPT_USERAGENT,'Personal Website');
$repos_exec = curl_exec($ch); 
$repos = json_decode($repos_exec);

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/users/".GITHUB_USERNAME."?".$append); 
$user_exec = curl_exec($ch); 
$user = json_decode($user_exec);

?>
