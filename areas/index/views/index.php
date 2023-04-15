<?php
$site_name .= " - home";
$page_description = "Activity Feed";

import("sprint/partials/nav.php");
import("sprint/partials/activities.php");
?>

<content-tab class="d-block" id="feed-tab">
  <?php import("sprint/partials/pages/feed.php"); ?>
</content-tab>
<content-tab class="d-none" id="search-tab">
  <?php import("sprint/partials/pages/search.php"); ?>
</content-tab>
<content-tab class="d-none" id="explore-tab">
  <?php import("sprint/partials/pages/explore.php"); ?>
</content-tab>
<content-tab class="d-none" id="scoreboard-tab">
  <?php import("sprint/partials/pages/scoreboard.php"); ?>
</content-tab>
<content-tab class="d-none" id="settings-tab">
  <?php import("sprint/partials/pages/settings.php"); ?>
</content-tab>
<content-tab class="d-none" id="profile-tab">
  <?php import("sprint/partials/pages/profile.php"); ?>
</content-tab>