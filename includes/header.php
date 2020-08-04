<header>

<?php
    $filenames = array(
      array("home.php", 'Home'),
      array("learn.php", "About E-bikes"),
      array("gallery.php", "Our Bikes"),
      array("rent.php", "Rental Info")
    );
?>

<nav>
    <ul class="nav_ul">

    <?php
        $counter= 1;
        $print_class="<li>";

        foreach ($filenames as $filename) {
          if ($filename[0] == $current) { $print_class = '<li class="current_page">';}
          if ($counter == 1 && $filename[0] == $current) {
            $print_class = '<li class="no_m_r current_page">';
          }else if ($counter == 1){
            $print_class = '<li class="no_m_r">';
          }
          if ($counter == 4 && $filename[0] == $current) {
            $print_class = '<li class="no_m_l current_page">';
          }else if ($counter == 4){
            $print_class = '<li class="no_m_l">';
          }

          echo ( $print_class . '<a href="' . $filename[0] . '">' . $filename[1] . '</a></li>');

          $counter = $counter+1;

          $print_class="<li>";
        }

    ?>
    </ul>

    <a href="index.php"><img id="nav_logo" src="../images/logo-small-round.png" alt="Boxy Bikes Logo" /></a>
    <!-- IMAGE SOURCE: given to us by our client -->

</nav>

</header>
