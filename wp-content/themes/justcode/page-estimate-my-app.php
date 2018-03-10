
<?php get_header('estimate'); ?>


<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );



 ?>
 

	<?php if(!empty($parent->posts)){ ?>
	<?php 
		$technologies = $parent->posts;
		$estimationdata = array();
	?>
	<div id="exTab1" class="container">	
		<div class="estimate-app">
			<h1>Estimate my app</h1>
			<p>Select the items below which best describe your app and the features you require.</p>
			<small>All estimates are approximate but should give you a rough idea of what it will take to build your app.</small>	
		</div>
		<ul  class="nav nav-pills">
			<?php foreach($technologies as $key=>$technology){ ?>
				<li class="<?php if($key == 0 ) echo 'active'; ?>">
					<a  href="#post-<?php echo $technology->ID; ?>" data-toggle="tab"><?php echo $technology->post_title; ?></a>
				</li>
				
			<?php } ?>
		</ul>
		<div class="tab-content clearfix">
			<?php foreach($technologies as $key=>$technology){ ?>
				<div class="tab-pane <?php if($key == 0 ) echo 'active'; ?>" data-tid="<?php echo $technology->ID; ?>" id="post-<?php echo $technology->ID; ?>">
					<?php 
						$features = get_field('features',$technology->ID); 
						if(!empty($features)){
							foreach($features as $feature){ /* echo '<pre>'; print_r($feature); */
					?>
					
							<div class="row">
								<h3><?php echo $feature['feature_label']; ?></h3>
								<?php if(!empty($feature['options'])) { ?>
									
									<?php	
											foreach($feature['options'] as $featureopt){ 
												$optionID = 'tech_'.$technology->ID .$featureopt['option_id'];
												$estimationdata[$optionID]['hours'] = $featureopt['option_hours'];
												$estimationdata[$optionID]['cost'] = $featureopt['option_cost'];
												
									?>	
												<div class="col-sm-4 col-border">
													<span class="title"><?php echo $featureopt['option_label'] ?></span>
													<?php if($feature['multi-select_options'] == '1') {?>
														<input class="techopt" type="checkbox" name="<?php echo $optionID; ?>[]" id="<?php echo $optionID ?>" value="<?php echo $optionID ?>">
														<?php /* <?php echo $featureopt['option_label'] ?>*/ ?>
													<?php }else{ ?>
														<input class="techopt" type="radio" name="<?php echo $technology->ID; ?>" id="<?php echo $optionID ?>" value="<?php echo $optionID ?>">
														
													
													<?php } ?>
													<label for="<?php echo $optionID ?>">
														<img src="<?php echo $featureopt['option_icon'] ?>" data-toggle="tooltip" data-placement="bottom" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry.">
													</label>
													<?php echo $featureopt['description'] ?>
													
												</div>
									<?php } ?>
								
								
								
								<?php } ?>
							</div> 


					
						<?php } ?>
					<?php } ?>
					
				</div>
			<?php } ?>
				
		</div>
  
  <?php 
	$translation_array = $estimationdata;
	wp_localize_script( 'justcode-custom', 'estimationdata', $translation_array );
   
  ?>
  
	<div class="button-wrapper"><button class="getestimation btn-primary">Calculate</button></div>
	<div class="totalesti" style="display:none">
		<div class="total-cost"><span>Total Cost : <?php echo get_woocommerce_currency_symbol(); ?></span><span class="totalPrice"></div>
		<div class="total-hours"><span>Total Hours :</span><span class="totalHours"></span></div>
	</div>
	<?php } ?>
<div class="sendestimation" style="display:none">
<h2>Save your estimate and get a permalink so you can share with your team</h2>
<input type="email" name="estimationemail" class="estimationemail">
<button name="send" value="Send" class="estimationemailbtn" type="button">SEND</button>
</div>
</div> 
<?php get_footer('estimate'); ?>

