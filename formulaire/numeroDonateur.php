<!DOCTYPE html>
<html>
<head>
  <title>Formulaire Donateur</title>

<!--     
    @monjo ~@~
  -->
<style type="text/css">
  html{
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
  }
  body{
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    background-color: #1c98c5;
  }
  .formElvantoLike{
    margin-top: -10px;
    max-width: 100%;
    height: 100%;
    background-color: #1c98c5;
    padding-left: 8px;
    padding-right: 8px;
  }


  .img-responsive {
    max-width: 100%;
    height: auto;
}
#titre-formulaire{
  font-size: 55px;
  text-align: center;
  font-weight: bold;
}
  .entree h3,h4,h5{
    color: white;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 40px;
    margin-top:2%;
    margin-bottom:1%;
  }
  .entree{
    padding-top:0;
    margin-top:10px;
  }

  .formElvantoLike input, select {
    box-shadow: none;
    border-color: #d5e4ec;
    border-radius: 3px;
    font-size: 30px;
    font-weight: 600;
    height: 50px;
    line-height: 1.5;
    width: 95%;
    height: 70px;
    margin-left: auto;
    margin-right: auto;
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
}
  .formElvantoLike p{
    font-size: 15px;
  }
  .formElvantoLike  textarea{
    width: 70%;
    min-height: 100px;
    margin-left:15%;
  }

  .formElvantoLike button{
    font-size: 2em;
    margin-top: 2%;
    padding: 12px 16px;
    font-weight: 600;
    cursor: pointer;
    color: #fff;
    background-color: #102199;
    border: 1px solid #899099;
    border-radius: 3px;
    margin-bottom: 2.5%;
  }
  .controle_champ{

    display: none;
    position: relative;
    left: 250px;
    top: -35px;
    width: 230px;
    border: solid 1px red;
    background-color: lightgoldenrodyellow;
    padding: 3px;
    text-align: center;
  font-size: 40px;
  }
  #famille{
    display: none;
  }
  #alone{
    display: none;
  }
  .civlite{
    display: inline-block;
    width: 30%;
    margin-bottom: 2.5%;
    margin-top: 2.5%;
  }
  .civlite label{
    font-size: 40px;
    color: white;
  }
  .civlite input{
    width: 20px;
    height: 20px
  }
</style>

<script>
    function valider()
    {
        if ( document.forms["formulaire"].elements["nom"].value == "" )
          {
              alert ( "Veuillez saisir votre nom !" );
              valid = false;
        return valid;
          } 

        if ( document.forms["formulaire"].elements["prenom"].value == "" )
          {
              alert ( "Veuillez saisir votre pr\351nom !" );
              valid = false;
        return valid;
          }
        
        if ( document.forms["formulaire"].elements["portable"].value == "" )
          {
              alert ( "Veuillez saisir votre num\351ro gsm !" );
              valid = false;
        return valid;
          }  
     
        
        if ( document.forms["formulaire"].elements["email"].value == "" )
          {
              alert ( "Veuillez saisir votre adresse e-mail !" );
              valid = false;
         return valid;
          }
        else 
        {
          emailControle = forms["formulaire"].elements["email"].value;
          var place = emailControle.indexOf("@",1);
          var point = emailControle.indexOf(".",place+1);
            if ((place > -1)&&(emailControle.length >2)&&(point > 1))
              {
                //formulaire.submit();
                valid = true;
                return valid;
              }
            else
              {
            alert('Votre adresse e-mail n\'est pas valide!');
            valid = false;
            return valid;
              }
        }
        

    }
    // Fonction permettant de vérifier le Number (chiffres)
    function isNumeric(valeur) 
    {
      var character = valeur.substring(0,1);
      var code = valeur.charCodeAt(0);
      return code;
    }

    function VerificationNumero(val) {
      var strPass = val.value;
      var strLength = strPass.length;
      var lchar = val.value.charAt((strLength) - 1);
      var cCode = isNumeric(lchar);

      if (cCode < 48 || cCode > 57 ) {
        var monNumero = val.value.substring(0, (strLength) - 1);
        val.value = monNumero;
      }
      return false;
    }
    // Fonction pour éviter deux envoies du meme formulaire
    function pasDeuxFois(){
     if (document.forms["formulaire"].elements["nom"].value != "" && document.forms["formulaire"].elements["prenom"].value != "" &&
         document.forms["formulaire"].elements["portable"].value != "" && document.forms["formulaire"].elements["email"].value != ""){
       
      document.getElementById('tableEnvoyer').style.visibility='hidden';
      if (document.getElementById('divEnvoyer').style.display=='none'){
        document.getElementById('divEnvoyer').style.display='block';
      }
     }
    }
   
   </script>


