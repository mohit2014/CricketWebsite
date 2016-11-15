<!DOCTYPE HTML>
<html>
  <head>
        <title>TEAMS CWC'15</title>
        <style>
               body{
                   background-image:url("back_team.jpg");
                   background-size:1350px 660px;
                   background-repeat:no-repeat
               }
               div.transbox{
                          position:fixed;
                          left: 200px;
                          top:250px;
                          width:850px;
                          height:365px;
                          background-color: #ffffff;
                          border: 1px solid black;
                          opacity:0.6;
                          filter:alpha(opacity=60);
               }
               ul.x{
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
               }

              li.x{
                 display:block;
                 width:200px
              }

             a.x:link, a.x:visited {
                                display: block;
                                width: 200px;
                                height:20px;
                                font-weight: bold;
                                color: black;
                                background-color:white;
                                text-align: center;
                                padding: 4px;
                                text-decoration: none;
                                text-transform: uppercase;
            }

            a.x:hover, a.x:active {
                                background-color:grey;
            }
           ul.nav{
                list-style-type: none;
                margin-left:180px;
                margin-top:202px;
                width:800px;
           }
           a.nav:link, a.nav:visited {
                                  display: block;
                                  font-weight: bold;
                                  font-size:20px;
                                  color: #FFFFFF;
                                  background-color: #98bf21;
                                  width: 150px;
                                  height:40px;
                                  text-align: center;
                                  padding: 4px;
                                  text-decoration: none;
                                  text-transform: uppercase;
           }
           a.nav:hover, a.nav:active {
                                   background-color:#7A991A;
           }
           li.nav{
                float:left;
            }
           div.pos1{
                 position:fixed;
                 left:300px;
                 top:325px;
                 border-style:solid;
                 border:color:black;
                 width:200px;
                 height:280px;

            }
           div.pos2{
                  position:fixed;
                  left:725px;
                  top:325px;
                  border-style:solid;
                  border:color:black;
                  width:200px;
                  height:280px
            }

        </style>
  </head>
  <body>
        <ul class="nav">
                        <li class="nav"><a class="nav" href="final.php">Home</a></li>
                        <li class="nav"><a class="nav" href="teams.php">TEAMS</a></li>
                        <li class="nav"><a class="nav" href="Schedule.php">SCHEDULE</a></li>
						<li class="nav"><a class="nav" href="points_table.php">POINTS TABLE</a></li>
						<li class="nav"><a class="nav" href="statistics.php">STATISTICS</a></li>
        </ul>

        <div class="transbox">
                             <h1 style="margin-left:350px">TEAMS</h1>
                             <div class="pos1">
                                             <h1 style="margin-left:30px">POOL-A</h1>
                                             <ul class="x">
                                                         <li class="x"><a class="x" href="players_new_zealand.php">New Zealand</a></li>
                                                         <li class="x"><a class="x" href="players_australia.php">Australia</a></li>
                                                         <li class="x"><a class="x" href="players_sri_lanka.php">Srilanka</a></li>
                                                         <li class="x"><a class="x" href="players_england.php">England</a></li>
                                                         <li class="x"><a  class="x" href="players_bangladesh.php">Bangladesh</a></li>
                                                         <li class="x"><a class="x" href="players_afghanistan.php">Afghanistan</a></li>
                                                         <li class="x"><a class="x" href="players_scotland.php">Scotland</a></li>
                                             </ul>
                               </div>
                               <div class="pos2">
                                               <h1 style="margin-left:30px">POOL-B</h1>
                                               <ul class="x">
                                                           <li class="x"><a class="x" href="players_south_africa.php">South Africa</a></li>
                                                           <li class="x"><a class="x" href="players_pakistan.php">Pakistan</a></li>
                                                           <li class="x"><a class="x" href="players_india.php">India</a></li>
                                                           <li class="x"><a class="x" href="players_zimbabwe.php">Zimbabwe</a></li>
                                                           <li class="x"><a class="x" href="players_ireland.php">Ireland</a></li>
                                                           <li class="x"><a class="x" href="players_west_indies.php">West Indies</a></li>
                                                           <li class="x"><a class="x" href="players_united_arab_emirates.php">United Arab Emirates</a></li>
                                               </ul>
                               </div>
        </div>
  </body>
</html>