<div class="tab-pane fade show" id="section1" role="tabpanel" aria-labelledby="section1-tab">
    <form class="form" action="{{ url('/section1/save') }}" method="POST">
        <div class="headerText">
            <h4 class="mg-b-25">Introduction Management</h4>
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
        @csrf
        @if(isset($Data))
            <label for="home_section1_title">Title:</label>
            <input type="text" class="form-control" placeholder="Enter title" name="home_section1_title" value="{{ $Data->home_section1_title }}" required>
            <label for="home_section1_text">Text:</label>
            <textarea class="form-control" placeholder="Enter text" rows="4" name="home_section1_text" required>{{ $Data->home_section1_text }}</textarea>
            <label for="home_section2_videoid">Vimeo Video ID:</label>
            <input type="text" class="form-control" placeholder="Enter Video ID" name="home_section2_videoid" value="{{ $Data->home_section2_videoid }}">
            <p><strong>Note:</strong> Please enter only the Vimeo Video ID. To get a Video ID, you can open a video in Vimeo, and in the URL bar, you will find something similar to this - "https://vimeo.com/472927205," where "472927205" is the Video ID.
            <input type="hidden" name="id" value="{{ $Data->id }}">
        @endif
    </form>
</div>
