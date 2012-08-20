<?php
class AfterControllerCalls {
	public function setFrom($exclude)
	{
		$CI =& get_instance();
		$uri_elements  = explode('/',$CI->uri->uri_string());
		//var_dump($exclude);
		//var_dump(in_array('ajaxreq',$exclude));
		
		if(!in_array($uri_elements[0],$exclude))
		{
			$CI->session->unset_userdata('from');
			if(isset($uri_elements[1]))
				$CI->session->set_userdata('from',$uri_elements[1]);
			else
				$CI->session->set_userdata('from',$uri_elements[0]);
		}
		//var_dump($CI->session->userdata('from') == "sell");
		
	}
}