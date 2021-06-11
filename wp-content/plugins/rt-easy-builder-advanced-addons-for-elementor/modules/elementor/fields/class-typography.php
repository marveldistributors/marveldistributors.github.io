<?php
namespace RT_Easy_Builder;
use \Elementor\Core\Schemes\Typography;
use \Elementor\Group_Control_Typography	;

class Field_Typography{
	public function __construct( $params ){
		
		extract( $params );

		$field[ 'scheme' ] = Typography::TYPOGRAPHY_1;
		$field[ 'name' ]   = $id;
		
		$base->add_group_control( Group_Control_Typography::get_type(), $field );
	}
}