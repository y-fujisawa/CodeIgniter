<?php
class SyscheckClass
{
    protected $c;
    public function __construct(&$c)
    {
        $this->c = $c;
    }
    
    /**
     * doCheck
     *
     * @params none
     * @return array
     */
    public function doCheck()
    {
    }
}
