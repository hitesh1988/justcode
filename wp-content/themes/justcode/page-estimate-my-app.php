
<?php get_header(); ?>

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
<div>


Where does it come from?

Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
Where can I get some?

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
	
	paragraphs
	words
	bytes
	lists
		Start with 'Lorem
ipsu
</div>
<div class="container"><h1>Estimate my app</h1></div>
	<?php if(!empty($parent->posts)){ ?>
	<?php 
		$technologies = $parent->posts;
		$estimationdata = array();
	?>
	<div id="exTab1" class="container">	
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
								<h1><?php echo $feature['feature_label']; ?></h1>
								<?php if(!empty($feature['options'])) { ?>
									
									<?php	
											foreach($feature['options'] as $featureopt){ 
												$optionID = 'tech_'.$technology->ID .$featureopt['option_id'];
												$estimationdata[$optionID]['hours'] = $featureopt['option_hours'];
												$estimationdata[$optionID]['cost'] = $featureopt['option_cost'];
												
									?>	
												<div class="col-sm-4 col-border">
													
													<?php if($feature['multi-select_options'] == '1') {?>
														<p><input class="techopt" type="checkbox" name="<?php echo $optionID; ?>[]" id="<?php echo $optionID ?>" value="<?php echo $optionID ?>"><?php echo $featureopt['option_label'] ?></p>
													<?php }else{ ?>
														<p><input class="techopt" type="radio" name="<?php echo $technology->ID; ?>" id="<?php echo $optionID ?>" value="<?php echo $optionID ?>"><?php echo $featureopt['option_label'] ?></p>
													
													<?php } ?>
													
													
													<p><label for="<?php echo $optionID ?>"><img src="<?php echo $featureopt['option_icon'] ?>" ></label></p>
													<p><?php echo $featureopt['description'] ?></p>
													
												
												</div>
									<?php } ?>
								
								
								
								<?php } ?>
							</div> 


					
						<?php } ?>
					<?php } ?>
					
				</div>
			<?php } ?>
				
		</div>
  </div>
  <?php 
	$translation_array = $estimationdata;
	wp_localize_script( 'justcode-custom', 'estimationdata', $translation_array );
  
	/* echo '<pre>';
	print_r($estimationdata); */
  
  ?>
  
	<button class="getestimation">Calculate</button>
	<div class="totalesti" style="display:none">
		<p><span>Total Cost : <?php echo get_woocommerce_currency_symbol(); ?></span><span class="totalPrice"></p>
		<p><span>Total Hours :</span><span class="totalHours"></span></p>
	</div>
	<?php } ?>
<div class="sendestimation" style="display:none">
<h2>Save your estimate and get a permalink so you can share with your team</h2>
<input type="email" name="estimationemail" class="estimationemail">
<button name="send" value="Send" class="estimationemailbtn" type="button">SEND</button>
</div>

	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<?php get_footer(); ?>
