<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{route_is('home')?'':'collapsed'}}" href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>



      <li class="nav-item">
        <a class="nav-link {{route_is('home')?'':'collapsed'}}"
        data-bs-target="#components-nav"
        data-bs-toggle="collapse"
        href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span></span>
            </a>
          </li>
        </ul>
      </li>
      

    </ul>

  </aside>
