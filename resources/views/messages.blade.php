<!--extend layout master.blade.php -->
@extends('layouts.master')

<!--sets value for section title to "Mini Twitter" (section title is used as yield in messages.blade.php) -->
@section('title', 'Mini Twitter')


<!--starts section content, defines the title for the section and also defines some html for section content 
(html is beteween section... and endsection) section content is used as yield in messages.blade.php) -->
@section('content')

    <h2>Create new message: </h2>


    <form action="/create" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <input class="form-control" type="text" name="title" placeholder="Title">
    </div>
    <div class="mb-3">
        <input class="form-control" type="text" name="content" placeholder="Content">
    </div>
    
    <div class="mb-3">
       <input class="form-control" type="file" name="photo" accept="image/*">
    </div>    
    <!-- this blade directive is necessary for all form posts somewhere in between
        the form tags -->
    @csrf
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>


    <h2>Recent messages:</h2>

    @if ($numberOfRows == 0) 
        <p>No messages found</p>
    @else

        <ul>
        <!-- loops through the $messages, that this blade template
        gets from MessageController.php. for each element of the loop which
        we call $message we print the properties (title, content
        and created_at in an <li> element -->
        @foreach ($messages as $message) 
        <li>
            <b>
                <!-- this link to the message details is created dynamically
                    and will point to /messages/1 for the first message -->
                <a href="/message/{{$message->id}}">{{$message->title}}:</a>
            </b><br>
            {{$message->content}}<br>
            {{$message->created_at->diffForHumans()}}          
            <!-- display the image, if we have a file_path in the current message
            object-->
            @if ($message->file_path)
            <img src="{{ asset('storage/'. $message->file_path)}}">
            @endif
        </li>
        @endforeach

        </ul>

    @endif

@endsection
