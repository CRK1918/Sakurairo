<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akina
 */

$mashiro_logo = iro_opt('mashiro_logo');
$vision_resource_basepath = iro_opt('vision_resource_basepath');
?>
<?php header('X-Frame-Options: SAMEORIGIN'); ?>
<!DOCTYPE html>
<!-- 
/**
 * 頂頂頂頂頂頂頂頂頂　頂頂頂頂頂頂頂頂頂
 * 頂頂頂頂頂頂頂　　　　　頂頂　　　　　
 * 　　　頂頂　　　頂頂頂頂頂頂頂頂頂頂頂
 * 　　　頂頂　　　頂頂頂頂頂頂頂頂頂頂頂
 * 　　　頂頂　　　頂頂　　　　　　　頂頂
 * 　　　頂頂　　　頂頂　　頂頂頂　　頂頂
 * 　　　頂頂　　　頂頂　　頂頂頂　　頂頂
 * 　　　頂頂　　　頂頂　　頂頂頂　　頂頂
 * 　　　頂頂　　　頂頂　　頂頂頂　　頂頂
 * 　　　頂頂　　　　　　　頂頂頂　
 * 　　　頂頂　　　　　　頂頂　頂頂　頂頂
 * 　頂頂頂頂　　　頂頂頂頂頂　頂頂頂頂頂
 * 　頂頂頂頂　　　頂頂頂頂　　　頂頂頂頂

  *      ┌─┐       ┌─┐ + +
 *   ┌──┘ ┴───────┘ ┴──┐++
 *   │                 │
 *   │       ───       │++ + + +
 *   ███████───███████ │+
 *   │                 │+
 *   │       ─┴─       │
 *   │                 │
 *   └───┐         ┌───┘
 *       │         │
 *       │         │   + +
 *       │         │
 *       │         └──────────────┐
 *       │                        │
 *       │                        ├─┐
 *       │                        ┌─┘
 *       │                        │
 *       └─┐  ┐  ┌───────┬──┐  ┌──┘  + + + +
 *         │ ─┤ ─┤       │ ─┤ ─┤
 *         └──┴──┘       └──┴──┘  + + + +
 *
 *
 *              ,----------------,              ,---------,
 *         ,-----------------------,          ,"        ,"|
 *       ,"                      ,"|        ,"        ,"  |
 *      +-----------------------+  |      ,"        ,"    |
 *      |  .-----------------.  |  |     +---------+      |
 *      |  |                 |  |  |     | -==----'|      |
 *      |  |  I am Root     |  |  |     |         |      |
 *      |  |             |  |  |/----|`---=    |      |
 *      |  |             |  |  |   ,/|==== ooo |      ;
 *      |  |                 |  |  |  // |(((( [33]|    ,"
 *      |  `-----------------'  |," .;'| |((((     |  ,"
 *      +-----------------------+  ;;  | |         |,"
 *         /_)______________(_/  //'   | +---------+
 *    ___________________________/___  `,
 *   /  oooooooooooooooo  .o.  oooo /,   \,"-----------
 *  / ==ooooooooooooooo==.o.  ooo= //   ,`\--{)B     ,"
 * /_==__==========__==_ooo__ooo=_/'   /___________,"
 *
 *
 * ░░░░░░░░░░░░░░░░░░░░░░░░▄░░
 * ░░░░░░░░░▐█░░░░░░░░░░░▄▀▒▌░
 * ░░░░░░░░▐▀▒█░░░░░░░░▄▀▒▒▒▐
 * ░░░░░░░▐▄▀▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐
 * ░░░░░▄▄▀▒░▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐
 * ░░░▄▀▒▒▒░░░▒▒▒░░░▒▒▒▀██▀▒▌
 * ░░▐▒▒▒▄▄▒▒▒▒░░░▒▒▒▒▒▒▒▀▄▒▒
 * ░░▌░░▌█▀▒▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐
 * ░▐░░░▒▒▒▒▒▒▒▒▌██▀▒▒░░░▒▒▒▀▄
 * ░▌░▒▄██▄▒▒▒▒▒▒▒▒▒░░░░░░▒▒▒▒
 * ▀▒▀▐▄█▄█▌▄░▀▒▒░░░░░░░░░░▒▒▒


 *                                         ,s555SB@@&                          
 *                                      :9H####@@@@@Xi                        
 *                                     1@@@@@@@@@@@@@@8                       
 *                                   ,8@@@@@@@@@B@@@@@@8                      
 *                                  :B@@@@X3hi8Bs;B@@@@@Ah,                   
 *             ,8i                  r@@@B:     1S ,M@@@@@@#8;                 
 *            1AB35.i:               X@@8 .   SGhr ,A@@@@@@@@S                
 *            1@h31MX8                18Hhh3i .i3r ,A@@@@@@@@@5               
 *            ;@&i,58r5                 rGSS:     :B@@@@@@@@@@A               
 *             1#i  . 9i                 hX.  .: .5@@@@@@@@@@@1               
 *              sG1,  ,G53s.              9#Xi;hS5 3B@@@@@@@B1                
 *               .h8h.,A@@@MXSs,           #@H1:    3ssSSX@1                  
 *               s ,@@@@@@@@@@@@Xhi,       r#@@X1s9M8    .GA981               
 *               ,. rS8H#@@@@@@@@@@#HG51;.  .h31i;9@r    .8@@@@BS;i;          
 *                .19AXXXAB@@@@@@@@@@@@@@#MHXG893hrX#XGGXM@@@@@@@@@@MS        
 *                s@@MM@@@hsX#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&,      
 *              :GB@#3G@@Brs ,1GM@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@B,     
 *            .hM@@@#@@#MX 51  r;iSGAM@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@8     
 *          :3B@@@@@@@@@@@&9@h :Gs   .;sSXH@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@:    
 *      s&HA#@@@@@@@@@@@@@@M89A;.8S.       ,r3@@@@@@@@@@@@@@@@@@@@@@@@@@@r    
 *   ,13B@@@@@@@@@@@@@@@@@@@5 5B3 ;.         ;@@@@@@@@@@@@@@@@@@@@@@@@@@@i    
 *  5#@@#&@@@@@@@@@@@@@@@@@@9  .39:          ;@@@@@@@@@@@@@@@@@@@@@@@@@@@;    
 *  9@@@X:MM@@@@@@@@@@@@@@@#;    ;31.         H@@@@@@@@@@@@@@@@@@@@@@@@@@:    
 *   SH#@B9.rM@@@@@@@@@@@@@B       :.         3@@@@@@@@@@@@@@@@@@@@@@@@@@5    
 *     ,:.   9@@@@@@@@@@@#HB5                 .M@@@@@@@@@@@@@@@@@@@@@@@@@B    
 *           ,ssirhSM@&1;i19911i,.             s@@@@@@@@@@@@@@@@@@@@@@@@@@S   
 *              ,,,rHAri1h1rh&@#353Sh:          8@@@@@@@@@@@@@@@@@@@@@@@@@#:  
 *            .A3hH@#5S553&@@#h   i:i9S          #@@@@@@@@@@@@@@@@@@@@@@@@@A.
 *

 *
 *   █████▒█    ██  ▄████▄   ██ ▄█▀       ██████╗ ██╗   ██╗ ██████╗
 * ▓██   ▒ ██  ▓██▒▒██▀ ▀█   ██▄█▒        ██╔══██╗██║   ██║██╔════╝
 * ▒████ ░▓██  ▒██░▒▓█    ▄ ▓███▄░        ██████╔╝██║   ██║██║  ███╗
 * ░▓█▒  ░▓▓█  ░██░▒▓▓▄ ▄██▒▓██ █▄        ██╔══██╗██║   ██║██║   ██║
 * ░▒█░   ▒▒█████▓ ▒ ▓███▀ ░▒██▒ █▄       ██████╔╝╚██████╔╝╚██████╔╝
 *  ▒ ░   ░▒▓▒ ▒ ▒ ░ ░▒ ▒  ░▒ ▒▒ ▓▒       ╚═════╝  ╚═════╝  ╚═════╝
 *  ░     ░░▒░ ░ ░   ░  ▒   ░ ░▒ ▒░
 *  ░ ░    ░░░ ░ ░ ░        ░ ░░ ░
 *           ░     ░ ░      ░  ░


/***
 *               ii.                                         ;9ABH,          
 *              SA391,                                    .r9GG35&G          
 *              &#ii13Gh;                               i3X31i;:,rB1         
 *              iMs,:,i5895,                         .5G91:,:;:s1:8A         
 *               33::::,,;5G5,                     ,58Si,,:::,sHX;iH1        
 *                Sr.,:;rs13BBX35hh11511h5Shhh5S3GAXS:.,,::,,1AG3i,GG        
 *                .G51S511sr;;iiiishS8G89Shsrrsh59S;.,,,,,..5A85Si,h8        
 *               :SB9s:,............................,,,.,,,SASh53h,1G.       
 *            .r18S;..,,,,,,,,,,,,,,,,,,,,,,,,,,,,,....,,.1H315199,rX,       
 *          ;S89s,..,,,,,,,,,,,,,,,,,,,,,,,....,,.......,,,;r1ShS8,;Xi       
 *        i55s:.........,,,,,,,,,,,,,,,,.,,,......,.....,,....r9&5.:X1       
 *       59;.....,.     .,,,,,,,,,,,...        .............,..:1;.:&s       
 *      s8,..;53S5S3s.   .,,,,,,,.,..      i15S5h1:.........,,,..,,:99       
 *      93.:39s:rSGB@A;  ..,,,,.....    .SG3hhh9G&BGi..,,,,,,,,,,,,.,83      
 *      G5.G8  9#@@@@@X. .,,,,,,.....  iA9,.S&B###@@Mr...,,,,,,,,..,.;Xh     
 *      Gs.X8 S@@@@@@@B:..,,,,,,,,,,. rA1 ,A@@@@@@@@@H:........,,,,,,.iX:    
 *     ;9. ,8A#@@@@@@#5,.,,,,,,,,,... 9A. 8@@@@@@@@@@M;    ....,,,,,,,,S8    
 *     X3    iS8XAHH8s.,,,,,,,,,,...,..58hH@@@@@@@@@Hs       ...,,,,,,,:Gs   
 *    r8,        ,,,...,,,,,,,,,,.....  ,h8XABMMHX3r.          .,,,,,,,.rX:  
 *   :9, .    .:,..,:;;;::,.,,,,,..          .,,.               ..,,,,,,.59  
 *  .Si      ,:.i8HBMMMMMB&5,....                    .            .,,,,,.sMr
 *  SS       :: h@@@@@@@@@@#; .                     ...  .         ..,,,,iM5
 *  91  .    ;:.,1&@@@@@@MXs.                            .          .,,:,:&S
 *  hS ....  .:;,,,i3MMS1;..,..... .  .     ...                     ..,:,.99
 *  ,8; ..... .,:,..,8Ms:;,,,...                                     .,::.83
 *   s&: ....  .sS553B@@HX3s;,.    .,;13h.                            .:::&1
 *    SXr  .  ...;s3G99XA&X88Shss11155hi.                             ,;:h&,
 *     iH8:  . ..   ,;iiii;,::,,,,,.                                 .;irHA  
 *      ,8X5;   .     .......                                       ,;iihS8Gi
 *         1831,                                                 .,;irrrrrs&@
 *           ;5A8r.                                            .:;iiiiirrss1H
 *             :X@H3s.......                                .,:;iii;iiiiirsrh
 *              r#h:;,...,,.. .,,:;;;;;:::,...              .:;;;;;;iiiirrss1
 *             ,M8 ..,....,.....,,::::::,,...         .     .,;;;iiiiiirss11h
 *             8B;.,,,,,,,.,.....          .           ..   .:;;;;iirrsss111h
 *            i@5,:::,,,,,,,,.... .                   . .:::;;;;;irrrss111111
 *            9Bi,:,,,,......                        ..r91;;;;;iirrsss1ss1111
 */



 *                 .-~~~~~~~~~-._       _.-~~~~~~~~~-.
 *             __.'              ~.   .~              `.__
 *           .'//                  \./                  \\`.
 *         .'//                     |                     \\`.
 *       .'// .-~"""""""~~~~-._     |     _,-~~~~"""""""~-. \\`.
 *     .'//.-"                 `-.  |  .-'                 "-.\\`.
 *   .'//______.============-..   \ | /   ..-============.______\\`.
 * .'______________________________\|/______________________________`.


