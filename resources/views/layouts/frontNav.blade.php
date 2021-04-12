    <div class="top_header">
        <div class="container-fluid">
            <div class="row">
                <div class="header_links col-sm-7 col-5 navbar navbar-expand-md  ">
                    <button class="navbar-toggler bg-light navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <div class="btn-group nav_logo">
                                    <img src="assests/img/logo.png" />
                                </div>
                            </li>
                            <li @if($slug == 'home') class="nav-item active" @endif  
                              @if($slug != 'home') class="nav-item " @endif  >
                                <a  
                               href="{{route('home')}}">الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                              <li @if($slug == 'platform') class="nav-item active" @endif  
                              @if($slug != 'platform') class="nav-item " @endif  >
                                <a class="nav-link" href="{{route('platform')}}">المنصة</a>
                            </li>
                      <li @if($slug == 'offer') class="nav-item active" @endif  
                              @if($slug != 'offer') class="nav-item " @endif  >
                                <a class="nav-link" href="{{route('offer')}}">العروض</a>
                            </li>
                          <li @if($slug == 'about') class="nav-item active" @endif  
                              @if($slug != 'about') class="nav-item " @endif  >
                                <a class="nav-link" href="#">من نحن</a>
                            </li>
                        </ul>
                   </div>
        
                </div>  <!-- header links --> 
                <!-- header user -->
                <div class="col-sm-5 col-7 header_icons_cont">
                    <div class="header_icons d-inline-block">
                        <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                    <div class="nav-user d-inline-block">
                        <img src="assests/img/user.png" /> <br>
                        <span>اسم المستخدم</span>
                    </div>

                </div>
                
                <!-- header social -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div>