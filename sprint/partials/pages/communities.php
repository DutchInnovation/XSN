<?php
$db = new SprintDB('XSN');
$user_id = $_SESSION['user_id'];
$sql = "SELECT communities.id, communities.name, communities.description, communities.image, COUNT(DISTINCT community_members.user_id) AS member_count 
FROM communities 
LEFT JOIN community_members ON communities.id = community_members.community_id 
GROUP BY communities.id, communities.name, communities.description, communities.image";
$communities = $db->fetch_multiple($sql);

$sql = "SELECT community_id FROM community_members WHERE user_id = $user_id";
$community_ids = $db->fetch_multiple($sql);
$community_ids = array_column($community_ids, 'community_id');

for ($i = 0; $i < count($communities); $i++) {
  $communities[$i]['is_member'] = in_array($communities[$i]['id'], $community_ids);
}

usort($communities, function ($a, $b) {
  return $b['is_member'] <=> $a['is_member'];
});
?>

<style>
.community-square {
  width: 100%;
  border-radius: 5px;
  overflow: hidden;
  position: relative;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  transition: all 0.2s ease-in-out;
}
</style>

<div class="container">
  <div class="row mt-5">
    <?php foreach ($communities as $community) { ?>
      <div class="col-12 col-lg-6">
        <div class="community-square" style="border-radius:10px">
          <div class="row">
            <div class="col-6">
              <div class="p-2">
                <h3 class="mt-2 ml-2 font-weight-bold"><?php echo $community['name']; ?></h3>
                <p class="ml-2"><?php echo $community['description']; ?></p>
                <p class="ml-2">
                  <span class="badge badge-primary"><?php echo $community['member_count']; ?> members</span>
                  <?php if ($community['is_member']) { ?>
                    <span class="badge badge-success">Member</span>
                    <span class="badge badge-danger pointer">Leave</span>
                  <?php } else { ?>
                    <span class="badge badge-info pointer">Join</span>
                  <?php } ?>
                </p>
              </div>
            </div>
            <div class="col-6 text-right">
              <?php
              if ($community['image'] == "default") {
                $community['image'] = "default.png";
              } else {
                $community['image'] = $community['id'] . "." . $community['image'];
              }
              ?>
              <img class="m-3" style="border-radius:10px" height="100" src="assets/uploads/community-img/<?php echo $community['image']; ?>">
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>