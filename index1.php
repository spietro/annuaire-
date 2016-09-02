<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <title>annuaire</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a href="1ere-page.html"><img src="home-icon.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-lg" href="#">Menu</a>
    </div>

    <div class="collapse navbar-collapse" id="main-menu" style="margin-bottom: 0px;">

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a data-toggle="dropdown" href="#bordure">Valenicennes<b class="caret"></b></a>
          <ul class="dropdown-menu jqueryFadeIn">
            <li><a href="#val">POINFOR A VALENCINNES</a></li>
            <li><a href="#marly">MISSION LOCAL DE MARLY</a></li>
            <li><a href="#acsrv">ACSRV DE CONDE-SUR-ESCAUT</a></li>
            <li class="dropdown-submenu">
              <ul class="dropdown-menu">
              </ul>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a data-toggle="dropdown" href="#">Hainaut Cambresis<b class="caret"></b></a>
          <ul class="dropdown-menu jqueryFadeIn">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li class="dropdown-submenu">
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <ul class="dropdown-menu">
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a data-toggle="dropdown" href="#">Sambre Avenois<b class="caret"></b></a>
          <ul class="dropdown-menu jqueryFadeIn">
            <li class="dropdown-header"></li>
            <li><a href="#"></a></li>
            <li><a href="#"></span></a></li>
            <li class="dropdown-header"></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </li>

      </ul>

      <form action="search.php" method="post" class="navbar-form pull-right">
        <input type="text"  name="recherche" class="input-sm form-control" placeholder="Recherche">
        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> </button>
      </form>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-xs-6-md-12">
        <div id="bordure">
          <p class="text">VALENCIENNES</p>

        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="container">
    <div class="row center-block">
      <div id="val">
      <div class="col-xs-12 col-md-12">
        <div class="accordion">
          <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1">Qui sommes nous ? POINFOR</a>
                <div id="accordion-1" class="accordion-section-content open">
                  <p class ="text2"></p>  L’association a pour objet :<br>
                    - De réaliser des actions visant à l’insertion sociale, à la formation professionnelle et à la formation continue<br>
                    - De favoriser la collaboration entre les associations adhérentes dans le cadre de la mise en place des actions propres à chacune d’elles<br>
                    - De contribuer à l’éducation populaire<br>
                    - De contribuer à la mise en œuvre de dispositifs d’insertion par l’activité économique<br>
                    - De s’impliquer dans tous les dispositifs d’insertion et de formation qui auront retenu l’attention de son Conseil d’Administration.<br>
                    Nombre de jeunes accueills: 27<br>
                    Nombre de salariés 90</p>
                  <ul>
                  </ul>
                </div>
                </div>
              </div>
              <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-2">Photos-Logos</a>
                <div id="accordion-2" class="accordion-section-content">
                </div>
              </div>
              <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-3">Contactez-Nous</a>
                <div id="accordion-3" class="accordion-section-content">
                  <p class="text2">Personne contact : Caroline DUPONT :<br>
                    Mail 1 : carolinedupont-poinfor@orange,fr<br>
                    Mail 2 : poinfor.ass@wanadoo.fr<br>
                    Téléphone fixe : 03-27-20-17-29<br>
                    Téléphone mobile : 06-84-49-35-24<br>
                    Fax : 03-27-41-00-23<br>
                    Rayonnement ( valenciennois, Hainaut,Cambresis…) :  Hainaut
                    Valenciennes, Denain, Douai<br>
                    Adresse : 1 rue Rosalie Levasseur 59300 VALENCIENNES<br></p>
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.911305691963!2d3.5129014155634946!3d50.36820830116877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edd00e05c8d3%3A0xd5b74a43da7a87f6!2sPoinfor!5e0!3m2!1sfr!2sfr!4v1472318464347" width="750" height="50" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
            <ul>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end .row section -->
    <div class="row center-block">
      <div id="marly">
    <div class="col-xs-12 col-md-12">
    <div class="accordion">
      <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-4">Qui sommes nous ? Mission Locale de MARLY</a>
        <div id="accordion-4" class="accordion-section-content open">
          <p class ="text2">NOM de la structure : MISSION LOCALE JEUNES DU VALENCIENNOIS.<br>
            Secteur D'activité : INSERTION SOCIALE ET PROFESSIONNELLE DES JEUNES  16/25 ANS<br>
            Objet de la structure ( votre activité principale, ce que vous faites) :<br>
            l'activité de la Mission Locale se caractérise par quatre axes forts :<br>
            - accueil des jeunes demandeurs d'emploi agés de 16 à 25 ans <br>
            -  information <br>
            -  orientation <br>
            - accompagnement <br>
            tout jeune inscrit en Mission Locale est accompagné dans sa globalité.<br>
            Un accueil diagnostic permet de faire un point de la situation personnelle et professionnelle des publics.<br>
            Au regard du diagnostic posé avec les jeunes , les conseillers  ont à charge de construire un parcours d'insertion tout en accompagnant les jeunes à la levée   des freins à l'insertion  rencontrés ( problème de qualification professionnelle , problème de santé , de logement , de couverture sociale ,<br>
            de mobilité .......)<br>
            Nombre de jeunes accueills : 13000<br>
            Nombre de salariés: 98</p>
          <ul>
          </ul>
        </div>
      </div>
      <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-5">Photos-Logos</a>
        <div id="accordion-5" class="accordion-section-content">
        </div>
      </div>
      <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-6">Contactez-Nous</a>
          <div id="accordion-6" class="accordion-section-content">
            <p class="text2">Personne (s) contact : KOTYLA Luc<br>
              Mail 1 :  mission.locale@mljv.fr<br>
              Téléphone Fixe: 03-27-32-38-00<br>
              Téléphone Fixe: 03 27 32 38 09<br>
              Adresse : 49 RUE PAUL VAILLANT COUTURIER 59770 MARLY
              <ul>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div><!-- end of .row section -->
