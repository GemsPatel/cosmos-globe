@include('admin.elements.header')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-6">
                              <h1>Create G-Ads</h1>
                        </div>
                        <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.menu')}}">G-Ads</a></li>
                                    <li class="breadcrumb-item active">Create G-Ads</li>
                              </ol>
                        </div>
                  </div>
            </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
            <div class="container-fluid">
                  <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                              <!-- general form elements -->
                              <div class="card card-primary">
                                    <div class="card-header">
                                          <h3 class="card-title">New G-Ads</h3>
                                    </div>
                                    <!-- /.card-header -->
                  
                                    <!-- form start -->
                                    <form method="POST" action="{{route('admin.gads.update', [$dataArr->id])}}">
                                          @csrf
                                          <div class="card-body">
                                                <div class="row">
                                                      <!-- left column -->
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label for="status">G-Ads Type</label>
                                                                  <select class="form-control" name="ad_type_id" id="ad_type_id">
                                                                        @foreach ($menuArr as $ar)
                                                                              <option value="{{$ar->id}}" {{( $dataArr->ad_type_id == $ar->id) ? 'selected' : '' }}>{{$ar->name}}</option>
                                                                        @endforeach
                                                                  </select>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="name">G-Ad Name</label>
                                                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$dataArr->name}}" autofocus>
                                                                  @if($errors->has('name'))
                                                                        <div class="error">{{ $errors->first('name') }}</div>
                                                                  @endif
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="status">Status</label>
                                                                  <select class="form-control" name="status" id="status">
                                                                        <option value="1" {{( $dataArr->status == 1 ) ? 'selected' : '' }}>Active</option>
                                                                        <option value="0" {{( $dataArr->status == 0 ) ? 'selected' : '' }}>De-Active</option>
                                                                  </select>
                                                            </div>
                                                      </div>

                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label for="content">Content</label>
                                                                  <textarea class="form-control" id="content" name="content" rows="8" placeholder="Ads load Content">{{$dataArr->content}}</textarea>
                                                                  @if($errors->has('content'))
                                                                        <div class="error">{{ $errors->first('content') }}</div>
                                                                  @endif
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- /.card-body -->

                                          <div class="card-footer text-center">
                                                <a href="{{route('admin.menu')}}" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                                                <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i> Submit</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                        <!-- /.card -->
                  </div>
            </div>
      </section>
</div>
@include('admin.elements.footer')