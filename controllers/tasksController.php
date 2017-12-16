<?php

class tasksController extends http\controller
{
    
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    

    public static function all()
    {

        //$records = todos::findAll();
	    if(key_exists('userID',$_SESSION)) {
		   $userID = $_SESSION['userID'];
	    } else {
		   header("Location: index.php?page=accounts&action=all");
	    }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        
        self::getTemplate('all_tasks', $records);

    }

    public static function create()
    {
        print_r($_POST);
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);

    }

    public static function save() {
        session_start();
        $task = new todo();

        $task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->save();

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        print_r($_POST);

    }

}