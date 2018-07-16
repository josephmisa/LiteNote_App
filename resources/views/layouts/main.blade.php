
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
   
   <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
   <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>



   body{
       
   background: url(../assets/abs.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;  
    } 



.input-group input {
      border-right-color: white;
      border-left-color: white;

}

.input-group .input-group-addon {
  background: white;
}

input[type="text"] {
  font-size: 23px;
  max-width:100%;
}


  

   .navbar-inverse {
    background-color:#800000;
    color:#ffc014;
    }

    .navbar-brand{
      margin-left:50px;

    }

    .navbar-right{
      margin-right: 40px;
    }
    
    .navbar-default .navbar-nav>li>a {
    color: white;
    font-family: 'Anton', sans-serif;
    }

    .notfo{
      text-align: center;
      font-size: 20px;
      letter-spacing: 10px;
      padding-top:40px;
    }

    .panel-default>.panel-heading {
    color: #333;
    background-color: #f59c13;
    border-color: #ddd; 
  }

  .panel-default {
    border-color: #ddd;
    margin-top: 20px;
  }

    .navbar-inverse .navbar-brand {
    color: #f59c13;
    font-size: 25px;
    font-family: 'Anton', sans-serif;
  }

  .navbar-inverse .navbar-nav>li>a {
    color: #f59c13;
}


    .univ{
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
    color:#f5f5f5;
     
    }

    .log{
      height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
    color:#f5f5f5;

    }

   
    .a {
    color: #FFFFFF;
    font-size: 12px;
    letter-spacing: .2rem;
    }

   .search{
      margin-top: 30px;
      margin-left: 300px;
    }

   
    .Bldgttl {
      text-align:center;
      font-size:40px;
      font-family: 'Anton', sans-serif;
      margin-top: -15px;
      padding-top: 2px;
      padding-bottom: 20px;
    }

    .Officettl{
      text-align:center;
      font-size:40px;
      font-family: 'Anton', sans-serif;
      margin-top: 30px;
      padding-top: 2px;
      padding-bottom: 20px;
    }

    .guide{
     display: block;
     padding-top:5px;
    margin-left: auto;
    margin-right: auto 

    }

    IMG.displayed {
        display: block;
    margin-left: auto;
    margin-right: auto;
    border-width: 6px;
    border-color: #f0a30a;
    border-style: solid;
    padding: 1px;
    border-radius: 50px 20px; 
  }


  .container{
    margin:20px auto;
    max-width: 960px;
  }

  .table{
    width:100%;
    max-width: 100%;
    margin-bottom: 2rem;
    background-color: #d6ab20;
  }

  .table > thead > tr,
  .table > tbody > tr,
  .table > tfoot > tr {

    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -transition: all 0.3s ease;

  }

  .table > thead > tr > th,
  .table > tbody > tr > th,
  .table > tfoot > tr > th,
  .table > thead > tr > td,
  .table > tbody > tr > td,
  .table > tfoot > tr > {

    text-align: left;
    padding: 1.6rem;
    vertical-align: top;
    border-top: 0;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -transition: all 0.3s ease;
  }


  .table > thead > tr > th {

    font-weight: 400;
    color: #757575;
    vertical-align: bottom;
    border-bottom: 1px solid rgba(255, 192, 20, 1);
  }

  .table > caption + thead > tr:first-child> th,
  .table > colgroup + thead > tr:first-child> th,
  .table > thead:first-child > tr:first-child> th,
  .table > caption + thead > tr:first-child> td,
  .table > colgroup + thead> tr:first-child> td,
  .table > thead:first-child > tr:first-child> td{

    border-top:0;
  }

  .table > tbody + tbody{
    border-top: 1px solid rgba(255, 192, 20, 1);
  }

  .table.table{
    background: #f59c13;
    font-weight: bold;
font-size: 20px;
  }

  .table .no-border{
    border: 0;
  }

  .table-condensed > thead > tr > th,
  .table-condensed > tbody > tr > th,
  .table-condensed > tfoot > tr > th,
  .table-condensed > thead > tr > td,
  .table-condensed > tbody > tr > td,
  .table-condensed > tfoot > tr > td{

    padding: 0.8rem;
  }

  .table-bordered{
    border:0;

  }

  .table-bordered > thead > tr > th,
  .table-bordered > tbody > tr > th,
  .table-bordered > tfoot > tr > th,
  .table-bordered > thead > tr > td,
  .table-bordered > tbody > tr > td,
  .table-bordered > tfoot > tr > td{

    border:0;
    border-bottom: 1px solid #e0e0e0;
  }

  .table-bordered > thead > tr > th,
  .table-bordered > thead > tr > td{
    border-bottom-width: 2px;
  }

  .table-striped > tbody > tr:nth-child(odd) > td,
  .table-striped > tbody > tr:nth-child(odd) > th{

    background-color: #d6ab20;
  }

  .table-hover > tbody > tr:hover > td,
  .table-hover > tbody > tr:hover > th{
    background-color: rgba(255, 192, 20, 1);
  }

  @media screen and (max-width: 768px){
    .table-responsive-vertical > .table{
      margin-bottom:0;
      background-color: transparent;
    }

    .table-responsive-vertical > .table > thead,
    .table-responsive-vertical > .table > tfoot{
      display: none;
    }

    .table-responsive-vertical > .table > tbody{
      display:block;
    }

    .table-responsive-vertical > .table > tbody > tr {
      display:block;
      border: 1px solid #e0e0e0;
      border-radius: 2px;
      margin-bottom: 1.6rem;
    }

    .table-responsive-vertical > .table > tbody > tr > td {
      background-color: #fff;
      display:block;
      vertical-align: middle;
      text-align:right;
    } 
  

    .table-responsive-vertical > .table > tbody > tr > td[data-title]:before{
      content: attr(data-title);
      float:left;
      font-size:inherit;
      font-weight: 400;
      color: #757575;

    }

    .table-responsive-vertical > .table-bordered{
      border: 0;
    }

    .table-responsive-vertical > .table-bordered > tbody > tr > td{
      border: 0;
      border-bottom: 1px solid #e0e0e0;
    }

    .table-responsive-vertical > .table-bordered > tbody > tr > td:last-child{

      border-bottom: 0;
    }

    .table-responsive-vertical > .table-bordered > tbody > tr > td,
    .table-responsive-vertical > .table-bordered > tbody > tr:nth-child(odd){
      background-color: #d6ab20;
    }

    .table-responsive-vertical > .table-bordered > tbody > tr > td:nth-child(odd){
      background-color: #d6ab20;
    }

    .table-responsive-vertical > .table-hover > tbody > tr:hover > td,
    .table-responsive-vertical > .table-hover > tbody > tr:hover {
      background-color: #fff;

    }

    .table-responsive-vertical > .table-hover > tbody > tr:hover{
      background-color:rgba(255, 192, 20, 1);
    }

  } 

    .table-striped.table-mc-red > tbody > tr:nth-child(odd) > td,
    .table-striped.table-mc-red > tbody > tr:nth-child(odd) > th{
      background-color: #d6ab20;
    }

    .table-hover.table-mc-red > tbody > tr: hover > td,
    .table-hover.table-mc-red > tbody > tr: hover > th{

      background-color: #f9bdbb;
    }


}


    
  </style>


  </head>

 

