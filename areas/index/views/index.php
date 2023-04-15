<?php
$site_name .= " - home";
$page_description = "Activity Feed";

include("sprint/partials/nav.php");
include("sprint/partials/activities.php");

$db = new SprintDB('XSN');
$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email, date_joined, is_staff, is_superuser, profile_image, bio, country FROM users WHERE id = $user_id LIMIT 1";
$user = $db->fetch($sql);
?>

<content-tab class="d-block" id="feed-tab">
  <?php include("sprint/partials/pages/feed.php"); ?>
</content-tab>
<content-tab class="d-none" id="search-tab">
  <?php include("sprint/partials/pages/search.php"); ?>
</content-tab>
<content-tab class="d-none" id="explore-tab">
  <?php include("sprint/partials/pages/explore.php"); ?>
</content-tab>
<content-tab class="d-none" id="scoreboard-tab">
  <?php include("sprint/partials/pages/scoreboard.php"); ?>
</content-tab>
<content-tab class="d-none" id="settings-tab">
  <?php include("sprint/partials/pages/settings.php"); ?>
</content-tab>
<content-tab class="d-none" id="profile-tab">
  <?php include("sprint/partials/pages/profile.php"); ?>
</content-tab>