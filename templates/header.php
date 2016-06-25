<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }
?>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/b9dd0c1c41.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <title>
            <?php
                if (defined('TITLE')) {
                    print TITLE;
                } else {
                    print 'Hammad Photography';
                }
            ?>
        </title>
    </head>
      <body>
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a href="index.php"><img id="logo" src="images/logo3.PNG"></a>
<!--          <a class="navbar-brand" href="#">Hammad Takes Pics</a>-->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-center">
            <li class="active"><a href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>       
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; Albums <b class="caret"></b></a>
              <ul class="dropdown-menu">
<!--             	<li class="dropdown-header">Admin & Dashboard</li>-->
                <li><a href="albums/italy.php">Italy</a></li>
                <li><a href="#">Istanbul</a></li>
                <li><a href="#">Dubai</a></li>
<!--                <li class="divider"></li>-->
              </ul>
            </li>
            <?php
                if (isset($_SESSION['email'])) {
                    print '<li><a href="logout" />Logout</a></li>
                    <li><a href="manage_account" />Manage Account</a></li>';
                } else {
                    print '<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Login</a></li><li><a href="create_account.php" />Create Account</a></li>';
                }
            ?>
            <li><a href="contact.php"><i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i>&nbsp; Contact</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
      
    <div id="container">
          <div class="image">
            <ul class="slides">
                <li class="slide"><img src="https://lh3.googleusercontent.com/fwKeaAULWAoq-MFGpsTGLAw9qIVTK6Apf-wb70WmsAhlnzwnFMox7pXQWaLEqMzZQp49-rO6FGdROKC0e9EFsBi18GgjuBAf0euwRd01sluZOHl11Ya60AZ050hDe1MCaFCWPG8kc2NUGKcW2PCO-aGi0-WIFp8caFRYBl2NACgh49esk6Zq0J3vPGRCmHlvc6vxsrO0KIXLAQLa6AJSFaGOB_lCihNXud1nLtllWTkfwr4zr122Hn22EHeteoYB8fAeACPQqe9zrEjObyD6ysb-OF8JezfJwQxpyr7EBcqBwUbNMV4SdgzB6OFXlUApwaANjmuvJxopCp_Yt7qGfFpXUwDceZ1HrsSgsXykr6cglH9FMsbKev2wioZYdwS0oOS4GKgkusQt0UuN8w0r6q7LjqwyGZZXHy3mZK0212bniBAr5U-n099U3Y_LB6Mf6Qq5LhO1cWXy1LTuRHzY37DhNldgeas3unG-0HW1eXKj7pIXrtWhQjgsjmcT-2t2V6YevIvysmoChEe8MxquO_eGweVkGFl2LuJ3EHVuW195n5kAhigqiQw9Q-He1TcEKbcXQElaP5uuTqx8aZHTzx3UxixpcKK1=w1451-h968-no"></li>
                <li class="slide"><img src="https://lh3.googleusercontent.com/sfZF7jNtso6KxmSvCEAAKTLdlX7JZdDaDYb1Hok1MZ0dKh99XY7UAsScCaMS3S0Fjg_XHwXgoz2Kw_MfQ9NI3l5mQ2xOwqpFU-B2JXDupCCmbk4utuNycKQELAs2bbMmIX_URTktmDNq459SikdEKyrYHduiuc7xKqYBHRdEdHRrYznC-idOmjWK7OYn__DOETys1LqrgCJOZWPjc16cIsghrPT2QbjhBRoBLw62mFQQULCZIGluweWWulDBmGGA5pCXNfyxM7vlacJgy38-QjiGGkcItqFjfww_vlMrviXkgfJ0BsC-6lREFdeOVuf69WMToePHdv8zVnxotPMn5-jwifGpigMqurBGAiPUO1DpwuLb0vUrEMhIC5i9XoDhlG17kR975PD2dBa1dvJPCkoNxYD_ZWZLt1sYnrPeQGOzGoAmGNiYlREh2-wMhbYfvD85pH34yquv3wqYGPtHQ0GXHQ_Di-iFqCZvbbomOU7eHXqdRUPB5XkUruM7B4DBcfevxb5TrGhaB_TthVU0FHUVJkXMu3_kX9jsnuMDsQ38P179GCYmM2JuaRlJcEbQYZljidBfKi82REgUQvpHD6x4dioC-M-U=w1451-h968-no"></li>
                <li class="slide"><img src="https://lh3.googleusercontent.com/piDG7xFVKPWazp7C12ZPPiKSdnSdPVJHfEkc0RhHE5dYuCDWkS5tf00WoaK6ium96WeFuGH7zj0qv0J_Ll2KnsojzsUGP96fMmn54UVxv-Vpp8ptPWopwP6kjMXRm9UfFraunotbZLMMxs6BlUHL-pfe4gNXY-5fRO4ZmGdIz6-CghM8zgDnX2r2e-FVTAyYm4reCfggZy0u5Uuj2CUgQ6670_zqdbx2cnDbbhlQuCcBY0XSaPhdlowF8rEIGl9bB1Z1EwjeuvYnyi6BfKY6Kqbu4imHP4M2-RoH4nVf61RpEsVu_Pmcq1sXn4_VMv_h2zxLr9LJ_3suMsDaqgtMHfPzo1axbBlwvuHA6nW8iZpI2abKQ0tSC4i9l1B-NWOAvjkAnee4tjToEvaW0ZsZOBkxrFr5fNFuw91ZzGNMrgesUJ_O90rTUkgHF8rlqdw_z3rnXCtmjWtjfjuPwDim-tccE2B8UZLGKv5gwOuwqdzZGsjcfr2_c8ZYIqWyz-gw9js5N79eDFtpd-EaBcnydnRb06BOiJAorrVAI5pRpQNIfi2gbxtEPa6eIIHInt1wDELfdiyKoNNk7Hir7fAy_X-m5usCNrs8=w1451-h968-no"></li>
                <li class="slide"><img src="https://lh3.googleusercontent.com/-XbDaw8B5lBJFOZU4UCJpT6NbeBaykuz1ZJKE8NyYuiPhJxM256EJjEtirDqySfkzpzjB58n1F6qbxS63E8TArnvb78KLpJMoyaVf14t_ceEs8ikIVjbmQ9gXCG8HcwygqrpjIpsmc-f5Np-iJNFk7wm6RvbMbksdb-7hxhortMT4yk_Bx8dsVIIts9nFPVYfRaQM-x0tL8MRv7yuwdcsHS9F4RQLLtdO2GW9X19k7YE9ancTfROcKvtXfBuXPCusjYx64XdcZITxufY7UOdN6SYZlx-jZOpULHERQfUY1J6UhyOLyIMbF_GsT5FvebnK8-sj2zjsLZVPkYAhbLpn9Gk3viGHKTfmQbfWflhIrrJXuG_JsLm6OucIH_uBD-aMqsq3QgiQ9mbi-zNU6fyBp5Sk1RE9u4-AEdjaEKWLdccBVEcCBXqOap0dvBY8k1GO7j0SUYC4OP7QDUDrqu4dV_JqQ1gTv9iaH-W87uHPoiXXyxTQ39rzyyOnhFMQ2yht95pWaqpN9z7BGnUi06BF1iijflFVaWSG8cksMfOjVzlMlAjhoSP7f9PCJ_V9nqjneMUJ7hM1F1xExUJgcd8J_Vc1VxQUkSp=w1451-h968-no"></l1>
            </ul>
        </div>
    </div>