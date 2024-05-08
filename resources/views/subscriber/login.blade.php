<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.head')
</head>
<body>
    @if(Session::has('error'))

        <div class="alert alert-danger">
            
           {{Session::get('error')}}
        </div>

    @endif

   @if(Session::has('success'))

        <div class="alert alert-success">
            
           {{Session::get('success')}}
        </div>

    @endif
    <form action="{{route('login.post')}}" method="POST">
        @csrf
        <div class="container">
            <h1 class="mb-3">Login</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" value="{{old('email')}}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('email')
          <div class="text-danger">
            {{$message}}
          </div>              
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" value="{{old('password')}}" name="password" id="exampleInputPassword1">
          @error('password')
          <div class="text-danger">
            {{$message}}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      </form>
</body>
</html>