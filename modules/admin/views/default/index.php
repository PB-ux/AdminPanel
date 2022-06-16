<?php

use yii\bootstrap4\Nav;


?>


<div class="admin-default-index">
  <h1>Admin panel</h1>
  <div class="nav-bar">
    <?php
        echo Nav::widget([
            'options' => ['class' => 'nav-tabs'],
            'items' => [
                ['label' => 'Products', 'url' => ['/admin/product']],
                ['label' => 'Categories', 'url' => ['/admin/category']],
                ['label' => 'Users', 'url' => ['/admin/user']],
                ['label' => 'Groups of users', 'url' => ['/admin/usergroup']]
                
            ],
        ]);
        ?>
  </div>
</div>