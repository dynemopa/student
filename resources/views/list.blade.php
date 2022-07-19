
@extends('layouts.login')



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <table class="table">
        <thead  class="thead-dark">
            <tr >
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date Of Birth</th>
                <th>Gender</th>
                <th>email</th>
                <th>phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $students as $value)
          <tr>
       
            <td>{{$value->firstname}}</td>
            <td>{{$value->lastname}}</td>
            <td>{{$value->dob}}</td>
            <td>{{$value->gender}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->phone}}</td>
            <td><a href="{{url('delete/')}}/{{$value->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
            <td><a href="{{url('edit/')}}/{{$value->id}}"><button type="button" class="btn btn-success">Edit</button></a></td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
   
  </body>
</html>
