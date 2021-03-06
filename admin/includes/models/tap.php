<?php
class Tap  
{  
    private $_id;  
    private $_beerId;  
    private $_kegTypeId;
	private $_tapNumber;  
	private $_og; 
	private $_fg;  
	private $_srm;  
	private $_ibu;  
	private $_startAmount; 

	public function __construct(){}
  
	public function get_id(){ return $this->_id; }
	public function set_id($_id){ $this->_id = $_id; }

	public function get_beerId(){ return $this->_beerId; }
	public function set_beerId($_beerId){ $this->_beerId = $_beerId; }

	public function get_kegTypeId(){ return $this->_kegTypeId; }
	public function set_kegTypeId($_kegTypeId){ $this->_kegTypeId = $_kegTypeId; }

	public function get_tapNumber(){ return $this->_tapNumber; }
	public function set_tapNumber($_tapNumber){ $this->_tapNumber = $_tapNumber; }
	
	public function get_og(){ return $this->_og; } 
	public function set_og($_og){ $this->_og = $_og; }
	
	public function get_fg(){ return $this->_fg; }
	public function set_fg($_fg){ $this->_fg = $_fg;}

	public function get_srm(){ return $this->_srm; }
	public function set_srm($_srm){ $this->_srm = $_srm; }

	public function get_ibu(){ return $this->_ibu; }
	public function set_ibu($_ibu){ $this->_ibu = $_ibu; }

	public function get_startAmount(){ return $this->_startAmount; }
	public function set_startAmount($_startAmount){ $this->_startAmount = $_startAmount; }
	
	
    public function setFromArray($postArr)  
    {  
	
	
		if( isset($postArr['id']) )
			$this->set_id($postArr['id']);
		else
			$this->set_id(null);
			
		if( isset($postArr['beerId']) )
			$this->set_beerId($postArr['beerId']);
		else
			$this->set_beerId(null);
			
		if( isset($postArr['kegTypeId']) )
			$this->set_kegTypeId($postArr['kegTypeId']);
		else
			$this->set_kegTypeId(null);
			
		if( isset($postArr['tapNumber']) )
			$this->set_tapNumber($postArr['tapNumber']);
		else
			$this->set_tapNumber(null);
			
		if( isset($postArr['ogAct']) )
			$this->set_og($postArr['ogAct']);
		else if( isset($postArr['ogEst']) )
			$this->set_og($postArr['ogEst']);
		else
			$this->set_og(null);
			
		if( isset($postArr['fgAct']) )
			$this->set_fg($postArr['fgAct']);
		else if( isset($postArr['fgEst']) )
			$this->set_fg($postArr['fgEst']);
		else
			$this->set_fg(null);
			
		if( isset($postArr['srmAct']) )
			$this->set_srm($postArr['srmAct']);
		else if( isset($postArr['srmEst']) )
			$this->set_srm($postArr['srmEst']);
		else
			$this->set_srm(null);
			
		if( isset($postArr['srmAct']) )
			$this->set_srm($postArr['srmAct']);
		else if( isset($postArr['srmEst']) )
			$this->set_srm($postArr['srmEst']);
		else
			$this->set_srm(null);
			
		if( isset($postArr['ibuAct']) )
			$this->set_ibu($postArr['ibuAct']);
		else if( isset($postArr['ibuEst']) )
			$this->set_ibu($postArr['ibuEst']);
		else
			$this->set_ibu(null);
				
		if( isset($postArr['startAmount']) )
			$this->set_startAmount($postArr['startAmount']);
		else
			$this->set_startAmount(null);
		
    }  
}