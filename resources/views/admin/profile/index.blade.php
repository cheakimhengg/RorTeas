@extends('admin.layout.master')

@section('contents')
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Create New Post</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">Create New Post</div>
      </div>
    </div>

    <div class="section-body">


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Write Your Post</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Avatar</label>
                      <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="avatar" id="image-upload" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Banner</label>
                      <div id="image-preview-2" class="image-preview">
                        <label for="image-upload-2" id="image-label-2">Choose File</label>
                        <input type="file" name="banner" id="image-upload-2" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Email <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Phone <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="phone" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Address <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="address" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">About <span class="text-danger">*</span></label>
                      <textarea class="form-control" name="about" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Website</label>
                      <input type="text" class="form-control" name="website">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Facebook</label>
                      <input type="text" class="form-control" name="fb_link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">X</label>
                      <input type="text" class="form-control" name="x_link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Linkin</label>
                      <input type="text" class="form-control" name="in_link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Whatsappp</label>
                      <input type="text" class="form-control" name="wa_link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Instagram</label>
                      <input type="text" class="form-control" name="inta_link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <Button type="submit" class="btn btn-primary">Update</Button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script>
    $.uploadPreview({
      input_field: "#image-upload", // Default: .image-upload
      preview_box: "#image-preview", // Default: .image-preview
      label_field: "#image-label", // Default: .image-label
      label_default: "Choose File", // Default: Choose File
      label_selected: "Change File", // Default: Change File
      no_label: false, // Default: false
      success_callback: null // Default: null
    });

    $.uploadPreview({
      input_field: "#image-upload-2", // Default: .image-upload
      preview_box: "#image-preview-2", // Default: .image-preview
      label_field: "#image-label-2", // Default: .image-label
      label_default: "Choose File", // Default: Choose File
      label_selected: "Change File", // Default: Change File
      no_label: false, // Default: false
      success_callback: null // Default: null
    });
  </script>
@endpush
