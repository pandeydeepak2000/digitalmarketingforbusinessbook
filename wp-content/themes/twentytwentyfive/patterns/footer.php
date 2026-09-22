<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Digital Marketing For Business Luxury B2B Footer
 */
$home_url = home_url( '/' );
$logo_url = home_url( '/wp-content/uploads/dmb-nav-logo.jpg' );
?>
<!-- wp:html -->
<footer class="dmb-footer">
	<div class="dmb-footer-top">
		<div class="dmb-footer-brand-col">
			<div class="dmb-footer-logo-row">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="Digital Marketing For Business" class="dmb-footer-logo" />
				<div>
					<span class="dmb-footer-brand-title">Digital Marketing For Business</span>
					<span class="dmb-footer-tagline">Scaling Modern Business Revenue</span>
				</div>
			</div>
			<p class="dmb-footer-desc">The definitive knowledge portal and strategic growth blueprint for CEOs, CMOs, B2B founders, and marketing directors building high-converting customer acquisition systems.</p>
			<div class="dmb-social-pills">
				<span class="dmb-pill">🎯 B2B Acquisition</span>
				<span class="dmb-pill">📊 High ROAS</span>
				<span class="dmb-pill">⚡ Inbound Pipeline</span>
			</div>
		</div>

		<div class="dmb-footer-links-col">
			<h4 class="dmb-footer-heading">Strategic Pillars</h4>
			<ul class="dmb-footer-list">
				<li><a href="<?php echo esc_url( $home_url . 'category/b2b-marketing/' ); ?>">B2B Strategy & ABM</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/sales-funnels/' ); ?>">High-Converting Funnels</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/lead-generation/' ); ?>">Executive Lead Gen</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/conversion-optimization/' ); ?>">Conversion Rate (CRO)</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'b2b-digital-marketing-strategy-growth-playbook-2024/' ); ?>">Enterprise Playbook</a></li>
			</ul>
		</div>

		<div class="dmb-footer-links-col">
			<h4 class="dmb-footer-heading">Company & Legal</h4>
			<ul class="dmb-footer-list">
				<li><a href="<?php echo esc_url( $home_url . 'about-us/' ); ?>">About the Publication</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'contact-us/' ); ?>">Contact & Inquiries</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'privacy-policy/' ); ?>">Privacy Policy (GDPR)</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'terms-of-service/' ); ?>">Terms of Service</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'disclaimer/' ); ?>">Editorial Disclaimer</a></li>
			</ul>
		</div>

		<div class="dmb-footer-newsletter-col">
			<h4 class="dmb-footer-heading">Executive Briefing</h4>
			<p class="dmb-footer-newsletter-text">Join 15,000+ executives receiving our bi-weekly B2B growth and revenue teardown.</p>
			<div class="dmb-newsletter-box">
				<input type="email" placeholder="Enter corporate email..." class="dmb-input" readonly value="executive@enterprise.com" />
				<button type="button" class="dmb-btn-sub">Subscribe</button>
			</div>
			<span class="dmb-sub-note">🔒 Zero spam. Strictly strategic marketing intelligence.</span>
		</div>
	</div>

	<div class="dmb-footer-bottom">
		<div class="dmb-footer-bottom-inner">
			<p class="dmb-copyright">© <?php echo date( 'Y' ); ?> Digital Marketing For Business Book. All Rights Reserved.</p>
			<div class="dmb-bottom-badges">
				<span>🔒 256-Bit SSL Encrypted</span>
				<span>⚡ Verified Enterprise SEO</span>
				<span>📈 High-Intent Inbound</span>
			</div>
		</div>
	</div>
</footer>
<!-- /wp:html -->