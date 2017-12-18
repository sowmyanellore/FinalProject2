<?php

session_start();

//each page extends controller and the index.php?page=tasks causes the controller to be called
 class tasksController extends http\controller
  {
    //function to show task by id
    public static function show()
     {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
     }

    //function to show task by id
    public static function all()
     {
		
	   if(key_exists('userID',$_SESSION)) 
      {
	      $userID = $_SESSION['userID'];
	    } else {
		    header("Location: index.php?page=accounts&action=all");
	    }
        $userID = $_SESSION['userID']
        $records = todos::findTasksbyID($userID);
        self::getTemplate('all_tasks', $records);
      }
    
    
   // Function to create new tasks
    public static function create()
     {
	  	  $record = '';
        self::getTemplate('create_task', $record);
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
		    $record->title = $_REQUEST['title'];
        $record->body = $_REQUEST['body'];
        $record->difficultylevel = $_REQUEST['difficultylevel'];
        $record->duedate = $_REQUEST['duedate'];
	      $record->isdone = ($_REQUEST['isdone']?$_REQUEST['isdone']:'no');
		    $record->ownerid = $_SESSION['userID'];
		    $record->createddate = date('Y-m-d');
		    $record->updateddate = date('Y-m-d');
        $record->save();
        header("Location: index.php?page=tasks&action=edit&id=".$_REQUEST['id']);
    }
    
    // Function to save the edited and new tasks
    public static function save() 
    {
		    $date = date('Y-m-d');
        $task = new todo();
		    $task->title = $_REQUEST['title'];
        $task->body = $_POST['body'];
        $task->difficultylevel = $_POST['difficultylevel'];
        $task->duedate = $_POST['duedate'];
		    $task->isdone = ($_REQUEST['isdone']?$_REQUEST['isdone']:'no');
        $task->ownerid = $_SESSION['userID'];
        $task->createddate = $date;
        $task->save();
	      header("Location: index.php?page=tasks&action=all");
    }

    //this is the delete function.  
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");

    }

 }