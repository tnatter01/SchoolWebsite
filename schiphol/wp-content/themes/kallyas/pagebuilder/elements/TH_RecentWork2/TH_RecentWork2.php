<?php if(! defined('ABSPATH')){ return; }
/*
 Name: Recent Work 2
 Description: Create and display a Recent Work 2 element
 Class: TH_RecentWork2
 Category: content
 Level: 3
 Scripts: true
 Keywords: projects, portfolio
*/
/**
 * Class TH_RecentWork2
 *
 * Create and display a Recent Work 2 element
 *
 * @package  Kallyas
 * @category Page Builder
 * @author   Team Hogash
 * @since    4.0.0
 */
class TH_RecentWork2 extends ZnElements
{
	public static function getName(){
		return __( "Recent Work 2", 'zn_framework' );
	}

	/**
	 * Load dependant resources
	 */
	function scripts(){
		wp_enqueue_script( 'slick', THEME_BASE_URI . '/addons/slick/slick.min.js', array ( 'jquery' ), ZN_FW_VERSION, true );
	}

	/**
	 * This method is used to display the output of the element.
	 *
	 * @return void
	 */
	function element()
	{
		$options = $this->data['options'];

		$classes=array();
		$classes[] = $uid = $this->data['uid'];
		$classes[] = zn_get_element_classes($options);

		$attributes = zn_get_element_attributes($options);

		$rwheight = (int)$this->opt('rw_height',165);
		$rwwidth = (int)$this->opt('rw_width',450);

		$slick_attributes = apply_filters('zn_pb_recentwork2_slick_attributes', array(
				"infinite" => true,
				"slidesToShow" => 4,
				"slidesToScroll" => 2,
				"autoplay" => $this->opt('rw2_slider_autoplay', 1) == 1 ? true : false,
				"autoplaySpeed" => $this->opt('rw2_slider_timeout', 5000),
				"appendArrows" => '.'.$uid.' .recentwork_carousel__controls',
				"responsive" => array(
					array(
						"breakpoint" => 1199,
						"settings" => array(
							"slidesToShow" => 3
						)
					),
					array(
						"breakpoint" => 767,
						"settings" => array(
							"slidesToShow" => 2
						)
					),
					array(
						"breakpoint" => 480,
						"settings" => array(
							"slidesToShow" => 1
						)
					)
				)
			)
		, $uid);

		?>

			<div class="recentwork_carousel recentwork_carousel_v2 <?php echo implode(' ', $classes); ?>" <?php echo $attributes; ?>>
				<?php
					// ELEMENT TITLE
					if ( ! empty ( $options['rw_title'] ) ) {
						echo '<h3 class="recentwork_carousel__title m_title m_title_ext text-custom" '.WpkPageHelper::zn_schema_markup('title').'>' . $options['rw_title'] . '</h3>';
					}
				?>
				<div class="controls recentwork_carousel__controls">
					<?php
						// PORTFOLIO PAGE LINK
						if ( ! empty ( $options['rw_port_link'] ) ) {
							echo '<a href="' . $options['rw_port_link'] . '" class="kw-gridSymbol"></a>';
						}
					?>
				</div>

				<div class="work-carousel recentwork_carousel__crsl-wrapper">
					<ul class="recent_works2 recentwork_carousel__crsl clearfix zn-modal-img-gallery js-slick" data-slick='<?php echo json_encode($slick_attributes) ?>' >
						<?php
						global $post;
						$posts_per_page = $this->opt('ports_per_page', '6');
						$categories = $this->opt('portfolio_categories', false);

						// Start the query
						$queryArgs = array (
							'post_type'      => 'portfolio',
							'post_status'    => 'publish',
							'posts_per_page' => $posts_per_page,
						);


						$queryArgs['tax_query'] = array();
						if( ! empty( $categories ) ){

							$queryArgs['tax_query'] = array (
								 array (
								'taxonomy' => 'project_category',
								'field'    => 'id',
								'terms'    => $categories
								),
							);
						}
						if( ! empty( $options['portfolio_tags'])){
							if( isset( $queryArgs['tax_query'])){
								$queryArgs['tax_query']['relation'] = 'AND';
							}
							array_push( $queryArgs['tax_query'], array (
								'taxonomy' => 'portfolio_tags',
								'field'    => 'id',
								'terms'    => $options['portfolio_tags']
							));
						}

						$theQuery = new WP_Query($queryArgs);

						// Start the loop
						if( $theQuery->have_posts() ) {

							while($theQuery->have_posts()){
								$theQuery->the_post();

								echo '<li '.WpkPageHelper::zn_schema_markup('creative_work').'>';

								$port_media = get_post_meta( $post->ID, 'zn_port_media', true );
								if ( ! empty ( $port_media ) && is_array( $port_media ) ) {
									$has_image = false;
									if ( $portfolio_image = $port_media[0]['port_media_image_comb'] ) {
										if ( is_array( $portfolio_image ) ) {
											if ( $saved_image = $portfolio_image['image'] ) {
												$has_image = true;
											}
										}
										else {
											$saved_image = $portfolio_image;
											$has_image   = true;
										}

										if ( $has_image ) {
											$image = vt_resize( '', $saved_image, $rwwidth, $rwheight, true );
										}
									}
								}

								$url = get_permalink();
								$target = '';

								$portfolio_item_link = $this->opt('portfolio_item_link','');

								if($portfolio_item_link == 'image' && empty($portfolio_media)){
									$url = $saved_image;
									$target = 'data-type="image"';
								}

								$link_start =  '<a href="' . $url . '" '.$target.' class="recentwork_carousel__link">';
								$link_end =  '</a>';

								// Check if force to link to LIVE LINK
								$zn_sp_linkto_external = get_post_meta( $post->ID, 'zn_sp_linkto_external', true );
								if($zn_sp_linkto_external == 'yes'){
									$sp_link = get_post_meta($post->ID, 'zn_sp_link', true);
									$sp_link_ext = zn_extract_link( $sp_link, 'recentwork_carousel__link' );
									if (!empty ($sp_link_ext['start'])) {
										$link_start = $sp_link_ext['start'];
										$link_end = $sp_link_ext['end'];
									}
								}

								// Start Item
								echo $link_start;

								if ( ! empty ( $port_media ) && is_array( $port_media ) ) {

									// IMAGE
									if ( ! empty( $saved_image ) ) {
										echo '<div style="height: '.$rwheight.'px;" class="recentwork_carousel__img-wrapper">';
										echo '<img class="recentwork_carousel__img cover-fit-img" src="' . $image['url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '" alt="'. ZngetImageAltFromUrl( $saved_image ) .'" title="'.ZngetImageTitleFromUrl( $saved_image ).'">';
										echo '</div>';
									}
									elseif ( $portfolio_media ) {
										echo get_video_from_link( $portfolio_media, '', '100%', $rwheight );
									}
								}

								echo '<div class="details recentwork_carousel__details">';
									echo '<span class="plus recentwork_carousel__plus">+</span>';

									// GET THE POST TITLE
									echo '<h4 class="recentwork_carousel__crsl-title" '.WpkPageHelper::zn_schema_markup('title').'>' . get_the_title() . '</h4>';

									// GET ALL POST CATEGORIES
									echo '<span class="recentwork_carousel__cat">' . strip_tags( get_the_term_list( $post->ID, 'project_category', '', ' , ', '' ) ) . '</span>';
								echo '</div>';

								echo $link_end;

								echo '</li>';
							}
							wp_reset_query();
						}
						?>
					</ul>
				</div>
		</div><!-- end -->

		<?php
	}

	/**
	 * This method is used to retrieve the configurable options of the element.
	 * @return array The list of options that compose the element and then passed as the argument for the render() function
	 */
	function options()
	{
		$uid = $this->data['uid'];

		$options = array(
			'has_tabs'  => true,
			'general' => array(
				'title' => 'General options',
				'options' => array(
					array (
						"name"        => __( "Recent Work Items Height", 'zn_framework' ),
						"description" => __( "Enter a height for the carousel items", 'zn_framework' ),
						"id"          => "rw_height",
						"std"         => "165",
						"type"        => "text",
						"placeholder" => "ex: 165px"
					),
					array (
						"name"        => __( "Recent Work Items Width", 'zn_framework' ),
						"description" => __( "Enter the width for the carousel items", 'zn_framework' ),
						"id"          => "rw_width",
						"std"         => "450",
						"type"        => "text",
						"placeholder" => "ex: 450px"
					),
					array (
						"name"        => __( "Recent Works Title", 'zn_framework' ),
						"description" => __( "Enter a title for your Recent Works element", 'zn_framework' ),
						"id"          => "rw_title",
						"std"         => "",
						"type"        => "text",
					),
					array (
						"name"        => __( "Portfolio page link", 'zn_framework' ),
						"description" => __( "Please enter the link to your portfolio page.", 'zn_framework' ),
						"id"          => "rw_port_link",
						"std"         => "",
						"type"        => "text",
					),
				),
			),

			'portfolio' => array(
				'title' => 'Portfolio Settings',
				'options' => array(
					array (
						"name"        => __( "Portfolio Category", 'zn_framework' ),
						"description" => __( "Select the portfolio category to show items", 'zn_framework' ),
						"id"          => "portfolio_categories",
						"multiple"    => true,
						"std"         => "0",
						"type"        => "select",
						"options"     => WpkZn::getPortfolioCategories(),
					),
					array (
						"name"        => __( "Portfolio tags", 'zn_framework' ),
						"description" => __( "Select the portfolio tags to show items", 'zn_framework' ),
						"id"          => "portfolio_tags",
						"multiple"    => true,
						"std"         => "0",
						"type"        => "select",
						"options"     => WpkZn::getPortfolioTags(),
					),
					array (
						"name"        => __( "Number of portfolio Items", 'zn_framework' ),
						"description" => __( "Please enter how many portfolio items you want to load.", 'zn_framework' ),
						"id"          => "ports_per_page",
						"std"         => "6",
						"type"        => "text"
					),
					array (
						"name"        => __( "Autoplay carousel?", 'zn_framework' ),
						"description" => __( "Does the carousel autoplay itself?", 'zn_framework' ),
						"id"          => "rw2_slider_autoplay",
						"std"         => "1",
						"value"         => "1",
						"type"        => "toggle2"
					),
					array (
						"name"        => __( "Timout duration", 'zn_framework' ),
						"description" => __( "The amount of milliseconds the carousel will pause", 'zn_framework' ),
						"id"          => "rw2_slider_timeout",
						"std"         => "5000",
						"type"        => "text"
					),
					array (
						"name"        => __( "Portfolio Item Link", 'zn_framework' ),
						"description" => __( "Select the type of portfolio item link.", 'zn_framework' ),
						"id"          => "portfolio_item_link",
						"std"         => "",
						"type"        => "select",
						"options"     => array(
							'' => __( 'Link to portfolio item', 'zn_framework' ),
							'image' => __( 'Link to media (Open modal)', 'zn_framework' ),
						),
					),
				),
			),


			'help' => znpb_get_helptab( array(
				'video'   => sprintf( '%s', esc_url('https://my.hogash.com/video_category/kallyas-wordpress-theme/#g4kQDgLIZ38') ),
				'docs'    => sprintf( '%s', esc_url('https://my.hogash.com/documentation/recent-work/') ),
				'copy'    => $uid,
				'general' => true,
			)),

		);
		return $options;
	}
}
