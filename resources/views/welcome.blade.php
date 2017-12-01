@extends('layouts.master')

@section('title')
  Welcome!
@endsection

@section('content')
  <div class="row well">
    <div class="col-md-6">
       <form action="#" method="post">
           <div class="form-group">
             <label for="email">Your E-Mail</label>
             <input type="email" class="form-control" name="email" id="email" placeholder="your email">
           </div>
           <div class="form-group">
             <label for="password">Password</label>
             <input type="password" class="form-control" name="password" id="password" placeholder="your password">
           </div>
           <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
       </form>
    </div>
    <div class="col-md-6">
       <form action="#" method="post">
           <div class="form-group">
             <label for="email">Your E-Mail</label>
             <input type="email" class="form-control" name="email" id="email" placeholder="your email">
           </div>
           <div class="form-group">
             <label for="first_name">First Name</label>
             <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name">
           </div>
           <div class="form-group">
             <label for="password">Password</label>
             <input type="password" class="form-control" name="password" id="password" placeholder="your password">
           </div>
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
  </div>
@endsection
