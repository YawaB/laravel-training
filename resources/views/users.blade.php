
@forelse ($users as $user)
    <li>{{ $user}}</li>
@empty
    <p>No users</p>
@endforelse

@if (count($users) === 1)
    I have one user!
@elseif (count($users) > 1)
    I have multiple users!
@else
    I don't have any users!
@endif



<!-- <ol>
   @for($i=0; $i <= $limit; $i++)
     @if($i%2 === 0)
        <li>{{$i}}</li>
     @endif
     @endfor
</ol> -->
<!-- OPTIMISATION  -->
<ol>
   @for($i=0; $i <= $limit; $i+=2)
   <li>{{$i}}</li>
     @endfor
</ol>

<!-- PALYNDROME  -->
{{-- @if($mot[0]==$mot[count($mot)-1])
@if($mot[1]==$mot[count($mot)-2])
@if($mot[2]==$mot[count($mot)-3]) --}}

@php
    $isPalyndrome=true;
@endphp
@for($i=0; $i <= (strlen($mot)/2) ; $i++)

    @if($mot[$i] != $mot[strlen($mot)-($i+1)])
    @php
        $isPalyndrome=false;
        break; 
    @endphp
    @endif
@endfor

@if($isPalyndrome)
<p>{{$mot}} est un palyndrome </p>
@else
<p>{{$mot}} n'est pas un palyndrome</p>
@endif
