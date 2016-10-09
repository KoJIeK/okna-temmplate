<?php
// No direct access.
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/font-awesome.min.css');
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
    <jdoc:include type="head" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!-- Bootstrap -->

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>         
    <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 logo">
                        <a href="#"><img src="images/logo.png" alt="Опытный оконщик"></a>                        
                        <div class="zakaz">
                            <a href="#"><img src="images/zakaz.png" alt="Заказать"></a>
                        </div>                                                
                    </div>                    
                    <div class="col-sm-9 col-xs-12 menu-top">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Okna"><span></span></a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav nav-justified">
                                        <li><a href="#" class="btn-red">Окна</a></li>
                                        <li><a href="#" class="btn-red">Производство</a></li>
                                        <li><a href="#" class="btn-red">Цены</a></li>
                                        <li><a href="#" class="btn-red">Монтаж</a></li>
                                        <li><a href="#" class="btn-red">Ремонт</a></li>
                                        <li><a href="#" class="btn-red">Контакты</a></li>                                        
                                    </ul>                                

                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>  
                        
                        <!-- Карусель -->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Указатели -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <!-- Контент слайда (slider wrap)-->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/Slide.jpg" alt="Окна">
                                    <div class="carousel-caption">
                                        <h3>Со стеклами</h3>
                                        <p>Зимой тепло</p>
                                    </div>
                                </div>

                                <div class="item ">
                                    <img src="images/Slide2.jpg" alt="Окна">
                                    <div class="carousel-caption">
                                        <h3>Со стеклами</h3>
                                        <p>Осенью не дует</p>
                                    </div>
                                </div>

                                <div class="item ">
                                    <img src="images/Slide3.jpg" alt="Окна">
                                    <div class="carousel-caption">
                                        <h3>Со стеклами</h3>
                                        <p>Воообще супер!</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Элементы управления -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>         

                        <!-- Карусель -->
                        
                    </div>
                </div>
            </div> 
        </header>

        <section class="main-content">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok1.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok2.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok3.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok4.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok5.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok6.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok7.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok8.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>                    
                </div>
               
       
  
    
                
                
                <a href="#"><img src="images/soveti.png" alt="CREAM JANE JEANS DRESS"></a>
                    <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok9.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok10.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok11.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="product-img">
                            <a href="#"><img src="images/blok12.png" alt="CREAM JANE JEANS DRESS"></a>                                                  
                        </div><!-- /.product-img -->
                    </div>                    
                </div>
            </div>
        </section>


  <footer class="footer clearfix">
        <div class="container">
        <p>&copy; 2016 Company, Inc.</p>
      </div>
      
      </footer>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>



</html>