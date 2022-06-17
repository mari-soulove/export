<?php

require "../includes/config.php";
include "../includes/db.php";

?>
<script src="/public/js/bootstrap.min.js"></script>
<!DOCTYPE HTML>
<html>
 <head>
   <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <title>Экспорт данных из портфолио</title>
  <style>
  </style>
 </head>
 <body background="zzz/portfolio/files/bg_fon.jpeg">

  <br>
  <br>
    

<?php
    
 
      $files = mysqli_query($connection, "SELECT * FROM student");
      $facultet= mysqli_query($connection, "SELECT * FROM sfak");

        
            ?>




    <div class="row">

     <div class="col-sm">
         </div>
         <div class="col-8">
          <div style="border-width:1;
    border-color: rgb(190,190,190);
    border-style: solid;" class="bg-white">
              
   <div class="col">
<div class="col-1"><br></div><div class="text-center"><h3>Экспорт данных из электронного портфолио</h3></div> <hr>
            <div class="row text-center"> 
              <form action="export2.php" method="POST" class="col text-center">
  <div class="row">
    <div class="col">
      <label class="col text-center"><b>Факультет</b></label>
<div class="form-group">
<select class="custom-select my-1 mr-sm-2 ng-pristine ng-valid ng-valid-required ng-touched" ng-model="fileCategory" ng-init="fileCategory='1'" required="" id="fac">
           <option value="1" selected="" disabled="">-----------------------------</option>
               <?php    
              while($fac = mysqli_fetch_assoc($facultet))
              {
              echo '<option  value="'.$fac['fak_id'].'">'.$fac['name']." (". $fac['IMS'].")" ;
              }
               ?>

                                    </select>
                                  </div>
    </div>
     <div class="col">
      <label class="col text-center"><b>Курс</b></label>
<div class="form-group">
<select class="custom-select my-1 mr-sm-2 ng-pristine ng-valid ng-valid-required ng-touched" ng-model="fileCategory" ng-init="fileCategory='1'" required="" id="course">
           <option value="1" selected="" disabled="">-----------------------------</option>
               <option value="2">1</option>
             <option value="3">2</option>
            <option value="4">3</option>
          <option value="5">4</option>
              <option value="6">5</option>
              <option value="7">Все</option>
                                    </select>
                                  </div>
    </div>
     <div class="col">
      <label class="col text-center"><b>Группа</b></label>
<div class="form-group">
<select class="custom-select my-1 mr-sm-2 ng-pristine ng-valid ng-valid-required ng-touched" ng-model="fileCategory" ng-init="fileCategory='1'" required="" id="groups">
           <option value="1" selected="" disabled="">----------</option>
               
                                    </select>
                                  </div>
    </div>
              </div>   
                 <div class="row text-center"> 
                 <div class="col">
                  <button type="submit" class="btn btn-primary mt-2" name="do_export">Экспорт</button>
              
                </div>

  </div>
</form>
</div>
          </div>   



                  
    
</div>
    <div class="row">
    <div class="col-1"><br></div>

    </div>
    

    <div class="row bg-white" style="border-width:1;
    border-color: rgb(190,190,190);
    border-style: solid; margin-right: 0px!important; margin-left: 0px !important">

          
              
   <div class="col-12">
              <div class="col-1"><br></div>
              <div class="text-center"><h4>Студенты</h4></div> <hr>
    
    <div class="row text-center">
    <div class="col"><p><b>ФИО</b></p></div> 
    <div class="col"><p><b>Количество загруженных файлов</b></p></div>
    <div class="col"><p><b>Резюме студента</b></p></div>
    
</div>
<hr>





<?php



         while ($f = mysqli_fetch_assoc($files)) 
          {
            $kolichestvo = mysqli_query($connection, "SELECT count(*) FROM files  WHERE owner= " . (int) $f['user_id']);
            $k = mysqli_fetch_assoc($kolichestvo)

            ?>

<div class="row text-center">
    <div class="col"><a href="/pages/student2.php?user_id=<?php echo $f['user_id']?>"><?php echo $f['fio'] ?></a></div> 
    <div class="col"><p><?php echo $k['count(*)'] ?></p></div>
    <div class="col"><p>Отсутствует</p></div> 
</div>
<hr>



<?php
         }
         ?>  



 </div>
 </div>

  </div>


  <div class="col">
         </div>
<br>
  <br>

  <script src="ajax.js"></script>

 </body>
</html>
