<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account';

    
  

//This is the function to find user by email for login.
    public static function findUserbyEmail($email)
    {

            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE email = ?';

         //grab the only record for find one and return as an object
            $recordsSet = self::getResults($sql, $email);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }
    }
	
	//This is the function to write to find account by user ID for listing on their homepage.
	public static function findUserbyId($id)
    {

            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE id = ?';

         //grab the only record for find one and return as an object
            $recordsSet = self::getResults($sql, $id);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }
    }
}

?>
