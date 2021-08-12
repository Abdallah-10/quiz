<?php
//ini_set('display_errors','on');
require_once ("../vendor/autoload.php");
ini_set('display_errors', 'Off');
use App\classes\Crypter;
use App\classes\form;
$form = new form();
$id = base64_decode($_GET['id']);

$rep = $form->getResultById($id);
$question = $form->getQuestionById($id);
arsort($rep);

if($question->q1=='a'){$Q1="études secondaires";}
if($question->q1=='b'){$Q1="terminale";}
if($question->q1=='c'){$Q1="bac";}
if($question->q1=='d'){$Q1="bac+1";}
if($question->q1=='e'){$Q1="bac+2";}
if($question->q1=='f'){$Q1="bac+3";}
if($question->q1=='g'){$Q1="bac+4";}
if($question->q1=='h'){$Q1="bac+5";}
if($question->q1=='i'){$Q1="doctorat";}

if($question->q1bis=='a'){$Q1bis="en école de commerce";}
if($question->q1bis=='b'){$Q1bis="en école d'ingénieur";}
if($question->q1bis=='c'){$Q1bis="à l'université";}
if($question->q1bis=='d'){$Q1bis="en DUT";}
if($question->q1bis=='e'){$Q1bis="en BTS";}
if($question->q1bis=='f'){$Q1bis="en CPGE";}
if($question->q1bis=='g'){$Q1bis="en maths sup/math spé";}


if($question->q1ter=='a'){$Q1ter="Mathématiques / Statistiques";}
if($question->q1ter=='b'){$Q1ter="Économie / Gestion";}
if($question->q1ter=='c'){$Q1ter="Informatique";}
if($question->q1ter=='d'){$Q1ter="Sciences de l’ingénieur";}
if($question->q1ter=='e'){$Q1ter="Sciences humaines";}
if($question->q1ter=='f'){$Q1ter="Droit et sciences politiques";}
if($question->q1ter=='g'){$Q1ter="Arts et lettres";}
if($question->q1ter=='h'){$Q1ter="Santé";}

if($question->q6=='a'){$Q6="de l'intelligence artificielle";}
if($question->q6=='b'){$Q6="des sciences de données";}
if($question->q6=='c'){$Q6="du business de la data et de l'IA";}
if($question->q6=='d'){$Q6="du droit et l'éthique de la data et de l'IA";}

if($question->q4=='a'){$Q4="ingénierie informatique";}
if($question->q4=='b'){$Q4="gestion de projet";}
if($question->q4=='c'){$Q4="management et la stratégie";}
if($question->q4=='d'){$Q4="développement technologique";}
if($question->q4=='e'){$Q4="droit";}
if($question->q4=='f'){$Q4="marketing";}
if($question->q4=='g'){$Q4="finance";}
if($question->q4=='h'){$Q4="logistique et le transport";}
if($question->q4=='i'){$Q4="mathématiques";}
if($question->q4=='j'){$Q4="philosophie et l’éthique";}
if($question->q4=='k'){$Q4="sciences politiques";}

if($question->q5=='a'){$Q5="mathématiques, algorithmique et statistiques";}
if($question->q5=='b'){$Q5="informatique";}
if($question->q5=='c'){$Q5="marketing analytique";}
if($question->q5=='d'){$Q5="business management et entrepreneuriat";}
if($question->q5=='e'){$Q5="droit et éthique";}

if($question->q7=='a'){$Q7="travailler dans un univers purement technologique";}
if($question->q7=='b'){$Q7="travailler de manière transversale avec d’autres métiers";}

