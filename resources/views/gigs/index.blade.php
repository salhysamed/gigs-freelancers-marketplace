<x-layout>
@include('partials._hero')
@include('partials._search')

<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
@if (count($gigs) > 0)
    @foreach ($gigs as $gig)
        <x-gig-card :gig="$gig" />
    @endforeach
</div>
@else
    <p>No gigs to show</p>
@endif   
<div class="mt-6 p-4">
    {{$gigs->links()}}
</div>
</x-layout>