<nav class="navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">UniversityEguide</a>
    </div>
    <ul class="nav navbar-nav"></ul>



    <ul class="nav navbar-nav navbar-right">
      @if(!session()->has('username'))
                            <li><a class="log" href="{{ route('login') }}">Login</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Session::get('username') }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
  </div>
</nav>

</ul>
</div>
</nav>

         <!-- <div class="container">
            @if(session()->has('notif'))
              <div class="row">
                  <div class="alert alert-notif">
                      <button type="button" class="close"
                      data-dismiss="alert" aria-hidden="true">& times;</button>
                          <strong>Notification</strong> {{session()->get('notif') }}
                        </div>
                      </div>
                      @endif -->


    </div class="container">
          @if(Session::has('building_flash'))
    <div class="alert alert-success">
       <i class="fas fa-check-circle"></i> 
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <em> {!! session('building_flash') !!}</em></div>
          @endif

          @if(Session::has('building_flash_delete'))
    <div class="alert alert-danger">
     <i class="fas fa-check-circle"></i> 
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <em> {!! session('building_flash_delete') !!}</em></div>
          @endif
        </div>
  @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      $('div.alert').delay(3000).slideUp(300);
    </script>
</div>
    
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>

  <script type="text/javascript">
    setTimeout(function() {
        $('input').attr('autocomplete', 'off');
    }, 2000);
</script>s
</html>
