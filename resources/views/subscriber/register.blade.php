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
    <form action="{{route('subscriber.store')}}" method="POST">
        @csrf
        <div class="container">
            <h1 class="mb-3"> Register</h1>
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
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="text" class="form-control" value="{{old('password_confirmation')}}" name="password_confirmation"  id="exampleInputPassword1">
            @error('password_confirmation')
            <div class="text-danger">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">First_name</label>
            <input type="text" class="form-control" value="{{old('first_name')}}" name="first_name" id="exampleInputPassword1">
            @error('first_name')
            <div class="text-danger">
              {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Last_name</label>
            <input type="text" class="form-control" value="{{old('last_name')}}" name="last_name" id="exampleInputPassword1">
            @error('last_name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="exampleInputPassword1">
            @error('phone')
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