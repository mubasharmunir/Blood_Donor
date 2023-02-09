@extends('layout2.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Send email with message</title>
</head>
<body>
    <h1>{{ $details['name'] }}</h1>
    <h2>{{ $details['email'] }}</h2>
    <p>{{ $details['phone'] }}</p>
<p>{{ $details['phone'] }}</p>
   
    <p>Thank you</p>
</body>
</html>

@endsection