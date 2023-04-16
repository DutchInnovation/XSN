<left-nav>
  <div class="my-5">
    <nav-element class="no-hover">
      <img src="assets/img/logo.png" height="75px" alt="logo">
      <span>XSN</span>
    </nav-element>
  </div>

  <br>

  <nav-element class="active" onclick="navigate('feed-tab')">
    <span class="material-icons">home</span>
    <span>Home</span>
  </nav-element>
  <nav-element onclick="navigate('communities-tab')">
    <span class="material-icons">groups</span>
    <span>Communities</span>
  </nav-element>
  <nav-element onclick="navigate('activities-tab')">
    <span class="material-icons">event</span>
    <span>
      Activities
      <span id="activity-count" class="badge badge-pill badge-primary">3</span>
    </span>
  </nav-element>
  <nav-element onclick="navigate('search-tab')">
    <span class="material-icons">search</span>
    <span>Search</span>
  </nav-element>
  <nav-element onclick="navigate('scoreboard-tab')">
    <span class="material-icons">emoji_events</span>
    <span>Scoreboard</span>
  </nav-element>

  <?php if (isset($_SESSION["loggedin"])) { ?>
    <nav-element onclick="navigate('profile-tab')">
      <span class="material-icons">person</span>
      <span>Profile</span>
    </nav-element>
    <nav-element style="position:absolute;bottom:0px" onclick="navigate('settings-tab')">
      <span class="material-icons">settings</span>
      <span>Settings</span>
    </nav-element>
  <?php } else { ?>
    <nav-element onclick="window.location.href = 'login'">
      <span class="material-icons">login</span>
      <span>Login / Sign Up</span>
    </nav-element>
  <?php } ?>

</left-nav>