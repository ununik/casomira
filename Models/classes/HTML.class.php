<?php
class HTML
{
	private $title 		= '';
	private $css 		= '';
	private $script		= '';
	private $navigation = '';

//TITLE
	public function getTitle()
	{
		return $this->title;
	}

//CSS
	public function addCss($new)
	{
		$this->css .= $new;
	}
	public function getCss()
	{
		return $this->css;
	}

//SCRIPT
	public function addScript($new)
	{
		$this->script .= $new;
	}
	public function getScript()
	{
		return $this->script;
	}

//NAVIGATION
	public function addToNavigation($new)
	{
		$this->navigation .= $new;
	}
	public function getNavigation()
	{
		return $this->navigation;
	}
}