<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syscheck extends CI_Controller
{
    /**
     * Syscheck index
     *
     * @params none
     * @return 
     */
    public function index()
    {
        try {
            $this->load->library('SyscheckClass');
            $data = $this->SyscheckClass->doCheck();
            
            $render = 
                array(
                    'data' => $data[0],
                );
            
            $this->load->view('syscheck', $render)
            
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }
}
