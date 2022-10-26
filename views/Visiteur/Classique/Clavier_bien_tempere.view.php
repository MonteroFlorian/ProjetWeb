<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-12 g-12">

        <div class="col-sm-3 "style = "margin:0%; padding:0%;">
            <div class="card">
                <img class="background-image"  style = "background-image:url(public/Assets/images/Vignes.jpg); min-height:1850px;background-attachment:fixed;
                background-position:center; background-repeat:no-repeat; background-size:cover; z-index:5;">
            </div>
        </div>

    
        <div class="col-sm-6" style = " text-align:center; background-color:#FDF5E6 ;">
            <br/> <br/><br/> <br/><br/> <br/>
            <h1 class="card-title" style="color:black; text-align:center;"> <strong>Clavier bien tempéré </strong></h1>
            <div class="player">
                
                <div class="wrapper">
                    <div class="details">
                        <img class="track-art" src="public\Assets\images\Album\Classique\JSB\JSB.jpg" alt="Card image cap">
                        <div class="track-name">Prélude en mi majeur</div>
                        <div class="track-artist">Jean Sébastien Bach</div>
                    </div>
                    
                    <?php
                    $file_name = "JSB/Johann Sebastian Bach ~ Prelude in C Major.mp3";
                    echo '<audio autoplay="true" style="display:none;">
                            <source src="public/Assets/Musique/Classique/'.$file_name.'">
                            </audio>';
                    ?>
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
                        <h1 style="color:black; font-size:25px;" ><strong>Date de création : </strong> 1722</br></h1>
                        <h1 style="color:black; font-size:25px;"><strong>Liste prélude : </strong> </br></h1>

                    </div>

                    <div class="col-sm-4 "  style =" background-color:#FDF5E6 ;">

                    <a href="<?= URL; ?>achatCBT" class="btn btn-primary btn-lg">Acheter pour 20€</a>

                    </div>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">1- Prélude en ut majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">2- Prélude en ut mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">3- Prélude en do dièse majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">4- Prélude en ut dièse mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">5- Prélude en ré majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">6- Prélude en ré mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">7- Prélude en mi bémol majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">8- Prélude en mi bémol mineur  </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">9- Prélude en mi majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">10- Prélude en mi mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">11- Prélude en fa majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">12- Prélude en fa mineur  </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">13- Prélude en fa dièse majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">14- Prélude en fa dièse mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">15- Prélude en sol majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">16- Prélude en sol mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">17- Prélude en la bémol majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">18- Prélude en sol diese mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">19- Prélude en la majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">20- Prélude en la mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">21- Prélude en si bémol majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">22- Prélude en si bémol mineur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">23- Prélude en si majeur </br></h1>
                        <h1 style="color:black; font-size:25px; margin-left:40px;">24- Prélude en si mineur </br></h1>

                </div>
        </div>


        <div class="col-sm-3"  style = "margin:0%; padding:0%;">
            <div class="card">  
                <img class="background-image"  style = "background-image:url(public/Assets/images/ArmoireV.jpg); min-height:1850px;background-attachment:fixed;
                background-position:center; background-repeat:no-repeat; background-size:cover; z-index:5;">
            </div>
        </div>

    </div>
</div>