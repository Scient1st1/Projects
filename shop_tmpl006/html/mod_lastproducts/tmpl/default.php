<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//require_once JPATH_ROOT . DS . 'components' . DS . 'content' . DS . 'helpers' . DS . 'route.php';
require_once JPATH_ROOT . DS . 'components' . DS . 'catalog' . DS . 'helpers' . DS . 'helper.php';
require_once JPATH_SITE . DS . 'components' . DS . 'catalog' . DS . 'helpers' . DS . 'Paramhelper.php';
$display = Param::getDisplayType();
$order = Param::getParams();
$Itemid = WSHelper::getItemid( 'catalog', 'catalog' );
?>
<div class="lastproducts">
	<div class="row">
		<?php
		$c = 1;
		foreach ( $modarticles as $row )
		{
			$artParam = new JParameter( $article->attribs );


			$image = GoodWebSiteHelper::getImageInSize( 'catalog', $row->image );
			$link = JRoute::_( 'index.php?option=catalog&view=item&Itemid=' . $Itemid . '&item=' . $row->id );

			$PayLink = JRoute::_( 'index.php?option=catalog&view=pay&Itemid=' . $Itemid . '&item=' . $row->id );
			?>
			<div class="catalog_item col-md-4 col-sm-4">
				<div class="catalog_item_in ">
	<?php if ( (bool) $params->get( 'show_image' ) )
	{ ?>
						<div class="ItemImage">
							<a href="<?php echo $link ?>">
								<img src="<?php echo $image; ?>" alt="" />
							</a>
						</div>
	<?php } ?>
							<?php if ( (bool) $params->get( 'show_title' ) )
							{ ?>
						<div class="catalog_item_title">
							<a href="<?php echo $link ?>">
						<?php echo $row->name; ?>
							</a>
						</div>
						<?php } ?>
					<?php if ( (bool) $params->get( 'show_description' ) )
					{ ?>
						<div class="catalog_item_title">
							<?php echo $row->short_description; ?>
						</div>
						<?php } ?>
					<div class="catalog_item_bot">
							<?php if ( (bool) $params->get( 'show_price' ) && (int) $display != 3 )
							{ ?>

							<?php if ( (int) $row->discount == 0 )
							{ ?>
								<div class="catalog_item_price">
									<?php echo $row->price . ' ' . JText::_( 'GEL' ); ?>
								</div> 
									<?php
								}
								else
								{
									?>
								<div class="catalog_item_priceold">
								<?php echo $row->price . ' ' . JText::_( 'GEL' ); ?>
								</div>
								<div class="catalog_item_price">
			<?php echo $row->discount . ' ' . JText::_( 'GEL' ); ?>
								</div>
								<?php
							}
						}
						?>
	<?php if ( (int) $display == 1 ): ?>
							<div class="item_basket">
								<a href="<?php echo $link ?>"><span></span><span class=""><?php echo JText::_( 'BUY' ); ?></span></a>
							</div>
			<?php endif; ?>
					</div>
				</div>
				<div class="catalog_bot_line"></div>     
				<div class="catalog_bot_line2"></div>  
			</div>


			<?php
			if ( $c === 3 )
			{
				echo '<div class="clr"></div>';
				$c = 1;
			}
			else
			{
				$c += 1;
			}
		}
		?>
		<div class="clr"></div>
	</div>
</div>