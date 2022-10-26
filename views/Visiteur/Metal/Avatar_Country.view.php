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
            <h1 class="card-title" style="color:black; text-align:center;"> <strong>Avatar country </strong></h1>
            <div class="player">
                
                <div class="wrapper">
                    <div class="details">
                        <img class="track-art" src="public\Assets\images\Album\Metal\Avatar\AC.jpg" alt="Card image cap">
                        <div class="track-name">A Statue of The King</div>
                        <div class="track-artist">Avatar</div>
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
                <div class="row" >
                    <div class="col-sm-6 "  style =" background-color:#FDF5E6 ; text-align:left;">
                        <h1 style="color:black; font-size:25px;" ><strong>Date de création : </strong> 1865</br></h1>
                        <h1 style="color:black; font-size:25px;"><strong>Liste musique : </strong> </br></h1>
                        <h1 style="color:black; font-size:25px; text-align:center;  ">1- Musique 1 </br></h1>
                        <h1 style="color:black; font-size:25px; text-align:center; ">2- Musique 2 </br></h1>
                        <h1 style="color:black; font-size:25px; text-align:center;">3- Musique 3 </br></h1>
                        <h1 style="color:black; font-size:25px; text-align:center;">4- Musique 4 </br></h1>
                    </div>

                    <div class="col-sm-6 "  style =" background-color:#FDF5E6 ;">
</br></br></br></br></br>
                    <a href="<?= URL; ?>Cooking_with_Pagans" class="btn btn-primary btn-lg">Acheter</a>

                    </div>
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