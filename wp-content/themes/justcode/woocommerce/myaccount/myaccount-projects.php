<?php 
$userID =  get_current_user_id();
$projects = get_posts(array(
	'numberposts'	=> -1,
	'post_type'		=> 'project',
	'meta_query'	=> array(
		array(
			'key'	 	=> 'associated_user',
			'value'	  	=> $userID,
			'compare' 	=> '=',
		)
	),
)); 
?>
<?php if( !empty($projects) ){ ?>
	<ul>
	<?php foreach($projects as $project){/*  echo '<pre>'; print_r($project); */   ?>
		<li>
		<a target="_blank" href="<?php echo site_url().'/my-account/project?id='.$project->ID; ?>">
				<?php echo $project->post_title; ?>
		</a>
		</li>
	<?php } ?>
	</ul>
<?php }else{
	echo 'No project found!!!!';
} ?>