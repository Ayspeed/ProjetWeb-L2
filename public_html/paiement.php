<!DOCTYPE html>
<html lang="fr" >

<head>

  <meta charset="UTF-8">
  <title>Carte de crédit</title>
  <link rel="stylesheet" href="paiement.css" media="all">

</head>

<body>

 <p> Si vous souhaitez utiliser Paypal, cliquez <a href="http://paypal.me/bilelchebbi">ici</a> </p>

 <div class="credit-card">
   <span id="card-name-display"></span>
   <span id="card-number-display"></span>
   <span id="expiration-display"></span>
 </div>

 <div class="payment-form">
   <form>
    <fieldset>
      <label for="card-name">Nom du porteur</label>
      <input id="card-name" type="text">
      <label for="card-number">Numéro de carte</label>
      <input id="card-number" pattern="[0-9]{4}( [0-9]{4}){3}" type="text" title="Format : 4x4 chiffres séparés par un espace ; 0000 0000 0000 0000" placeholder="0000 0000 0000 0000">
      <label for="expiration">Date de validité</label>
      <label for="security" id="sec-label">Code de sécurité</label>
      <input id="expiration" pattern="[0-9]{4}" placeholder="" type="text">
      
      <input id="security" pattern="[0-9]{3}" placeholder="" type="text">
    </fieldset>
  
    <button type="submit">Payer</button>
   </form>
</div>
  
<script >
var cardName = document.getElementById('card-name');
var cardNumber = document.getElementById('card-number');
var cardExpiration = document.getElementById('expiration');

cardName.onkeyup = function(){
    document.getElementById('card-name-display').innerHTML = cardName.value;
}

cardNumber.onkeyup = function(){
    document.getElementById('card-number-display').innerHTML = cardNumber.value;
}

cardExpiration.onkeyup = function(){
    //Splts up expiration date
    var expirationMonth = (cardExpiration.value).slice(0,2);
    var expirationYear = (cardExpiration.value).slice(2,4);

    if (expirationMonth.length==2) {
       var month = expirationMonth.valueOf();
       if (month <1 || month>12)
          expirationMonth = "--" ; 
    }

    if (expirationYear.length==2) {
       var year = expirationYear.valueOf();
       if (year <19 || year>24)
          expirationYear = "--"; 
    }

    cardExpiration.value = expirationMonth + expirationYear;

    var expirationDisplay = expirationMonth + "/" + expirationYear;    
    document.getElementById('expiration-display').innerHTML = expirationDisplay;
}
</script>
  
 </body>

</html>