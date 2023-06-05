         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="{{route('anasayfa')}}">Anasayfa</a>
                     <a href="{{route('moda')}}">Moda</a>
                     <a href="{{route('elektronik')}}">Elektronik</a>
                     <a href="{{route('aksesuar')}}">Aksesuar</a>
                     <a href="{{route('sepet')}}">Alışveriş Sepeti</a>
                     <a href="{{route('iletisim')}}">İletişim</a>
                     <a href="{{route('hesap')}}">Hesap</a>


                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menü
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('moda')}}">Moda</a>
                        <a class="dropdown-item" href="{{route('elektronik')}}">Elektronik</a>
                        <a class="dropdown-item" href="{{route('aksesuar')}}">Aksesuar</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ara">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> Türkçe <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-uk.png" class="mr-2" alt="flag">
                           İngilizce
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Alışveriş Sepeti</span></a>
                           </li>
                           <li><a href="{{route('iletisim')}}">
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_10">Iletişim</span></a>
                           </li>
                           <li><a href="{{route('hesap')}}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="padding_10">Hesap</span></a>
                         </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
