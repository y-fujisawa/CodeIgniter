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
            $now = $this->SyscheckClass->doCheck()->now;
            
            $render = 
                array(
                    'now' => $now,
                );
            
            $this->load->view('syscheck', $render)
            
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }
}
