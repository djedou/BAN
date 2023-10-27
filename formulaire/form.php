<style type="text/css">
  .formElvantoLike{
    max-width: 100%;
    background-color: #1c98c5;
    padding-left: 8px;
    padding-right: 8px;
  }


  .img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
}
  .entree h3,h4,h5{
    color: white;
    margin-top: 0;
    margin-bottom: 0;
  }
  .entree{
    padding-top:0;
    margin-top:10px;
  }

  .formElvantoLike input, select{
    box-shadow: none;
    border-color: #d5e4ec;
    border-radius: 3px;
    font-weight: 600;
    height: auto;
    line-height: 1.5;    
    width: 100%;
    height: 34px;
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
</style>

<style type="text/css">
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


<img src="https://d38zbiv2ku29ka.cloudfront.net/FOG36TBS/5c2a0e20-7975-41c4-b1e0-e01122e3c82f_form_custom_logo_1573977488.png" class="img-responsive">
<form class="formElvantoLike" action="index1.php" name="formulaire" method="post" onSubmit="pasDeuxFois();return valider();">
          <input type="hidden" name="nomFormulaire" value="juridique">
      
             <!--   <label for="Mr">Mr</label> <input type="radio" name="titre" value="Mr" id="Mr" checked />
               <label for="Mme">Mme</label> <input type="radio" name="titre" value="Mme" id="Mme" />
               <label for="Mlle">Mlle</label> <input type="radio" name="titre" value="Mlle" id="Mlle" /><br>
            -->
        <div class="entree">       
         <h3>titre</h3>
         <h4>Cours 301 - Découvrir son appel et accomplir sa destinée - 9 séances</h4>
         <div class="rich-text"><p>Cette formation vous permettra de découvrir le but de votre présence sur Terre, vous comprendrez ce que sont les dons spirituels, découvrirez et manifesterez les vôtres ; vous identifierez votre appel personnel ainsi que le manteau et la grâce qui reposent sur votre vie. Vous comprendrez également l'importance de la foi dans l'accomplissement du plan de Dieu pour votre vie.</p>
         <p>Complétez le formulaire ci-dessous et validez votre inscription en cliquant sur le bouton "ENVOYER" au bas du formulaire.</p></div>
        </div>

          <div class="entree">       
            <h5>titre</h5>
          <select class="form_liste" name="titre">
            <option></option>
            <option value="Mr" >Monsieur</option> 
            <option value="Mme" >Madame</option>
            <option value="Mlle" >Mademoiselle</option>
         </select></div>  
         
         <div class="entree">       
         <h5>titre</h5>
          <select class="form_liste" name="frequente">
              <option></option>
              <option>ICC depuis moins de 3 mois</option> 
            <option>ICC depuis moins de 6 mois</option>
            <option>ICC depuis moins de 1 an</option>
            <option>ICC depuis plus de 1 an</option>
              <option>Une autre assemblée</option>
         </select></div>  
       
       <div class="entree">       
         <h5>titre</h5>
          <select class="form_liste" name="motif">
              <option></option>
          <option>Vous sollicitez le ministère pour...</option>
          <option>Un soutien spirituel</option>     
          <option>Un probl&egrave;me de sant&eacute;</option>
          <option>Un suivi &eacute;motionnel</option>
          <option>Un conseil familial (fian&ccedil;ailles, difficult&eacute;s conjugales, etc.)</option>      
          <option>Une pr&eacute;sentation d&apos;enfant</option>
          <option>Autre</option>      
         </select></div> 
        
          <div class="entree">       
         <h5>titre</h5>
          <input type="text" name="nom" placeholder="Nom" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
         
          <div class="entree">       
          <h5>titre</h5>
          <input type="text" name="prenom" placeholder="Prénom" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div>
         
          <div class="entree">       
          <h5>titre</h5>
          <input type="text" name="portable" onKeyUp="javascript:VerificationNumero(formulaire.portable)" placeholder="Numéro de gsm"/>
          </div>
       
          <div class="entree">       
          <h5>titre</h5>
          <input type="text" name="fixe" onKeyUp="javascript:VerificationNumero(formulaire.fixe)" placeholder="Numéro téléphone fixe"/>
          </div>
         
          <div class="entree">       
          <h5>titre</h5>
          <input type="text" name="email" placeholder="Adresse e-mail" required/>
          <span class="controle_champ">Ce champ ne peut pas être vide</span>
          </div><br>
       
          <textarea name="motif" placeholder="D&eacute;taillez votre besoin..."></textarea><br>
      
          <div align="center" id="divEnvoyer" style="display:none"><b><font size="3" >Veillez patienter... <br />votre demande est en cours de traitement.</font></b></div>
          <button type="submit">Envoyer</button>
</form>