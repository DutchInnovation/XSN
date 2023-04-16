<div class="container">
  <div class="row mt-5">
    <div class="col-12">
      <div class="d-flex align-items-center">
        <img class="pfp rounded-circle" src="assets/uploads/profile-img/<?= $_SESSION['user_id'] ?>.<?= $user['profile_image'] ?>" width="150" height="150">
        <div class="ml-3 w-100">
          <h2 class="mb-4">
            <?= $user['username'] ?>
            <span class="badge badge-secondary py-2 float-right">Level <?= $user['level'] ?></span>
          </h2>
          <h4 class="mb-0">
            <?php 
            if ($user['country'] != "") {
              echo '<img width="35" src="https://flagsapi.com/' . $user['country'] . '/flat/64.png">';
            }
            ?>
            <?= $user['full_name'] ?>
            <span class="btn btn-primary shadow-none float-right" onclick="navigate('edit-profile-tab')">Edit Profile</span>
          </h4>
        </div>
      </div>
    </div>
    <div class="col-12 mt-5">
      <h5>
        <?php if ($user['bio'] == ""): ?>
          <span class="text-muted">No bio</span>
        <?php else: ?>
          <?= $user['bio'] ?>
        <?php endif; ?>
      </h5>
    </div>
    <div class="col-12 mt-4">
      <ul class="nav nav-justified nav-tabs" id="justifiedTab" role="tablist">
        <li class="nav-item">
          <a aria-controls="posts" aria-selected="true" class="nav-link active" data-toggle="tab" href="#posts" id="posts-tab" role="tab">posts</a>
        </li>
        <li class="nav-item">
          <a aria-controls="activities" aria-selected="false" class="nav-link" data-toggle="tab" href="#activities" id="activities-tab" role="tab">activities</a>
        </li>
      </ul>
      <div class="tab-content" id="justifiedTabContent">
        <div aria-labelledby="posts-tab" class="tab-pane fade show active" id="posts" role="tabpanel">...</div>
        <div aria-labelledby="activities-tab" class="tab-pane fade" id="activities" role="tabpanel">...</div>
      </div>
    </div>
  </div>
</div>