 <div class="container">
     <a href="/"> <button type="button" class="btn-back" title="Back to Post">
             <i class='bx bx-arrow-back' style="color: #000"></i>
         </button></a>
     <div class="curved-shape"></div>
     <div class="curved-shape2"></div>
     <div class="form-box Login">
         <h2 class="animation" style="--D:0;--s:10">Login</h2>
         <form action="/login" method="POST">
             @csrf
             <div class="input-box animation" style="--D:1;--s:12">
                 <input type="text" name="email" id="email" required>
                 <label for="email">Email</label>
                 <i class="bx bxs-user"></i>
             </div>
             <div class="input-box animation" style="--D:2;--s:13">
                 <input type="password" name="password" id="password" required>
                 <label for="password">Password</label>
                 <i class="bx bxs-lock-alt"></i>
             </div>
             <div class="input-box animation" style="--D:3;--s:14">
                 <button class="btn-login" type="submit">Login</button>
             </div>
             <div class="regi-link animation" style="--D:4;--s:15">
                 <p>Don't have account? <a href="#" class="singup">Sing Up</a></p>
             </div>
         </form>

     </div>
     <div class="info-content Login">
         <h2 class="animation" style="--D:0; --s:14">WELCOME BACK!</h2>
         <p class="animation" style="--D:1; --s:15">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Laboriosam,
             autem?</p>
     </div>
     <div class="form-box Register">
         <h2 class="animation" style="--li:17;--s:0">Register</h2>
         <form action="/register" id="register" method="POST">
             @csrf

             <div class="input-box animation" style="--li:18;--s:1">
                 <input type="text" name="username" class="is-invalid" id="username" required autocomplete="off">
                 <label for="username">Username</label>
                 @error('username')
                     <div class="invalid-feedback">
                         {{ $message }}
                     </div>
                 @enderror
                 <i class="fw-bold">@</i>
             </div>
             <div class="input-box animation" style="--li:18;--s:1">
                 <input type="text" name="name" class="is-invalid" id="name" required autocomplete="off">
                 <label for="name">Name</label>
                 @error('name')
                     <div class="invalid-feedback">
                         {{ $message }}
                     </div>
                 @enderror
                 <i class="bx bxs-user"></i>
             </div>
             <div class="input-box animation" style="--li:18;--s:1">
                 <input type="email" name="email"class="is-invalid" id="email" required autocomplete="off">
                 <label for="email">Email</label>
                 @error('email')
                     <div class="invalid-feedback">
                         {{ $message }}
                     </div>
                 @enderror
                 <i class='bx bxl-gmail' style='color:#ffffff'></i>
             </div>
             <div class="input-box animation" style="--li:19;--s:2">
                 <input type="password" name="password" class="is-invalid" id="password" required autocomplete="off">
                 <label for="password">Password</label>
                 @error('password')
                     <div class="invalid-feedback">
                         {{ $message }}
                     </div>
                 @enderror
                 <i class="bx bxs-lock-alt"></i>
             </div>
             <div class="input-box animation" style="--li:20;--s:3">
                 <button class="btn-login" type="submit">Register</button>
             </div>
             <div class="regi-link animation" style="--li:21;--s:4">
                 <p>Have Acoount? <a href="#" class="singin">Sing In</a></p>
             </div>
         </form>

     </div>
     <div class="info-content Register">
         <h2 class="animation" style="--li:17;--s:0">WELCOME BACK!</h2>
         <p class="animation" style="--li:18;--s:1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Laboriosam,
             autem?</p>
     </div>
 </div>
