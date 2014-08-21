<?php
class SyscheckClass
{
    protected $c;
    public function __construct(&$c)
    {
        $this->c = $c['controller'];
    }
    
    /**
     * doCheck
     *
     * @params none
     * @return array $data
     */
    public function doCheck()
    {
        try {
            $this->c->load->model('Syscheck_model', 'Syscheck', true);
            return $this->c->Syscheck->getNow();
        } catch (Exception $e) {
            throw new Exception ($e->getMessage());
        }
    }
}
