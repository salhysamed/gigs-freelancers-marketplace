@extends('layout')
@section('content')
@include('partials._hero')
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
@if (count($gigs) > 0)
    @foreach ($gigs as $gig)

        <!-- Item 1 -->
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src="{{ asset('images/no-image.png')}}"
                    alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        <a href="/gigs/{{$gig->id}}">{{ $gig->title}}</a>
                    </h3>
                    <div class="text-xl font-bold mb-4">{{ $gig->company}}</div>
                    <ul class="flex">
                        @php
                            $tags = explode(",",$gig->tags);
                        @endphp
                        @foreach ($tags as $tag)
                           <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">{{$tag}}</a>
                        </li> 
                        @endforeach
                        
                     
                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> {{ $gig->location}}
                    </div>
                </div>
            </div>
        </div>


    @endforeach
</div>
@else
    <p>No gigs to show</p>
@endif   

@endsection

