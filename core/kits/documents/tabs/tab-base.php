<?php

namespace Elementor\Core\Kits\Documents\Tabs;

use Elementor\Controls_Manager;
use Elementor\Sub_Controls_Stack;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

abstract class Tab_Base extends Sub_Controls_Stack {

	abstract protected function register_tab_controls();

	public function register_controls() {
		$this->register_tab();

		$this->register_tab_controls();
	}

	protected function register_tab() {
		Controls_Manager::add_tab( $this->get_id(), $this->get_title() );
	}
}
