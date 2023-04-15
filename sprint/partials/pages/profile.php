<div class="container">
  <div class="row mt-5">
    <div class="col-12">
      <div class="d-flex align-items-center">
        <img class="rounded-circle" src="assets/uploads/profile-img/<?= $user['profile_image'] ?>" width="150" height="150">
        <div class="ml-3 w-100">
          <h2 class="mb-4"><?= $_SESSION['username'] ?>
            <span class="badge badge-secondary py-2 float-right">Level 13</span>
          </h2>
          <h4 class="mb-0">Full Name
            <a class="btn btn-primary shadow-none float-right" href="edit-profile.php">Edit Profile</a>
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