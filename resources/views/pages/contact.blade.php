@extends('layout.default_layout')

@section('content')


    <div id="contact" class="container">
        <h3 class="text-center">Contact</h3>
        <p class="text-center"><em>We love our fans!</em></p>

        <div class="row">
            <div class="col-md-4">
                <p>Fan? Drop a note.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
            </div>

            <form action="{{ route('blog.contact') }}" method="POST">
                @csrf
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" value="{{ old('name') }}" name="name"
                                placeholder="Name" type="text">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email"value="{{ old('email') }}" name="email"
                                placeholder="Email" type="text">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="phone" name="phone"
                                value="{{ old('phone') }}"placeholder="phone" type="text">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <textarea class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="address"
                        rows="5">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
