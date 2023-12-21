@include('admin.elements.header')
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
            <div class="container-fluid">
                  <div class="row ">
                        <div class="col-sm-6">
                              <h1>Update Testimonial</h1>
                        </div>
                        <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.testimonials')}}">Testimonial</a></li>
                                    <li class="breadcrumb-item active">Update {{substr( $dataArr->title, 0, 10 )."..."}}</li>
                              </ol>
                        </div>
                  </div>
            </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
            <div class="container-fluid">
                  <form method="POST" class="dropzone needsclick" action="{{route('admin.testimonials.update', [$dataArr->id])}}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                            <h3 class="card-title">Testimonials Content</h3>
                                    </div>
                                    <!-- /.card-header -->

                                    <div class="card-body">
                                        
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="{{ __('Title') }}" value="{{$dataArr->title}}">
                                            @if($errors->has('title'))
                                                <div class="error">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Pic</label>
                                            <input type="file" class="dropify" id="image" name="image" data-default-file="{{url('../storage/app/'.$dataArr->image)}}">
                                            @if($errors->has('image'))
                                                <div class="error">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                            <!-- Right column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                            <h3 class="card-title">Meta data</h3>
                                    </div>
                                    <!-- /.card-header -->

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Short Description, Meta Description</label>
                                            <textarea type="text" class="form-control" id="short_description" name="short_description" placeholder="{{ __('Short Description, Meta Description here') }}" rows="4">{{$dataArr->short_description}}</textarea>
                                            @if($errors->has('short_description'))
                                                <div class="error">{{ $errors->first('short_description') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="1" >Active</option>
                                                <option value="0" >De-Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <!-- /.card -->

                            <!-- Right column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Description</h3>
                                    </div>
                                    <!-- /.card-header -->

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Description</label>
                                            <textarea type="text" class="ckeditor form-control" id="description" name="description" placeholder="{{ __('Blog Description') }}" rows="16">{{$dataArr->description}}</textarea>
                                            @if($errors->has('description'))
                                                    <div class="error">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="title">Keyword</label>
                                            <textarea type="text" class="form-control" id="keyword" name="keyword" placeholder="{{ __('Blog keyword') }}" rows="5">{{$dataArr->keyword}}</textarea>
                                            @if($errors->has('keyword'))
												<div class="error">{{ $errors->first('keyword') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <!-- /.card -->

                            <div class="col-md-12 text-center mb-4">
                                <a href="{{route('admin.testimonials')}}" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                                <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i> Submit</button>
                            </div>
                        </div>
                  </form>
            </div>
      </section>
</div>
<script>
$("#category_id").on( "change", function(){
      var category_id = $(this).val();
      $("#sub_category_id").find('.sub-category').addClass("d-none");
      $("#sub_category_id").find(".parent-category-"+category_id ).removeClass("d-none");
} );
</script>
@include('admin.elements.footer')
