
<?php
class Model_form extends CI_Model
{
      function __construct()
    {
            // Call the Model constructor
            parent::__construct();
    }

    function get_departament(){
        $query = $this->db->query('SELECT id_departament, Nume_dep FROM departament');
        return $query->result();
    }
	
	function get_servicii_by_departament ($departament){
		$sql = 'select Id_serviciu, Nume_serviciu from serviciu where Id_dep = ?';
	    $query = $this->db->query($sql, $departament);
        $servicii = array();
        if($query->result()){
            foreach ($query->result() as $serviciu) {
                $servicii[$serviciu->Id_serviciu] = $serviciu->Nume_serviciu;
            }
            return $servicii;
        } else {
            return FALSE;
        }
    } 


} 