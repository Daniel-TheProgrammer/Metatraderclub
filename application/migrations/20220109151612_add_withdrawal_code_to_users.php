<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Migration_Add_Withdrawal_Code_TO_Users extends MY_Migration { 

   public function __construct()
   {  
      parent::__construct();
      $this->load->dbforge();
    }
    public function up() { 
            $fields = array(
                'withdrawal_code' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 100
                )
              );
            $this->dbforge->add_column('tbl_users', $fields);    
    }

    public function down()
    {
        $this->dbforge->drop_column('tbl_users', 'withdrawal_code');
    }
}
