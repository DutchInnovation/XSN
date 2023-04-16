<script>
var current_community_id = -1

function join_community(btn, community_id) {
  var result = $.post("controller", {
    request: "join_community",
    community_id: community_id
  }).then(() => {
    $(btn).attr("onclick", "leave_community(this, " + community_id + ")")
    $(btn).html("Leave")
    $(btn).removeClass("btn-info")
    $(btn).addClass("btn-danger")
  })
}

function leave_community(btn, community_id) {
  var result = $.post("controller", {
    request: "leave_community",
    community_id: community_id
  }).then(() => {
    $(btn).attr("onclick", "join_community(this, " + community_id + ")")
    $(btn).html("Join")
    $(btn).removeClass("btn-danger")
    $(btn).addClass("btn-info")
  })
}

function load_community(id) {
  current_community_id = id

  var result = $.post("controller", {
    request: "load_community",
    community_id: id
  }).then((data) => {
    var data = JSON.parse(data)

    if (data.community.banner == 'default') {
      $("#c-banner").attr("src", "assets/uploads/community-banner/default.png")
    } else {
      $("#c-banner").attr("src", "assets/uploads/community-banner/" + data.community.id + "." + data.community.banner)
    }

    if (data.community.image == 'default') {
      $("#c-img").attr("src", "assets/uploads/community-img/default.png")
    } else {
      $("#c-img").attr("src", "assets/uploads/community-img/" + data.community.id + "." + data.community.image)
    }

    $("#c-name").html(data.community.name)
    $("#c-description").html(data.community.description)

    if (data.is_member) {
      $("#join-community").attr("onclick", "leave_community(this, " + data.community.id + ")")
      $("#join-community").html("Leave")
      $("#join-community").removeClass("btn-info")
      $("#join-community").addClass("btn-danger")
    } else {
      $("#join-community").attr("onclick", "join_community(this, " + data.community.id + ")")
      $("#join-community").html("Join")
      $("#join-community").removeClass("btn-danger")
      $("#join-community").addClass("btn-info")
    }

    document.getElementById("activities").innerHTML = ""
    if (data.activities.length == 0) {
      document.getElementById("activities").innerHTML = `
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="text-center text-black-50 my-3">No activities found</h3>
            </div>
          </div>
        </div>
      `
    } else {
      var html_string = ""
      for (var i = 0; i < data.activities.length; i++) {
        html_string += `
          <activity>
            <activity-image>
              <img class="mb-3" src="assets/uploads/activity-img/${data.activities[i].id}.${data.activities[i].image}" width="150" height="150">
            </activity-image>
            <activity-info>
              <activity-name>${data.activities[i].name}</activity-name>
              <activity-description>${data.activities[i].description}</activity-description>
              <br>
              <activity-location>${data.activities[i].location}</activity-location>
            </activity-info>
            <activity-options>
              <button class="btn btn-info mb-3" onclick="navigate('activity-tab', ${data.activities[i].id})">Join</button><br>
              <button class="btn btn-primary" onclick="navigate('activity-tab', ${data.activities[i].id})">Details</button>
            </activity-options>
          </activity>
        `
      }
      document.getElementById("activities").innerHTML = html_string
    }

  }).then(() => {
    navigate("community-tab")
  })
}

function create_activity() {
  document.getElementById("activity-form-community-id").value = current_community_id
  document.getElementById("activity-form-community-name").value = $("#c-name").html()
  navigate("create-activity-tab")
}
</script>

<img id="c-banner" class="w-100" height="150" src="assets/uploads/community-banner/default.png">
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-3">
      <img id="c-img" height="150" width="150" src="assets/uploads/community-img/default.png">
    </div>
    <div class="col-7">
      <div class="mt-5">
        <h3 id="c-name">Community name</h3>
        <p id="c-description">Community description</p>
      </div>
    </div>
    <div class="col-2">
      <button id="join-community" class="btn btn-info float-right mt-5" onclick="join_community(this, current_community_id)">Join</button>
    </div>
  </div>
</div>

<hr>

<feed-header>
  <h3 class="text-center mb-0">New Activities</h3>
</feed-header>

<hr>

<div id="activities"></div>

<button class="btn btn-float btn-success my-1" type="button" onclick="create_activity()">
  <i class="fas fa-plus"></i>
</button>