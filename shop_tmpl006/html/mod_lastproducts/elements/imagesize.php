<?php
/**
 * @version		$Id: article.php 10381 2008-06-01 03:35:53Z pasamio $
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
 
class JElementImageSize extends JElement
{
	var $_name = 'ImageSize';

	function fetchElement( $name, $value, $node, $control_name )
	{
                $imagesizes = array();
                global $mainframe;
                $template = $mainframe->getTemplate();
                $path = PATH_THEMES . DS . $template . DS . 'sizes.php';
		if ( is_file( $path ) )
		{
			$content = trim( file_get_contents( $path ) );

			if ( !empty( $content ) )
			{
				$sizes = json_decode( $content );
			}
		}
		foreach ( $imagesizes as $obj )
		{
			$elements[] = JHTML::_( 'select.option', $obj->codename, $obj->codename . ' - ' . $obj->name );
		}
		$html = JHTML::_( 'select.genericlist', $elements, $control_name . '[' . $name . ']', 'class="inputbox" size="1"', 'value', 'text', $value );
		return $html;

	}

}
