<?php
/**
 * Title: Hidden blog heading
 * Slug: twentytwentyfive/hidden-blog-heading
 * Description: Executive Hero for Digital Marketing For Business Book
 * Inserter: no
 */
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<section class="dmb-hero-section">
	<div class="dmb-hero-glow"></div>
	<div class="dmb-hero-content">
		<div class="dmb-hero-badge">
			<span class="dmb-badge-icon">📈</span>
			<span>SCALE • ACQUIRE • DOMINATE</span>
		</div>
		<h1 class="dmb-hero-title">
			The Modern Playbook for <span class="dmb-text-gradient">B2B Marketing &amp; Revenue Growth</span>
		</h1>
		<p class="dmb-hero-subtitle">
			Data-backed strategies, account-based funnels, high-ticket client acquisition systems, and executive scaling playbooks for modern founders, CMOs, and revenue leaders.
		</p>
		<div class="dmb-hero-tags">
			<a href="<?php echo esc_url( $home_url . 'category/b2b-marketing/' ); ?>" class="dmb-pill">#B2BMarketing</a>
			<a href="<?php echo esc_url( $home_url . 'category/lead-generation/' ); ?>" class="dmb-pill">#LeadGeneration</a>
			<a href="<?php echo esc_url( $home_url . 'category/sales-funnels/' ); ?>" class="dmb-pill">#SalesFunnels</a>
			<a href="<?php echo esc_url( $home_url . 'category/growth-strategy/' ); ?>" class="dmb-pill">#GrowthHacking</a>
			<a href="<?php echo esc_url( $home_url . 'category/conversion-optimization/' ); ?>" class="dmb-pill">#ConversionRate</a>
		</div>
	</div>
</section>

<div class="dmb-section-header">
	<div class="dmb-section-title-wrap">
		<span class="dmb-section-bar"></span>
		<h2 class="dmb-section-title">Featured Playbooks &amp; Strategic Guides</h2>
		<span class="dmb-badge-count"><?php echo (int) wp_count_posts()->publish; ?> Playbooks</span>
	</div>
</div>
<!-- /wp:html -->