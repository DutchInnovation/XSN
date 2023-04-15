<?php
$site_name .= " - home";
$page_description = "Zie alle evenementen.";

import("sprint/partials/nav.php");
import("sprint/partials/activities.php");
?>

<content-tab class="d-block" id="feed-tab">
  <?php import("sprint/partials/pages/feed.php"); ?>
</content-tab>
<content-tab class="d-none" id="search-tab">
  <?php import("sprint/partials/pages/search.php"); ?>
</content-tab>