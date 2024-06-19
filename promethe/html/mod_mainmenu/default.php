<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc = JFactory::getDocument();
if ( !empty( $items ) )
{
	$path = $menu->getPath();
	$tree = new WSListTree( $params, $items, $path );
        $menuanimate = GoodWebSiteHelper::getSiteCfg( 'effects.Headergroup.menuanimate' );
	$Menu = $mainframe->getMenu();
	if ( is_object( $Menu ) )
	{
		$active = $Menu->getActive();
	}
	else
	{
		$active = array();
	}
	$pageClass = C::_( 'pageclass', $active );
	if ( $menuanimate == 'No' )
	{
		$menuanimate = '';
	}
	else
	{
		$menuanimate = 'animated ' . $menuanimate;
	}
	$js = '';
	$tree->SetMainLevelStart( '<span class="md">' );
	$tree->SetMainLevelEnd( '</span>' );
	$tree->SetSubLevelBegin( '<span class="mdsub">' );
	$tree->SetSubLevelEnd( '</span>' );
	echo $tree->StartTree( 'menu', '', '' );
	$Data = Collection::getVar( '0', $items );
        $i = 1;
	foreach ( $Data as $item )
	{
		echo $tree->StartTreeItem( $item, ' mainmenu_'.$i );
		echo $tree->RenderItem( $item );
		echo $tree->RenderSubLevel( $item, '_sub' );
		echo $tree->EndTreeItem( $item );
                $i++;
	}
	echo $tree->EndTree();
        $js = '
    document.body.className +=" ' . $pageClass . '";
';
	$doc->addScriptDeclaration( $js );
}