@extends('layouts.app')

@section('content')

<div class="container">

    <form method="POST" enctype="multipart/form-data">
        @csrf

        <input type="file" class="form-control" name="character_image">

        <button type="submit" class="btn btn-primary">Continue</button>
        
    </form>

</div>

@endsection