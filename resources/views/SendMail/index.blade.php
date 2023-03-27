@extends('SendMail.layout')

 

@section('content')


<h1>hello world!</h1>

<div>
  <form method="POST" action="/SendMail/store" >

    @csrf

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


   
    <label for="Email">Last Name</label>
    <input type="text" id="email" name="email" placeholder="Your email..">
    @error('email')
      <div>{{$message}}</div>
    @enderror
    <input type="submit" value="Submit">
  </form>
</div>






@endsection