if($question->q2=='a'){$Q2="la Banque / Assurance";}
if($question->q2=='b'){$Q2="le Commerce / Négoce / Distribution";}
if($question->q2=='c'){$Q2="l'Industrie pharmaceutique";}
if($question->q2=='d'){$Q2="l'Environnement";}
if($question->q2=='e'){$Q2="le Transport";}
if($question->q2=='f'){$Q2="l'Automobile";}
if($question->q2=='g'){$Q2="l'Informatique / Telecom";}
if($question->q2=='h'){$Q2="l'Agroalimentaire";}
if($question->q2=='i'){$Q2="la Construction";}
if($question->q2=='j'){$Q2="la Chimie / Parachimie";}
if($question->q2=='k'){$Q2="le Marketing";}
if($question->q2=='l'){$Q2="le Conseil / Études";}
if($question->q2=='m'){$Q2="le Service aux entreprises";}

if($question->q9=='a'){$Q9="les robots intelligents";}
if($question->q9=='b'){$Q9="les chatbots et le traitement du langage naturel";}
if($question->q9=='c'){$Q9="l’analyse et l’exploitation de données et la puissance du big data";}
if($question->q9=='d'){$Q9="les jeux vidéo et la réalité augmentée";}
if($question->q9=='e'){$Q9="les véhicules autonomes";}
if($question->q9=='f'){$Q9="les objets connectés intelligents";}
if($question->q9=='g'){$Q9="la reconnaissance et le traitement des images";}
if($question->q9=='h'){$Q9="les enjeux sociétaux liés au développement de l’IA";}
if($question->q9=='i'){$Q9="les implications business du développement de l’IA";}

if($question->q13=='a'){$Q13="pilotage";}
if($question->q13=='b'){$Q13="coordination";}
if($question->q13=='c'){$Q13="conception";}
if($question->q13=='d'){$Q13="soutien";}
if($question->q13=='e'){$Q13="technicien expert";}

if($question->q19=='a'){$Q19="de résolution de problèmes complexes";}
if($question->q19=='b'){$Q19="d'expliquer une notion non comprise";}
if($question->q19=='c'){$Q19="d'organiser et coordonner le travail";}
if($question->q19=='d'){$Q19="de piloter un exercice de groupe";}
if($question->q19=='e'){$Q19="de faire des recherches";}
if($question->q19=='f'){$Q19="de prendre la parole";}

if($question->q11=='a'){$Q11="curiosité intellectuelle, rigueur, précision, créativité";}
if($question->q11=='b'){$Q11="patience, pugnacité, autonomie, remise en question";}
if($question->q11=='c'){$Q11="organisation, leadership, synthèse, adaptabilité";}
if($question->q11=='d'){$Q11="sens de l’analyse, esprit de synthèse, réactivité, anticipation";}

if($question->q10=='a'){$Q10="capacité d’analyse";}
if($question->q10=='b'){$Q10="aptitude à travailler en équipe";}
if($question->q10=='c'){$Q10="esprit de synthèse";}
if($question->q10=='d'){$Q10="créativité";}
if($question->q10=='e'){$Q10="capacité de gérer des projets";}
if($question->q10=='f'){$Q10="logique mathématique et verbale";}

if($question->q15=='a'){$Q15="la progression technologique en général (automobile, industrielle, médicale…)";}
if($question->q15=='b'){$Q15="l’aide au développement et au pilotage des entreprises (stratégie, marché, management…)";}
if($question->q15=='c'){$Q15="les questions autour de l’éthique (confidentialité, liberté, respect de l’environnement…)";}

if($question->q14=='a'){$Q14="lancement, création, innovation";}
if($question->q14=='b'){$Q14="conception, développement, test";}
if($question->q14=='c'){$Q14="traitement, mise en œuvre, collaboration";}
if($question->q14=='d'){$Q14="analyse, synthèse, prévision";}
if($question->q14=='e'){$Q14="pilotage, stratégie, veille";}

if($question->q20=='a'){$Q20="jeux vidéo";}
if($question->q20=='b'){$Q20="sport";}
if($question->q20=='c'){$Q20="jeux d'énigme";}
if($question->q20=='d'){$Q20="lecture";}
if($question->q20=='e'){$Q20="séries et films";}
if($question->q20=='f'){$Q20="art et culture";}

