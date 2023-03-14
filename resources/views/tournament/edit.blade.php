
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
  <title>Add Tournament</title>
  <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://bootstrapmade.com/assets/css/demo.css?v=5.0">
</head>
<body>
    <header id="header" class="" style="margin-top:-27px;">
        <div class="logo">
            <h5 class="text-warning">Create Your Tournament</h5>
        </div>
        <div class="current-template">
            <a href="{{route('tournament.index')}}" class="btn btn-warning text-dark btn-sm">View Tournament</a>
        </div>
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
    </header>
    <div class="mt-5">
        <form class="text-light" action="{{route('tournament.update',$edit->id)}}" method="post">
            @method('patch')
            @csrf
            <div class="row g-3">    
                <div class="mb-3 col">
                    <label class="form-label">Team Name</label>
                    <input type="Text" class="form-control @error('tournament_name') is-invalid @enderror" name="tournament_name" value="{{$edit->tournament_name}}">
                    @error('tournament_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label class="form-label">Team Size</label>
                    <input type="number" class="form-control @error('team_size') is-invalid @enderror" name="team_size" value="{{$edit->team_size}}">
                    @error('team_size')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>







