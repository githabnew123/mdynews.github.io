<div class="justify-content-center">
    <form  action="../functions/routes.php" method="post" enctype="multipart/form-data">
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" id="magazine" class="btn btn-outline-info">Magazine</button>
        <button type="button" id="news" class="btn btn-outline-info">NEWs</button>
        <button type="button" id="poem" class="btn btn-outline-info">Poem</button>
      </div>
      <div class="row mt-2">
          <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <label for="title">Title :</label>
              <input type="text" class="form-control" placeholder="Title" id="title" required="required" name="title">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-6" id="title_type">
            <label for="title_type"> Type Of Title :</label>
              <select class="custom-select" id="title_type" name="title_type">
                <option selected>Select Type of Title</option>
                <option value="Business">Business</option>
                <option value="Education">Education</option>
                <option value="Politics">Politics</option>
              </select>
          </div>
        </div>
        <div class="row mt-2" id="only_news">
          <div class="form-group col-lg-3 col-md-3 col-sm-3">
            <label for="sub_title">Subtitle :</label>
              <input type="text" class="form-control" placeholder="Subtitle" id="sub_title" name="sub_title">
          </div>
          <div class="form-group col-lg-3 col-md-3 col-sm-3" id="general_type">
            <label for="general_type"> General Type :</label>
              <select class="custom-select" id="general_type" name="general_type">
                <option selected>Select General Type</option>
                <option value="Global" id="global">Global</option>
                <option value="Local">Local</option>
              </select>
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-6" id="global_location">
            <label for="location">Location :</label>
              <input type="text" class="form-control" placeholder="Global Location" id="location" name="global_location">
          </div>
          <div class="form-group col-lg-3 col-md-3 col-sm-3" id="local_location">
            <label for="city">City :</label>
              <input type="text" class="form-control" placeholder="City" id="city" name="city">
          </div>
          <div class="form-group col-lg-3 col-md-3 col-sm-3" id="local_location1">
            <label for="address">Address :</label>
              <input type="text" class="form-control" placeholder="Address" id="address" name="address">
          </div>
        </div>
        <div class="row mt-2">
          <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <label for="author_name">Author Name :</label>
              <input type="text" class="form-control" placeholder="Author Name" id="author_name" required="required" name="author_name">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-6" id="photo_video">
            <label for="file">Choose Pictures or Video</label>
            <input type="file" name="files[]" class="form-control-file" multiple>
          </div>
          <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label>Content</label>
            <textarea class="form-control" name="content" rows="5"></textarea>
          </div>
          <div class="form-group col-lg-3 col-md-3 col-sm-3 row justify-content-between">
            <input type="reset" name="Clear" value="Clear" class="btn btn-danger col-lg-5 col-md-5 col-sm-5">
            <input type="submit" name="save_post" value="Post" class="btn btn-success col-lg-5 col-md-5 col-sm-5">
          </div>
    </form>
</div>