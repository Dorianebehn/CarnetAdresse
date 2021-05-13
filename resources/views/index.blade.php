<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CarnetController;
?>

 <header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  type="text/css" href=" {{ URL::asset('styleL.css') }} ">
</header>

<body>

<!-- The Modal : this is a modal windows for selecting  product  -->
<div id="myModalSaveAdresse" class="modal"  >

    <!-- Modal content -->
	<div class="modal-content " style="border-radius: 8px; width:35%; ">
        <div class="modal-header">
            <span class="close" id="closeP">&times;</span>
            <h2>Save New Adresse </h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
         @endif
        </div>
        <form method="POST" action="{{route('carnets.store')}}">
		
        @csrf
        <div class="modal-body" style="border-radius: 8px; " >
        <label style="color:black" for="nom"> Nom: </label>
		<input name ="nom" style=" color:   #3c97bf; width : 50%" class="InlineBlockClass ParcellDescriptionInput" type="text"></div>
        <label style="color:black" for="prenom"> Prenom</label>
        <input name ="prenom"style=" color:   #3c97bf; width : 50%" class="InlineBlockClass ParcellDescriptionInput" type="text"></br>
        <label style="color:black" for="email"> Email</label>
        <input name ="email" style=" color:   #3c97bf; width : 50%" class="InlineBlockClass ParcellDescriptionInput" type="text"></br>
        <label style="color:black" for="ville"> Ville</label>
        <input name ="ville" style=" color:   #3c97bf; width : 50%" class="InlineBlockClass ParcellDescriptionInput" type="text"></br>
        <label style="color:black" for="adresse"> Adresse</label>
        <input name ="adresse" style=" color:   #3c97bf; width : 50%" class="InlineBlockClass ParcellDescriptionInput" type="text"></br>
        <label style="color:black" for="numero"> Numero</label>
        <input name ="numero" style=" color:   #3c97bf; width : 50%" class="InlineBlockClass ParcellDescriptionInput" type="text"></br>
        <div class="modal-footer" style="text-align: center">
        <button type ="submit" class="ModalButton"  >Enregistrer le contact</button>
        </div>
        
        </form>
        </div>
    </div>

</div>

<!-- The Modal -->
<div class="contener ">

        <h2 style="text-align:center">Carnet d'adresse </h2>
<div class="LeftContener ">
<div id = "myBtnSaveAdresse"  name="submit" class="ghost button"   style="border: solid 1px white; margin-top:0px;">Ajouter une adresse</div> 
<div class="ListAdresse" >
    @foreach($carnets as $carnet)
   
        <div class="container" onclick="DetailsAdresse()">
            <p class="nom">
             {{$carnet->nom }}
            </p>
            <p class="email">
            {{$carnet->email}}
            </p>
        </div>
    @endforeach
</div>
</div>
    

      <div class="RightContener " id="RightContener">
            <div class="DisplayInfo" id="DisplayInfo">
            @foreach($carnets as $carnet)
                <h5>Nom:  <span class="ParcellInfo" id="nom">{{$carnet->nom}}</span></h5>
                <h5>Prenom :  <span class="ParcellInfo" id="prenom">{{$carnet->prenom}}</span></h5>
                <h5>Email :  <span class="ParcellInfo" id="email">{{$carnet->email}}</span></h5>
                <h5>Ville :  <span class="ParcellInfo" id="ville">{{$carnet->ville}}</span></h5>
                <h5>Adresse :  <span class="ParcellInfo" id="adressse">{{$carnet->adresse }}</span></h5>
                <h5>Telephone Mobile :  <span class="ParcellInfo" id="numero">{{$carnet->numero }}</span></h5>
                @endforeach
            </div>
            </div>       
</div>


</body>
<!-- modal add new Produt script -->        
<script>
  var modalSaveAdresse = document.getElementById("myModalSaveAdresse");
  
    // Get the button that opens the modal
    var btnSaveAdresse = document.getElementById("myBtnSaveAdresse");

    // Get the <span> element that closes the modal
  //var span  = document.getElementsByClassNpame("close")[0];
  	var spanP = document.getElementById("closeP");


    // When the user clicks on the button, open the modal
    btnSaveAdresse.onclick = function() {
        modalSaveAdresse.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spanP.onclick = function() {
		myModalSaveAdresse.style.display = "none";
		
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
           mySaveAdresseModal.style.display = "none";
        }
    }

</script>

<script>
function DetailsAdresse(){
        let ParentEl =document.getElementById("DisplayInfo");
            ParentEl.style.display = "block"; 
}
  
 
</script>