-->
<html <?php language_attributes(); ?>>

<head>
	<meta name="theme-color">
	<meta charset="<?php bloginfo('charset'); ?>">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link rel="stylesheet" href="<?= $vision_resource_basepath ?>fontawesome/css/all.min.css" type="text/css" media="all"/>
	<?php
	if (iro_opt('iro_meta') == true) {
		$keywords = '';
		$description = '';
		if (is_singular()) {
			$keywords = '';
			$tags = get_the_tags();
			$categories = get_the_category();
			if ($tags) {
				foreach ($tags as $tag) {
					$keywords .= $tag->name . ',';
				};
			};
			if ($categories) {
				foreach ($categories as $category) {
					$keywords .= $category->name . ',';
				};
			};
			$description = mb_strimwidth(str_replace("\r\n", '', strip_tags($post->post_content)), 0, 240, '…');
		} else {
			$keywords = iro_opt('iro_meta_keywords');
			$description = iro_opt('iro_meta_description');
		};
	?>
		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="<?php echo $keywords; ?>" />
	<?php } ?>
	<link rel="shortcut icon" href="<?php echo iro_opt('favicon_link', ''); ?>" />
	<meta http-equiv="x-dns-prefetch-control" content="on">
	<?php
	if (is_home()) {
		//预载资源
		//id 需要一致，使 pjax 可以完成自动替换
		global $core_lib_basepath;
	?>
		<link id="entry-content-css" rel="prefetch" as="style" href="<?= $core_lib_basepath . '/css/theme/' . (iro_opt('entry_content_style') == 'sakurairo' ? 'sakura' : 'github') . '.css?ver=' . IRO_VERSION ?>" />
		<link rel="prefetch" as="script" href="<?= $core_lib_basepath . '/js/page.js?ver=' . IRO_VERSION ?>" />
	<?php
	}
	?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://<?php echo iro_opt('gfonts_api', 'fonts.loli.net'); ?>/css?family=Noto+Serif|Noto+Serif+SC|Noto+Sans+SC|Dela+Gothic+One|Fira+Code<?php echo iro_opt('gfonts_add_name'); ?>&display=swap" media="all">
	<script type="text/javascript">
		if (!!window.ActiveXObject || "ActiveXObject" in window) { //is IE?
			alert('Are you using IE? Some of the web elements might be broken, please use the latest browser to access！');
		}
	</script>
	<?php if (iro_opt('google_analytics_id', '')) : ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo iro_opt('google_analytics_id', ''); ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {dataLayer.push(arguments)}
			gtag('js', new Date());
			gtag('config', '<?php echo iro_opt('google_analytics_id', ''); ?>');
		</script>
	<?php endif; ?>
	<?php echo iro_opt("site_header_insert"); ?>
