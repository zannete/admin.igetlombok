@extends("layouts.app")

@section("menu")
  @include("components.leftMenu")
  @include("components.topMenu")
@endsection

@section("content")
  <div class="page-content-inner">
    <nav class="top-submenu top-submenu-with-background">
      <div class="row">
        <div class="col-md-12">
          <h3>Add New Post</h3>
          <ul class="list-unstyled breadcrumb">
            <li><a href="/posts"><span>Posts</span></a></li>
            <li><span>Add New Post</span></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="row">
      <div class="col-md-9">
        <div class="panel panel-with-borders">
          <div class="panel-heading form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Your Title" name="title"/>
          </div>
          <div class="panel-body">
            <input id="hiddenContent" type="hidden" name="content" value=""/>
            <label>Content</label>
            <div class="summernote"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-body">
                <label>Category</label>
                <select class="form-control" name="category">
                  @foreach($categories as $category)
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <button class="btn btn-primary btn-block">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section("additionalJS")
  <script>
    $(function(){
      $('.summernote').summernote({
        height: 350,
        callbacks: {
          onChange: function(contents, $editable){
            console.log("onChange: ", contents, $editable);
          }
        }
      });
    });
  </script>
@endsection