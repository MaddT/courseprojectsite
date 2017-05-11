<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">


    <h3>Привет, <?php echo $user['name']; ?>!</h3>
    <br>
       <div class="panel panel-default" style="width: 40%">
       <div class="panel-body">
           <h5>Вам доступны следующие возможности:</h5><br>
           <ul class="nav nav-pills nav-stacked">
               <li><a href="/account/edit/">Изменить профиль</a></li>
               <li><a href="/user/projects/">Мои проекты</a></li>
           </ul>
       </div>
   </div>




   </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