</head>

<body <?php body_class(); ?>>
	<?php if (iro_opt('preload_animation', 'true')) : ?>
		<div id="preload">
			<li data-id="3" class="active">
				<div id="preloader_3"></div>
			</li>
		</div>
	<?php endif; ?>
	<div class="scrollbar" id="bar"></div>
	<header class="site-header no-select" role="banner">
		<div class="site-top">
			<div class="site-branding">
				<?php if (iro_opt('iro_logo') && !iro_opt('mashiro_logo_option', false)) { ?>
					<div class="site-title">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php echo iro_opt('iro_logo'); ?>"></a>
					</div>
				<?php } else { ?>
					<span class="site-title">
						<span class="logolink moe-mashiro">
							<a href="<?php bloginfo('url'); ?>">
								<ruby>
									<span class="sakuraso"><?php echo $mashiro_logo['text_a']; ?></span>
									<span class="no"><?php echo $mashiro_logo['text_b']; ?></span>
									<span class="shironeko"><?php echo $mashiro_logo['text_c']; ?></span>
									<rp></rp>
									<rt class="chinese-font"><?php echo $mashiro_logo['text_secondary']; ?></rt>
									<rp></rp>
								</ruby>
							</a>
						</span>
					</span>
				<?php } ?>
				<!-- logo end -->
			</div><!-- .site-branding -->
			<?php header_user_menu();
			if (iro_opt('nav_menu_search') == '1') { ?>
				<div class="searchbox js-toggle-search"><i class="fa-solid fa-magnifying-glass"></i></div>
			<?php } ?>
			<div class="lower"><?php if (iro_opt('nav_menu_display') == 'fold') { ?>
					<div id="show-nav" class="showNav">
						<div class="line line1"></div>
						<div class="line line2"></div>
						<div class="line line3"></div>
					</div><?php } ?>
				<nav><?php wp_nav_menu(array('depth' => 2, 'theme_location' => 'primary', 'container' => false)); ?></nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="openNav no-select">
		<div class="iconflat no-select" style="padding: 30px;">
			<div class="icon"></div>
		</div>
	</div><!-- m-nav-bar -->
	<section id="main-container">
		<?php
		if (iro_opt('cover_switch')) {
			$filter = iro_opt('random_graphs_filter');
		?>
			<div class="headertop <?php echo $filter; ?>">
				<?php get_template_part('layouts/imgbox'); ?>
			</div>
		<?php } ?>
		<div id="page" class="site wrapper">
			<?php
			$use_as_thumb = get_post_meta(get_the_ID(), 'use_as_thumb', true); //'true','only',(default)
			if ($use_as_thumb != 'only') {
				$cover_type = get_post_meta(get_the_ID(), 'cover_type', true);
				if ($cover_type == 'hls') {
					the_video_headPattern(true);
				} elseif ($cover_type == 'normal') {
					the_video_headPattern(false);
				} else {
					the_headPattern();
				}
			} else {
				the_headPattern();
			} ?>
			<div id="content" class="site-content">
