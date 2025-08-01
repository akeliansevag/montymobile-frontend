    <?php if (!get_field("disable_footer")) : ?>
    	<footer class="py-5 bg-black">
    		<div class="newsletter-block">
    			<div class="container">
    				<div class="text-center">
    					<h2 class="text-white mb-2">Subscribe to our newsletter</h2>
    					<?= do_shortcode('[contact-form-7 id="612d07b" title="Newsletter"]'); ?>
    				</div>

    			</div>
    			</section><!--newsletter-->
    			<div class="container mt-5">
    				<div class="row">
    					<div class="col-xl-2"></div>
    					<div class="col-xl-8">
    						<div class="mb-3"><?= wp_nav_menu(['menu' => 'footer-menu']); ?></div>
    						<div class="social-icons my-3">
    							<?php $icons = get_field("social_media_icons", "options"); ?>
    							<?php foreach ($icons as $icon) : ?>
    								<a aria-label="See more on social media" href="<?= $icon['link']; ?>" target="_blank">
    									<?= $icon['svg_code']; ?>
    								</a>
    							<?php endforeach; ?>
    						</div><!--social-icons-->



    						<div class="copyright-text">
    							© <?= date("Y"); ?> Monty Mobile. All rights reserved.
    						</div>
    					</div>
    					<div class="col-xl-2"></div>
    				</div>

    			</div>
    	</footer>
    <?php endif; ?>
    </div><!--end of wrapper-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha384-d+vyQ0dYcymoP8ndq2hW7FGC50nqGdXUEgoOUGxbbkAJwZqL7h+jKN0GGgn9hFDS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha384-poC0r6usQOX2Ayt/VGA+t81H6V3iN9L+Irz9iO8o+s0X20tLpzc9DOOtnKxhaQSE" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js" integrity="sha384-3ojuANu/m5q75oZ3Lj5Hm/dGaIXI5g8363dy1DJyD5hjcyxQnnCCSYtJj+ixqt2p" crossorigin="anonymous"></script>
    <!--<script src="https://assets.codepen.io/16327/ScrambleTextPlugin3.min.js"></script>-->

    <!--<script src="https://assets.codepen.io/16327/MotionPathHelper.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js" integrity="sha384-aO2rdje/BwxNeovaVnYCA1OUtEWaqumve5UCMUMEM9/kKJM/c9NyqDGmgPuJz8eQ" crossorigin="anonymous"></script>



    <?php wp_footer(); ?>

    </body>

    </html>