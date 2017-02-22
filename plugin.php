<?php

class FontAwesomePlugin extends KokenPlugin
{
	function __construct()
	{
        $this->register_hook('before_closing_head', 'insertFontAwesomeStyles');
		$this->register_filter('site.output', 'filterFontAwesome');
	}

    /**
     * Add the Font Awesome library to the page
     *
     * @return null
     */
    public function insertFontAwesomeStyles() 
    {
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
    }

    /**
     * Filter the contents of a rendered page to replace
     * text links with Font Awesome Icons.
     *
     * @param  string $content
     *
     * @return string
     */
	public function filterFontAwesome($content)
    {
        $content = $this->removeFontAwesomePrefixInTags($content);

        $content = $this->replaceFontAwesomeContentWithIcon($content);

        return $content;
	}

    /**
     * Format any Font Awesome identifiers contained in html element tags.
     *
     * Input: <div title="fa-icon"></div>
     *
     * Result: <div title="icon"></div>
     *
     * @param  string $string
     *
     * @return string
     */
    protected function removeFontAwesomePrefixInTags($string)
    {
        return preg_replace('/"fa-(.+?)"/', '"$1"', $string);
    }

    /**
     * Replace any content that starts with the Font Awesome prefix
     * with a Font Awesome icont.
     *
     * Input: <div>fa-icon</div>
     *
     * Result: <div><i class="fa fa-icon" aria-hidden="true"></i></div>
     *
     * @param  string $string
     *
     * @return string
     */
    protected function replaceFontAwesomeContentWithIcon($string)
    {
        return preg_replace('/>(\s*?)fa-([a-z-]+?)(\s*?)</', '><i class="fa fa-$2"></i><', $string);
    }
}
