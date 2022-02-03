<nav>
  <ul>
    <li>
    	<a href="?" style="color:#090;">
	      <i class="fas fa-sync-alt"></i> &nbsp;
      	Refresh
      </a>
    </li>   
		<?php
			$nav_buf = '';
      foreach ($list_nav[$list_nav_key] as $assoc)
      {
				if (count($assoc) > 0)
				{
					$nav_buf .= '<li>|</li>
					<li>
						<a href="'.$assoc[0].'">
							<i class="'.$assoc[1].'"></i> &nbsp;
							'.$assoc[2].'
						</a>
					</li>';
				}
      }
			echo $nav_buf;
    ?>
  </ul>
  <span>
    <i class="fas fa-folder-open"></i> &nbsp;
    <b><?php echo $list_nav_size? $list_nav_key.' (*'.money_f($list_nav_size).')': $list_nav_key; ?></b>
		<?php echo $list_nav_bread? '<b>/ </b> ' . $list_nav_bread: ''; ?>
  </span>
</nav>