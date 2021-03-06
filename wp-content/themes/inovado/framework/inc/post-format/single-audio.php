<div class="post clearfix">

	<div class="post-audio">
		<?php echo get_post_meta($post->ID, '_format_audio_embed', true); ?>
	</div>
	
	<a href="<?php echo get_post_format_link('audio'); ?>" class="post-icon audio"></a>
	
	<div class="post-content">
		<div class="post-title">
			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a></h2>
		</div>
		<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
		<div class="post-excerpt"><?php the_content(); ?></div>		
		<div class="post-tags clearfix"><?php the_tags( '', '', ''); ?></div>
	</div>

</div>

