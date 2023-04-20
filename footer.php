<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sakura
 */

$reception_background = iro_opt('reception_background');
?>
	</div><!-- #content -->
	<?php 
			comments_template('', true); 
	?>
</div><!-- #page Pjax container-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" theme-info="Sakurairo v<?php echo IRO_VERSION; ?>">
			<div class="footertext">
				<div class="img-preload">
					<img src="<?php echo iro_opt('load_nextpage_svg'); ?>"><!-- 加载下一部分圈圈 -->
				</div>
				<p style="color: #666666;"><?php echo iro_opt('footer_info', ''); ?></p>
			</div>
			<div class="footer-device function_area">
					<?php if(iro_opt('footer_yiyan')){ ?>
						<p id="footer_yiyan"></p>
						<?php } ?>
					<span style="color: #b9b9b9;">
						<?php /* 能保留下面两个链接吗？算是我一个小小的心愿吧~ */ ?>
						<?php if (iro_opt('footer_load_occupancy', 'true')): ?>
                        <?php printf(
                            _x( 'Load Time %.3f seconds | %d Query | RAM Usage %.2f MB ', 'footer load occupancy', 'sakurairo' ),
                            timer_stop( 0, 3 ),get_num_queries(),memory_get_peak_usage() / 1024 / 1024);
                        ?>
                        <?php endif; ?>
						<?php if (iro_opt('footer_upyun', 'true')): ?>
							本网站由 <a href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral" target="_blank"> <img alt="upyun-logo" src="https://s.nmxc.ltd/sakurairo_vision/@2.6/options/upyun_logo.webp"  style="display:inline-block;vertical-align:middle;width:60px;height:30px;"/> 提供 CDN 加速 / 云存储 服务
                        <?php endif; ?>
                        <br>
						<div style="color: #F08047;margin-top: -18px" class="ui inverted m-text-thin m-text-spaced"> Site Has Been Running For：<span id="htmer_time" class="item m-text-thin"></span> (*๓´╰╯`๓)  
					</span>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</section><!-- #section -->
	<!-- m-nav-center -->
	<div id="mo-nav">
		<div class="m-avatar">
			<?php 
			$personal_avatar = iro_opt('personal_avatar');
			$iro_logo = iro_opt('iro_logo');
			$ava = iro_opt('personal_avatar') ? $personal_avatar: ($iro_logo ?: iro_opt('vision_resource_basepath','https://s.nmxc.ltd/sakurairo_vision/@2.6/').'series/avatar.webp'); ?>
			<img src="<?php echo $ava ?>">
		</div>
		<div class="m-search">
			<form class="m-search-form" method="get" action="<?php echo home_url(); ?>" role="search">
				<input class="m-search-input" type="search" name="s" placeholder="<?php _e('Search...', 'sakurairo') /*搜索...*/?>" required>
			</form>
		</div>
		<?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?>
	</div><!-- m-nav-center end -->
	<button id="moblieGoTop" title="<?=__('Go to top','sakurairo');?>"><i class="fa-solid fa-caret-up fa-lg"></i></button>
    <button id="changskin"><i class="fa-solid fa-gear fa-spin fa-lg" ></i></button>
	<!-- search start -->
	<form class="js-search search-form search-form--modal" method="get" action="<?php echo home_url(); ?>" role="search">
		<div class="search-form__inner">
		<?php if(iro_opt('live_search')){ ?>
			<div class="micro">
				<input id="search-input" class="text-input" type="search" name="s" placeholder="<?php _e('Want to find something?', 'sakurairo') /*想要找点什么呢*/?>" required>
			</div>
			<div class="ins-section-wrapper">
                <a id="Ty" href="#"></a>
                <div class="ins-section-container" id="PostlistBox"></div>
            </div>
		<?php }else{ ?>
			<div class="micro">
				<p class="micro mb-"><?php _e('Want to find something?', 'sakurairo') /*想要找点什么呢*/?></p>
				<input class="text-input" type="search" name="s" placeholder="<?php _e('Search', 'sakurairo') ?>" required>
			</div>
		<?php } ?>
		</div>
		<div class="search_close"></div>
	</form>
	<!-- search end -->
<?php wp_footer(); ?>
<div class="skin-menu no-select">
<?php if(iro_opt('style_menu_display') == 'full'): ?>
	<p style="margin-bottom: 0.5em;"><?php echo iro_opt('style_menu_reception_text', ''); ?></p>
<?php endif; ?>
    <div class="theme-controls row-container">
        <ul class="menu-list">
            <li id="white-bg">
			<i class="fa-solid fa-display fa-sm"></i>
			</li><!--Default-->
			<?php if($reception_background['heart_shaped'] == '1'): ?>
            <li id="diy1-bg">
			<i class="fa-regular fa-heart"></i>
			</li><!--Diy1-->
			<?php endif; ?>
			<?php if($reception_background['star_shaped'] == '1'): ?>
            <li id="diy2-bg">
			<i class="fa-regular fa-star"></i>
			</li><!--Diy2-->
			<?php endif; ?>
			<?php if($reception_background['square_shaped'] == '1'): ?>
            <li id="diy3-bg">
			<i class="fa-brands fa-delicious"></i>
			</li><!--Diy3-->
			<?php endif; ?>
			<?php if($reception_background['lemon_shaped'] == '1'): ?>
            <li id="diy4-bg">
			<i class="fa-regular fa-lemon"></i>
			</li><!--Diy4-->
			<?php endif; ?>
            <li id="dark-bg">
			<i class="fa-regular fa-moon"></i>
            </li><!--Night-->
        </ul>
	</div>
	<?php if(iro_opt('style_menu_display') == 'full'): ?>
	<p style="margin-bottom: 0.1em;"><?php echo iro_opt('style_menu_font_area_text', ''); ?></p>
    <div class="font-family-controls row-container">
        <button type="button" class="control-btn-serif selected" data-name="serif" ><i class="fa-solid fa-font"></i></button>
        <button type="button" class="control-btn-sans-serif" data-name="sans-serif"><i class="fa-solid fa-bold"></i></button>
	</div>
	<?php endif; ?>
</div>
<?php if (iro_opt('sakura_widget')) : ?>
	<aside id="secondary" class="widget-area" role="complementary" style="left: -400px;">
    <div class="heading"><?php _e('Widgets','sakurairo') /*小工具*/ ?></div>
    <div class="sakura_widget">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sakura_widget')) : endif; ?>
	</div>
	<div class="show-hide-wrap"><button class="show-hide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M22 16l-10.105-10.6-1.895 1.987 8.211 8.613-8.211 8.612 1.895 1.988 8.211-8.613z"></path></svg></button></div>
    </aside>
<?php endif; ?>
<?php if (iro_opt('aplayer_server') != 'off'): ?>
    <div id="aplayer-float" style="z-index: 100;"
	    class="aplayer"
        data-id="<?php echo iro_opt('aplayer_playlistid', ''); ?>"
        data-server="<?php echo iro_opt('aplayer_server'); ?>"
		data-preload="<?php echo iro_opt('aplayer_preload'); ?>"
        data-type="playlist"
        data-fixed="true"
		data-order="<?php echo iro_opt('aplayer_order'); ?>"
        data-volume="<?php echo iro_opt('aplayer_volume', ''); ?>"
        data-theme="<?php echo iro_opt('theme_skin'); ?>">
    </div>
<?php endif; ?>

<!-- 首页波浪特效 -->
<?php if (iro_opt('wave_effects', 'true')): ?>
<link rel="stylesheet" href="<?php global $shared_lib_basepath;echo $shared_lib_basepath?>/css/wave.css">
<?php endif; ?>

<?php
echo iro_opt('footer_addition', '');
?>
</body>
<!-- Particles动效 -->
<?php if (iro_opt('particles_effects', 'true')): ?>
<style>
  #particles-js {
  width: 100%;
  height: 100%;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}
</style>
<div id="particles-js"></div>
<script type="application/json" id="particles-js-cfg"><?=iro_opt('particles_json','')?></script>
<?php endif; ?>
</html>

<script>
// 运行时间统计
function secondToDate(second) {
    if (!second) {
      return 0;
    }
    var time = new Array(0, 0, 0, 0, 0);
    if (second >= 365 * 24 * 3600) {
      time[0] = parseInt(second / (365 * 24 * 3600));
      second %= 365 * 24 * 3600;
    }
    if (second >= 24 * 3600) {
      time[1] = parseInt(second / (24 * 3600));
      second %= 24 * 3600;
    }
    if (second >= 3600) {
      time[2] = parseInt(second / 3600);
      second %= 3600;
    }
    if (second >= 60) {
      time[3] = parseInt(second / 60);
      second %= 60;
    }
    if (second > 0) {
      time[4] = second;
    }
    return time;
  }
  function setTime() {
    /*此处为网站的创建时间*/
    var create_time = Math.round(new Date(Date.UTC(2022, 6, 6, 0, 0, 0)).getTime() / 1000);
    var timestamp = Math.round((new Date().getTime() + 8 * 60 * 60 * 1000) / 1000);
    currentTime = secondToDate((timestamp - create_time));
    currentTimeHtml = currentTime[0] + 'Year ' + currentTime[1] + 'Day '
            + currentTime[2] + 'Hour ' + currentTime[3] + 'Minute ' + currentTime[4]
            + 'Second ';
    document.getElementById("htmer_time").innerHTML = currentTimeHtml;
  }
  setInterval(setTime, 1000);
</script>
