<style>
	.anyipsum-help p {
		margin-bottom: 2em;
	}
	.anyipsum-help .indent {
		text-indent: 2em;
	}
	ul {
		margin-top: 0;
	}
</style>

<div class="anyipsum-help">

	<h3 class="title"><?php _e('Shortcode', 'anyipsum'); ?></h3>
	<p>
		<?php _e('Add a form to any page or post to generate your custom ipsum', 'anyipsum'); ?>: <strong>[anyipsum-form]</strong><br/>
		<?php _e('You can also add a header that\'s displayed at the beginning of the form and is hidden when the form is submitted') ?>: <strong>[anyipsum-form]<?php _e('Give our ipsum generator a try!  It\'s the best!', 'anyipsum'); ?>[/anyipsum-form]</strong>
	</p>

	<h3 class="title"><?php _e('API Parameters', 'anyipsum'); ?></h3>
	<p>
		<ul>
			<li><strong>type</strong>: <strong><?php echo esc_attr( apply_filters( 'anyipsum-setting-get', '', 'anyipsum-settings-general', 'querystring-all-custom' ) ); ?></strong> for custom only or <strong><?php echo esc_attr( apply_filters( 'anyipsum-setting-get', '', 'anyipsum-settings-general', 'querystring-all-custom' ) ); ?></strong> <?php _e('for custom mixed with miscellaneous filler.', 'anyipsum'); ?></li>
			<li><strong>paras</strong>: <em><?php _e('optional', 'anyipsum') ?></em> <?php _e('number of paragraphs, defaults to 5.', 'anyipsum'); ?></li>
			<li><strong>sentences:</strong> <?php _e('number of sentences (this overrides paragraphs)', 'anyipsum'); ?></li>
			<li><strong>start-with-lorem</strong>: <em><?php _e('optional', 'anyipsum') ?></em> <?php _e('pass <strong>1</strong> to start the first paragraph with your custom Start With text', 'anyipsum') ?> ('<?php echo esc_attr( apply_filters( 'anyipsum-setting-get', '', 'anyipsum-settings-general', 'start-with' ) );  ?>').</li>
		</ul>
	</p>

	<h3 class="title"><?php _e('Filters', 'anyipsum'); ?></h3>
		<ul>
			<li>
				<strong>anyipsum-generate-filler</strong>: <?php _e('Returns an array of paragraphs', 'anyipsum'); ?>, <?php _e('Parameters', 'anyipsum'); ?>:
				<ul>
					<li class="indent">$args: <?php _e('array containing the same parameters as above (type, paras, etc)', 'anyipsum'); ?></li>
				</ul>
			</li>
			<li>
				<strong>anyipsum-form</strong>: <?php _e('Customize the HTML form generated by the anyipsum-form shortcode') ?>, <?php _e('Parameters', 'anyipsum'); ?>:
				<ul>
					<li class="indent">$form: <?php _e('Default HTML form'); ?></li>
				</ul>
			</li>
			<li>
				<strong>anyipsum-form-output</strong>: <?php _e('Customize the generated custom ipsum created by the anyipsum-form shortcode', 'anyipsum'); ?>, <?php _e('Parameters', 'anyipsum'); ?>:
				<ul>
					<li class="indent">$output: <?php _e('Default output', 'anyipsum'); ?></li>
					<li class="indent">$paragraphs: <?php _e('Paragraphs of generated ipsum', 'anyipsum'); ?></li>
				</ul>
			</li>
		</ul>
	<p>
	</p>

	<h3 class="title"><?php _e('Contact', 'anyipsum'); ?></h3>
	<p>
		<?php _e('E-Mail', 'anyipsum') ?>: <a href="mailto:pete@petenelson.com">pete@petenelson.com</a><br/>
		<?php _e('Twitter', 'anyipsum') ?>: <a href="https://twitter.com/GunGeekATX" target="_blank">@GunGeekATX</a><br/>
		<?php _e('GitHub', 'anyipsum') ?>: <a href="https://github.com/petenelson/wp-any-ipsum" target="_blank">https://github.com/petenelson/wp-any-ipsum</a><br/>
	</p>

</div>