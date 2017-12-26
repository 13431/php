<?php  
$testimonial_options = get_theme_mod('busiprof_testimonial_content');
if(empty($testimonial_options)){
	$old_testimonial_data = get_option( 'busiprof_theme_options');
	
	$testimonial_options = json_encode( array(
				array(
				'title'      => isset($old_testimonial_data['testimonials_name_one'])? $old_testimonial_data['testimonials_name_one']:'Robert Johnson',
				'text'       => isset($old_testimonial_data['testimonials_text_one'])? $old_testimonial_data['testimonials_text_one']:'We are group of passionate designers and developers who really love to create wordpress themes with amazing support. Widest laborum dolo rumes fugats untras. Ethar omnis iste natus error sit voluptatem accusantiexplicabo. Nemo enim ipsam eque porro quisquam est, qui dolorem ipsum am quaerat voluptatem...',
				'designation' => isset($old_testimonial_data['testimonials_designation_one'])? $old_testimonial_data['testimonials_designation_one']:'(CEO & Founder)',
				'link'       => '#',
				'image_url'  => isset($old_testimonial_data['testimonials_image_one'])? $old_testimonial_data['testimonials_image_one']:get_template_directory_uri()."/images/item12.jpg",
				'id'         => 'customizer_repeater_56d7ea7f40b96',
				'open_new_tab' => 'no',
				
				),
				array(
				'title'      => isset($old_testimonial_data['testimonials_name_two'])? $old_testimonial_data['testimonials_name_two']:'Annah Doe',
				'text'       => isset($old_testimonial_data['testimonials_text_two'])? $old_testimonial_data['testimonials_text_two']:'We are group of passionate designers and developers who really love to create wordpress themes with amazing support. Widest laborum dolo rumes fugats untras. Ethar omnis iste natus error sit voluptatem accusantiexplicabo. Nemo enim ipsam eque porro quisquam est, qui dolorem ipsum am quaerat voluptatem...',
				'designation' => isset($old_testimonial_data['testimonials_designation_two'])? $old_testimonial_data['testimonials_designation_two']:'(Team Leader)',
				'link'       => '#',
				'image_url'  => isset($old_testimonial_data['testimonials_image_two'])? $old_testimonial_data['testimonials_image_two']:get_template_directory_uri()."/images/item12.jpg",
				'id'         => 'customizer_repeater_56d7ea7f40b97',
				'open_new_tab' => 'no',
				
				),
			) );
	
	
}
 $current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );
if( $current_options['home_testimonial_section_enabled']=='on' ) { ?>
<!-- Additional Section Two - Testimonial Scroll -->
<section id="section" class="testimonial-scroll bg-color">
	<div class="container">
			
			<!-- Section Title -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<?php if( $current_options['testimonials_title'] != '' ) { ?>
						<h1 class="section-heading"><?php echo $current_options['testimonials_title'];?></h1>
						<?php } if( $current_options['testimonials_text'] !='') { ?>
						<p><?php echo $current_options['testimonials_text'];?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			
			<!-- /Section Title -->					
						
			<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myTestimonial">
				<div class="carousel-inner">
					<?php
					$t=true;
					$testimonial_options = json_decode($testimonial_options);
					if( $testimonial_options!='' )
						{
					foreach($testimonial_options as $testimonial_iteam){ 
					
							$test_desc =  $testimonial_iteam->text;
							$test_link = $testimonial_iteam->link;
							$open_new_tab = $testimonial_iteam->open_new_tab;
							$designation = $testimonial_iteam->designation;
						
				
					?>
					<div class="col-md-12 pull-left item <?php if( $t == true ){ echo 'active'; } $t = false; ?>">
						<div class="post"> 
							<?php $default_arg =array('class' => "img-circle"); ?>
							<figure class="post-thumbnail">
							<a href="<?php echo $test_link; ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>>
							<img alt="img" class="img-responsive" src="<?php echo $testimonial_iteam->image_url; ?>" draggable="false">
							</a>
							</figure>
							
							<div class="entry-content">
								<p><?php echo $test_desc; ?></p>
							</div>
							<div class="media"> 
								<div class="media-body">
									<span class="author-name"> <a href="<?php echo $test_link; ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>> <?php echo $testimonial_iteam->title; ?> </a> <small class="designation"><?php echo $designation; ?></small></span>
								</div> 
							</div>
						</div>
					</div>
					<?php } } else {
					$image = array('item9','item10','item-small2','item-small3');
					$name = array('Robert Johnson','Natelie Portman','Annah Doe','Charlie Sun');
					$desc = array('(CEO & Founder)','(Sales & Marketing)','(Sales Executive)','(Team Leader)');
					for($i=0; $i<=3; $i++) { ?>
					<div class="col-md-12 pull-left item <?php if($i == 0) { echo 'active'; } ?>">
					
						<div class="post"> 
							<figure class="post-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $image[$i]; ?>.jpg" class="img-circle" alt="img"></figure> 	
							<div class="entry-content">
								<p><?php _e('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support. Widest laborum dolo rumes fugats untras. Ethar omnis iste natus error sit voluptatem accusantiexplicabo. Nemo enim ipsam eque porro quisquam est, qui dolorem ipsum am quaerat voluptatem...','busiprof'); ?></p>
							</div>
							<div class="media"> 
								<div class="media-body">
									<span class="author-name"><?php echo $name[$i]; ?> <small class="designation"><?php echo $desc[$i]; ?></small></span>
								</div> 
							</div>
						</div>
					</div>
					<?php } }?>
				</div>

				
				<?php 
				//print_r($testimonial_options);
				if( $testimonial_options!='')
						{
							if(count($testimonial_options)>1){
							$i=0;
							?>
						<div class="row">
							<div class="testi-pager">
								<ol class="carousel-indicators testi-pagi">
								<?php
								foreach($testimonial_options as $testimonial_iteam){
									?>
									<li data-target="#myTestimonial" data-slide-to="<?php echo $i; ?>"<?php if($i==0){ ?> class="active" <?php }?> ></li>
										<?php $i++;
										}
								?>
								</ol>
							</div>	
						</div>
							<?php
							}
						}else{
							?>
									<!-- Testimonial Pagination -->
						<div class="row">
							<div class="testi-pager">
								<ol class="carousel-indicators testi-pagi">
								<li data-target="#myTestimonial" data-slide-to="0" class="active"></li>
								<li data-target="#myTestimonial" data-slide-to="1" ></li>
								<li data-target="#myTestimonial" data-slide-to="2" ></li>
								<li data-target="#myTestimonial" data-slide-to="2" ></li>
								</ol>
							</div>	
				</div>
						<?php }
				?>
				
				
			</div>		
	</div>		
</section>
<!-- End of Additional Section Two - Testimonial Scroll -->
<?php } ?>