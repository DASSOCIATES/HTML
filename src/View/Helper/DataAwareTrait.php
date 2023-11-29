<?php
namespace Dassociates\Html\View\Helper;

use Dassociates\Html\HtmlInterface;

trait DataAwareTrait {
    
    public $data = [];
    
    public function getData()
    {
        return $this->data;
    }
    
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }
    
    abstract public function processData(HtmlInterface $html);
}