<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-12 g-12">

        <div class="col-sm-3 "style = "margin:0%; padding:0%;">
            <div class="card">
                <img class="background-image"  style = "background-image:url(public/Assets/images/Vignes.jpg); min-height:1500px;background-attachment:fixed;
                background-position:center; background-repeat:no-repeat; background-size:cover; z-index:5;">
            </div>
        </div>

    
        <div class="col-sm-6" style = " text-align:center; background-color:#FDF5E6 ;">
            <br/> <br/><br/> <br/><br/> <br/>
            <h1 class="card-title" style="color:black; text-align:center;"> <strong>Symphony of Enchanted Lands</strong></h1>
            <div class="player">
                
                <div class="wrapper">
                    <div class="details">
                        <img class="track-art" src="public\Assets\images\Album\Metal\Rhapsody of fire\SOEL.jpg" alt="Card image cap">
                        <div class="track-name">Wisdom of The King</div>
                        <div class="track-artist">Rhapsody of fire</div>
                    </div>

                    <div class="slider_container">
                        <div class="current-time">00:00</div>
                            <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                            <div class="total-duration">00:00</div>
                    </div>

                    <div class="slider_container">
                        <i class="fa fa-volume-down"></i>
                            <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                            <i class="fa fa-volume-up"></i>
                    </div>

                    <div class="buttons">
                        <div class="playpause-track" onclick="playpauseTrack()">
                            <i class="fa fa-play-circle fa-5x"></i>
                        </div>
                    </div>

                        <div id="wave">
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                        </div>  
                </div>
            </div>
            </br></br>
                <div class="row" style="text-align:left;">
                    <div class="col-sm-8 "  style =" background-color:#FDF5E6 ; text-align:left;">
                        <h1 style="color:black; font-size:25px;" ><strong>Date de création : </strong> 1998</br></h1>
                        <h1 style="color:black; font-size:25px;"><strong>Liste musique : </strong> </br></h1>

                    </div>

                    <div class="col-sm-4 "  style =" background-color:#FDF5E6 ;">

                    <a href="<?= URL; ?>achatSOEL" class="btn btn-primary btn-lg">Acheter pour 22€</a>

                    </div>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">1- Epicus furor </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">2- Emerald sword </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">3- Wisdom of the kings </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">4- Heroes of the lost valley </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">5- Eternal glory </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">6- Beyond the gates of infinity </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">7- Wings of destiny </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">8- The dark tower of abyss  </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">9- Riding the winds of eternity </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">10- Symphony of enchanted lands </br></h1>

                </div>
        </div>


        <div class="col-sm-3"  style = "margin:0%; padding:0%;">
            <div class="card">  
                <img class="background-image"  style = "background-image:url(public/Assets/images/ArmoireV.jpg); min-height:1500px;background-attachment:fixed;
                background-position:center; background-repeat:no-repeat; background-size:cover; z-index:5;">
            </div>
        </div>

    </div>
</div>