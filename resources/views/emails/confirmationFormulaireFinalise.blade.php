<h1>Bienvenue, </h1>
<h3>Vous faites désormais partie de La Fourmilière.</h3>

<p>Dorénavant, vous allez pouvoir participer aux commandes groupées (dont le catalogue est en pièce jointe), ainsi qu’à la vie de l’association.</p>

<p>Si vous voulez nous faire profiter de votre énergie, n’hésitez pas à nous contacter via contact@lafourmiliere.org pour rejoindre nos groupes de travail.</p>

<p>Fourmilièrement vôtre,</p>

<p>Voilà nos coordonnées :<br />
Pour vos remarques et questions générales : contact@lafourmiliere.org<br />
Pour les questions sur les commandes groupées : commande@lafourmiliere.org</p>

<p>Pièce jointe : <br />
RIB + adresse postale Helene<br />
Catalogue</p>

@if(!$user->hasvalidemail())
<p>----------------------------</p>
<p>Vous n'avez pas encore validé votre mail.<br />
Pour ce faire, merci de cliquer sur le lien ci-dessous :</p>
@include('emails._emailvalidationlink')
@endif





