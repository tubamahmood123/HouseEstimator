@extends('layouts.app')
@section('content')

<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="friendId" content="{{$user->id}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta  name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  

  <div class="container">
  <div class="column is-8 is-offset-2">
    <div class="panel">
      <div class="panel-heading">
        {{$user->id}}
        <div class="contain is-pulled-right">
          <a href="{{url('/chat')}}" class="is-link"><i class="fa fa-arrow-left">Go Back</i></a>
        </div>
        
               </div>

</div>
</div>
</div>


  </body>
</html>
@endsection