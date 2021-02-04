<?php 
if(isset($_POST['username']) && $_POST['username'] != ''){
    @include_once 'maill.php';
}
$language = null;
  if (isset($_POST['select']) && $_POST['select'] !='') {
    switch($_POST['select']){
        case 'English' :
            $language = 'English';
            @include_once 'lang/English.php';
            setcookie('Language','English');
            break;
        case 'Frensh' :
            $language = 'Frensh';
            @include_once 'lang/Frensh.php';          
            setcookie('Language','Frensh');
            break;
        case 'Arabic' :
            $language = 'Arabic';
            @include_once 'lang/Arabic.php';
            setcookie('Language','Arabic');
            break;
        }
        
        header("Location: index.php", true);
        
        $_POST['select'] = '';
    }else if(isset($_COOKIE['Language'])){
        @include_once 'lang/' . $_COOKIE['Language'] . '.php';
        $language = $_COOKIE['Language'];
    }else{
        @include_once 'lang/English.php';
        $language = 'English';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php
    if($language == 'Arabic') echo '<link rel="stylesheet" href="style/style-rtl/style.css">';
    else echo '<link rel="stylesheet" href="style/style-ltr/style.css">';
   ?>
    <link rel="icon" href="img/icon.png">
    <title>Oussama El Negraz</title>
</head>
<body>
    <header id="header">
    <img src="img/pro.jpg" style="visibility:hidden;margin: 0px;width: 100%;">
    <div class="bar" >
            <i id="lan" class="fa fa-language" aria-hidden="true"></i>
            <form id="lang" method="post" class="display">
                <select name="select" onchange="this.form.submit();">
                    <option value="English"
                    <?php if($language == 'English') echo'selected' ?>
                    ><?php  echo lang('L1') ?></option>
                    <option value="Frensh"
                    <?php if($language == 'Frensh') echo'selected' ?>
                    ><?php  echo lang('L2') ?>
                    </option>
                    <option value="Arabic"
                    <?php if($language == 'Arabic') echo'selected' ?>
                    ><?php  echo lang('L3') ?>
                    </option>
                </select>
            </form>
        </div>
        <div class="container">
           <div id="nav">
                <i id="im" class="fa fa-bars" aria-hidden="true"></i>
                <h3>Oussama Coder</h3>
                <div id="menu">
        <div id="opt">
            <h4 class="option1"  data-scroll="#profil">
                <?php  echo lang('About') ?> 
            </h4>
            <h4 class="option1" data-scroll="#skills">    
                <?php  echo lang('comp') ?> 
            </h4>
            <h4 class="option1" data-scroll="#gallery">    
                <?php  echo lang('pro') ?> 
            </h4>
            <h4 class="option1" data-scroll="#features">    
                <?php  echo lang('cara') ?> 
            </h4>
            <h4 id="contt" class="option1" data-scroll="#contact">    
                <?php  echo lang('cont') ?> 
            </h4>
            <h4 id="s1">
                <?php  echo lang('chLang') ?> 
            </h4>
            <form  method="post" class="">
            <i  class="fa fa-language" aria-hidden="true"></i>
                <select class="option2" name="select" onchange="this.form.submit();">
                    <option value="English"
                    <?php if($language == 'English') echo'selected' ?>
                    ><?php  echo lang('L1') ?></option>
                    <option value="Frensh"
                    <?php if($language == 'Frensh') echo'selected' ?>
                    ><?php  echo lang('L2') ?>
                    </option>
                    <option value="Arabic"
                    <?php if($language == 'Arabic') echo'selected' ?>
                    ><?php  echo lang('L3') ?>
                    </option>
                </select>
            </form>
        </div>
    </div>
                <div id="opt1">
                    <span id="about" class="option" data-scroll="#profil">
                        <?php  echo lang('About') ?> 
                    </span>
                    <span class="option" data-scroll="#skills">    
                        <?php  echo lang('comp') ?> 
                    </span>
                    <span class="option" data-scroll="#gallery">    
                        <?php  echo lang('pro') ?> 
                    </span>
                    <span class="option" data-scroll="#features">    
                        <?php  echo lang('cara') ?> 
                    </span>
                    <span id="contt" class="option" data-scroll="#contact">    
                        <?php  echo lang('cont') ?> 
                    </span>
                </div>
                <div id="logo">
                <a href="#"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </header>
<!--**************************** Profil ****************************-->
    <div class="profil" id="profil">
        <div class="container">
            <h1 class="h2">    
                        <?php  echo lang('About') ?> 
            </h1>
            <img src="img/os.jpg" alt="">
            <div>
                <p>     
                        <?php  echo lang('paragraph') ?> 
                <p>
                <h3 class="h3">     
                        <?php  echo lang('Language') ?> 
               </h3>
                <p>      
                        <?php  echo lang('Lang_para') ?> 
               </p>
                <ul>
                    <li>     
                        <?php  echo lang('Language_1') ?> 
               </li>
                    <li>     
                        <?php  echo lang('Language_2') ?> 
               </li>
                    <li>     
                        <?php  echo lang('Language_3') ?> 
               </li>
                </ul>
                <h3 class="h3">    
                        <?php  echo lang('Loisirs') ?> 
               </h3>
                <p>     
                        <?php  echo lang('Loisirs-p') ?> 
               </p>
            </div>
        </div>
    </div>
 <!--**************************** Skills ****************************-->
    <div class="skills" id="skills">
        <div class="container">
            <h1 class="h2">     
                        <?php  echo lang('comp') ?> 
            </h1>
            <div class="prog">
                <h3>C</h3>
                <div><span data-progress="98%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>Html</h3>
                <div><span data-progress="80%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>Css</h3>
                <div><span data-progress="80%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>Javascript</h3>
                <div><span data-progress="95%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>Sass</h3>
                <div><span data-progress="85%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>Bootstrap</h3>
                <div><span data-progress="65%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>Jquery</h3>
                <div><span data-progress="70%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>Php</h3>
                <div><span data-progress="90%" class="pr"></span></div>
            </div>
            <div class="prog">
                <h3>MySQL</h3>
                <div><span data-progress="90%" class="pr"></span></div>
            </div>
        </div>
    </div>
 <!--**************************** galery ****************************-->
    <div class="gallery" id="gallery">
        <div class="container">
            <h1 class="h2">     
                        <?php  echo lang('pro') ?> 
            </h1>
            <div class="site">
                <a href="https://oussama-gif.github.io/coronavirus/" target="_blank">
                    <img src="img/site1.jpeg" alt="">
                </a>
            </div>
        </div>
    </div>
 <!--**************************** features ****************************-->
    <div class="features" id="features">
        <div class="container">
            <h1 class="h2"><?php  echo lang('cara') ?> </h1>
            <div>
                <img src="img/front.png" alt="">
                <h3 class="h3">     
                        <?php  echo lang('f1') ?> 
                </h3>
                <p>     
                        <?php  echo lang('f1-p') ?> 
                </p>
            </div>
            <div>
                <img src="img/back.png" alt="">
                <h3 class="h3">     
                        <?php  echo lang('f2') ?> 
                </h3>
                <p>     
                        <?php  echo lang('f2-p') ?> 
                </p>
            </div>
            <div>
                <img src="img/database.png" alt="">
                <h3 class="h3">     
                        <?php  echo lang('f3') ?> 
                </h3>
                <p>     
                        <?php  echo lang('f3-p') ?> 
                </p>
            </div>
            <div>
                <img src="img/host.png" alt="">
                <h3 class="h3">     
                        <?php  echo lang('f4') ?> 
                </h3>
                <p>     
                        <?php  echo lang('f4-p') ?> 
                </p>
            </div>
            <div>
                <img src="img/seo.png" alt="">
                <h3 class="h3">     
                        <?php  echo lang('f5') ?> 
                </h3>
                <p>     
                        <?php  echo lang('f5-p') ?> 
                </p>
            </div>
            <div>
                <img src="img/c.png" alt="">
                <h3 class="h3">     
                        <?php  echo lang('f6') ?> 
                </h3>
                <p>     
                        <?php  echo lang('f6-p') ?> 
                </p>
            </div>
        </div>
    </div>
 <!--**************************** contact ****************************-->
    <footer id="contact" >
        <div class="container">
            <h1 class="h2"><?php  echo lang('cont') ?> </h1>
            <div class="div1">
                <form method="post">
                <input dir="auto" type="text" placeholder="<?php echo lang('i1') ?>" required name="username" minlength="4">
                <input dir="auto" type="tel" placeholder="<?php echo lang('i2') ?>" pattern="[0-9]{10}" required name="cellphone">
                <input dir="auto" type="email" placeholder="<?php echo lang('i3') ?>" required name="email">
                <input dir="auto" type="text" placeholder="<?php echo lang('i4') ?>" name="subject">
            </div>
            <div class="div2">
                <textarea dir="auto" id="text" placeholder="<?php echo lang('i5') ?>" required minlength="20" name="message"></textarea>
                <input name="submit" type="submit" value="<?php echo lang('b') ?>">
            </form>
            </div>
        </div>
        <div class="div3">Copyright 2021-31-01</div>
    </footer>

    <script src="script/script.js"></script>
</body>
</html>
