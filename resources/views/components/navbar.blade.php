 <header class="{{ Request::is('/') ? '' : 'bg' }}">
     <a href="#" class="logo">AJ</a>
     <div class="lg:hidden">
         <div class="bx bx-menu " id="menu-icon"></div>
     </div>
     <nav class="flex">

         <ul class="lg:hidden absolute right-4 top-full bg-black p-2 max-w-[200px] w-full rounded-lg">
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
     </nav>

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
