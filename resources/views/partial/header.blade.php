 <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/home')}}">HOME</a></li>
                    <li><a href="{{url('/band')}}">BAND</a></li>
                    <li><a href="{{url('/tour')}}">TOUR</a></li>
                    <li><a href="{{url('/contact')}}">CONTACT</a></li>
                    <li><a href="{{url('/list')}}">LIST</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Merchandise</a></li>
                            <li><a href="#">Extras</a></li>
                            <li><a href="#">Media</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>