

<!--extend layout master.blade.php -->
@extends('layouts.master')


<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')


<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
<h2>Message Details:</h2>


<h3>{{$message->title}}</h3>
<p>{{$message->content}}</p>

<form action="/message/{{$message->id}}" method="post">
   @csrf
   @method('delete')
   <button class="btn btn-primary" type="submit">Delete</button>   
</form>

<h2>Add new comment:</h2>

<form action="/comment" method="post">
   <!-- hidden field holding message->id to remember, which message
   the new comment will belong to -->
   <input type="hidden" name="message_id" value="{{$message->id}}">
   <label for="user_name">User Name</label>
   <input type="text" name="user_name" placeholder="please enter your username">
   <label for="comment">Comment</label>   
   <input type="text" name="comment" placeholder="please add a comment">


   @csrf
   <button class="rounded-pill"type="submit">Save Comment</button>
</form>

<!-- loop through the comment list of a message and display the comment text and user -->
@foreach ($message->comments as $comment)
   <p>{{$comment->text}} (by {{$comment->user_name}})</p>
@endforeach



@endsection

