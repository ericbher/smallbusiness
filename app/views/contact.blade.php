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

.contactheading {
    color: #F2B591;
}

label {
    color: #F2B591;
}

.contactform {
    background-color: black;
    background: rgb(0, 0, 0) transparent;   /* Fallback for web browsers that doesn't support RGBa */
    background: rgba(0, 0, 0, 0.6);
    top: 0; left: 0;
    height: 100%; width:100%;
    margin-top: 100px;
    padding: 30px;
    border-radius: 15px;
}
    </style>

 <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</head>

<body>



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

    <header class="contact-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                {{Form::open(array('url'=>'/contact', 'method'=>'post', 'role'=>'form', 'class'=>'contactform'))}}
                <h1 class = "contactheading">CONTACT US</h1>
                @if(Session::has('errors'))
                    <p class = "error">{{$errors->first('name')}}</p>
                    <p class = "error">{{$errors->first('email')}}</p>
                    <p class = "error">{{$errors->first('phone')}}</p>
                    <p class = "error">{{$errors->first('message')}}</p>
                    @endif
                <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name',Input::old('link'),
                array('placeholder'=>
                'Enter name', 'id'=>'name', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email',Input::old('link'),
                array('placeholder'=>
                'Enter email', 'id'=>'email', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone',Input::old('link'),
                array('placeholder'=>
                'Enter phone number', 'id'=>'phone', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                {{Form::label('message', 'Message')}}
                {{Form::textarea('message',Input::old('link'),
                array('placeholder'=>
                'Enter message', 'id'=>'message', 'class'=>'form-control', 'rows'=>'5'))}}
                </div>
                {{Form::submit('Submit', array('class'=>'btn btn-default'))}}
                {{Form::close()}}

                </div>
            </div>
        </div>
    </header>


  <!--   <div class="container">
        <div class="col-lg-6">
            <h1>CONTACT US</h1>
            {{Form::open(array('url'=>'/contact', 'method'=>'post', 'role'=>'form'))}}
            <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name',Input::old('link'),
            array('placeholder'=>
            'Enter name', 'id'=>'name', 'class'=>'form-control'))}}
            </div>
            <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email',Input::old('link'),
            array('placeholder'=>
            'Enter email', 'id'=>'email', 'class'=>'form-control'))}}
            </div>
            {{Form::submit('Sign Up', array('class'=>'btn btn-default'))}}
            {{Form::close()}}


        </div>



    </div> -->

 

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
