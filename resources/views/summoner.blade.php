
    <link rel="stylesheet" href="{{asset('css/summoner.css')}}">

@include('header');
@php 

    $amount = ($decoded->wins + $decoded->losses) * 100;

    $result = $decoded->wins / $amount;


@endphp


<section class="containerContainer">

<section class="containerContent ">





        <div style="display: flex; border-bottom: 1px solid white; gap: 1em;">


            @if($decoded->tier == "CHALLENGER")

            <img class="tierStyle" src="{{asset('img/icons/challenger.png')}}" alt="">


            @endif

            @if($decoded->tier == "GRANDMASTER")

            <img class="tierStyle" src="{{asset('img/icons/grandmaster.jpg')}}" alt="">


            @endif

            @if($decoded->tier == "IRON")

            <img class="tierStyle" src="{{asset('img/icons/iron.jpg')}}" alt="">


            @endif

            @if($decoded->tier == "BRONZE")

            <img class="tierStyle" src="{{asset('img/icons/bronze.jpg')}}" alt="">


            @endif

            @if($decoded->tier == "SILVER")

            <img class="tierStyle" src="{{asset('img/icons/silver.jpg')}}" alt="">


            @endif

            @if($decoded->tier == "GOLD")

            <img class="tierStyle" src="{{asset('img/icons/gold.jpg')}}" alt="">


            @endif

          

            @if($decoded->tier == "EMERALD")

            <img class="tierStyle" src="{{asset('img/icons/emerald.jpg')}}" alt="">


            @endif

            @if($decoded->tier == "PLATINUM")

            <img class="tierStyle" src="{{asset('img/icons/platinum.png')}}" alt="">


            @endif

            @if($decoded->tier == "DIAMOND")

            <img class="tierStyle" src="{{asset('img/icons/diamond.jpg')}}" alt="">


            @endif

            @if($decoded->tier == "MASTER")

            <img class="tierStyle" src="{{asset('img/icons/master.png')}}" alt="">


            @endif

      

         

           

          
                <h1 class="textDiv1Style" style="text-align: left;">Summoner: {{$decoded->summonerName}} | </h1>
                <h1 class="textDiv1Style" style="text-align: center">{{$decoded->tier}} |        <a href="/" class="backStyle"> <img class="buttonIcon" src="{{asset('img/icons/arrow.png')}}" alt=""> </a></h1>
               

          

                
             
    
             

       

        </div>
 
          

        <div class="containerDatos">

                <h1 class="textDiv2Style">rank {{$decoded->rank}}</h1>

                <h1 class="textDiv2Style">LP {{$decoded->leaguePoints}}</h1>
    
                <h1 class="textDiv2WinStyle">wins {{$decoded->wins}}</h1>
                
                <h1 class="textDiv2LossesStyle">losses {{$decoded->losses}}</h1>
                
           
                <h1 class="textDiv2RateStyle">W Rate {{round($result * 10000,0) . "%" }}</h1>
            
            </div>
    
 
       


</section>
</section>

