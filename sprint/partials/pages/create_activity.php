<!-- 
  form with {
    community_id: current_community_id
    name: name
    description: description
    type: type
    description: description
    image: image
    location: location
    date_event: date_event
  }

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
</div>
 -->

<div class="card m-5" style="border-radius:10px">
  <div class="card-header">
    <h3 class="mb-0">Create Activity</h3>
  </div>
  <div class="card-body">
    <form action="controller" method="post" enctype="multipart/form-data">
      <input type="hidden" name="request" value="create_activity">

      <div class="form-group">
        <label for="activity-form-name">Community</label>
        <input id="activity-form-community-name" type="text" name="community_name" value="" disabled>
        <input id="activity-form-community-id" type="hidden" name="community_id" value="">
      </div>

      <div class="form-group">
        <label for="activity-form-name">Name</label>
        <input id="activity-form-name" type="text" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="activity-form-description">Description</label>
        <textarea id="activity-form-description" name="description" class="form-control" placeholder="Description"></textarea>
      </div>
      <div class="form-group">
        <label for="activity-form-type">Type</label>
        <select id="activity-form-type" name="type" class="form-control">
          <option value="1">Clubbing</option>
          <option value="2">Hiking</option>
          <option value="3">Gaming</option>
          <option value="4">Studying</option>
          <option value="5">Movie</option>
          <option value="6">Food</option>
        </select>
      </div>
      <div class="form-group">
        <label for="activity-form-image">Image</label>
        <input id="activity-form-image" type="file" name="image" class="form-control-file">
      </div>
      <div class="form-group">
        <label for="activity-form-location">Location</label>
        <input id="activity-form-location" type="text" name="location" class="form-control" placeholder="Location">
      </div>
      <div class="form-group">
        <label for="activity-form-date-event">Date Event</label>
        <input id="activity-form-date-event" type="date" name="date_event" class="form-control" placeholder="Date Event">
      </div>
      <button type="submit" class="btn btn-success">Create</button>
    </form>
  </div>
</div>