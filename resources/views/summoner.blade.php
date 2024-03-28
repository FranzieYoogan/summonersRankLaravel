
@include('header');


<h1>summoner's name {{$decoded->summonerName}}</h1>

<h1>tier {{$decoded->tier}}</h1>

<h1>rank {{$decoded->rank}}</h1>

<h1>wins {{$decoded->wins}}</h1>

<h1>losses {{$decoded->losses}}</h1>

<h1>league points {{$decoded->leaguePoints}}</h1>

@php 

    $amount = ($decoded->wins + $decoded->losses) * 100;

    $result = $decoded->wins / $amount;


@endphp

<h1>Win rate {{round($result * 10000,0) . "%" }}</h1>

