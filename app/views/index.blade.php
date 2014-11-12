<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hyperion Bike Studios</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .error{
        color: red;
    }

    .logo img {
width: 100% \9; /*Force IE10 and below to size SVG images correctly*/
max-width: 100%;
}

@media (max-width:480px) { 
.logo img {
    width: 70% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 70% !important;
}
}

@media (max-width:400px) { 
.logo img {
    width: 75% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 75%;
}
}

@media (max-width:385px) { 
.logo img {
    width: 70% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 70%;
}
}

@media (max-width:345px) { 
.logo img {
    width: 65% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 65%;
}
}

@media (max-width:335px) { 
.logo img {
    width: 60% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 60%;
}
}

@media (max-width:325px) { 
.logo img {
    width: 55% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 55%;
}
}

@media (max-width:315px) { 
.logo img {
    width: 50% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 50%;
}
}

.navbar-inverse {
    background-color: #21252D;
    border-color: #21252D;
}
    </style>

 <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</head>

<body>

    @if (Session::has('message'))

    <script>
    $(window).load(function()
    {
    var dialog = $('#confirm');
    
    dialog.modal('show');
    
    setTimeout(function ()
    {
        dialog.modal('hide');
    }, 5000);
});

    </script>

    <div class="modal fade" id="confirm" tabindex="-1" role="dialog"> 
        <div class="modal-dialog">
            <div class="modal-content">   
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
                    <h4>{{ Session::get('message') }}</h4>
                </div>
                <div class="modal-body">
                    <p>You are now signed up for our newsletter.</p>
                </div>
            </div>
        </div>

           
        
    </div>
    @endif

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="/"><img src = "images/hyperionbikelogo1.png" style="margin-top: 9px;" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Business Name or Tagline</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>What We Do</h2>
                <p>Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>Hyperion Bike Studios</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
                </address>
                <h3>Subscribe</h3>
                <p>Enter your email to receive the latest news</p>
               
                <div class="form-group">
                    @if(Session::has('errors'))
                    <p class = "error">{{$errors->first('email')}}</p>
                    @endif
                    {{Form::open(array('url'=>'/', 'method'=>'post', 'role'=>'form', 'class'=>'form-inline'))}}
                    {{Form::label('email', 'Subscribe To Our Newsletter', array('class'=>'sr-only'))}}
                    {{Form::text('email',Input::old('link'),
                    array('placeholder'=>
                    'Enter email', 'id'=>'email', 'class'=>'form-control'))}}
                    {{Form::submit('Sign Up', array('class'=>'btn btn-default'))}}
                    {{Form::close()}}
                 </div>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #1</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #2</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #3</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

   

</body>

</html>
