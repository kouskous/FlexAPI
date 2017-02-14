<?php
/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 10/02/17
 * Time: 12:49
 */

namespace flexapi\http;


class Response
{
    private $status = "success";
    private $headers = array();
    private $content = "";

    function __construct() {

    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }
}
