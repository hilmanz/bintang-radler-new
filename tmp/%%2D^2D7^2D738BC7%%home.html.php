<?php /* Smarty version 2.6.13, created on 2014-06-24 10:49:22
         compiled from application/web/home.html */ ?>
<?php echo '
<script type="text/javascript">
	$(document).ready(function() {
		$("body").queryLoader2({
			barColor: false,
			backgroundColor: "#00a2ff",
			percentage: true,
			barHeight: 1,
			completeAnimation: false,
			minimumTime: 100,
			onComplete:function(){
				  $(\'body\').removeClass(\'loading\');
					$(\'#fullpage\').fullpage({
						anchors: [\'Welcome\', \'RefreshingBlend\', \'BestSuited\', \'DoubleRefreshment\'],
						menu: \'.mainmenu,.arrowbottom1,.arrowbottom2,.arrowbottom3,.arrowup\',
						easing: \'linear\',
						fixedElements: \'.beer\',
						animation: "fade", 
					});
			}
		});
		
	});
</script>
'; ?>

<div id="bg"></div>
<div id="header" class="mm-fixed-top">
    <a href="#" id="showRightPush" class="sb-open-right"></a>
</div>
<div id="menunavigator">
	<div class="wrapper">
        <div id="navigator">
            <ul class="mainmenu">
                <li data-menuanchor="Welcome" class="active"><a href="#Welcome">Home</a></li>
                <li data-menuanchor="RefreshingBlend"><a href="#RefreshingBlend">Refreshing Blend</a></li>
                <li data-menuanchor="BestSuited"><a href="#BestSuited">Best Suited</a></li>
                <li data-menuanchor="DoubleRefreshment"><a href="#DoubleRefreshment">Double Refreshment</a></li>
            </ul>
        </div><!-- end #navigator -->
    </div><!-- end .wrapper -->
</div><!-- end #menunavigator -->
<div id="footerbox">
	<div class="wrapper">
        <div id="menubox">
            <div id="social">
            <a href="https://twitter.com/BintangID" target="_blank"><span class="icon-twitter">&nbsp;</span></a>
            <a href="https://www.facebook.com/BirBintang" target="_blank"><span class="icon-facebook">&nbsp;</span></a>
            </div>
            <div id="getbtn">
                <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
register" class="button">I'm Interested</a>
            </div>
        </div><!-- end #menubox -->
    </div><!-- end .wrapper -->
</div><!-- end #footerbox -->
<div id="fullpage">
	<div class="section" id="section0">
        <div id="step1" class="wrapper">
            <div id="home">
                <div id="text1" class="anim title">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text1.png" />
                </div>
                <div id="text2" class="anim subtitle">
                    <h3>If there's anything assured by 80+ years of brewing experience, it's perfection.<br>
Bintang has launched the all-new variant that's also the next big thing for 
Indonesia market. Meet Bintang Radler. Your favorite Bintang with flavorful twist 
that brings double refreshment for your everyday moments. </h3>
                    <h4>Scroll down to learn more about our Refreshing Blend.</h4>
                </div>
            </div><!-- end #home -->
            <div class="animatedbox">
                <div class="out anim bg_efx">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_efx.png" />
                </div>
                <div class="out anim bg_ice">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_ice.png" />
                </div>
                <div class="out anim splash2">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash2.png" />
                </div>
                <div class="out anim lemon">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lemon.png" />
                </div>
                <div class="out anim lemon1">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lemon1.png" class="flagging3" />
                </div>
                <div class="out anim splash_1">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash_1.png" />
                </div>
                <div class="out anim splash_2">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash_2.png" />
                </div>
                <div class="anim beer">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/beer.png" class="beerup" />
                </div>
                <div class="out anim splash_3">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash_3.png" />
                </div>
                <div class="out anim mist">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/mist.png" />
                </div>
                <div class="out anim splash1">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash1.png" />
                </div>
                <div class="out anim ice_b">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/ice_b.png" />
                </div>
                <div class="out anim icebox1">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox1.png" class="flagging3"  />
                </div>
                <div class="out anim lemon2">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lemon2.png" class="flagging2" />
                </div>
                <div class="out anim lemon3">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lemon3_b.png" class="flagging3" />
                </div>
                <div class="out anim icebox2">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox2.png" class="flagging" />
                </div>
                <div class="out anim icebox3">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox3.png" class="flagging2" />
                </div>
                <div class="out anim icebox4">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox4.png" />
                </div>
                <div class="out anim lensflare">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lensflare.png" />
                </div>
                <a data-menuanchor="RefreshingBlend" href="#RefreshingBlend" class="arrowbottom arrowbottom1">&nbsp;</a>
            </div><!-- end .animatedbox -->
        </div><!-- end .wrapper -->
	</div>
	<div class="section" id="section1">
        <div id="step2" class="wrapper">
            <div id="formula">
                <div id="text3" class="anim title">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text3.png" />
                </div>
                <div id="text4" class="anim subtitle">
                    <h3>Bintang Radler is a unique fusion of Indonesia's most favorite beer with natural lemon juice and 2% alcohol content, bringing a new taste experience. 
Prepare yourself for unexpected zesty and refreshing sensations! </h3>
                    <h4>See below to find out when and where it's best suited.</h4>
                </div>
            </div><!-- end #formula -->
            <div class="animatedbox">
                <div class="anim bg_efx">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_efx.png" />
                </div>
                <div class="anim bg_ice">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_ice_b.png" />
                </div>
                <div class="anim lemon1">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lemon1.png" class="flagging3" />
                </div>
                <div class="anim splash_1">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash_1.png" />
                </div>
                <div class="anim splash_2">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash_2.png" />
                </div>
                <div class="anim beer">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/beer.png" />
                </div>
                <div class="anim splash_3">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/splash_3.png" />
                </div>
                <div class="anim mist">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/mist.png" />
                </div>
                <div class="anim ice_b">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/ice_b.png" />
                </div>
                <div class="anim icebox1">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox1.png" class="flagging3"  />
                </div>
                <div class="anim lemon2">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lemon2.png" class="flagging2" />
                </div>
                <div class="anim lemon3">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lemon3_b.png" class="flagging3" />
                </div>
                <div class="anim icebox2">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox2.png" class="flagging" />
                </div>
                <div class="anim icebox3">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox3.png" class="flagging2" />
                </div>
                <div class="anim icebox4">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/icebox4.png" />
                </div>
                <div class="anim lensflare">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lensflare.png" />
                </div>
                <a href="#" class="btnicon icon_beer"><span class="line">&nbsp;</span></a>
                <a href="#" class="btnicon icon_lemon"><span class="line">&nbsp;</span></a>
                <div id="lemon-desc" class="descbox">
                    <a href="#" class="btnicon2 active_lemon"></a>
                    <h3>Natural Lemon Juice</h3>
                    <p>The key of Radler's refreshing sensation is 
                    the natural lemon juice that gives you 
                    an unexpected taste of zesty lemon finish. </p>
                    <a href="#lemon-desc" class="arrowBack">&larr;</a>
                </div><!-- end .descbox -->
                <div id="beer-desc" class="descbox">
                    <a href="#" class="btnicon2 active_beer"></a>
                    <h3>Bintang Beer,<br />Indonesia's Favorite</h3>
                    <p>Here are the secret of our Bintang's perfect blend: selected malt,
                     hops and water and processed with high quality standards.</p>
                    <a href="#beer-desc" class="arrowBack">&larr;</a>
                </div><!-- end .descbox -->
                <a data-menuanchor="BestSuited" href="#BestSuited" class="arrowbottom arrowbottom2">&nbsp;</a>
            </div><!-- end .animatedbox -->
      </div><!-- end .wrapper -->
	</div>
	<div class="section" id="section2">
        <div id="step3">
	       <div class="slide">
                <div class="wrapper">
                    <div id="formulaDetail">
                        <div id="text5" class="title">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text5.png" />
                        </div>
                        <div id="text6" class="subtitle">
                            <h3>Bintang Radler will always be there whenever you're looking for the best buddy to complete your best moments everyday. </h3>
                            <h4>Scroll further to see more of Bintang Radler!</h4>
                        </div>
                    </div><!-- end #formulaDetail -->
                    <div class="animatedbox">
                        <div class="anim bg_efx2">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_efx2.png" />
                        </div> 
                        <div class="anim sofa">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/sofa.png" />
                        </div>
                        <div class="anim piring">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/piring.png" />
                        </div>
                        <div class="anim beer">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/beer.png" />
                        </div>
                        <div class="anim dasi">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/dasi.png" />
                        </div>
                        <div class="anim kacamata">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/kacamata.png" />
                        </div>
                        <a href="#outdoor-beer" class="btnicon icon_sun toSlide" data-index="5"><span class="line">&nbsp;</span></a>
                        <a href="#food-beer" class="btnicon icon_food toSlide" data-index="4"><span class="line">&nbsp;</span></a>
                        <a href="#home-beer" class="btnicon icon_home toSlide" data-index="2"><span class="line">&nbsp;</span></a>
                        <a href="#work-beer" class="btnicon icon_work toSlide" data-index="3"><span class="line">&nbsp;</span><span class="line2">&nbsp;</span></a>
                    </div><!-- end .animatedbox -->
               		 <a data-menuanchor="DoubleRefreshment" href="#DoubleRefreshment" class="arrowbottom arrowbottom3">&nbsp;</a>
              </div><!-- end .wrapper -->
          </div><!-- end .slide -->
	      <div id="home-beer" class="slide">
              <div class="occasion toSlide" data-index="1">
                    <div class="wrapper">
                        <div id="formulaDetail">
                            <div id="text5" class="title">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text5.png" />
                            </div>
                            <div id="text6" class="subtitle">
                                <h3>Bintang Radler will always be there whenever you're looking for the best buddy to complete your best moments everyday. </h3>
                                <h4>Scroll further to see more of Bintang Radler!</h4>
                            </div>
                        </div><!-- end #formulaDetail -->
                        <div class="animatedbox">
                            <div class="anim sofa">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/sofa.png" />
                            </div>
                            <div class="anim meja">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/meja.png" />
                            </div>
                            <div class="anim beer2">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/beer.png" />
                            </div>
                            <a href="#home-beer" class="btnicon icon_home active_home toSlide" data-index="1"><span class="line">&nbsp;</span></a>
                            <div id="home-desc" class="descbox">
                                <h3>Home Sweet Home</h3>
                                <p>Spending some "me" time at home never sounds so tempting and refreshing at the same time, all because of the ice cold Bintang Radler.</p>
                                <a href="#home-beer" class="arrowBack2 toSlide" data-index="1">&larr;</a>
                            </div><!-- end .descbox -->
                        </div><!-- end .animatedbox -->
                  </div><!-- end .wrapper -->
              </div><!-- end .occasion-->
          </div><!-- end .slide -->
	      <div id="work-beer" class="slide">
              <div class="occasion toSlide" data-index="1">
                    <div class="wrapper">
                        <div id="formulaDetail">
                            <div id="text5" class="title">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text5.png" />
                            </div>
                            <div id="text6" class="subtitle">
                                <h3>Bintang Radler will always be there whenever you're looking for the best buddy to complete your best moments everyday. </h3>
                                <h4>Scroll further to see more of Bintang Radler!</h4>
                            </div>
                        </div><!-- end #formulaDetail -->
                        <div class="animatedbox">
                            <div class="anim bg_efx2">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_efx5.png" />
                            </div> 
                            <div class="anim beer2">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/beer.png" />
                            </div>
                            <div class="anim dasi">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/dasi.png" />
                            </div>
                            <a href="#work-beer" class="btnicon icon_work active_work toSlide" data-index="1"><span class="line">&nbsp;</span><span class="line2">&nbsp;</span></a>
                            <div id="work-desc" class="descbox">
                                <h3>After-Hours</h3>
                                <p>What deadline? Forget about work for a while. Unwind yourself with Bintang Radler throughout the rest of the day.</p>
                                <a href="#work-beer" class="arrowBack2 toSlide" data-index="1">&larr;</a>
                            </div><!-- end .descbox -->
                        </div><!-- end .animatedbox -->
                  </div><!-- end .wrapper -->
              </div><!-- end .occasion-->
          </div><!-- end .slide -->
	      <div id="food-beer" class="slide">
              <div class="occasion toSlide" data-index="1">
                    <div class="wrapper">
                        <div id="formulaDetail">
                            <div id="text5" class="title">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text5.png" />
                            </div>
                            <div id="text6" class="subtitle">
                                <h3>Bintang Radler will always be there whenever you're looking for the best buddy to complete your best moments everyday. </h3>
                                <h4>Scroll further to see more of Bintang Radler!</h4>
                            </div>
                        </div><!-- end #formulaDetail -->
                        <div class="animatedbox">
                            <div class="anim bg_light">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_light.png" />
                            </div>
                            <div class="anim steak">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/steak.png" />
                            </div>
                            <div class="anim piring">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/piring.png" />
                            </div>
                            <div class="anim beer2">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/beer.png" />
                            </div>
                            <div class="anim ayam">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/ayam.png" />
                            </div>
                            <a href="#food-beer" class="btnicon icon_food active_food toSlide" data-index="1"><span class="line">&nbsp;</span></a>
                            <div id="food-desc" class="descbox">
                                <h3>Food Pairing</h3>
                                <p>From all the delicious kinds of main courses to sweet desserts, Bintang Radler pairs effortlessly with your favorite foods.</p>
                                <a href="#food-beer" class="arrowBack2 toSlide" data-index="1">&larr;</a>
                            </div><!-- end .descbox -->
                        </div><!-- end .animatedbox -->
                  </div><!-- end .wrapper -->
              </div><!-- end .occasion-->
          </div><!-- end .slide -->
	      <div id="outdoor-beer" class="slide">
              <div class="occasion toSlide" data-index="1">
                    <div class="wrapper">
                        <div id="formulaDetail">
                            <div id="text5" class="title">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text5.png" />
                            </div>
                            <div id="text6" class="subtitle">
                                <h3>Bintang Radler will always be there whenever you're looking for the best buddy to complete your best moments everyday. </h3>
                                <h4>Scroll further to see more of Bintang Radler!</h4>
                            </div>
                        </div><!-- end #formulaDetail -->
                        <div class="animatedbox">
                            <div class="anim bg_efx3">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bg_efx3.png" />
                            </div>
                            <div class="anim beer2">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/beer.png" />
                            </div>
                            <div class="anim kacamata">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/kacamata.png" />
                            </div>
                            <div class="anim bintanglaut">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/bintanglaut.png" />
                            </div>
                            <div class="anim lensflare2">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/lensflare2.png" class="flagging2" />
                            </div>
                            <a href="#outdoor-beer" class="btnicon icon_sun active_sun toSlide" data-index="1"><span class="line">&nbsp;</span></a>
                            <div id="outdoor-desc" class="descbox">
                                <h3>In The Open</h3>
                                <p>The sun shines bright and it feels like the perfect time to get some fresh air? Bring Bintang Radler along and enjoy your favorite beer with a twist of refreshing lemon!</p>
                                <a href="#outdoor-beer" class="arrowBack2 toSlide" data-index="1">&larr;</a>
                            </div><!-- end .descbox -->
                        </div><!-- end .animatedbox -->
                  </div><!-- end .wrapper -->
              </div><!-- end .occasion-->
          </div><!-- end .slide -->
      </div><!-- end #step3 -->
	</div>
	<div class="section" id="section3">
        <div id="step4" class="wrapper">
            <div id="videoTitle">
                <div id="text7" class="anim title">
                    <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/home/text7.png" />
                </div>
                <div id="videobox">
                      <video id="radlerVideo" class="video-js vjs-default-skin" controls preload="none" width="100%" height="100%"
                          poster="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/images/bg_video.jpg"
                             <?php echo 'data-setup="{ "controls": true, "autoplay": false, "preload": "auto" }">'; ?>

                        <source src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/video/BintangRadler.mp4" type='video/mp4' />
                        <source src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/video/BintangRadler.webm" type='video/webm' />
                        <source src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/video/BintangRadler.ogv" type='video/ogg' />
                      </video>
                </div>
            </div><!-- end #videoTitle -->
                <a data-menuanchor="Welcome" href="#Welcome" class="arrowup">&nbsp;</a>
         </div><!-- end .wrapper -->
    </div>
</div>
<div class="sb-slidebar sb-right">
    <ul class="mainmenu">
        <li data-menuanchor="Welcome" class="active"><a href="#Welcome">Home</a></li>
        <li data-menuanchor="RefreshingBlend"><a href="#RefreshingBlend">Refreshing Blend</a></li>
        <li data-menuanchor="BestSuited"><a href="#BestSuited">Best Suited</a></li>
        <li data-menuanchor="DoubleRefreshment"><a href="#DoubleRefreshment">Double Refreshment</a></li>
    </ul>
</div>
<script src="<?php echo $this->_tpl_vars['basedomain']; ?>
/assets/js/slidebars.min.js"></script>
<?php echo '
<script>
	(function($) {
		$(document).ready(function() {
			$.slidebars({
				disableOver: 480,
				hideControlClasses: true
			});
		});
	}) (jQuery);
</script>
'; ?>

<script>
<?php echo '
'; ?>

</script>