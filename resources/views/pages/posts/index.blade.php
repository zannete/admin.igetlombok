@extends("layouts.app")

@section("menu")
  @include("components.leftMenu")
  @include("components.topMenu")
@endsection

@section("content")
  <div class="page-content-inner">
    <nav class="top-submenu top-submenu-with-background">
      <div class="row">
        <div class="col-md-6">
          <h3>All Posts</h3>
          <ul class="list-unstyled breadcrumb">
            <li><span>Posts</span></li>
          </ul>
        </div>
        <div class="col-md-6 text-right">
          <a class="btn btn-primary" href="/posts/create">Add New</a>
        </div>
      </div>
    </nav>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group row">
            <div class="col-md-9">
              {{ Form::text("search", "", ["class" => "form-control"]) }}
            </div>
            <div class="col-md-3">
              <input type="submit" class="btn btn-default" value="Search"/>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-body clear-padding">
            <table class="table">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Category</th>
                  <th>Updated Date</th>
                </tr>
              </thead>
              <tbody>
                @php $counter = (!isset($startIndex))?1:$startIndex; @endphp
                @foreach($posts as $post)
                  <tr>
                    <th scope="row">{{ $counter }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author->name }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ date_format(date_create($post->updated_at), "d F Y") }}</td>
                  </tr>
                  @php $counter++ @endphp
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{ $posts->links() }}
      </div>
    </div>
  </div>
@endsection

@section("additionalJS")
@endsection