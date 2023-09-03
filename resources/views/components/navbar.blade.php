 <header class="{{ Request::is('/') ? '' : 'bg' }}">
     <a href="#" class="logo">AJ</a>
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

     <button data-text="Awesome" class="button">
         <span class="actual-text">&nbsp;Login&nbsp;</span>
         <span class="hover-text" aria-hidden="true">&nbsp;Login&nbsp;</span>
     </button>
 </header>
