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
            <h1 class="card-title" style="color:black; text-align:center;"> <strong>Cooking with Pagans</strong></h1>
            <div class="player">
                
                <div class="wrapper">
                    <div class="details">
                        <img class="track-art" src="public\Assets\images\Album\Metal\FreakKitchen\FreakK.jpg" alt="Card image cap">
                        <div class="track-name">Freak of the week</div>
                        <div class="track-artist">Freak Kitchen</div>
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
        </div>


        <div class="col-sm-3"  style = "margin:0%; padding:0%;">
            <div class="card">  
                <img class="background-image"  style = "background-image:url(public/Assets/images/ArmoireV.jpg); min-height:1500px;background-attachment:fixed;
                background-position:center; background-repeat:no-repeat; background-size:cover; z-index:5;">
            </div>
        </div>

    </div>
</div>