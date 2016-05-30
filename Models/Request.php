<?php
/**
 * PROJECT: collmexBundle
 *
 * IDE: IntelliJ IDEA
 * User: dambacher
 * Date: 26.05.16
 * Time: 16:56
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\CollmexBundle\Models;


class Request
{
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
    
    public function getData()
    {
        return $this->data;
    }

}