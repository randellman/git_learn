<?php

	class ThemeInstaller
	{
		//TODO Problems: Contact Us - content (id="89");
		private $helpcenterCategories = [
			[
				'title'     => 'Coupons & Bonuses',
				'order'     => 1,
				'childrens' => [
					[
						'title' => 'Giveaways',
						'order' => 1,
					],
					[
						'title' => 'Store Credit',
						'order' => 2,
					],
					[
						'title' => 'Reward Coupons',
						'order' => 3,
					],
					[
						'title' => 'Referal Coupons',
						'order' => 4,
					],
				]
			],
			[
				'title'     => 'Other',
				'order'     => 10,
				'childrens' => [
					[
						'title' => 'Introduction',
						'order' => 1,
					]
				]
			],
			[
				'title'   => 'Contact Us',
				'order'   => 11,
				'content' => '[contact-form-7 id="89" title="Contact form 1"]',
			],
			[
				'title'     => 'Account Management',
				'order'     => 2,
				'childrens' => [
					[
						'title' => 'Registration & Sign In',
						'order' => 1,
					]
				]
			],
			[
				'title'     => 'Product Selection',
				'order'     => 3,
				'childrens' => [
					[
						'title' => 'Searching',
						'order' => 1,
					]
				]
			],
			[
				'title'     => 'Ordering & Payment',
				'order'     => 4,
				'childrens' => [
					[
						'title' => 'Ordering',
						'order' => 1,
					]
				]
			],
			[
				'title'     => 'Awaiting Order Arrival',
				'order'     => 5,
				'childrens' => [
					[
						'title' => 'Wait for Seller to Ship Goods',
						'order' => 1,
					]
				]
			],
			[
				'title'     => 'Aftersales',
				'order'     => 6,
				'childrens' => [
					[
						'title' => 'Report Product Issue',
						'order' => 1,
					]
				]
			],
			[
				'title'     => 'Refund',
				'order'     => 7,
				'childrens' => [
					[
						'title' => 'Refund Process',
						'order' => 1,
					]
				]
			],
			[
				'title'     => 'Feedback',
				'order'     => 8,
				'childrens' => [
					[
						'title' => 'Order Feedback',
						'order' => 1,
					]
				]
			],
			[
				'title'     => 'Rules & Policies',
				'order'     => 9,
				'childrens' => [
					[
						'title' => 'Rules',
						'order' => 1,
					]
				]
			],
		];

		//TODO Problems: Cannot get AliExpress discount - content (src="/wp-content/themes/best-of-shop/assets/img/pictures/screen-question.png");
		private $helpcenterPosts = [
			[
				'post_type'    => 'helpcenter',
				'post_title'   => 'Copyright protection',
				'categories'   => [
					'Referal Coupons',
				],
				'post_content' => '<div class = "right-side-body-item">
                                <strong>Point 1</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                            </div>
                            <div class = "right-side-body-item">
                                <strong>Point 2</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                            </div>
                            <div class = "right-side-body-item">
                                <strong>Point 3</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                            </div>
                            <div class = "right-side-body-item">
                                <strong>Point 4</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <div class = "btns">
                                <a href = "#" class = "btn-transparent">Email Us</a>
                                    <a href = "#" class = "btn-transparent">Start Live Chat</a>
                                </div>
                            </div>',
			],
			[
				'post_type'    => 'helpcenter',
				'post_title'   => 'Buyer protection',
				'categories'   => [
					'Giveaways',
					'Referal Coupons',
					'Reward Coupons',
					'Store Credit',
				],
				'post_content' => '<div class = "right-side-body-item">
                                <strong>Point 1</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                            </div>
                            <div class = "right-side-body-item">
                                <strong>Point 2</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                            </div>
                            <div class = "right-side-body-item">
                                <strong>Point 3</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                            </div>
                            <div class = "right-side-body-item">
                                <strong>Point 4</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
                                <div class = "btns">
                                <a href = "#" class = "btn-transparent">Email Us</a>
                                    <a href = "#" class = "btn-transparent">Start Live Chat</a>
                                </div>
                            </div>',
			],
			[
				'post_type'    => 'helpcenter',
				'post_title'   => 'Cannot get AliExpress discount',
				'categories'   => [
					'Giveaways',
					'Referal Coupons',
					'Reward Coupons',
					'Store Credit',
					'Introduction',
					'Order Feedback',
					'Ordering',
					'Refund Process',
					'Registration & Sign In',
					'Report Product Issue',
					'Rules',
					'Searching',
					'Wait for Seller to Ship Goods',
				],
				'post_content' => '<div class = "sub-menu-item">
    <h3>1. On the product page</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
    <img src = "/wp-content/themes/best-of-shop/assets/img/pictures/screen-question.png" alt = "screen">
</div>
<div class = "sub-menu-item">
    <h3>2. In your Cart</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet arcu varius quam pretium. In bibendum imperdiet scelerisque at donec placerat convallis. Egestas nam suspendisse nam dolor vitae turpis. Felis, potenti consectetur quis feugiat eu scelerisque leo eleifend. Gravida et bibendum donec sed dictum enim ac urna. Ultrices consequat bibendum mauris eleifend tellus. Sagittis, pulvinar convallis sit quisque non id. A lobortis ac aliquet elit, tortor arcu dolor mauris ipsum. Mattis maecenas consequat, luctus ornare sed blandit scelerisque aliquet.</p>
    <img src = "/wp-content/themes/best-of-shop/assets/img/pictures/screen-question.png" alt = "screen">
</div>',
			],
		];

		public function __construct()
		{
			add_action('after_switch_theme' , [$this, 'insertContent']);
		}

		public function insertContent()
		{
			//echo '<pre>';
			$theme = wp_get_theme();

			if ( $theme->exists() ){
				if($theme->get('Name') == 'best-of-shop'){
					if($this->helpcenterCategories){
						foreach($this->helpcenterCategories as $item){
							//print_r($item);
							$termId = $this->insertTerm($item);

							if(isset($item['childrens']) && $item['childrens']){
								foreach($item['childrens'] as $item){
									$this->insertTerm($item, $termId);
								}
							}
						}
					}

					if($this->helpcenterPosts){
						foreach($this->helpcenterPosts as $item){
							$termId = $this->insertPost($item);
						}
					}
				}
			}

			//exit('exit');
		}

		public function insertTerm($data, $parent = 0)
		{
			$itemName = sanitize_title($data['title']);

			$result = term_exists($itemName, 'helpcenter_category');

			if(!$result){
				$result = wp_insert_term( $data['title'], 'helpcenter_category', array(
					'description' => '',
					'parent'      => $parent,
					'slug'        => '',
				) );

				//print_r($result);exit;
			}

			//print_r($result);

			add_term_meta($result['term_id'], '_term_order', $data['order'], true);

			if(isset($data['content']) && $data['content']){
				add_term_meta($result['term_id'], '_term_content', $data['content'], true);
			}

			return $result['term_id'];
		}

		public function insertPost($data)
		{
			global $user_ID;

			$post_name = sanitize_title($data['post_title']);

			if(!get_page_by_path($post_name, OBJECT, 'helpcenter')){
				$postData = [
					'post_type'			=> $data['post_type'],
					'post_title'		=> $data['post_title'],
					'post_content'		=> $data['post_content'],
					'comment_status'	=> 'closed',
					'post_status'		=> 'publish',
					'ping_status'		=> 'closed',
					'post_author'		=> $user_ID,
					'post_name'			=> sanitize_title($data['post_title']),
					'post_password'		=> '',
				];

				$postID = wp_insert_post($postData);

				if(isset($data['categories']) && $data['categories']){
					$categoriesArr = [];

					foreach($data['categories'] as $category){
						$exist = term_exists($category, 'helpcenter_category');

						if($exist){
							$categoriesArr[] = $exist['term_id'];
						}
					}

					if($categoriesArr){
						wp_set_post_terms($postID, $categoriesArr, 'helpcenter_category');
					}
				}
			}
		}
	}

	new ThemeInstaller();

	add_action( 'after_switch_theme', 'action_function_name_987564', 10, 2 );
	function action_function_name_987564( $old_name, $old_theme )
	{
		$theme = wp_get_theme();

		if ( $theme->exists() ){
			if($theme->get('Name') == 'best-of-shop'){
				$pages = [
					[
						'post_type'    => 'page',
						'post_title'   => 'About Us',
						'post_content' => '<!-- wp:paragraph -->
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
<!-- /wp:paragraph -->',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'Payment Methods',
						'post_content' => '',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'Returns Policy',
						'post_content' => '<p>Cras non dolor. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui.</p>',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'Shipping & Delivery',
						'post_content' => '<p>Praesent ac massa at ligula laoreet iaculis. Morbi mollis tellus ac sapien. Curabitur suscipit suscipit tellus. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Duis lobortis massa imperdiet quam.</p>',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'Stay Connected',
						'post_content' => '',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'Terms and Conditions',
						'post_content' => '<p>Phasellus gravida semper nisi. Phasellus ullamcorper ipsum rutrum nunc. Etiam rhoncus. Aenean ut eros et nisl sagittis vestibulum. Aenean commodo ligula eget dolor.</p>',
					],
					/*
					[
						'post_type'    => 'page',
						'post_title'   => 'Cart',
						'post_content' => '<!-- wp:shortcode -->[woocommerce_cart]<!-- /wp:shortcode -->',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'Checkout',
						'post_content' => '<!-- wp:shortcode -->[woocommerce_checkout]<!-- /wp:shortcode -->',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'My account',
						'post_content' => '<!-- wp:shortcode -->[woocommerce_my_account]<!-- /wp:shortcode -->',
					],
					[
						'post_type'    => 'page',
						'post_title'   => 'Shop',
						'post_content' => '',
					],
					*/
				];

				if($pages){
					foreach($pages as $page){
						$post_name = sanitize_title($page['post_title']);

						if(!get_page_by_path($post_name)){
							bos_insert_post($page);
						}
					}
				}


			}
		}
	}

	function bos_insert_post($data)
	{
		global $user_ID;

		wp_insert_post(array(
			'post_type'			=> $data['post_type'],
			'post_title'		=> $data['post_title'],
			'post_content'		=> $data['post_content'],
			'comment_status'	=> 'closed',
			'post_status'		=> 'publish',
			'ping_status'		=> 'closed',
			'post_author'		=> $user_ID,
			'post_name'			=> sanitize_title($data['post_title']),
			'post_password'		=> '',
		));
	}