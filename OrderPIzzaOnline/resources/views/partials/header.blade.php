
<nav class="navbar navbar-default">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('index.Index')}}" style="padding:0px;">
        
        <img src="/storage/images/logo1.png" style="height:100%;">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
      @if(Auth::check() and Auth::user()->role==='admin')
      <li></li>
      @else
      <li>
        <a href="{{route('product.pizza')}}">ONLINE NARUDŽBA</a>
        </li>
        <li>
        <a href="{{route('product.shoppingCart')}}">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i> Košarica
        <span class="badge">{{ Session::has('cart')?Session::get('cart')->totalQty: ''}}</span>
        </a>
        </li>
        @endif
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Korisnički račun <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if(Auth::check())
             @if(Auth::user()->role==='user')
            <li><a href="{{route('user.profile')}}">Profil</a></li>
            <li role="separator" class="divider"></li>
              @endif
            <li><a href="{{ route('user.logout')}}">Odjava</a></li>
              @else
              <li><a href="{{route('user.register')}}">Registriraj se</a></li>
             <li><a href="{{route('user.login')}}">Prijavi se</a></li>
              @endif

            
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>



