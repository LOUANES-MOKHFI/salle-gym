<ul class="sidebar-menu" data-widget="tree">
   <li >
     <a href="{{ url('/admin') }}">
      <i class="fa fa-home"></i>
      <span>Accueil</span>
      </a>
  </li>
</ul>
<ul class="sidebar-menu" data-widget="tree">
   <li class="active treeview">
     <a href="#">
      <i class="fa fa-users"></i>
      <span>Gerer les membres</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/membre') }}"><i class="fa fa-circle-o"></i> Liste des membres</a></li>
        <li><a href="{{ url('admin/membre/create') }}"><i class="fa fa-circle-o"></i> Ajouter un membre</a></li>
      </ul>
  </li>
</ul>
<ul class="sidebar-menu" data-widget="tree">
   <li class="active treeview">
     <a href="#">
      <i class="fa fa-gears"></i>
      <span>Parametres de site</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/sitesetting') }}"><i class="fa fa-circle-o"></i> Parametres des pages</a></li>
        <li><a href="{{ url('admin/sitesetting/gallerie') }}"><i class="fa fa-circle-o"></i> Gallerie d'images</a></li>
        <!--li><a href="{{ url('admin/sitesetting/planning') }}"><i class="fa fa-circle-o"></i> Ajouter un planning</a></li-->
        <li><a href="{{ url('admin/sitesetting/service') }}"><i class="fa fa-circle-o"></i> Ajouter les services</a></li>
      </ul>
  </li>
</ul>