if($question->q21=='a'){$Q21="méthode, patience et autonomie";}
if($question->q21=='b'){$Q21="créativité, exactitude et curiosité";}
if($question->q21=='c'){$Q21="leadership, écoute et organisation";}
if($question->q21=='d'){$Q21="synthèse, analyse et anticipation";}

if($question->q23=='a'){$Q23="piloter une équipe, un service ou une entreprise";}
if($question->q23=='b'){$Q23="participer aux avancées technologiques";}
if($question->q23=='c'){$Q23="bénéficier d'une bonne rémunération";}
if($question->q23=='d'){$Q23="contribuer au bien de l’humanité";}
if($question->q23=='e'){$Q23="créer sa propre entreprise";}

if($question->q8=='a'){$Q8="d'organisation, structuration et gestion des mégadonnées";}
if($question->q8=='b'){$Q8="d'analyse de données, de modélisation statistique et veille technologique";}
if($question->q8=='c'){$Q8="d'analyse de la data à travers une problématique précise (enjeu business, marketing, stratégique…) et de prévisions";}
if($question->q8=='d'){$Q8="de développement de technologies innovantes qui permettent d’augmenter l’intelligence humaine et celle des entreprises";}
if($question->q8=='e'){$Q8="de garant que l’utilisation des données et le développement de la technologie n’aient pas d’impact négatif sur l’homme et la société";}

$count = count($rep);


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>avaincityForm</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- External Css -->
    <link rel="stylesheet" href="../public/css/line-awesome.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="../public/css/main.css">
    <link rel="stylesheet" type="text/css" href="../public/css/typeform.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">


