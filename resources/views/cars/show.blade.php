@extends('layout.master')
    @section('content')
    <div class="container">
      <div>
          <b>Id:</b> {{$car->id}}
      </div>
      <div>
          <b>Title:</b> {{$car->title}}
      </div>
      <div>
          <b>Producer:</b> {{$car->producer}}
      </div>
      <div>
          <b>Number of doors:</b> {{$car->number_of_doors}}
      </div>

   </div>
