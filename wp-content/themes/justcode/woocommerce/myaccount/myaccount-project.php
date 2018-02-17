<?php 
$validate = false;
if(isset($_GET['id'])){
	$pID = $_GET['id'];
	if(!empty($pID)){
		$checkP = get_field('associated_user',$pID);
		if(!empty($checkP)){
			if(get_current_user_id() == $checkP['ID'] ){
				$validate = true;
			}
		}
	}
}
if(!$validate) _jcredirect404() ;

$progress = get_field('progress',$pID);
$post_thumbnail_id = get_post_thumbnail_id( $pID );
$attachment = wp_get_attachment_image_src( $post_thumbnail_id, 'project-thumb' );
if(empty($attachment)){
	$attachmentSrc = get_template_directory_uri() . '/images/estimate-grid-image.jpg';
}else{
	$attachmentSrc = $attachment[0];
}
$price = get_price($pID);
$promocode = get_field('promocode',$pID);


$steps_available = get_field('steps_available',$pID);
/* echo '<pre>';
print_r($steps_available); */
?>
  <section class="estimation-details-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="checkout-wrap">
                        <ul class="checkout-bar">
							<?php /*
									<li class="<?php if (in_array("lvl1", $progress)) echo 'active'; ?>">Communicate</li>
									<li class="<?php if (in_array("lvl2", $progress)) echo 'active'; ?>">HTML</li>
									<li class="<?php if (in_array("lvl3", $progress)) echo 'active'; ?>">Development</li>
									<li class="<?php if (in_array("lvl4", $progress)) echo 'active'; ?>">Testing</li>
									<li class="<?php if (in_array("lvl5", $progress)) echo 'active'; ?>">Luanch</li>
							
							
							*/ ?>
							<?php if(!empty($steps_available)){ ?>
								<?php 
									foreach($steps_available as $steava) { 
										$cfname = 'level_complete'.$steava['value'];
										$cfnameval = get_field($cfname,$pID);
										
								?>
									<li class="<?php if($cfnameval == 1) echo 'active'; ?>"><?php echo $steava['label']; ?></li>
								<?php } ?>
							<?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row details-block">
                <div class="col-sm-6 image"><img src="<?php echo $attachmentSrc; ?>" alt=""></div>
                <div class="col-sm-6 details">
                    <h1>Project Manager : <?php echo get_field('project_manager',$pID); ?></h1>
                    <label class="email"><span>Email : </span><a href="mailto:<?php echo get_field('project_manager_email',$pID); ?>"><?php echo get_field('project_manager_email',$pID); ?></a></label>
                    <label class="phone"><span>Phone : </span><a href="tel:<?php echo get_field('project_manager_phone',$pID); ?>"><?php echo get_field('project_manager_phone',$pID); ?></a></label>
                    <label class="price"><span>Price : </span> <span class="projectprice"><?php echo  $price; ?><span></label>
                    <div class="promocode-block">
                        <form class="">
                            <label>Promocode :</label>
                            <div class="input-box">
                                <input type="text" data-pid="<?php echo $pID; ?>" class="input-text promocodeval" value="<?php echo $promocode; ?>" />
                                <input type="submit" value="submit" class="btn promocodebtn" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>