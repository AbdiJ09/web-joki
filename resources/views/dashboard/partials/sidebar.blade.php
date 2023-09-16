  <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
      id="sidenav-main">
      <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
              aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0 " href="/dashboard">
              <span class="ms-1 font-weight-bold fs-4 text-white">AJ STORE</span>
          </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
          <ul class="navbar-nav mb-3">
              <li class="nav-item">
                  <a class="nav-link text-white {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <span class="material-symbols-outlined">
                              admin_meds
                          </span>
                      </div>
                      <span class="nav-link-text ms-1 fs-5 ">Home</span>
                  </a>
              </li>

          </ul>
          @can('admin')
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link text-white {{ Request::is('dashboard/orderan') ? 'active' : '' }}"
                          href="/dashboard/orderan">
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                              <span class="material-symbols-outlined">
                                  admin_meds
                              </span>
                          </div>
                          <span class="nav-link-text ms-1 fs-5 ">Admin</span>
                      </a>
                  </li>

              </ul>
          @endcan
      </div>

  </aside>
