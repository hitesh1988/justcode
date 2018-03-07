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
<div class="estimation-grid-section">
	<div class="row">
        <div class="col-sm-12 title">
            <h1>Our Clients</h1>
            <h3>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</h3>
        </div>
    </div>
	<div class="row grid">
	 <?php foreach($projects as $project){/*  echo '<pre>'; print_r($project); */   ?>
		<?php 
			$post_thumbnail_id = get_post_thumbnail_id( $project->ID );
				$attachment = wp_get_attachment_image_src( $post_thumbnail_id, 'project-thumb' );
				if(empty($attachment)){
					$attachmentSrc = get_template_directory_uri() . '/images/estimate-grid-image.jpg';
				}else{
					$attachmentSrc = $attachment[0];
				}
		
		?>
	 
		<div class="col-md-3 col-sm-6">
		<a target="_blank" href="<?php echo site_url().'/my-account/project?id='.$project->ID; ?>">
			<div class="image"><a href="<?php echo site_url().'/my-account/project?id='.$project->ID; ?>"><img src="<?php echo $attachmentSrc; ?>" alt=""></a></div>
			<h3 class="title"><?php echo $project->post_title; ?></h3>				
			<h3 class="quotation-id">Quotation ID :<span><?php echo $project->ID; ?></span></h3>
		</a>
		</div>
	<?php } ?>	 
</div>
</div>
<?php }else{
	echo 'No project found!!!!';
} ?>