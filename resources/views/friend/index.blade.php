@extends('layouts.app')
@section('content')

<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
  <div class="column is-8 is-offset-2">
    <div class="panel">
      <div class="panel-heading">
        List of Friends
               </div>
@foreach ($friends as $c)
<div class="panel-heading">
  <a href="{{ route('friend.show',$c->friend_id)}}" class="panel-block">

{{$c->name}}
</a>
</div>
@endforeach
</div>
</div>
</div>


  </body>
</html>
@endsection