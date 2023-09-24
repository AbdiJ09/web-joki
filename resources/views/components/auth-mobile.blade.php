  <div class="login-box">

      <p>AJ STORE</p>

      <form action="/login" method="POST">
          @csrf
          <div class="user-box">
              <input required="" name="email" type="text">
              <label>Email</label>
              <i class="bx bxs-user"></i>

          </div>
          <div class="user-box">
              <input required="" name="password" type="password">
              <label>Password</label>
              <i class="bx bxs-lock-alt"></i>

          </div>
          <div class="input-box animation mb-3">
              <button class="btn-login" type="submit">Login</button>
          </div>
      </form>
      <p>Don't have an account? <a href="" class="a2">Sign up!</a></p>
  </div>
