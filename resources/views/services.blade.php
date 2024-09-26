<hl>Our Services</h1>
@if(count ($services).0)
<ul>
    @foreach($services as $services)
    <li> {{$services}} </li>
    @endforeach
    @else
    No <Data>
    @endif
</ul>

