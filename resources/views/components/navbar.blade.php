 <header class="{{ Request::is('/') ? '' : 'bg' }}">
     <a href="#"><img src="{{ asset('img/ajcolor-01.png') }}" class="logo" alt=""></a>
     <div class="bx bx-menu" id="menu-icon"></div>
     <ul class="nav">
         <li>
             @if (Request::is('/'))
                 <a href="#home" class="nav-link">Beranda</a>
             @else
                 <a href="/#home" class="nav-link">Beranda</a>
             @endif
         </li>
         <li>
             @if (Request::is('/'))
                 <a href="#order" class="nav-link">Service</a>
         </li>
     @else
         <a href="/#order" class="nav-link">Service</a></li>
         @endif
         <li><a href="#preview" class="nav-link">Preview</a></li>
         <li>
             <a href="#" class="nav-link">Contact Us</a>
         </li>

     </ul>

     <ul class="navbar-nav login">
         @auth

             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Welcome back, {{ auth()->user()->name }}
                 </a>
                 <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                             My
                             dashboard</a></li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <li>
                         <form action="/logout" method="post">
                             @csrf
                             <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                 Logout</button>
                         </form>

                     </li>
                 </ul>
             </li>
         @else
             <a href="/login">
                 <button data-text="Awesome" class="button">
                     <span class="actual-text">&nbsp;Login&nbsp;</span>
                     <span class="hover-text" aria-hidden="true">&nbsp;Login&nbsp;</span>
                 </button>
             </a>

         @endauth
     </ul>

 </header>