<div class="row center-block">
<div id="acsrv">
  <div class="col-xs-12 col-md-12">
    <div class="accordion">
      <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-7">Qui sommes nous ? ACSRV</a>
        <div id="accordion-7" class="accordion-section-content open">
          <p class ="text2">Object de la sctructure(votre activité principale, ce que vous faites) :<br>
            Elle mutualise, sctructure, anime et gère des service de proximites tels que halte-garderie,<br>
            accueil de loisirs, ateliers famille, adultes et seniors.<br>

            Présente  dans six communes et deux intercommunalités, l'ACSRV travaille avec ses partenaires associatifs,<br>
            les collectivités locales et territoriales, les institutions sociales et culturelles à la définitions de <br>
            projets de territoire intégrant toutes les générations et les parcours de la vie des personnes. Sa contribution<br>
            porte sur la parentalité, l'éducation, la senté, la prévention, l'insertion et l'animation collective.<br>

            l'ACSRV participe au développement des centre sociaux sur valenciennois. Elle rend visible les besoins<br>
            sociaux, socioculturels et économique émergeant sur le Valenciennois. Elle organise la participations de<br>
            tous au profit du développement social local. Elle développe des services partagés destiné aux adhérents<br>
            dans le respect de leur autonomie elle organise la solidarité et l'échange de pratique entre centres sociaux.<br>
            Elle accompagne des projets de créations ou des restructurations de centre social. <br>
            Nombre de jeunes accueillis : 252 sur 2ans a se jour 63.<br>
            Nombre de salariés affectés à l'opérations : 4 temps pliens
            <ul>
            </ul>
          </div>
        </div>
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-8">Photos-Logos</a>
          <div id="accordion-8" class="accordion-section-content">
          </div>
        </div>
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-9">Contactez-Nous</a>
          <div id="accordion-9" class="accordion-section-content">
            <p class="text2"> <br>Personnes à conctatés : Anne Lescrohart et Benjamin Lemoine<br>
              Adress :34, avenue de Condé 59300
              Mail 1 : annes.lescrohart@acsrv.org<br>
              Mail 2 : benjamin.lemoine@acsrv.org<br>
              Téléphone Fixe: 03-27-28-91-98<br>
              Téléphone Mobile : 07-62-54-81.08<br>
              Fax : 03-27-29-72-18<br>
              <ul>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row center-block">
  <div class="col-xs-12 col-md-12">
  <div class="accordion">
    <div class="accordion-section">
      <a class="accordion-section-title" href="#accordion-10">Qui sommes nous ? ALTER-EGAUX</a>
      <div id="accordion-10" class="accordion-section-content open">
        <p class ="text2">Objet de la sctructure (votre activité principale, ce que vous faites) :<br>
          OBJET SOCIAL ALTER-EGAUX: en dehors de toute apprtenance politique, philosophique et religieuse,<br>
          ALTER-EGAUX a pour objet d'accueillir au sein de ses établissement et service des personnes, mineures<br>
          et/ou majeures, de toutes origines sociales et cultures, en difficulté personnelle, familiale et sociales<br>
          ou en situation de handicap physique, mental, social et psychique. L'association leur permet de devenir<br>
          davantage acteur de leur propre développement et favorise leur bien-être. En outre, elle participe à leur<br>
          éducation.<br>
          OBJET SOCIAL MEDIA : MEDIA oeuvre pour l'insertion socio-professionnelle des jeunes NEET de 16 à 25 ans,<br>
          principalement vers l'apprentissage, grâce a un accompagnement indiduel et personnalisé, et des actions<br>
          socio-éducatives (savoir de base et éducation citoyenne, autonomie dans les déplacement, accompagnement<br>
          à la santé, ateliers de préparation à l'emploi)
        <ul>
        </div>
        </ul>
    </div>
    <div class="accordion-section">
      <a class="accordion-section-title" href="#accordion-11">Photos-Logos</a>
      <div id="accordion-11" class="accordion-section-content">
      </div>
    </div>
    <div class="accordion-section">
      <a class="accordion-section-title" href="#accordion-12">Contactez-Nous</a>
        <div id="accordion-12" class="accordion-section-content">
          <p class="text2"><br>

            <ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div><!-- end of .row section -->
<script>
$(function() {
  jQuery('ul.nav li.dropdown').hover(function() {
    jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
  }, function() {
    jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
  });
});
jQuery(document).ready(function() {
  function close_accordion_section() {
    jQuery('.accordion .accordion-section-title').removeClass('active');
    jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
  }

  jQuery('.accordion-section-title').click(function(e) {
    var currentAttrValue = jQuery(this).attr('href');

    if(jQuery(e.target).is('.active')) {
      close_accordion_section();
    }else {
      close_accordion_section();
      jQuery(this).addClass('active');
      jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
    }

    e.preventDefault();
  });
});

</script>
</body>
</html>
