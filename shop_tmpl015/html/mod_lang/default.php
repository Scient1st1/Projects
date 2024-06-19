<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$Langs = LangsHelper::getUserLangs();
?>
<div class="lang_switcher_block">
	<?php
	$sitelang = JFactory::getSiteLanguage();
	$curr = $sitelang->getlangID();
	foreach ( $Langs as $Lang )
	{
		$class = '';
		if ( $curr == $Lang->id )
		{
			$class = 'activelang';
		}
		?>
		<a class="<?php echo $class; ?>"  href="/<?php echo $Lang->short_name; ?>">
			<?php
			if ( $params->get( 'icon_type' ) )
			{
				echo $icon = '<span><img src="' . $Lang->flag . '" alt="" /></span>';
			}
			else
			{
				echo '<span>' . $Lang->user_title . '</span>';
			}
			?>
		</a>
		<?php
	}
	?>
</div>