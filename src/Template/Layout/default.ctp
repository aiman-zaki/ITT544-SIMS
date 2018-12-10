<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'InternStreet: the fastest way to get internship';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('material-compiled.css') ?>
    <?= $this->Html->css('all.css') ?>
    
   
</head>
<body>

<nav class = "navbar navbar-expand-lg navbar-dark primary-color">
    
    <?php echo $this->Html->link($this->fetch('title'),'/',['class'=>'navbar-brand']) ?> 
    <?php if($session_user['role_id'] != 3){?>
        <?php echo $this->Html->link('Offer','/offers',['class'=>'navbar-brand'])?>
        </button>
        <div class="dropdown-menu">
        <?php    
        }else if($session_user['role_id'] == 3){?> 
        <?php  
            echo $this->Html->link('Offer','/offers',['class'=>'navbar-brand']); 
            echo $this->Html->link('Add Offer','/offers/add',['class'=>'navbar-brand']);                 
         }?>    
    </div>      
    <?php echo $this->Html->link('APIs','/apis',['class'=>'navbar-brand']) ?>   
    <div class = "dropdown ml-auto">
    <?php if($session_user['email'] != null){?>
        <button class="btn btn-outline-white btn-md dropdown  mr-4" type="button" id="dropdownMenu1" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><?php echo $session_user['email'] ?></button>
            <div class="dropdown-menu">
                <?php echo $this->Html->link('Profile','/users/profile',['class'=>'dropdown-item'])?>
                <?php echo $this->Html->link('Logout','/users/logout',['class'=>'dropdown-item'])?>
                <?php if($session_user['role_id'] == 2){
                        echo $this->Html->link('History','/applications/list',['class'=>'dropdown-item']);
                        }
                ?>
            </div>
    <?php } else {?>
        <div class="btn-group dropleft">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
    Login
  </button>
  <div class="dropdown-menu">
    <!-- Default form login -->
<?= $this->Form->create(null,['class'=>'text-center p-5','url'=>['controller'=>'Users','action'=>'login']]) ?>


<p class="h4 mb-4">Sign in</p>

<!-- Email -->
<?= $this->Form->control('email',['class'=>'form-control mb-4','id' => 'email', 'label' => '', 'placeholder'=>'Email']) ?>


<!-- Password -->
<?= $this->Form->control('password',['class'=>'form-control mb-4','id' => 'password','placeholder' => 'Password','label'=>''])?>



<!-- Sign in button -->
<?= $this->Form->button(__('Login'),['class' => 'btn btn-info btn-block my-4']); ?>
<?php echo $this->Html->link('Register','/users/add',['class'=>'btn btn-block btn-success'])?>
<?= $this->Form->end() ?>

<!-- Default form login -->
  </div>
  
</div>


    <?php } ?>
    </div>
</nav>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb indigo lighten-4">
        <?php foreach ($urls as $url){ 
            if($url != ''){   ?>
            <li class="breadcrumb-item"><?= ucwords($url) ?><i class="fa fa-caret-right mx-2"
          aria-hidden="true"></i></li>
        <?php }
        } ?>
    </ol>
  </nav>
<?= $this->Flash->render() ?>
    <div class="" style="margin-top:">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>

    <?= $this->Html->script('material-compiled.js') ?>
    <?= $this->Html->script('all.min.js') ?>
    <script>
        $(document).ready(function() {
            $('.mdb-select').material_select();
            $('.datepicker').pickadate({
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd',
                hiddenPrefix: 'prefix__',
                hiddenSuffix: '__suffix'
            });
        })
    </script>

</body>
</html>
