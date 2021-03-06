<?php if (!function_exists('chronicle_info_page')) {
	function chronicle_info_page() {
	$page1=add_theme_page(__('Welcome to Chronicle', 'chronicle'), __('Pro Themes & Plugin', 'chronicle'), 'edit_theme_options', 'chronicle', 'chronicle_display_theme_info_page');
	add_action('admin_print_styles-'.$page1, 'weblizar_admin_info');
	}	
}
add_action('admin_menu', 'chronicle_info_page');

function weblizar_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/css/bootstrap.min.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
	wp_enqueue_style('font-awesome',  get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.css');
	//JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js');
	wp_enqueue_script('script-menu', get_template_directory_uri().'/core/admin/js/script.js');
		
} 
if (!function_exists('chronicle_display_theme_info_page')) {
	function chronicle_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
<div class="wrap elw-page-welcome about-wrap seting-page">
     <div class="col-md-12 settings">
         <div class=" col-md-9">
            <div class="col-md-12" style="padding:0">
				<?php $wl_th_info = wp_get_theme(); ?>
				<h2><span class="elw_shortcode_heading">Welcome to Chronicle - Version <?php echo esc_html( $wl_th_info->get('Version') ); ?> </span></h2>
				<p style="font-size:19px;color: #555d66;"> Chronicle is a responsive WordPress theme with multipurpose design. It is best suited for both small businesses and corporate businesses, as it is highly customizable via the Live Customizer. You can use Chronicle as restaurant theme, startups, freelancer, creative agencies, portfolios, WooCommerce, or niches like sports, medical, blogging, fashion, lawyer sites etc. As a whole, it is the best mulitpurpose theme around the wordpress repository. Chronicle is Cross-Browser Compatible theme that works on All leading web browsers. Chronicle is Retina ready. Chronicle has Filkr as a custom widget to showcasing your Flikr Photos. Custom menus to choose the menu in Primary Location that is in the Header of the site. Social Media Links in header and footer of the theme to add your Social Media presence. Chronicle has awesome Caroufredsel slider, Powerful but simple Theme Options for full CMS control option to match your logo & website, wide layout, light & dark color skin, translation ready and many more. Chronicle is mobile friendly and optimized for SEO.  </p>
            </div>
		</div>
       
        <div class=" col-md-3">
			<div class="update_pro">
				<h3> Upgrade Pro </h3>
				<a class="demo" href="https://weblizar.com/themes/chronicle-premium-theme/">Get Pro In $35</a>
			</div>
		</div>
	</div>   
            <!-- Themes & Plugin -->
            <div class="col-md-12  product-main-cont">
                <ul class="nav nav-tabs product-tbs">
				    <li class="active"><a data-toggle="tab" href="#start"> Getting Started </a></li>
                    <li><a data-toggle="tab" href="#themesd"> Chronicle Premium </a></li>
					<li><a data-toggle="tab" href="#freepro">Free Vs Pro</a></li>
                </ul>

                <div class="tab-content">
				
				
				<div id="start" class="tab-pane fade in active">
                        <div class="space  theme active">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-7 col-md-7 p_plugin_pic">
                                    <h4>Step 1: Create a Homepage</h4>
									<ol>
									<li> Create a new page -> home and publish. </li>
									<li> Go to Appearance -> Customize > Homepage Settings -> select A static page option. </li>
									<li> In "Home", select the page that you created as a home page. </li>
									<li> Now edit this page and select template "Home". </li>
									<li> Save changes </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo admin_url('/post-new.php?post_type=page') ?>">Add New Page</a>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                         <div class="img-thumbnail">
										<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" class="img-responsive" alt="img"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-12 p_plugin_pic">
                                    <h4>Step 2: Customizer Options Panel </h4>
									<ol>
									<li> Go to Appearance -> Customize > Chronicle Options </li>
									<li> Theme General Options - General Options use for Show/Hide Front Page, Snow Effect on/off, sticky header on/off, set logo height, set logo width. </li>
									<li> Theme Slider Options - General Options use for select slider type, set slider speed, add slider title, add slider image, Show description, Show button link.  </li>
									<li> Footer Call-Out Options - Use to add Call-Out title, button text, link and enable/disable Call-Out section on homepage.</li>
									<li>Excerpt Options - Use to add Excerpt length blog section homepage.</li>
									<li> Home Service Options - It is use to enable/disable service on homepage, add Service Title, Service Description, service link. </li>
									<li> Portfolio Options - It is use to enable/disable portfolio on homepage, add portfolio heading, Portfolio Description, Portfolio link. </li>
									<li> Home Blog Options - Use to enable/disable blog on homepage, add blog title, select blog category, and enable/disable blog date and time on homepage. </li>
									<li> Footer Options- Use to enabled/disable Copyright Section, add Customization text, developed by text and developed by link. </li>
									<li> Social Options- Use to enabled/disable social media on header and footer, Enable/disable Header Contact, add social links, email id phone no. </li>
									<li> Theme Google Font - Here you can change your theme's Font Settings</li>
									<li> Home Page Layout Options - use for Front Page Layout Option.</li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo esc_url(admin_url('customize.php')); ?>">Go to Customizer</a>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a href="https://weblizar.com/themes/">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
				
				<!-- end 1st tab -->
				
				
                    <div id="themesd" class="tab-pane fade">
                        <div class="space theme">
                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Chronicle.png" class="img-responsive" alt="img"/>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <div>
                                            <p><strong>Description: </strong>Chronicle Premium is new WordPress Theme styled with modern design and follows latest trends in Websites. Coded with HTML5 standards and SEO recommendations.

											Chronicle  is fully responsive and works on all Desktop & Mobile devices and all modern web browsers. Customization is fully integrated into WordPress native customizer and you can see changes in real time. Our Theme Builder, where you can click select and drag & drop sections of Theme, is included as well. </p>
                                        </div>
										<p><strong>Tags: </strong>two-columns, custom-menu, right-sidebar, custom-background, blog , sticky-post, theme-options, threaded-comments, featured-images , custom-header, custom-logo , e-commerce ,portfolio, featured-image-header </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price1">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>35</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/chronicle-premium-theme/">Detail</a>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Enigma.jpg" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="https://weblizar.com/themes/enigma-premium/">Enigma Premium</a></h4>
										</div>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/explora.jpg" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="https://weblizar.com/themes/explora-premium/">Explora Premium</a></h4>
										</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Scorline.jpg" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="https://weblizar.com/themes/scoreline-premium/">Scorline Premium</a></h4>
										</div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a href="https://weblizar.com/themes/">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
					
					<div id="freepro" class="tab-pane fade">
							<div class=" p_head theme">
                                <!--<h1 class="section-title">Weblizar Offers</h1>-->
                            </div>
						<div class="row p_plugin blog_gallery">		
						<div class="columns">
						  <ul class="price">
							<li class="header" style="background:#fa3aab">Chronicle</li>
							<li class="grey">Features</li>
							<li>Customize Front Page</li>
							<li>Theme Option Panel</li>
							<li>Unlimited Color Skins</li>
							<li>Multiple Background Patterns</li>
							<li>3 Portfolio Layout</li>
							<li>3 Page Layout</li>
							<li>Service Page Template</li>
							<li>About Us Page with short-code</li>
							<li>Customs Widgets</li>
						  </ul>
						</div>
						
						 <div class="columns">
						  <ul class="price">
							<li class="header">Free</li>
							<li class="grey">$ 00</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
						  </ul>
						</div>

						<div class="columns">
						  <ul class="price">
							<li class="header" style="background-color:#fa3aab">Chronicle Pro</li>
							<li class="grey">$ 35</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li class="grey"><a href="http://demo.weblizar.com/chronicle-premium/" class="pro_btn">Visit Demo</a></li>
						  </ul>
						</div>
						</div>
					</div>
                </div>
            </div> 
<?php
	}
}
?>