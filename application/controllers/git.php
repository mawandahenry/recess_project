<?php
class Git extends CI_Controller{
	function __Construct(){
    parent::__Construct ();
   
    }


	    public function index(){
	   //$tod = array();
       $summ;
       $sum2;
       $overall;
      $this->load->model('github');
      $search = $this->input->post('search');
      $dunk=$this->github->double($search);
      //$don = array();
     //foreach ($dunk as $key => $val) {
    // if ($val->TOTAL=='20') {
    // echo $dunk[4];
    // }
     // $don['value'][]= $val['value'];
      //}
		//print_r($dunk);
		//exit;
      foreach ($dunk as  $ball) { 
       if ($ball->subjectCod==Phy AND $ball->subjectCod==math) {
         $summ=$ball->value*3;
       }
       elseif ($ball->subjectCod==ict AND $ball->subjectCod==gp) {
        $sum2=$ball->value*1;
       }
        $overall=$summ+$sum2;
      echo "$overall";
      exit;
      }
		 
			}
		
	}

	