</head>
<body>


        <form  class="formElvantoLike" action="formulaireEnvoie.php"  name="formulaireDonateur"  method="post" onsubmit="pasDeuxFois();return validerD();">
        <input type="hidden" name="nomFormulaire" value="juridique">
      
             <!--   <label for="Mr">Mr</label> <input type="radio" name="titre" value="Mr" id="Mr" checked />
               <label for="Mme">Mme</label> <input type="radio" name="titre" value="Mme" id="Mme" />
               <label for="Mlle">Mlle</label> <input type="radio" name="titre" value="Mlle" id="Mlle" /><br>
            -->
        <div class="entree">  <br>
         <h4 id=titre-formulaire>Obtenir un numéro de donateur</h4>
         <div class="rich-text"></div><br>
        </div>


         <div class="civlite"><label  for="Mlle">Famille</label> <input  onclick="affichePopUp('famille','alone')"   type="radio" name="ii" value="couple" id="Mlle"></div>
         <div class="civlite"><label  for="Mlle">Célibataire</label> <input onclick="affichePopUp('alone','famille')" type="radio" name="ii" value="Célibataire" id="Mlle"></div>
         <div class="civlite"><label  for="Mlle">Veuf/Veuve</label> <input onclick="affichePopUp('alone','famille')" type="radio" name="ii" value="Célibataire" id="Mlle"></div>
     
  <!-- Fonction javascript qui attribut un "display: block;" à l'id donné-->
    <script type="text/javascript">
      function affichePopUp(id,autre){
          document.getElementById(id).style.display='block';
          document.getElementById(autre).style.display='none';
      }
    </script>
        
        <article id="famille">

          <div class="entree">       
          <br><h5>Coordonnées de l'époux</h5>   <br>
         <h5>Nom: </h5>
          <input type="text" name="nomM"value="Nom" placeholder="Nom" required/> <br>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
         
          <div class="entree">       
          <h5>Prénom:</h5>
          <input type="text" name="prenomM"value="Prénom" placeholder="Prénom" required/> <br>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div>
        
          <div class="entree">   
          <br><h5>Coordonnées de l'épouse:</h5>   <br>    
         <h5>Nom </h5>
          <input type="text" name="nomF" value="Nom" placeholder="Nom" required/> <br>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
         
          <div class="entree">       
          <h5>Prénom:</h5>
          <input type="text" name="prenomF"value="Prénom" placeholder="Prénom" required/> <br>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div>

        </article>

        <article id="alone"> <br> <br>

          <h5>Civilité: </h5>
          <select class="form_liste" name="titre"> <br> 
            <option></option>
            <option value="Mr" >Mr</option> 
            <option value="Mme" >Mme</option>
            <option value="Mlle" >Mlle</option>
         </select></div>  <br>

          <div class="entree">       
         <h5>Nom: </h5>
          <input type="text" name="nom"value="Nom" placeholder="Nom" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
         
          <div class="entree">       
          <h5>Prénom:</h5>
          <input type="text" name="prenom" value="Prénom"placeholder="Prénom" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div>
        
        </article>

          <div class="entree">       
          <h5>Numéro de téléphone:</h5>
          <input type="text" name="portable"  placeholder="Numéro de gsm" autocomplete="off">
          </div>
         
          <div class="entree">       
          <h5>mail:</h5>
          <input type="text" id="email" name="email" placeholder="Adresse e-mail" autocomplete="off" required >
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div><br>

          <div class="entree">       
          <h5>Ville:</h5>
          <input type="text" name="ville" placeholder="Ville" autocomplete="off" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div><br>

          <div class="entree">       
          <h5>Code postale:</h5>
          <input type="text" name="codepostal" placeholder="Code postale" autocomplete="off" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div><br>

          <div class="entree">       
          <h5>Pays:</h5>
          <input type="text" name="pays" placeholder="pays" autocomplete="off" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div><br>
      
          <div align="center" id="divEnvoyer" style="display:none"><b><font size="3" >Veillez patienter... <br />votre demande est en cours de traitement.</font></b></div>
          <button type="submit">Envoyer</button>
</form>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  function sendEmail(){
    Email.send({
        Host : "smtp.mail.yahoo.com",
        Username : "josephzabia@yahoo.fr",
        Password : "CDATALMQIADSFU",
        To : 'finances@impactcentrechretien.be',
        From : document.getElementById("email").value,
        Subject : "Obtention numéro de donateur",
        Body : "veut obtenir un numéro de donnateur"
    }).then(
      message => alert(message)
    );
      }
</script>
</body>
</html>