@extends('layout.default_layout')

@section('content')



    <div id="contact" class="container">
        <h3 class="text-center">Update Contact</h3>


        <div class="row">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('danger') }}
                </div>
            @endif
            <form action="{{ route('blog.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" value="{{ $oldcontact->name }}" name="name"
                                placeholder="Name" type="text">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" value="{{ $oldcontact->email }}" name="email"
                                placeholder="Email" type="text">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="phone" name="phone"
                                value="{{ $oldcontact->phone }}"placeholder="phone" type="text">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="file" class="form-control" value="{{ old('image') }}" name="image"
                                placeholder="image" type="text">

                        </div>
                    </div>
                    <textarea class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="address"
                        rows="5">{{ $oldcontact->address }}</textarea>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>

                    <input type="hidden" name="id" value="{{ $oldcontact->id }}">

                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
