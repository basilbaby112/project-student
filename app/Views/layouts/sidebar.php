<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Students Details</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= base_url('students')?>">
          <i class="bi bi-circle"></i><span>View Students</span>
        </a>
      </li>
      <li>
        <a href="<?= base_url('marks')?>">
          <i class="bi bi-circle"></i><span>Add Marks</span>
        </a>
      </li>
    </ul>
  </li>

</ul>

</aside>