<div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="{{url('dashboard')}}" class="nav_logo">
            <i class="bx bx-layer nav_logo-icon"></i>
            <span class="nav_logo-name">Admin Panel</span>
          </a>
          <div class="nav_list">
            <a href="{{url('dashboard')}}" class="nav_link active">
              <i class='bx bx-list-ul nav_icon' ></i>
              <span class="nav_name">Forms List</span>
            </a>
            <a href="{{url('customer-list')}}" class="nav_link">
              <i class="bx bx-images nav_icon"></i>
              <span class="nav_name">Logo Quote</span>
            </a>
            <a href="{{url('customer-package')}}" class="nav_link">
              <i class="bx bx-images nav_icon"></i>
              <span class="nav_name">Package Design</span>
            </a>
            <a href="{{url('show-list')}}" class="nav_link">
              <i class="bx bx-images nav_icon"></i>
              <span class="nav_name">Card</span>
            </a>
            <!-- <a href="#" class="nav_link">
              <i class="bx bx-message-square-detail nav_icon"></i>
              <span class="nav_name">Messages</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-bookmark nav_icon"></i>
              <span class="nav_name">Bookmark</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-folder nav_icon"></i>
              <span class="nav_name">Files</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
              <span class="nav_name">Stats</span>
            </a> -->
          </div>
        </div>
        <a href="{{route('logout')}}" class="nav_link">
          <i class="bx bx-log-out nav_icon"></i>
          <span class="nav_name">SignOut</span>
        </a>
      </nav>
    </div>
