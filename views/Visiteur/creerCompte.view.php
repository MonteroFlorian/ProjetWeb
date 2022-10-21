<div class="album  bg-light" >
    <div class="container-fluid"  >
      <div class="row " >

            <div class="col-sm-3"  style = "margin:0%; padding:0%;" >
                <div class="card">
                    <img class="background-image"  style = "background-image:url(public/Assets/images/Vignes.jpg); min-height:1000px;background-attachment:fixed;
  background-position:left; background-repeat:no-repeat; background-size:cover; z-index:5;">
                </div>
            </div>

            <div class="col-sm-6 "  style = "padding:10%; text-align:center; background-color:#FDF5E6 ;">
                <form method="POST" action="validation_creerCompte">
                 <div class="mb-3">
                    <h1 class="card-title" style="color:black;">Création de compte</h1>
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                 </div>
                 <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                 </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">mail</label>
                        <input type="mail" class="form-control" id="mail" name="mail" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Créer !</button>
                </form>
            </div>

            <div class="col-sm-3 "  style = "margin:0%; padding:0%;">
            <div class="card">
                    <img class="background-image"  style = "background-image:url(public/Assets/images/ArmoireV.jpg); min-height:1000px;background-attachment:fixed;
  background-position:right; background-repeat:no-repeat; background-size:cover; z-index:5; ">
                </div>
            </div>

        
      </div>
    </div>
</div>