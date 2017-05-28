<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>myMemo</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=ROOT_PATH.'assets/font/font-awsome/css/font-awesome.min.css'?>">
    <!-- Bootstrap core CSS -->
    <link href="<?= ROOT_PATH.'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= ROOT_PATH.'assets/css/mdb.min.css'?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?= ROOT_PATH.'assets/css/style.css'?>" rel="stylesheet">

    <script type="text/javascript" src="<?=ROOT_PATH.'assets/js/ajax.js'?>"></script>
    <script type="text/javascript" src="<?=ROOT_PATH.'assets/js/style.js'?>"></script>
</head>

<body>



<!--    navbar-->
    
<header>

    <nav class="navbar navbar-toggleable-md navbar-dark grey">
       <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-explanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <a class="navbar-brand">
                <strong>myMemo</strong>
           </a>
           <div class="collapse navbar-collapse" id="navbarNav1">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT_PATH?>">Home</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_PATH.'memo'?>">Mymemo</a>
                   </li>
               </ul>
               
               <ul class="navbar-nav ml-auto">
                  <?php
                    if(!$_SESSION['is_login']){
                        ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_PATH.'user/register'?>">Register</a>
                       </li>
                       <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_PATH.'user/login'?>">Login</a>
                       </li>
                   <?php
                    }else{
                        ?>
                   <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_PATH.'user/profile/'.$_SESSION['user_data']['id']?>">Wellcome, <?= $_SESSION['user_data']['first_name']?></a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT_PATH.'user/logout'?>">Logout</a>
                   </li>
                        <?php
                    }
                   ?>
               </ul>
           </div>
        </div> 
    </nav>
    
  </header>  
<!--    end navbar-->
    <br>
    <br>
    <br>
    <div class="container-fluid">
    <div class="container">
        <?php
            Message::showMsg();
        ?>    
    </div>
    <?php
        
        require($view);
    ?>
    </div>

    


<!--/Form without header-->

  
    
        
        
<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
        <!--/.Footer Links-->
    <!--Call to action-->

    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
            <li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
            <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2015 Copyright: <a href="https://www.MDBootstrap.com"> Mymemo </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?=ROOT_PATH.'assets/js/jquery-3.1.1.min.js'?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?=ROOT_PATH.'assets/js/tether.min.js'?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?=ROOT_PATH.'assets/js/bootstrap.min.js'?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=ROOT_PATH.'assets/js/mdb.min.js'?>"></script>

</body>

</html>
