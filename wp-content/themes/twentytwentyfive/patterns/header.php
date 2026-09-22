<?php
/**
 * Title: Header
 * Slug: twentytwentyfive/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Digital Marketing For Business Luxury B2B Header
 */
$logo_url = home_url( '/wp-content/uploads/dmb-nav-logo.jpg' );
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<header class="dmb-header">
	<div class="dmb-header-inner">
		<div class="dmb-brand">
			<a href="<?php echo esc_url( $home_url ); ?>" class="dmb-logo-link" title="Digital Marketing For Business - Growth Playbooks">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="Digital Marketing For Business Book" class="dmb-logo-img" />
				<div class="dmb-brand-text">
					<span class="dmb-brand-title">Digital Marketing</span>
					<span class="dmb-brand-sub">FOR BUSINESS</span>
				</div>
			</a>
		</div>

		<nav class="dmb-nav" aria-label="Main Navigation">
			<ul class="dmb-nav-list">
				<li><a href="<?php echo esc_url( $home_url ); ?>" class="dmb-nav-item active">Home</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/b2b-marketing/' ); ?>" class="dmb-nav-item">B2B Strategy</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/sales-funnels/' ); ?>" class="dmb-nav-item">Sales Funnels</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/lead-generation/' ); ?>" class="dmb-nav-item">Lead Gen</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/growth-strategy/' ); ?>" class="dmb-nav-item">Growth Hacking</a></li>
			</ul>
		</nav>

		<div class="dmb-header-actions">
			<a href="<?php echo esc_url( $home_url . 'b2b-digital-marketing-strategy-growth-playbook-2024/' ); ?>" class="dmb-btn-cta">
				<span>Featured Playbook</span> 📈
			</a>
			<button class="dmb-mobile-toggle" aria-label="Toggle navigation" onclick="document.querySelector('.dmb-header').classList.toggle('dmb-mobile-open')">
				<span class="dmb-bar"></span>
				<span class="dmb-bar"></span>
				<span class="dmb-bar"></span>
			</button>
		</div>
	</div>
</header>
<!-- /wp:html -->