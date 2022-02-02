<?php

    


$insert = "INSERT INTO `users` (`fullname`, `username`, `loginmail`, `password`, `time`) VALUES (`$fullname`, `$username`, `$loginmail`, `$password`, current_timestamp())";
$result = mysqli_query($connection, $insert);
echo "mysqli_error($connection) | $result";


  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>';
  }

  else{
      // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      echo "mysqli_error($connection)";

      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>      
  </div>';
  }
  
?>
