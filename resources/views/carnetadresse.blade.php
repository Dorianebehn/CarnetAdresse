@section('main') 

 <header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  type="text/css" href=" {{ URL::asset('style.css') }} ">
</header>

<body>
<!-- The Modal -->
<div class="contener ">
<form method="post" autocomplete="off" name="google-sheet" id="transactionForm">
        <h2 >Carnet d'adresse </h2>
<div class="LeftContener ">
<div id = "validate" onclick=""   name="submit" class="ghost button"   style="border: solid 1px white;">Ajouter une adresse</div>
           
<div class="ListAdresse">
    @foreach($carnet as $carnets)
        <div class="container">
            <p class="nom">
            {{$carnets->nom }}
            </p>
            <p class="email">
            {{$carnets->email}}
            </p>
        </div>
    @endforeach
</div>

      
   

        <div class="RightContener " id="RightContener">
            <div class="DisplayInfo" id="DisplayInfo">
                <h5>Nom:  <span class="ParcellInfo" id="ClientName"></span></h5>
                <h5>Prenom :  <span class="ParcellInfo" id="Date"></span></h5>
                <h5>Email :  <span class="ParcellInfo" id="Produit"></span></h5>
                <h5>Ville :  <span class="ParcellInfo" id="Depart"></span></h5>
                <h5>Adresse :  <span class="ParcellInfo" id="Destination"></span></h5>
                <h5>Telephone Mobile :  <span class="ParcellInfo" id="Service"></span></h5>
                </div>
            </div>
            </form>
</div>

</body>
<script>
    function ListDetail(identifiant){

    }
</script>

<style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>


