
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teams</title>
  <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://bootstrapmade.com/assets/css/demo.css?v=5.0">
</head>
<body>
  <header id="header" class="" style="margin-top:-47px;">
    <div class="logo">
        <h5 class="text-warning">Teams</h5>
    </div>
    <div class="current-template">
        <a href="{{route('teams.create')}}" class="btn btn-warning text-dark btn-sm">Create Team</a>
    </div>
</header>
<div class="col-12 p-0 fixed-top d-flex justify-content-end flex-row mt-2">
    @if (session('success'))
    <script>
        toastr.success("{{session()->get('success')}}");
        </script>
    @endif

    @if (session('error'))
    <script>
        toastr.success("{{session()->get('error')}}");
        </script>
    @endif
</div>
@php $id =1;  @endphp
<div class="mt-5">
  <table class="table text-light ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Team Name</th>
        <th scope="col">Team Size</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($teams as $team)
        <tr>
            <th scope="row">{{$id++}}</th>
            <td>{{$team->team_name}}</td>
            <td>{{$team->size}}</td>
            <td>
                <div class="row">
                    <a href="{{route('teams.edit',$team->id)}}" target="_blank" class="col btn btn-primary me-3">Edit</a>
                    <form action="{{route('teams.destroy',$team->id)}}" method="post" class="col">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
  </div>
 </body>
</html>
