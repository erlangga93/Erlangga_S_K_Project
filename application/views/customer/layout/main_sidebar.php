  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php
        // data main menu
        $main_menu = $this->db->get_where('menu', array('is_main_menu' => 0));
        foreach ($main_menu->result() as $main) {
          // Query untuk mencari data sub menu
          $sub_menu = $this->db->get_where('menu', array('is_main_menu' => $main->id_menu));
          // periksa apakah ada sub menu
          if ($sub_menu->num_rows() > 0) {
            // main menu dengan sub menu
            echo "<li class='treeview'>" . anchor($main->link, '<i class="' . $main->icon . '"></i>' . $main->judul_menu .
              '<span class="pull-right-container">
                                                  <i class="fa fa-angle-left pull-right"></i>
                                              </span>');
            // sub menu nya disini
            echo "<ul class='treeview-menu'>";
            foreach ($sub_menu->result() as $sub) {
              echo "<li>" . anchor($sub->link, '<i class="' . $sub->icon . '"></i>' . $sub->judul_menu) . "</li>";
            }
            echo "</ul></li>";
          } else {
            // main menu tanpa sub menu
            echo "<li>" . anchor($main->link, '<i class="' . $main->icon . '"></i>' . $main->judul_menu) . "</li>";
          }
        }
        ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>