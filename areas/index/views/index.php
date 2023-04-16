<?php
$site_name .= " / Home";
$page_description = "Activity Feed";

include("sprint/partials/nav.php");
include("sprint/partials/activities.php");

$db = new SprintDB('XSN');
$user_id = $_SESSION['user_id'];
$sql = "SELECT exp, username, full_name, email, date_joined, is_superuser, profile_image, bio, country FROM users WHERE id = $user_id LIMIT 1";
$user = $db->fetch($sql);
$user['level'] = floor(sqrt($user['exp'] / 100));
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
<content-tab class="d-none" id="communities-tab">
  <?php include("sprint/partials/pages/communities.php"); ?>
</content-tab>
<content-tab class="d-none" id="profile-tab">
  <?php include("sprint/partials/pages/profile.php"); ?>
</content-tab>
<content-tab class="d-none" id="edit-profile-tab">
  <?php include("sprint/partials/pages/edit-profile.php"); ?>
</content-tab>
<content-tab class="d-none" id="settings-tab">
  <?php include("sprint/partials/pages/settings.php"); ?>
</content-tab>

<script>
if (anchorp.Get() != undefined && anchorp.Get().length > 0) {
  navigate(anchorp.Get()[0])
  anchorp.Clear()
}
</script>