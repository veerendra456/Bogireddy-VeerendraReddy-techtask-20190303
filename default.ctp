<?php
// pr($pages_data);exit;
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title> KinfoHub </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->webroot; ?>img/favicon.ico"">
	<?php
        echo $this->Html->script(array('jquery-3.3.1.min', 'bootstrap.min', 'slick.min', 'wow', 'slicks-2', 'home-2', 'jquery.counterup.min', 'jquery.counterup', 'owl.carousel.min'));
		echo $this->fetch('script');
	    
        echo $this->Html->css(array('bootstrap.min', 'fonts/flaticon', 'slick/slick', 'slick/slick-theme', 'animate', 'style', 'infinite-slider', 'font-awesome.min4','owl.carousel.min', 'owl.theme.min', 'testimonial'));
 		echo $this->fetch('meta');
		echo $this->fetch('css');

    ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style type="text/css">
        body{font-family: 'Open Sans', sans-serif; }
        .form-search__input-group.error{border: 1px solid red;}
    </style>
</head>
<body class="home02">
    <header class="header-content">
        <div class="">
            <div class="header-top hidden-sm hidden-xs" id="header-top">
                <div class="container">
                    <nav class="navbar navbar-inverse header-top__top">
                        <div class="navbar-header">
                            <a class="navbar-brand logo__link" href="<?php echo $this->webroot;?>Pages/index">
                                <img class="logo__image" src="<?php echo $this->webroot; ?>img/logo/logo-e.png" alt="Logo Educef"></a></div>
                        <div class="nav navbar-nav navbar-left categories"><a class="dropdown-toggle categories__button"><i class="glyph-icon flaticon-signs-1 categories__icon"></i><span class="categories__text">categories</span></a>
                            <div class="dropdown-catagories">
                                <ul class="dropdown-catagories__list ">
                                    <?php
                                    // pr($category_data);
                                    if(!empty($category_data)){
                                        foreach ($category_data as $key => $main_category_value) {
                                            $main_category_name = !empty($main_category_value['MainCategory'])? $main_category_value['MainCategory']['name']: 'N/A';
                                            $main_category_id = !empty($main_category_value['MainCategory'])? $main_category_value['MainCategory']['id']: '';
                                            if($main_category_id =='4'){
                                                $category_url = $this->webroot.'pages/engineering_lists/'.md5('custom');
                                            }else{
                                                $category_url = $this->webroot.'pages/all_courses/'.md5($main_category_id);
                                            }
                                            // <a href="'.$this->webroot.'pages/all_courses/'.md5($category_id).'" class="hi-icon hi-icon-chat">
                                            echo '<li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="'.$category_url.'">'.$main_category_name.'</a> </span>';
                                            // <span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon">
                                            // echo '<li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="'.$this->webroot.'pages/all_courses/'.md5($main_category_id).'">'.$main_category_name.'</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>';
                                            if(0 && !empty($main_category_value['Category'])){
                                                echo '<div class="cate-sub">
                                                        <ul class="cate-sub__list">';
                                                foreach ($main_category_value['Category'] as $category_key => $category_value) {
                                                    $category_id = $category_value['id'];
                                                    $category_name = ucfirst($category_value['name']);
                                                    echo '<li class="cate-sub__item"><a class="cate-sub__link" href="javascript:void(0);">'.$category_name.'</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>';
                                                    // echo '<li class="cate-sub__item"><a class="cate-sub__link" href="'.$this->webroot.'pages/course_bundle/'.md5($category_id).'">'.$category_name.'</a></li>';
                                                    if(0 && !empty($category_value['Menu'])){
                                                        echo '<div class="cate-sub">
                                                                <ul class="cate-sub__list">';
                                                        foreach ($category_value['Menu'] as $enu_key => $menu_value) {
                                                            $menu_id = $menu_value['id'];
                                                            $menu_name = ucfirst($menu_value['name']);
                                                            echo '<li class="cate-sub__item"><a class="cate-sub__link" href="'.$this->webroot.'pages/course_bundle/'.md5($menu_id).'">'.$menu_name.'</a></li>';
                                                        }
                                                        echo '</div></ul>';
                                                    }
                                                }
                                                echo '</div></ul>';
                                            }
                                            echo '</li>';
                                        }
                                    }else{
                                    ?>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Business</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Finance</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Industry</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Management</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Media</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Sales</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Design</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Design Thinking</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Fashion</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Development</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Databases</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Mobie Apps</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Heath &amp; Fitness</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Dance</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Fitness</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">IT &amp; Software</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">AI &amp; Big Data</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Hardware</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Language</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Chinese</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">English</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">French</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Lifestyle</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Art &amp; Crafts</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Gaming</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Office Productivity</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Apple</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Google</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="#">Oracle</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <?php echo $this->Form->create('Menu', array('url' => array('controller' => 'pages', 'action' => 'category_search'), "id"=>"category_search_form", 'class'=>'navbar-form navbar-left form-search')); ?>
                            <div class="form-search__input-group">
                                <input class="form-control form-search__input search_category" type="text" name="category" placeholder="Search your Category...">
                                <div class="form-search__btn-group">
                                    <button class="btn form-search__button" type="button"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                                </div>
                            </div>
                        <?php echo $this->Form->end(); ?>

                        <div class="nav navbar-nav navbar-right nav-right--notlogin">
                            <div class="nav-right__signin">Info@kinfohub.co.in<span>|</span>888-888-8888</div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="bottom-header hidden-sm hidden-xs" id="scrollspy" data-spy="affix" data-offset-top="112">
                <div class="container">
                    <div class="logo--menu"><a class="logo__link" href="#"><img class="logo__image" src="<?php echo $this->webroot; ?>img/logo/logo-e.png" alt="Logo Educef"></a></div>
                    <nav class="menu-main">
                        <ul class="nav navbar-nav menu-main__list ">
                            <li class="menu-main__item active"><a class="menu-main__link " href="<?php echo $this->webroot;?>pages/home" id="home">home</a>
                            </li>
                            <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $this->webroot;?>pages/all_courses" id="course">All course</a>
                                <?php if(0){ ?>
                                <div class="dropdown-catagories dropdown-catagories--menu">
                                    <ul class="dropdown-catagories__list">
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/all_courses">course 1</a></li>
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/all_courses">course 2</a></li>
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/all_courses">course 3</a></li>
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/all_courses">course 4</a></li>
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/all_courses">course 5</a></li>
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/all_courses">course 6</a></li>
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/all_courses">Course 7</a></li>
                                    </ul>
                                </div>
                                <?php } ?>
                            </li>
                            <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $this->webroot;?>pages/course_bundle" id="bundle">Sample Pages</a>
                                <div class="dropdown-catagories dropdown-catagories--menu">
                                    <ul class="dropdown-catagories__list">
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/course_bundle">course bundle</a></li>
                                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="<?php echo $this->webroot;?>pages/bundle_details">course bundle details</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $this->webroot; ?>pages/partners" id="partner">partners</a></li>
                            <!-- <li class="menu-main__item"><a class="menu-main__link" href="404.html">404 page</a></li> -->
                            <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $this->webroot; ?>pages/contact">contact</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header__mobile hidden-lg hidden-md">
                <div class="header-top">
                    <div class="container">
                        <div class="nav-right--notlogin nav-right--notlogin--mobile pull-right">
                            <!-- <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a></div> -->
                            <!-- <button class="form-search__button--mobile" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-search form-search__icon"></i></button> -->
                            <!-- <button class="button-default nav-right__become" type="submit">become an Instructor</button> -->
                            <!-- <div class="nav-right__signin"><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-in">Sign in</a><span>|</span><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-up">sign up</a></div> -->
                            <div class="nav-right__signin">Info@kinfohub.co.in<span>|</span>888-888-8888</div>
                        </div>
                        <form class="navbar-form form-search--mobile" id="form-search-mobile">
                            <div class="container">
                                <div class="form-search__input-group">
                                    <input class="form-control form-search__input" type="text" placeholder="Search your course...">
                                    <div class="form-search__btn-group">
                                        <button class="btn form-search__button" type="button"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                                    </div>
                                </div>
                                <button class="dropdown-toggle form-search__button form-search__button--close" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-access-denied form-search__icon"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <nav class="navbar" id="header-mobile" data-spy="affix" data-offset-top="75">
                    <div class="container">
                        <div class="categories--mobile pull-left"><a class="dropdown-toggle categories--mobile__buttonsm" id="menu-categories" data-toggle="collapse" data-target="#dropdown-categories"><i class="glyph-icon flaticon-signs-1 categories--mobile__icon"></i></a></div>
                        <button class="navbar-toggle nav-icon pull-right collapsed visible-sm visible-xs" id="menu-hamberger" data-toggle="collapse" data-target="#menu-main"><span class="bar"></span></button>
                        <div class="logo--mobile text-center"><a class="logo__link" href="#"><img class="logo__image" src="<?php echo $this->webroot; ?>img/logo/logo-e.png" alt="Logo Educef"></a></div>
                    </div>
                    <div class="menu-mobile">
                        <ul class="menu-mobile__list">
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $this->webroot;?>pages/home">home</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>

                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $this->webroot;?>pages/all_courses">All course</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <?php if(0){ ?>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="master-courses.html">course 1</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="master-courses.html">course 2</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="master-courses.html">course 3</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="master-courses.html">course 4</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="master-courses.html">course 5</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="master-courses.html">course 6</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="master-courses.html">Course 7</a></li>
                                </ul>
                                <?php } ?>
                            </li>
                            <li style="display: none;" class="menu-mobile__item"><a class="menu-mobile__link" href="#">Sample Pages</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-bundle.html">course bundle</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="bundle-details.html">course bundle details</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item "><a class="menu-main__link " href="<?php echo $this->webroot; ?>pages/partners" id="partner">partners</a></li>
                            <li class="menu-mobile__item "><a class="menu-main__link " href="<?php echo $this->webroot; ?>pages/contact">contact</a></li>
                        </ul>


                    </div>
                <?php //echo '<div id="veer">'; pr($pages_data);exit; echo "</div>";?>
                    <div class="menu-mobile-dropdown menu-mobile--categories">
                        <ul class="menu-mobile__list ">
                            <?php
                            if(!empty($category_data)){
                                foreach ($category_data as $key => $category_value) {
                                    $main_category_name = !empty($category_value['MainCategory'])? $category_value['MainCategory']['name']: 'N/A';
                                    $main_category_id = !empty($category_value['MainCategory'])? $category_value['MainCategory']['id']: '';
                                    if($main_category_id =='4'){
                                        $category_url = $this->webroot.'pages/engineering_lists/'.md5('custom');
                                    }else{
                                        $category_url = $this->webroot.'pages/all_courses/'.md5($main_category_id);
                                    }
                                    // <a href="'.$this->webroot.'pages/all_courses/'.md5($category_id).'" class="hi-icon hi-icon-chat">
                                    echo '<li class="menu-mobile__item"><a class="menu-mobile__link" href="'.$category_url.'">'.$main_category_name.'</a> </span>';
                                    
                                    // $category_name = !empty($category_value['Category'])? $category_value['Category']['name']: 'N/A';
                                    // $category_id = !empty($category_value['Category'])? $category_value['Category']['id']: '';
                                    // echo '<li class="menu-mobile__item">
                                    //         <a class="menu-mobile__link" href="javascript:void(0);">'.$category_name.'</a>';
                                            // <span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                    if(0 && !empty($category_value['Menu'])){
                                        echo '<ul class="dropdown-menu dropdown-mobile">';
                                        foreach ($category_value['Menu'] as $menu_key => $menu_value) {
                                            $menu_id = $menu_value['id'];
                                            $menu_name = ucfirst($menu_value['name']);
                                            echo '<li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="'.$this->webroot.'pages/course_bundle/'.md5($menu_id).'">'.$menu_name.'</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                                    echo '</li>';
                                }
                            }else{
                            ?>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Business</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Finance</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Industry</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Management</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Media</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Sales</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Design</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Design Thinking</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fashion</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Development</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Databases</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Mobie Apps</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Heath &amp; Fitness</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Dance</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fitness</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">IT &amp; Software</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">AI &amp; Big Data</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Hardware</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Language</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Chinese</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">English</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Lifestyle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Art &amp; Crafts</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Gaming</a></li>
                                </ul>
                            </li>
                            <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Office Productivity</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Apple</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Google</a></li>
                                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Oracle</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>


                </nav>
            </div>
            <div class="button-default btn-ontop" id="on-top"><span class="glyph-icon flaticon-arrows-5"></span></div>
        </div>
    </header>
    <div class="modal fade signin-form" id="modal-signin" role="dialog">
        <div class="modal-dialog signin-form__dialog">
            <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
                <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="signin-form__header"><a class="signin-form__header__logo" href="#"><img src="<?php echo $this->webroot; ?>img/logo/Logo-form.png" alt=""></a>
                <p class="signin-form__sub">Universal access to the world’s best education.</p>
            </div>
            <div class="modal-content signin-form__content">
                <div class="modal-body signin-form__body">
                    <ul class="signin-form__tabs">
                        <li class="active signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-in">Sign In</a></li>
                        <li class="signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-up">Sign Up</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="sign-in">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign In</button><a class="signin-form__link" href="#">Forgot your password?</a>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign in with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sign-up">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="User name">
                                    <input class="input-item" type="email" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                    <input class="input-item" type="password" placeholder="Confirm Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign Up</button>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign up with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signin-form__footer"><a class="signin-form__footer__link" href="#">Having trouble logging in?</a></div>
        </div>
    </div>
    <div class="modal fade signin-form" id="modal-signin" role="dialog">
        <div class="modal-dialog signin-form__dialog">
            <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
                <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="signin-form__header"><a class="signin-form__header__logo" href="#"><img src="<?php echo $this->webroot; ?>img/logo/Logo-form.png" alt=""></a>
                <p class="signin-form__sub">Universal access to the world’s best education.</p>
            </div>
            <div class="modal-content signin-form__content">
                <div class="modal-body signin-form__body">
                    <ul class="signin-form__tabs">
                        <li class="active signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-in">Sign In</a></li>
                        <li class="signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-up">Sign Up</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="sign-in">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign In</button><a class="signin-form__link" href="#">Forgot your password?</a>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign in with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sign-up">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="User name">
                                    <input class="input-item" type="email" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                    <input class="input-item" type="password" placeholder="Confirm Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign Up</button>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign up with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signin-form__footer"><a class="signin-form__footer__link" href="#">Having trouble logging in?</a></div>
        </div>
    </div>
	<?php 
// pr($add);
//echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>
    <footer class="footer" style="background: #343948;">
        <div class="container">
            <div class="row footer__content">
                <div class="col-lg-5 col-md-5"><a class="logo__link footer__logo" href="http://swlabs.co/"><img class="logo__image" src="<?php echo $this->webroot; ?>img/logo/Logo-footer.png" alt="Logo Educef"></a>
                    <p class="footer__item__sub">
                        Education, Inc.<br />
                        3601 Seneca Street, New York City<br />
                        NY 10010, USA
                    </p>
                    <div class="asocials">
                        <ul class="asocials__list">
                            <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-social-media asocials__icon"></span></a></li>
                            <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-social-1 asocials__icon"></span></a></li>
                            <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-twitter-logo-silhouette asocials__icon"></span></a></li>
                            <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-google-plus-symbol asocials__icon"></span></a></li>
                            <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-social-4 asocials__icon"></span></a></li>
                            <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-pinterest-logotype asocials__icon"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 footer__content__right">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 footer__item">
                            <h3 class="footer__item__title">System</h3>
                            <ul class="footer-link__list">
                                <li class="footer-link__item"><a class="footer-link__link ">Help center</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Support forum</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">affiliate</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Explore</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Pricing</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Social</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 footer__item">
                            <h3 class="footer__item__title">more</h3>
                            <ul class="footer-link__list">
                                <li class="footer-link__item"><a class="footer-link__link ">About us</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Blog</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Service</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Sign in</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Sign up</a>
                                </li>
                                <li class="footer-link__item"><a class="footer-link__link ">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 footer__item">
                            <h3 class="footer__item__title">get in touch</h3>
                            <div class="footer-link__link footer-link__link--contact">Contact us if you need help with anything</div>
                            <div class="footer-link__link footer-link__link--phone">(+ 01) 2675 286897</div>
                            <div class="footer-link__link footer-link__link--phone">(+ 01) 2120 286473</div>
                            <div class="footer-link__link footer-link__link--phone">help@test.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">&copy; <?php echo date('Y'); ?> KinfoHub</div>
        </div>
    </footer>
	<?php // echo $this->element('sql_dump'); ?>
</body>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/script.js"></script>

<script type="text/javascript" src="<?php echo $this->webroot;?>js/carousel.js"></script>
	<script type="text/javascript">
		$(document).ready(function (argument) {
            $('.counter').counterUp({
              delay: 10,
              time: 2000
            });
            
            $(document).on('click', '.form-search__button', function (argument) {
                return false;
                if($('.search_category').val() == ''){
                    $('.form-search__input-group').addClass('error');
                }else{
                    $('.form-search__input-group').removeClass('error');
                    $('#category_search_form').submit();
                }
                
            });

            $('.counter').addClass('animated fadeInDownBig');
            $('h3').addClass('animated fadeIn');
            // $('.customer-logos').slick({
            //     slidesToShow: 4,
            //     slidesToScroll: 1,
            //     autoplay: true,
            //     autoplaySpeed: 1000,
            //     arrows: true,
            //     dots: false,
            //     pauseOnHover: false,
            //     responsive: [{
            //       breakpoint: 768,
            //       settings: {
            //         slidesToShow: 4
            //       }
            //     }, {
            //       breakpoint: 520,
            //       settings: {
            //         slidesToShow: 3
            //       }
            //     }]
            // });

            $("#testimonial-slider").owlCarousel({
                items:2,
                itemsDesktop:[1000,2],
                itemsDesktopSmall:[979,2],
                itemsTablet:[768,2],
                itemsMobile:[650,1],
                pagination:true,
                navigation:false,
                slideSpeed:1000,
                autoPlay:true
            });
        });
	</script>
</html>