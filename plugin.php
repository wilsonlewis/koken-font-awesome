<?php

class FontAwesomePlugin extends KokenPlugin
{
	function __construct()
	{
		$this->register_filter('site.output', 'fa');
	}

	public function fa($content)
    {
        $content = preg_replace('/"fa-(.+?)"/', '"$1"', $content);
        $content = preg_replace('/>fa-(.+?)</', '><i class="fa fa-$1" aria-hidden="true"></i><', $content);
        return $content;
	}
}
