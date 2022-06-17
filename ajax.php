  <?php
  require "../includes/config.php";

  $post_fac=$_POST['facultet'];
  $save=(int)$post_fac;

  $post_c=$_POST['course'];
  



  
  if (isset($post_fac)) {
   $course=mysqli_query($connection, "SELECT course FROM `groups`  WHERE fak_id = '$post_fac' GROUP BY course");

    while ($cours=mysqli_fetch_assoc($course)) {
      echo '<option  value="'.$cours['course'].'">'.$cours['course']. '</option>' ;
      
    }
}



if (isset($post_c)) {
 $groups=mysqli_query($connection, "SELECT gruppa FROM `groups` WHERE fak_id = '$save' AND course = '$post_c'");
    while ($group=mysqli_fetch_assoc($groups)) {


      echo '<option  value="'.$group['gruppa'].'">'.$group['gruppa']. '</option>' ;
      
    }

}
