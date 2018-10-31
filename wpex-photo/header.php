<?php
/**
 * Header.php is generally used on all the pages of your site and is called somewhere near the top
 * of your template files. It's a very important file that should never be deleted.
 * @package Photo WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="baidu-site-verification" content="UQOXqwABP8" />
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if( of_get_option('custom_favicon') ) { ?>
		<link rel="icon" type="image/png" href="<?php echo $data['custom_favicon']; ?>" />
	<?php } ?>
	<?php wp_head(); ?>
</head>
<script>

(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<script type="text/javascript" language="javascript">
(function() {
    function k(a, b, c) {
        if (a.addEventListener) a.addEventListener(b, c, false);
        else a.attachEvent && a.attachEvent("on" + b, c)
    }
    function g(a) {
        if (typeof window.onload != "function") window.onload = a;
        else {
            var b = window.onload;
            window.onload = function() {
                b();
                a()
            }
        }
    }
    function h() {
        var a = {};
        for (type in {
            Top: "",
            Left: ""
        }) {
            var b = type == "Top" ? "Y": "X";
            if (typeof window["page" + b + "Offset"] != "undefined") 
a[type.toLowerCase()] = window["page" + b + "Offset"];
            else {
b = document.documentElement.clientHeight ? document.documentElement: document.body;
                a[type.toLowerCase()] = b["scroll" + type]
            }
        }
        return a
    }
    function l() {
        var a = document.body,
        b;
        if (window.innerHeight) b = window.innerHeight;
        else if (a.parentElement.clientHeight) b = a.parentElement.clientHeight;
        else if (a && a.clientHeight) b = a.clientHeight;
        return b
    }
    function i(a) {
        this.parent = document.body;
        this.createEl(this.parent, a);
        this.size = Math.random() * 11 + 11;
        this.el.style.width = Math.round(this.size) + "px";
        this.el.style.height = Math.round(this.size) + "px";
        this.maxLeft = document.body.offsetWidth - this.size;
        this.maxTop = document.body.offsetHeight - this.size;
        this.left = Math.random() * this.maxLeft;
        this.top = h().top + 1;
        this.angle = 1.4 + 0.2 * Math.random();
        this.minAngle = 1.4;
        this.maxAngle = 1.6;
        this.angleDelta = 0.01 * Math.random();
        this.speed = 2 + Math.random()
    }
    var j = false;
    g(function() {
        j = true
    });
    var f = true;
    window.createSnow = function(a, b) {
        if (j) {
            var c = [],
            m = setInterval(function() {
                f && b > c.length && Math.random() 
< b * 0.0025 && c.push(new i(a)); ! f && !c.length && clearInterval(m);
                for (var e = h().top, n = l(), d = c.length - 1; d >= 0; d--) 
if (c[d]) if (c[d].top < e || c[d].top + c[d].size + 1 > e + n) {
                    c[d].remove();
                    c[d] = null;
                    c.splice(d, 1)
                } else {
                    c[d].move();
                    c[d].draw()
                }
            },
            40);
            k(window, "scroll",
            function() {
                for (var e = c.length - 1; e >= 0; e--) c[e].draw()
            })
        } else g(function() {
            createSnow(a, b)
        })
    };
    window.removeSnow = function() {
        f = false
    };
    i.prototype = {
        createEl: function(a, b) {
            this.el = document.createElement("img");
            this.el.setAttribute
("src", b + "http://mimg.127.net/hxm/quan/hd/111207_sdj/style/img/snow.gif");
            this.el.style.position = "absolute";
            this.el.style.display = "block";
            this.el.style.zIndex = "99999";
            this.parent.appendChild(this.el)
        },
        move: function() {
            if (this.angle < this.minAngle || this.angle > this.maxAngle) 
this.angleDelta = -this.angleDelta;
            this.angle += this.angleDelta;
            this.left += this.speed * Math.cos(this.angle * Math.PI);
            this.top -= this.speed * Math.sin(this.angle * Math.PI);
            if (this.left < 0) this.left = this.maxLeft;
            else if (this.left > this.maxLeft) this.left = 0
        },
        draw: function() {
            this.el.style.top = Math.round(this.top) + "px";
            this.el.style.left = Math.round(this.left) + "px"
        },
        remove: function() {
            this.parent.removeChild(this.el);
            this.parent = this.el = null
        }
    }
})();
createSnow("", 40);


</script>

<!-- Begin Body
================================================== -->
<body <?php body_class(); ?>>

<div id="wrap" class="clearfix">

	<div id="header-wrap">
		<?php wpex_hook_header_before(); ?>
		<header id="header" class="clearfix">
			<?php wpex_hook_header_top(); ?>
				<div id="logo">
					<?php
					// Show custom image logo if defined in the admin
					if( of_get_option('custom_logo') ) { ?>
						<a href="<?php echo home_url(); ?>/" title="<?php get_bloginfo( 'name' ); ?>" rel="home"><img src="<?php echo of_get_option('custom_logo'); ?>" alt="<?php get_bloginfo( 'name' ) ?>" /></a>
					<?php }
					// No custom img logo - show text logo
						else { ?>
						 <h2><a href="<?php echo home_url(); ?>/" title="<?php get_bloginfo( 'name' ); ?>" rel="home"><?php echo get_bloginfo( 'name' ); ?></a></h2>
						 <p><?php echo get_bloginfo('description'); ?></p>
					<?php } ?>
				</div><!-- /logo -->
			<?php wpex_hook_header_bottom(); ?>
		</header><!-- /header -->
		<?php wpex_hook_header_after(); ?>
	</div><!-- /header-wrap -->
	
	
	<div id="navigation-wrap" class="clearfix">
		<nav id="navigation">
			<?php wp_nav_menu( array(
				'theme_location' => 'main_menu',
				'sort_column' => 'menu_order',
				'menu_class' => 'sf-menu',
				'fallback_cb' => false
			)); ?>
		</nav><!-- /navigation -->
		<ul id="header-social" class="clearfix">
			<?php
			// Show social icons if enabled
			if ( of_get_option('header_social') == '1' ) { 
				$wpex_social_links = wpex_get_social();
				//social loop
				foreach( $wpex_social_links as $wpex_social_link ) {
					if( of_get_option( $wpex_social_link ) ) {
						echo '<li><a href="'. of_get_option($wpex_social_link) .'" title="'. $wpex_social_link .'" target="_blank"><img src="'. get_template_directory_uri() .'/images/social/'.$wpex_social_link.'.png" alt="'. $wpex_social_link .'" /></a></li>';
				} }
			}
			?>
		</ul><!-- /header-social -->
	</div>

	
	<?php wpex_hook_content_before(); ?>
	<div id="main-content" class="clearfix">
	<?php wpex_hook_content_top(); ?>

	<?php
	//Fun code on homepage only
	if ( is_front_page() ) {
		
		// Run code on non-paginated pages
		if ( !is_paged() ) {
			// Check if the soliloquy slider plugin is activated
			if ( function_exists( 'soliloquy_slider' ) ) {
				// Display soliloqury slider
				if ( 'Select' != of_get_option('home_slider') ) { ?>
					<div id="home-slider"><?php soliloquy_slider( of_get_option('home_slider') ) ?></div>
			<?php } // Emd is_paged check
			} // End slider function check
		} // End slider select check
		
		// Display subtitle if defined in the options panel
		if ( of_get_option('home_subtitle') !== '' ) {
			// Display subtitle as long as it's not a paginated page
			if ( !is_paged() ) {
			?>
		<?php } // end is_paged check
		} // End home subtitle check
	} // End if is_front_page
	?>