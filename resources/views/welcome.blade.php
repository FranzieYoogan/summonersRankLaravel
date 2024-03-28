<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Styles -->

        <link rel="stylesheet" href="{{asset('css/rank.css')}}">
      
    </head>
    <body  class="antialiased">


     @include('header');

          <form method="POST" action="/summoner" class="containerStyle ">
            @csrf 


            <section class="containerContent">

                <div style="border-bottom: 1px solid white;  width: 100% !important;">
                <h1  class="textStyle">Summoner's Rank</h1>
            </div>

                <div style="display: flex; height: 8vh; margin-top: 2em; margin-left: 2em; width: 100%; gap:1em">

                    <button  onclick="selectEvent2()"  type="button" class="btn textStyle3">nickName</button>
                    <input class="form-control summonerStyle" name="summoner" id="summoner" type="text" value="">
                    <img id="mickey2" class="mickey2" src="{{asset('img/icons/mickey.jpg')}}" alt="">
                </div>

                <section style="display: flex">

                    

                <div style="display: flex; height: 8vh; margin-top: 1em; width: 170px; margin-left: 2em; margin-bottom: 2em">
                <select onchange="checkData()" onclick="selectEvent()" onblur="selectEventOut()" name="region" id="region"  class="textStyle2 form-select" aria-label="Default select example">
                    <option  id="options" class="options" selected>Region</option>
                    <option  id="options" class="options" value="br1">BR</option>
                    <option  id="options" class="options" value="la1">LA1</option>
                    <option  id="options" class="options" value="la2">LA2</option>
                    <option  id="options" class="options" value="kr">KR</option>
                    <option  id="options" class="options" value="na1">Na</option>
                    <option  id="options" class="options" value="eun1">EUN</option>
                    <option  id="options" class="options" value="euw1">EUW</option>

                  </select>
                  <img id="mickey" class="mickey" src="{{asset('img/icons/mickey.jpg')}}" alt="">
                </div>  

               

      

                <script>
                    var click = 0;
                    var click2 = 0;
            function selectEvent() {
                
                click++;
            
                if(click == 1) {

                    document.getElementById('mickey').style.visibility = "visible";
                    click2 = 0;
             
           
             document.getElementById('mickey2').style.visibility = "hidden";
                }

                if(click == 2) {
                    click = 0;
                    document.getElementById('mickey').style.visibility = "hidden";
                }

   
           

            } 



            

            function selectEventOut() {
                click = 0;
             
           
                    document.getElementById('mickey').style.visibility = "hidden";
                
         
            }


            function selectEvent2() {
                
                click2++;
            
                if(click2 == 1) {

                    document.getElementById('mickey2').style.visibility = "visible";
                    document.getElementById('summoner').style.visibility = "visible";
                }

               
           

            } 

            
            function selectEventOut2() {
                click2 = 0;
             
           
                    document.getElementById('mickey2').style.visibility = "hidden";
                
         
            }


                </script>



            </section>

            <div id="buttonDiv" style="position: relative">

                <button class="submit" name="submit" id="submit" type="submit"><img class="submitIcon" src="{{asset('img/icons/arrow.png')}}" alt=""></button>
            
            </div>

   
        </section>


    </form>


    <script>

        function checkData() {
    
            if(document.getElementById('summoner').value != "" && document.getElementById('region').value != "") {
                
                console.log("ok")

    document.getElementById('submit').style.visibility = "visible";

    } else {

    document.getElementById('submit').style.visibility = "hidden";
    }
    
        }
    
    
    
    </script>
       
    </body>
</html>