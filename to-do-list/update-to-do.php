<?php
function updateTaskById()
{
  global $conn; 
  
if (isset($_POST['update']) && isset($_GET['edit-task']) && !empty($_GET['edit-task'])) {
      
  $id = $_GET['edit-task'];
    $task = $_POST['task'];
    $data['taskMsg'] = '';
    $validation = false;
   if(empty($task)) {
      $data['taskMsg'] = "Task Field is empty";
    
    }
    if(empty($data['taskMsg'])) {
       $validation = true;
    }
     /* validation */
    if($validation) {
     /* sql query*/
    $query  = "UPDATE todo SET ";
    $query .= "task ='$task' ";
    $query .= "WHERE id =$id";
    $result = $conn->query($query);
    if ($result) {
      echo "<script>window.location='index.php'</script>";
    } 
    /*sql query*/
      
    }
    
    return $data;
}
  
}
?>