</head>
<body>
<div class="ugf-typeform">
    <div class="pt40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 offset-xl-12 col-lg-12 offset-lg-12">
                    <div class="typeform-wrap">
                        <div class="typeform-header">
                            <h2>Quiz métiers de l'IA</h2>
                        </div>

                        <?php if($question->q1=='a' || $question->q1=='b' || $question->q1=='c'){
                        ?>
                            <div class="typeform-test-wrap test-step active">
                                <div class="step-block step-1">
                                    <p>
                                        Après <?php echo $Q1; ?> <?php echo $Q1bis; ?>  dans le champs <?php echo $Q1ter; ?>, il est tout à fait envisageable de poursuivre vos études dans le domaine
                                        <?php echo $Q6; ?> tout en gardant une forte composante <?php echo $Q4; ?> et en développant vos compétences en <?php echo $Q5; ?>. En effet l’intelligence artificielle et les sciences de données ouvrent de
                                        nombreuses perspectives métiers permettant de <?php echo $Q7; ?>. Tous les secteurs d’activités sont concernés par l’IA et la gestion des Big Data et en particulier la <?php echo $Q2; ?>.
                                        Vos qualités de <?php echo $Q13; ?> et votre aisance dans les activités de <?php echo $Q14; ?> vous permettrait de réussir dans les métiers de l’IA et Data et en particulier dans des missions <?php echo $Q8; ?>.
                                    </p>
                                    <a href="#" class="button" style="cursor: pointer;" id="mainForm">Next</a>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="typeform-test-wrap test-step active">

                                <div class="step-block step-2">
                                    <p>
                                        Après <?php echo $Q1; ?> , il est tout à fait envisageable de poursuivre vos études dans le domaine <?php echo $Q6; ?>  tout en gardant une forte composante <?php echo $Q4; ?>  et en développant vos compétences en <?php echo $Q5; ?> .
                                        En effet l’intelligence artificielle et les sciences de données ouvrent de nombreuses perspectives métiers permettant de .<?php echo $Q7; ?>  Tous les secteurs d’activités sont concernés par l’IA et la gestion des Big Data et en particulier la <?php echo $Q2; ?> .
                                        Vos qualités de <?php echo $Q13; ?>  et votre aisance dans les activités de <?php echo $Q14; ?>  vous permettrait de réussir dans les métiers de l’IA et Data et en particulier dans des missions <?php echo $Q8; ?> .
                                    </p>
                                    <a href="#" class="button"  id="mainForm">Next</a>

                                </div>
                            </div>
                        <?php } ?>
                           <div class="typeform-test-wrap test-step">
                                <div class="step-block step-3">
                                    <p>
                                        L’IA et la massification des données provoquent une profonde mutation des métiers et des compétences et constituent une large possibilité d’embauche pour des diplômés hautement qualifiés.
                                        Le marché du travail prévoit ainsi une forte augmentation de la demande en experts en IA et Data. Et cette demande devrait se poursuivre et s’intensifier avec l’évolution des marchés de l’IA à travers le monde.
                                        Les métiers de l'IA et de la Data sont très variés et concernent une multitude de secteurs d'activités.

                                        L’analyse de vos réponses au Quiz métiers de l’IA/Data d’aivancity montre une adéquation de votre profil avec les métiers suivants :
                                    </p>
                                    <a href="#" class="button "  id="mainForm1">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>

                        <div class="typeform-test-wrap test-step">
                            <div class="step-block step-4">
                                <p>
                                    <?php
                                    $data = array();
                                    foreach ($rep as $key=>$value){
                                        array_push($data,$key." : ".$value);
                                    }
                                    for($i = 0;$i<3;$i++){
                                        echo $data[$i]."<br>";
                                    }
                                    ?>
                                </p>
                                <a href="#" class="button "  id="mainForm1">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <div class="typeform-test-wrap test-step">
                            <div class="step-block step-5">
                                <p>
                                    Votre intérêt pour <?php echo $Q9; ?> ainsi que <?php echo $Q15; ?> vient appuyer l’adéquation de votre profil avec ces métiers.

                                    Votre <?php echo $Q10; ?> et vos aptitudes <?php echo $Q19; ?> ainsi que vos qualités personnelles (<?php echo $Q11; ?>) vous aideront sans aucun doute à réussir et vous épanouir dans ces métier.
                                </p>
                                <a href="#" class="button "  id="mainForm1">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>

                        <?php if(($question->q1=='a' || $question->q1=='b' || $question->q1=='c' || $question->q1=='d' and $question->q3=='a')||
                            ($question->q1=='e' and $question->q3=='a'))
                        {
                        ?>
                        <div class="typeform-test-wrap test-step s8">
                            <div class="step-block step-6">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA, il vous est tout à fait possible de rejoindre le Bachelor of Science Intelligence Artificielle Appliquée d’aivancity School for Technology,
                                    Business & Society Paris-Cachan et d’obtenir un diplôme reconnu par l’Etat (RNCP niveau 6 - Développeur IA).
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(($question->q1=='a' || $question->q1=='b' || $question->q1=='c' || $question->q1=='d') and $question->q3=='b'){
                        ?>
                        <div class="typeform-test-wrap test-step s9">
                            <div class="step-block step-7">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA,
                                    il vous est tout à fait possible de rejoindre le
                                    <a href="https://www.aivancity.ai/fr/etudiant/programme/bachelor-science-intelligence-artificielle-appliquee" rel="noopener noreferrer"
                                       target="_blank">Bachelor of Science Intelligence Artificielle Appliquée</a>
                                       d’aivancity School for Technology, Business & Society Paris-Cachan et d’obtenir un diplôme reconnu par l’Etat (RNCP niveau 6).

                                    A l’issue du Bachelor, vous pouvez poursuivre vos études au sein du Programme Grande Ecole d’aivancity et obtenir en 2 ans le Master of Science Artificial Intelligence & Data Science for Business, reconnu par l'Etat (RNCP niveau 7) ainsi qu’une certification de l’université de Berkeley et plusieurs certifications professionnelles
                                    (Microsoft Azure, Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(($question->q1=='a' || $question->q1=='b' || $question->q1=='c' || $question->q1=='d') and $question->q3=='c'){
                        ?>
                        <div class="typeform-test-wrap test-step s10">
                            <div class="step-block step-8">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA, il vous est tout à fait possible de
                                    rejoindre le <a href="https://www.aivancity.ai/fr/etudiant/programme/bachelor-science-intelligence-artificielle-appliquee"
                                                    rel="noopener noreferrer" target="_blank">Bachelor of Science Intelligence Artificielle Appliquée</a>
                                    d’aivancity School for Technology, Business & Society Paris-Cachan et d’obtenir un diplôme reconnu par l’Etat (RNCP niveau 6).
                                    A l’issue du Bachelor, vous pouvez poursuivre vos études au sein du Programme Grande Ecole d’aivancity et obtenir en 2 ans
                                    le <a href="https://www.aivancity.ai/fr/etudiant/programme/programme-grande-ecole-msc-artificial-intelligence-data-science-business"
                                          rel="noopener noreferrer" target="_blank">Master of Science Artificial Intelligence &amp; Data Science for Business</a>,
                                    reconnu par l'Etat (RNCP niveau 7) ainsi qu’une certification de l’université de Berkeley et plusieurs certifications professionnelles
                                    (Microsoft Azure, Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.

                                    A l’issue du Programme Grande Ecole, vous avez la possibilité de poursuivre vos études en PhD ou Doctorat
                                    (bac+8) afin de développer vos compétences académiques et de recherche et développement. Le programme
                                    doctoral peut avoir lieu au sein d’un centre de recherche universitaire ou en entreprise dans le cadre d’une
                                    collaboration Ecole supérieure ou Université / Entreprise.
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if($question->q1=='e' and $question->q3=='b'){
                        ?>
                        <div class="typeform-test-wrap test-step s13">
                            <div class="step-block step-9">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA,
                                    il vous est tout à fait possible de rejoindre le Programme Grande Ecole d’aivancity et obtenir en 3 ans le
                                    <a href="https://www.aivancity.ai/fr/etudiant/programme/programme-grande-ecole-msc-artificial-intelligence-data-science-business"
                                       rel="noopener noreferrer" target="_blank">Master of Science Artificial Intelligence &amp; Data Science for Business</a>,
                                    reconnu par l'Etat (RNCP niveau 7) ainsi qu’une certification
                                    de l’université de Berkeley et plusieurs certifications professionnelles (Microsoft Azure,
                                    Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.

                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if($question->q1=='e' and $question->q3=='c'){
                        ?>
                        <div class="typeform-test-wrap test-step s14">
                            <div class="step-block step-9">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA, il vous est tout à fait
                                    possible de rejoindre le Programme Grande Ecole d’aivancity et obtenir en 3 ans le

                                    <a href="https://www.aivancity.ai/fr/etudiant/programme/programme-grande-ecole-msc-artificial-intelligence-data-science-business"
                                       rel="noopener noreferrer" target="_blank">Master of Science Artificial Intelligence &amp; Data Science for Business</a>,
                                    reconnu par l'Etat (RNCP niveau 7) ainsi qu’une certification de l’université de Berkeley et plusieurs
                                    certifications professionnelles (Microsoft Azure, Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.

                                    A l’issue du Programme Grande Ecole, vous avez la possibilité de poursuivre vos études en PhD ou Doctorat (bac+8)
                                    afin de développer vos compétences académiques et de recherche et développement. Le programme doctoral peut avoir
                                    lieu au sein d’un centre de recherche universitaire ou en entreprise dans le cadre d’une collaboration Ecole
                                    supérieure ou Université / Entreprise.
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>



                        <?php if($question->q1=='f' and ($question->q3=='a' || $question->q3=='b') ){
                        ?>
                        <div class="typeform-test-wrap test-step s11">
                            <div class="step-block step-9">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA, il vous est tout à fait possible de rejoindre le Programme Grande Ecole d’aivancity et obtenir en 3 ans le
                                    <a href="https://www.aivancity.ai/fr/etudiant/programme/programme-grande-ecole-msc-artificial-intelligence-data-science-business" rel="noopener noreferrer" target="_blank">Master of Science Artificial Intelligence &amp; Data Science for Business</a>,
                                    reconnu par l'Etat (RNCP niveau 7) ainsi qu’une certification de l’université de Berkeley et plusieurs certifications professionnelles (Microsoft Azure, Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.

                                    A l’issue du Programme Grande Ecole, vous avez la possibilité de poursuivre vos études en PhD ou Doctorat (bac+8) afin de développer
                                    vos compétences académiques et de recherche et développement.
                                    Le programme doctoral peut avoir lieu au sein d’un centre de recherche universitaire ou
                                    en entreprise dans le cadre d’une collaboration Ecole supérieure ou Université / Entreprise.
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if($question->q1=='f' and $question->q3=='c'  ){
                        ?>
                        <div class="typeform-test-wrap test-step s12">
                            <div class="step-block step-9">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA,
                                    il vous est tout à fait possible de rejoindre le Programme Grande Ecole d’aivancity et obtenir en 2 ou 3 ans le
                                    <a href="https://www.aivancity.ai/fr/etudiant/programme/programme-grande-ecole-msc-artificial-intelligence-data-science-business"
                                       rel="noopener noreferrer" target="_blank">Master of Science Artificial Intelligence &amp; Data Science for Business,</a>
                                    reconnu par l'Etat (RNCP niveau 7) ainsi qu’une certification de l’université de Berkeley et plusieurs certifications professionnelles (Microsoft Azure, Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.

                                    A l’issue du Programme Grande Ecole, vous avez la possibilité de poursuivre vos études en PhD ou Doctorat (bac+8) afin de développer vos compétences académiques et de recherche et développement. Le programme doctoral peut avoir lieu au sein d’un
                                    centre de recherche universitaire ou en entreprise dans le cadre d’une collaboration Ecole supérieure ou Université / Entreprise.
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if($question->q1=='g' and $question->q3=='a'  ){
                        ?>
                        <div class="typeform-test-wrap test-step s15">
                            <div class="step-block step-9">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA,
                                    il vous est tout à fait possible de rejoindre le Programme Grande Ecole d’aivancity et obtenir en 2 ans le
                                    <a href="https://www.aivancity.ai/fr/etudiant/programme/programme-grande-ecole-msc-artificial-intelligence-data-science-business"
                                       rel="noopener noreferrer" target="_blank">Master of Science Artificial Intelligence &amp; Data Science for Business</a>, reconnu par l'Etat (RNCP niveau 7) ainsi
                                    qu’une certification de l’université de Berkeley et plusieurs certifications professionnelles
                                    (Microsoft Azure, Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(($question->q1=='g' and $question->q3=='b' )||( $question->q1=='g' and $question->q3=='c') ){
                        ?>
                        <div class="typeform-test-wrap test-step">
                            <div class="step-block step-9 s16">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA,
                                    il vous est tout à fait possible de rejoindre le Programme Grande Ecole d’aivancity et obtenir en 2 ans le
                                    <a href="https://www.aivancity.ai/fr/etudiant/programme/programme-grande-ecole-msc-artificial-intelligence-data-science-business"
                                       rel="noopener noreferrer" target="_blank">Master of Science Artificial Intelligence &amp; Data Science for Business</a>, reconnu par l'Etat (RNCP niveau 7)
                                    ainsi qu’une certification de l’université de Berkeley et plusieurs certifications professionnelles (Microsoft Azure, Amazon WS, Google Cloud) dont la préparation et les examens sont intégrés dans la formation.

                                    Il est également possible de rejoindre le MSc Data Engineering for Buisness & Society d'aivancity, programme 100% en anglais en 1 an, reconnu par l'Etat (RNCP niveau 7).
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(($question->q1=='h' || $question->q1=='i') and ($question->q3=='b' ) ){
                        ?>
                        <div class="typeform-test-wrap test-step s17">
                            <div class="step-block step-9">
                                <p>
                                    Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA,
                                    il vous est tout à fait possible de rejoindre le <a href="https://www.aivancity.ai/fr/etudiant/programme/master-science-data-engineering-business-society"
                                     rel="noopener noreferrer" target="_blank">MSc Data Engineering for Buisness &amp; Society</a> d'aivancity,
                                    programme 100% en anglais en 1 an, reconnu par l'Etat (RNCP niveau 7), équivalent bac+5/6,
                                    permettant également l'obtention de plusieurs certifications professionnelles (Microsoft Azure, Amazon WS, Google Cloud)
                                    dont la préparation et les examens sont intégrés dans la formation.

                                    Il est également possible de rejoindre le <a href="https://www.aivancity.ai/fr/etudiant-et-professionnel/programme/master-science-machine-learning-business-intelligence-part-time"
                                     rel="noopener noreferrer" target="_blank">MSc Machine Learning for Business Intelligence</a> d'aivancity,
                                    programme en 12 mois part-time (séminaires les vendredis et samedis une semaine sur deux), reconnu par l'Etat (RNCP niveau 7),
                                    équivalent bac+5/6.
                                </p>
                                <a href="#" class="button "  id="mainForm">Next</a>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(($question->q1=='h' || $question->q1=='i') and ($question->q3=='c' ) ){
                            ?>
                            <div class="typeform-test-wrap test-step s18">
                                <div class="step-block step-9">
                                    <p>
                                        Afin de vous former à exercer ces métiers ainsi qu’un à spectre plus large des métiers de la Data et de l’IA, il vous est tout à fait possible
                                        de rejoindre le <a href="https://www.aivancity.ai/fr/etudiant/programme/master-science-data-engineering-business-society"
                                                           rel="noopener noreferrer" target="_blank">MSc Data Engineering for Buisness &amp; Society</a> d'aivancity, programme 100% en anglais en 1 an, reconnu par l'Etat (RNCP niveau 7),
                                        équivalent bac+5/6, permettant également l'obtention de plusieurs certifications professionnelles (Microsoft Azure, Amazon WS, Google Cloud)
                                        dont la préparation et les examens sont intégrés dans la formation.

                                        Il est également possible de rejoindre le <a href="https://www.aivancity.ai/fr/etudiant-et-professionnel/programme/master-science-machine-learning-business-intelligence-part-time"
                                                                                     rel="noopener noreferrer" target="_blank">MSc Machine Learning for Business Intelligence</a>
                                        d'aivancity, programme en 12 mois part-time
                                        (séminaires les vendredis et samedis une semaine sur deux), reconnu par l'Etat (RNCP niveau 7), équivalent bac+5/6.

                                        A l’issue de l'un de ces deux programmes, vous avez la possibilité de poursuivre vos études en PhD ou
                                        Doctorat (bac+8) afin de développer vos compétences académiques et de recherche et développement.
                                        Le programme doctoral peut avoir lieu au sein d’un centre de recherche universitaire ou en entreprise dans
                                        le cadre d’une collaboration Ecole supérieure ou Université / Entreprise.
                                    </p>
                                    <a href="#" class="button "  id="mainForm">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="typeform-test-wrap test-step">
                            <div class="step-block step-9">
                                <p>
                                    Les programmes d’aivancity sont conçus pour vous aider à développer des compétences hybrides IA/Data Tech,
                                    Business Management et éthique de l’IA/Data. Elles vous permettront également, entre autres, de développer
                                    vos qualités de <?php echo $Q21; ?> tout en poursuivant vos activités de loisir en <?php echo $Q20; ?>  et sans doute de développer
                                    d’autres activités extrascolaires contribuant ainsi à l’atteinte de vos objectifs de <?php echo $Q23; ?> .

                                </p>
                                <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .typeform-test-wrap p {
        font-size: 20px !important;
    }

    .ugf-typeform {
        background-color: #cedfeed6;
    }
    .typeform-test-wrap p {
        min-height: 290px;
    }
</style>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/custom.js"></script>
</body>

</html>

