<?php
/**
 * Share us class
 */

ShareUs::TWITTER_URL;
class ShareUs
{
    protected $title;
    protected $url;
    protected $text;

    const TWITTER_URL = "";

    public function __get($name)
    {
        return urlencode($this->$data);
    }

    function __construct() {
        $this->text = get_option('share_us') ?? null;
        $this->title = get_the_title();
        $this->url = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }
    public function getFacebookLink() {
        return 'http://www.facebook.com/sharer.php?s=100' . "&p[title]={$this->title}" . '&p[summary]=' . urlencode($this->text) . '&p[url]=' . urlencode($this->url);
    }

    public function getTwitterLink() {
        return 'http://twitter.com/share?' . 'text=' . urlencode($this->text) . '&url=' . urlencode($this->url) . '&counturl=' . urlencode($this->url);
    }
}