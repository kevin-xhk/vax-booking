@extends('layouts.vax')

<div>
    <h2>Welcome, {{ $user->name }}</h2> <hr>
    according to our databases, you are:
    <b>
        @if ($user->vaccinated == true)
            vaccinated
        @else
            unvaccinated
        @endif
    </b>
</div>