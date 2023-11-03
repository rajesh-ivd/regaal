<div class="tab-pane fade show" id="section2" role="tabpanel" aria-labelledby="section2-tab">
  <form class="form" action="">
    <div class="headerText">
      <h4 class="mg-b-25">Journey Management</h4>
      <button type="button" class="btn btn-warning" style="margin-left: 635px;" data-toggle="modal" data-target="#exampleModal3">Add Year</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
    @if($JourneyData)
    @foreach ($JourneyData as $data)
    <label for="home_section2_title">Title:</label>
    <input type="text" class="form-control" placeholder="Enter title" id="home_section2_title" value="{{ $data->title }}">

    <h5>Timeline:</h5>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Year</th>
          <th>Text</th>
          <th style="width: 170px;">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $data->year }}</td>
          <td>{{ $data->text }}</td>
          <td>
            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal4" onclick="editTimeline({{ $data->id }})"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            <button class="btn btn-sm btn-danger" onclick="deleteTimeline({{ $data->id }})"><i class="fa fa-trash" aria-hidden="true"></i></button>
          </td>
        </tr>
        <!-- Add more timeline rows here -->
      </tbody>
    </table>
    @endforeach
    @endif
  </form>
</div>

<div class="modal fade" id="exampleModal4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Timeline</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form class="form" action="" >
          <input type="hidden" name="home_timeline_id_edit" id="home_timeline_id_edit">
          <label for="home_timeline_year_edit">Year:</label>
          <input type="text" class="form-control" placeholder="Enter year" required id="home_timeline_year_edit">
          <label for="home_timeline_text_edit">Text:</label>
          <textarea class="form-control" placeholder="Enter text" rows="3" id="home_timeline_text_edit" required></textarea>
          <button type="button" class="btn btn-success">Update</button>
          <p style="color: red; font-size: 15px;"><b id="about_section5_error_edit"></b></p>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
