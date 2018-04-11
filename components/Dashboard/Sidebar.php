<div class="sidebar animated slideInUp" data-color="purple" data-image="/dist/img/sidebar-1.jpg" style="background-color:#EEE !important;">
		<div class="logo">
			<a href="index.php" class="simple-text">
				EVENTs
			</a>
		</div>

    	<div class="sidebar-wrapper">
         <ul class="nav">

				<?php
					$current = isset($_GET['page']) ? $_GET['page'] : 'default';
				?>

            <li <?php if ($current == 'dashboard' || $current == 'default'){echo "class='active'";}?>>
               <a href="?page=dashboard"><i class="material-icons">dashboard</i><p class="khmer-title">ទូទៅ</p></a>
            </li>

            <li <?php if ($current == 'events'){echo "class='active'";}?>>
               <a href="?page=events"><i class="material-icons">event</i><p class="khmer-title">ព្រឹត្តិការណ៏</p></a>
            </li>

            <li <?php if ($current == 'users'){echo "class='active'";}?>>
              <a href="?page=users"><i class="material-icons">supervisor_account</i><p class="khmer-title">អ្នកប្រើប្រាស់</p></a>
           </li>
         <!-- <li class="active-pro">
            <a href="upgrade.html">
               <i class="material-icons">unarchive</i>
               <p>Project</p>
           </a>
         </li> -->
         </ul>
    	</div>
	</div>
