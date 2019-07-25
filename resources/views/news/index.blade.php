@extends('layouts.master')

@section('content')

    <ul>
        @foreach($news as $new)
            <li>
                <a href="/news/ {{ $new->id }}">
                    {{ $new->title }} <br>
                </a>
                <p>Posted by {{  $new->user->name }}</p>
            </li>
        @endforeach
    </ul>



    <nav class="blog-pagination">
        <a class="btn btn-outline-{{ $news->currentPage() ===1 ? 'disabled' : 'primary' }}"
                href="{{ $news->previousPageUrl() }}">
            Previous
        </a>

        <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'disabled' }}"
                href="{{ $news->nextPageUrl() }}">
            Next
        </a>
    
        Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
    
    </nav>








@endsection