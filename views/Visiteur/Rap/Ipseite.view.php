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
            <h1 class="card-title" style="color:black; text-align:center;"> <strong>Ipséité</strong></h1>
            <div class="player">
                
                <div class="wrapper">
                    <div class="details">
                        <img class="track-art" src="public\Assets\images\Album\Rap\Damso\Damso.png" alt="Card image cap">
                        <div class="track-name">N. J Repsect R</div>
                        <div class="track-artist">Damso</div>
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
            <div class="row" style="text-align:left;">
                    <div class="col-sm-8 "  style =" background-color:#FDF5E6 ; text-align:left;">
                        <h1 style="color:black; font-size:25px;" ><strong>Date de création : </strong> 2017</br></h1>
                        <h1 style="color:black; font-size:25px;"><strong>Liste musique : </strong> </br></h1>

                    </div>

                    <div class="col-sm-4 "  style =" background-color:#FDF5E6 ;">

                    <a href="<?= URL; ?>achatIpseite" class="btn btn-primary btn-lg">Acheter pour 17€</a>

                    </div>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">1- Nwaar is the new black </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">2- #QuedusaalVie </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">3- Mosaïque solitaire </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">4- Dieu ne ment jamais </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">5- Signaler </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">6- Kietu </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">7- Gova </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">8- Macarena  </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">9- Peur d'être père </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">10- Kin la belle </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">11- Lové </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">12- Noob saibot </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">13- J respect R </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">14- Une âme pour deux </br></h1>

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