<?php
    require_once ("../vendor/autoload.php");
    use App\classes\database;
    use App\classes\form;

    $db = new database();
if(isset($_POST["submit"])){
    $form = new form();
    $form->setForm();
}

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

    <!-- Favicon -->
    <link rel="icon" href="../images/favicon.png">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/icon-114x114.png">

</head>
<body>

<div class="ugf-typeform typeform-bg">
    <div class="pt40">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <h2 style="color:#fff">Aivancity</h2>
                </div>
                <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
                    <div class="typeform-wrap">
                        <div class="typeform-header">
                            <h2>Quiz métiers de l'IA</h2>
                            <span class="step-count"><span class="current-step">1</span>/<span class="total-step">26</span></span>
                        </div>

                        <form method="post" action="" >
                            <div class="typeform-test-wrap test-step active">

                                <div class="step-block step-0">
                                    <h5>Votre prénom *</h5>
                                    <div class="form-group">
                                        <input type="text" name="prenom" id="prenom" class="form-control champ0"
                                               placeholder="prénom..." onkeypress="return event.keyCode != 13;" required>
                                    </div>
                                    <h5>Votre nom *</h5>
                                    <div class="form-group">
                                        <input type="text" name="nom" id="nom" class="form-control champ1" placeholder="nom..." required >
                                    </div>
                                    <h5>Votre email *</h5>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control champ2" placeholder="email..." required >

                                    </div>
                                    <br>
                                    <p class="oblig"></p>
                                    <a href="#" class="button" style="cursor: pointer;" id="mainForm0">Next</a>
                                </div>
                            </div>

                            <div class="typeform-test-wrap test-step">
                                <h3>Vous êtes *</h3>
                                <p>Ces informations nous permettrons de vous envoyer vos résultats par
                                    mail et de personnaliser ce quiz</p>
                                <div class="step-block step-1">
                                    <div class="form-group">
                                        <input type="radio" name="package" class="form-control" value="a" id="one">
                                        <label for="one">Élève</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package" class="form-control" value="b" id="two">
                                        <label for="two">Étudiant</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package" class="form-control" value="c" id="three">
                                        <label for="three">Professionnel</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package" class="form-control" value="d" id="four">
                                        <label for="four">autre</label>
                                    </div>
                                    <a href="#" class="button display"  id="mainForm1">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>

                            <div class="typeform-test-wrap test-step  step-q1">
                                <h3>Q1- Quel niveau d’études avez-vous ? *</h3>

                                <div class="step-block step-2">
                                    <div class="form-group">
                                        <input type="radio" name="package-q1" class="form-control" value="a" id="q1_one">
                                        <label for="q1_one">études secondaires</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q1" class="form-control" value="b" id="q1_two">
                                        <label for="q1_two">terminale</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q1" class="form-control" value="c" id="q1_three">
                                                <label for="q1_three">bac</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q1" class="form-control" value="d" id="q1_for">
                                                <label for="q1_for">bac+1</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q1" class="form-control" value="e" id="q1_five">
                                                <label for="q1_five">bac+2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q1" class="form-control" value="f" id="q1_six">
                                                <label for="q1_six">bac+3</label>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q1" class="form-control" value="g" id="q1_seven">
                                                <label for="q1_seven">bac+4</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q1" class="form-control" value="h" id="q1_eight">
                                                <label for="q1_eight">bac+5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q1" class="form-control" value="i" id="q1_nine">
                                        <label for="q1_nine">doctorat</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm2">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>

                            </div>

                            <div class="typeform-test-wrap test-step step-Q1bis">
                                <h3>Q1bis- Votre parcours s'est déroulé/se déroule... *</h3>
                                
                                <div class="step-block step-3">
                                    <div class="form-group">
                                        <input type="radio" name="package-bis" class="form-control" value="a" id="bis_one">
                                        <label for="bis_one">en école de commerce</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-bis" class="form-control" value="b" id="bis_two">
                                        <label for="bis_two">en école d'ingénieur</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-bis" class="form-control" value="c" id="bis_three">
                                                <label for="bis_three">à l'université</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-bis" class="form-control" value="d" id="bis_for">
                                                <label for="bis_for">en DUT</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-bis" class="form-control" value="e" id="bis_five">
                                                <label for="bis_five">en BTS</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-bis" class="form-control" value="f" id="bis_six">
                                                <label for="bis_six">en CPGE</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-bis" class="form-control" value="g" id="bis_seven">
                                        <label for="bis_seven">en maths sup/math spé</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm3">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                                
                            </div>
                            <div class="typeform-test-wrap test-step step-Q1ter">
                                <h3>Q1ter- Quel est votre domaine d'études ?*</h3>

                                <div class="step-block step-4">
                                    <div class="form-group">
                                        <input type="radio" name="package-ter" class="form-control" value="a" id="ter_one">
                                        <label for="ter_one">Mathématiques / Statistiques</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-ter" class="form-control" value="b" id="ter_two">
                                        <label for="ter_two">Économie / Gestion</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-ter" class="form-control" value="c" id="ter_three">
                                                <label for="ter_three">Informatique</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-ter" class="form-control" value="d" id="ter_for">
                                                <label for="ter_for">Sciences de l’ingénieur</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-ter" class="form-control" value="e" id="ter_five">
                                                <label for="ter_five">Sciences humaines</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-ter" class="form-control" value="f" id="ter_six">
                                                <label for="ter_six">Droit et sciences politiques</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-ter" class="form-control" value="g" id="ter_seven">
                                        <label for="ter_seven">Arts et lettres</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-ter" class="form-control" value="h" id="ter_eight">
                                        <label for="ter_eight">Santé</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm4">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>

                            </div>

                            <div class="typeform-test-wrap test-step step-q2">
                                <h3>Q2- Par quel secteur d’activité êtes-vous intéressé(e) ? *</h3>

                                <div class="step-block step-5 ">
                                    <div class="form-group">
                                        <input type="hidden" name="categOne" value="prevTwo">
                                        <input type="radio" name="package-q2" class="form-control" value="a" id="q2_one">
                                        <label for="q2_one">la Banque / Assurance</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q2" class="form-control" value="b" id="q2_two">
                                        <label for="q2_two">le Commerce / Négoce / Distribution</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q2" class="form-control" value="c" id="q2_three">
                                        <label for="q2_three">l'Industrie pharmaceutique</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="d" id="q2_for">
                                                <label for="q2_for">l'Environnement</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="e" id="q2_five">
                                                <label for="q2_five">le Transport</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="f" id="q2_six">
                                                <label for="q2_six">l'Automobile</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="g" id="q2_seven">
                                                <label for="q2_seven">l'Informatique / Telecom</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="h" id="q2_eight">
                                                <label for="q2_eight">l'Agroalimentaire</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="i" id="q2_nine">
                                                <label for="q2_nine">la Construction</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q2" class="form-control" value="j" id="q2_ten">
                                        <label for="q2_ten">la Chimie / Parachimie</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="k" id="q2_twenty">
                                                <label for="q2_twenty">le Marketing</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q2" class="form-control" value="l" id="q2_thirty">
                                                <label for="q2_thirty">le Conseil / Études</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q2" class="form-control" value="m" id="q2_forty">
                                        <label for="q2_forty">le Service aux entreprises</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm5">Next</a>
                                    <a href="#" class="prev-btn" id="prev5"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>

                            <div class="typeform-test-wrap test-step">
                                <h3>Q3- Quelle durée d’études envisagez-vous ? *</h3>

                                <div class="step-block step-6">
                                    <div class="form-group">
                                        <input type="radio" name="package-q3" class="form-control" value="a" id="q3_one">
                                        <label for="q3_one">Jusqu’à Bac +3</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q3" class="form-control" value="b" id="q3_two">
                                        <label for="q3_two">Jusqu’à Bac +5/6</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q3" class="form-control" value="c" id="q3_three">
                                        <label for="q3_three">Jusqu’à Bac+8</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm6">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>

                            <div class="typeform-test-wrap test-step">
                                <h3>Q4- A priori, quelle est la discipline qui vous intéresse le plus ? *</h3>

                                <div class="step-block step-7">
                                    <div class="form-group">
                                        <input type="radio" name="package-q4" class="form-control" value="a" id="q4_one">
                                        <label for="q4_one">ingénierie informatique</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q4" class="form-control" value="b" id="q4_two">
                                        <label for="q4_two">gestion de projet</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q4" class="form-control" value="c" id="q4_three">
                                        <label for="q4_three">management et la stratégie</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q4" class="form-control" value="d" id="q4_for">
                                        <label for="q4_for">développement technologique</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q4" class="form-control" value="e" id="q4_five">
                                                <label for="q4_five">droit</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q4" class="form-control" value="f" id="q4_six">
                                                <label for="q4_six">marketing</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q4" class="form-control" value="g" id="q4_seven">
                                                <label for="q4_seven">finance</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q4" class="form-control" value="h" id="q4_eight">
                                                <label for="q4_eight">logistique et le transport</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q4" class="form-control" value="i" id="q4_nine">
                                                <label for="q4_nine">l'Agroalimentaire</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="radio" name="package-q4" class="form-control" value="j" id="q4_ten">
                                                <label for="q4_ten">mathématiques</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q4" class="form-control" value="k" id="q4_twenty">
                                        <label for="q4_twenty">philosophie et l’éthique</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm7">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q5- Dans quel domaine de la data / IA pensez-vous être le plus à l’aise ? *</h3>

                                <div class="step-block step-8">
                                    <div class="form-group">
                                        <input type="radio" name="package-q5" class="form-control" value="a" id="q5_one">
                                        <label for="q5_one">mathématiques, algorithmique et statistiques</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q5" class="form-control" value="b" id="q5_two">
                                        <label for="q5_two">informatique</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q5" class="form-control" value="c" id="q5_three">
                                        <label for="q5_three">marketing analytique</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q5" class="form-control" value="d" id="q5_for">
                                        <label for="q5_for">marketing analytique</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q5" class="form-control" value="e" id="q5_five">
                                        <label for="q5_five">marketing analytique</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm8">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q6- A priori, vous êtes attiré(e) davantage par le domaine : *</h3>

                                <div class="step-block step-9">
                                    <div class="form-group">
                                        <input type="radio" name="package-q6" class="form-control" value="a" id="q6_one">
                                        <label for="q6_one">de l'intelligence artificielle</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q6" class="form-control" value="b" id="q6_two">
                                        <label for="q6_two">des sciences de données</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q6" class="form-control" value="c" id="q6_three">
                                        <label for="q6_three">du business de la data et de l'IA</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q6" class="form-control" value="d" id="q6_five">
                                        <label for="q6_five">du droit et l'éthique de la data et de l'IA</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm9">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q7- Vous aimez : *</h3>
                                <div class="step-block step-10">
                                    <div class="form-group">
                                        <input type="radio" name="package-q7" class="form-control" value="a" id="q7_one">
                                        <label for="q7_one">travailler dans un univers purement technologique</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q7" class="form-control" value="b" id="q7_two">
                                        <label for="q7_two">travailler de manière transversale avec d’autres métiers</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm10">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q8- Lorsque vous envisagez un métier lié à la data et à l’IA, vous imaginez des activités : *</h3>
                                <div class="step-block step-11">
                                    <div class="form-group">
                                        <input type="radio" name="package-q8" class="form-control" value="a" id="q8_one">
                                        <label for="q8_one">d'organisation, structuration et gestion des mégadonnées</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q8" class="form-control" value="b" id="q8_two">
                                        <label for="q8_two">d'analyse de données, de modélisation statistique et veille technologique</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q8" class="form-control" value="c" id="q8_three">
                                        <label for="q8_three">d'analyse de la data à travers une
                                            problématique précise (enjeu business, marketing, stratégique…) et de prévisions</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q8" class="form-control" value="d" id="q8_for">
                                        <label for="q8_for">de développement de technologies innovantes qui permettent d’augmenter
                                            l’intelligence humaine et celle des entreprises</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q8" class="form-control" value="e" id="q8_five">
                                        <label for="q8_five">de garant que l’utilisation des données et le développement de la
                                            technologie n’aient pas d’impact négatif sur l’homme et la société</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm11">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q9- Qu’est-ce qui vous fascine le plus ? *</h3>
                                <div class="step-block step-12">
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="a" id="q9_one">
                                        <label for="q9_one">les robots intelligents</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="b" id="q9_two">
                                        <label for="q9_two">les chatbots et le traitement du langage naturel</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="c" id="q9_three">
                                        <label for="q9_three">l’analyse et l’exploitation de données et la puissance du big data</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="d" id="q9_for">
                                        <label for="q9_for">les jeux vidéo et la réalité augmentée</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="e" id="q9_five">
                                        <label for="q9_five">les véhicules autonomes</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="f" id="q9_six">
                                        <label for="q9_six">les objets connectés intelligents</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="g" id="q9_seven">
                                        <label for="q9_seven">la reconnaissance et le traitement des images</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="h" id="q9_eight">
                                        <label for="q9_eight">les enjeux sociétaux liés au développement de l’IA</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q9" class="form-control" value="i" id="q9_nine">
                                        <label for="q9_nine">les implications business du développement de l’IA</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm12">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q10- Quelle est votre compétence principale ? *</h3>
                                <div class="step-block step-13">
                                    <div class="form-group">
                                        <input type="radio" name="package-q10" class="form-control" value="a" id="q10_one">
                                        <label for="q10_one">capacité d’analyse</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q10" class="form-control" value="b" id="q10_two">
                                        <label for="q10_two">aptitude à travailler en équipe</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q10" class="form-control" value="c" id="q10_three">
                                        <label for="q10_three">esprit de synthèse</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q10" class="form-control" value="d" id="q10_for">
                                        <label for="q10_for">créativité</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q10" class="form-control" value="e" id="q10_five">
                                        <label for="q10_five">capacité de gérer des projets</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q10" class="form-control" value="f" id="q10_six">
                                        <label for="q10_six">logique mathématique et verbale</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm13">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q11- Choisissez les 4 qualités qui correspondent le plus à votre personnalité ? *</h3>
                                <div class="step-block step-14">
                                    <div class="form-group">
                                        <input type="radio" name="package-q11" class="form-control" value="a" id="q11_one">
                                        <label for="q11_one">curiosité intellectuelle, rigueur, précision, créativité</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q11" class="form-control" value="b" id="q11_two">
                                        <label for="q11_two">patience, pugnacité, autonomie, remise en question</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q11" class="form-control" value="c" id="q11_three">
                                        <label for="q11_three">organisation, leadership, synthèse, adaptabilité</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q11" class="form-control" value="d" id="q11_for">
                                        <label for="q11_for">sens de l’analyse, esprit de synthèse, réactivité, anticipation</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm14">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>
                                    Q12- Votre pratique de l’anglais est : *</h3>
                                <div class="step-block step-15">
                                    <div class="form-group">
                                        <input type="radio" name="package-q12" class="form-control" value="a" id="q12_one">
                                        <label for="q12_one">correcte</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q12" class="form-control" value="b" id="q12_two">
                                        <label for="q12_two">fluide</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm15">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q13- Quelle rôle occupez-vous dans une équipe, le plus souvent ? *</h3>
                                <div class="step-block step-16">
                                    <div class="form-group">
                                        <input type="radio" name="package-q13" class="form-control" value="a" id="q13_one">
                                        <label for="q13_one">pilotage</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q13" class="form-control" value="b" id="q13_two">
                                        <label for="q13_two">coordination</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q13" class="form-control" value="c"  id="q13_three">
                                        <label for="q13_three">conception</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q13" class="form-control" value="d" id="q13_for">
                                        <label for="q13_for">soutien</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q13" class="form-control" value="e" id="q13_five">
                                        <label for="q13_five">technicien expert</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm16">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>

                            <div class="typeform-test-wrap test-step">
                                <h3>Q14- Quels aspects professionnels aimez-vous le plus ? *</h3>
                                <div class="step-block step-17">
                                    <div class="form-group">
                                        <input type="radio" name="package-q14" class="form-control" value="a" id="q14_one">
                                        <label for="q14_one">lancement, création, innovation</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q14" class="form-control" value="b" id="q14_two">
                                        <label for="q14_two">conception, développement, test</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q14" class="form-control" value="c" id="q14_three">
                                        <label for="q14_three">traitement, mise en œuvre, collaboration</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q14" class="form-control" value="d" id="q14_for">
                                        <label for="q14_for">analyse, synthèse, prévision</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q14" class="form-control" value="e" id="q14_five">
                                        <label for="q14_five">pilotage, stratégie, veille</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm17">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q15- Quel aspect de l’IA vous intéresse le plus ? *</h3>
                                <div class="step-block step-18">
                                    <div class="form-group">
                                        <input type="radio" name="package-q15" class="form-control" value="a" id="q15_one">
                                        <label for="q15_one">la progression technologique en général (automobile, industrielle, médicale…)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q15" class="form-control" value="b" id="q15_two">
                                        <label for="q15_two">l’aide au développement et au pilotage des entreprises (stratégie, marché, management…)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q15" class="form-control" value="c" id="q15_three">
                                        <label for="q15_three">les questions autour de l’éthique (confidentialité, liberté, respect de l’environnement…)</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm18">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q16- Sur un campus, où êtes-vous le plus à votre aise ? *</h3>
                                <div class="step-block step-19">
                                    <div class="form-group">
                                        <input type="radio" name="package-q16" class="form-control" value="a" id="q16_one">
                                        <label for="q16_one">en cours</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q16" class="form-control" value="b" id="q16_two">
                                        <label for="q16_two">dans la salle informatique</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q16" class="form-control" value="c" id="q16_three">
                                        <label for="q16_three">en espace coworking, à travailler sur des projets</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q16" class="form-control" value="d" id="q16_for">
                                        <label for="q16_for">sur le terrain de sport ou dans la vie associative</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm19">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q17- A quelle équipe auriez-vous aimé appartenir ? *</h3>
                                <div class="step-block step-20">
                                    <div class="form-group">
                                        <input type="radio" name="package-q17" class="form-control" value="a" id="q17_one">
                                        <label for="q17_one">Elon Musk (Tesla)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q17" class="form-control" value="b" id="q17_two">
                                        <label for="q17_two">Mark Zuckerberg (Facebook)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q17" class="form-control" value="c" id="q17_three">
                                        <label for="q17_three">Jack Ma (Ali BABA)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q17" class="form-control" value="d" id="q17_for">
                                        <label for="q17_for">Bill Gates (Microsoft)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q17" class="form-control" value="e" id="q17_five">
                                        <label for="q17_five">Larry Page (Google)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q17" class="form-control" value="f" id="q17_six">
                                        <label for="q17_six">Jeff Bezos (Amazon)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q17" class="form-control" value="g" id="q17_seven">
                                        <label for="q17_seven">Steeve Jobs (Apple)</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm20">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q18- Pour vous, quelle fiction incarne le mieux l’IA ? *</h3>
                                <div class="step-block step-21">
                                    <div class="form-group">
                                        <input type="radio" name="package-q18" class="form-control" value="a" id="q18_one">
                                        <label for="q18_one">Wall E</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q18" class="form-control" value="b" id="q18_two">
                                        <label for="q18_two">Iron Man</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q18" class="form-control" value="c" id="q18_three">
                                        <label for="q18_three">Her</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q18" class="form-control" value="d" id="q18_for">
                                        <label for="q18_for">A.I. Intelligence Artificielle</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q18" class="form-control" value="e" id="q18_five">
                                        <label for="q18_five">The Imitation Game</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q18" class="form-control" value="f" id="q18_six">
                                        <label for="q18_six">Moneyball</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q18" class="form-control" value="g" id="q18_seven">
                                        <label for="q18_seven">Margin call</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm21">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q19- En tant qu’apprenant(e), pour laquelle de vos aptitudes êtes-vous le plus souvent sollicité(e) ? *</h3>
                                <div class="step-block step-22">
                                    <div class="form-group">
                                        <input type="radio" name="package-q19" class="form-control" value="a" id="q19_one">
                                        <label for="q19_one">de résolution de problèmes complexes</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q19" class="form-control" value="b" id="q19_two">
                                        <label for="q19_two">d'expliquer une notion non comprise</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q19" class="form-control" value="c" id="q19_three">
                                        <label for="q19_three">d'organiser et coordonner le travail</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q19" class="form-control" value="d" id="q19_for">
                                        <label for="q19_for">de piloter un exercice de groupe</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q19" class="form-control" value="e" id="q19_five">
                                        <label for="q19_five">de faire des recherches</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q19" class="form-control" value="f" id="q19_six">
                                        <label for="q19_six">de prendre la parole</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm22">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q20- Un peu de temps libre tout(e) seul(e), comment vous occupez-vous ? *</h3>
                                <div class="step-block step-23">
                                    <div class="form-group">
                                        <input type="radio" name="package-q20" class="form-control" value="a" id="q20_one">
                                        <label for="q20_one">jeux vidéo</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q20" class="form-control" value="b" id="q20_two">
                                        <label for="q20_two">sport</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q20" class="form-control" value="c" id="q20_three">
                                        <label for="q20_three">jeux d'énigme</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q20" class="form-control" value="d" id="q20_for">
                                        <label for="q20_for">lecture</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q20" class="form-control" value="e" id="q20_five">
                                        <label for="q20_five">séries et films</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q20" class="form-control" value="f" id="q20_six">
                                        <label for="q20_six">art et culture</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm23">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>

                            <div class="typeform-test-wrap test-step">
                                <h3>Q21- Quelles qualités admirez-vous le plus ? *</h3>
                                <div class="step-block step-24">
                                    <div class="form-group">
                                        <input type="radio" name="package-q21" class="form-control" value="a" id="q21_one">
                                        <label for="q21_one">méthode, patience et autonomie</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q21" class="form-control" value="b" id="q21_two">
                                        <label for="q21_two">créativité, exactitude et curiosité</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q21" class="form-control" value="c" id="q21_three">
                                        <label for="q21_three">leadership, écoute et organisation</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q21" class="form-control" value="d" id="q21_for">
                                        <label for="q21_for">synthèse, analyse et anticipation</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm24">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q22- Dans quel secteur de l’IA aimeriez-vous travailler *</h3>
                                <div class="step-block step-25">
                                    <div class="form-group">
                                        <input type="radio" name="package-q22" class="form-control" value="a" id="q22_one">
                                        <label for="q22_one">Santé</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q22" class="form-control" value="b" id="q22_two">
                                        <label for="q22_two">Finance</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q22" class="form-control" value="c" id="q22_three">
                                        <label for="q22_three">Droit</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q22" class="form-control" value="d" id="q22_for">
                                        <label for="q22_for">Commerce</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="package-q22" class="form-control" value="e" id="q22_five">
                                        <label for="q22_five">Industrie</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q22" class="form-control" value="f" id="q22_six">
                                        <label for="q22_six">Entrepreneuriat</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q22" class="form-control" value="g" id="q22_seven">
                                        <label for="q22_seven">Conseil</label>
                                    </div>

                                    <a href="#" class="button display" id="mainForm25">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>
                                </div>
                            </div>
                            <div class="typeform-test-wrap test-step">
                                <h3>Q23- La réussite pour vous c’est avant toutCette question est requise  *</h3>
                                <div class="step-block step-2 step-26">
                                    <div class="form-group">
                                        <input type="radio" name="package-q23" class="form-control" value="a" id="q23_one">
                                        <label for="q23_one">piloter une équipe, un service ou une entreprise</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q23" class="form-control" value="b" id="q23_two">
                                        <label for="q23_two">participer aux avancées technologiques</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q23" class="form-control" value="c" id="q23_three">
                                        <label for="q23_three">bénéficier d'une bonne rémunération</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="package-q23" class="form-control" value="d" id="q23_for">
                                        <label for="q23_for">contribuer au bien de l’humanité</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="package-q23" class="form-control" value="e" id="q23_five">
                                        <label for="q23_five">créer sa propre entreprise</label>
                                    </div>
                                    <a href="#" class="button display" id="mainForm26">Next</a>
                                    <a href="#" class="prev-btn"><img src="../public/images/arrow-left-grey.png" alt="">Previous</a>

                                </div>
                            </div>

                            <div class="typeform-test-wrap test-step thankyou-sec">
                                <div class="test-progress">
                                    <img src="images/big-green-check.png" class="img-fluid" alt="">
                                </div>
                                <h3>Le quiz métiers de l'IA et Data d'aivancity est maintenant achevé...
                                    Découvrez vos résultats sans attendre </h3>
                                <p>!Découvrez aivancity, la Grande Ecole de l'IA : www.aivancity.ai</p>

                                <input id="info" type="submit" class="btn btn-success"  name="submit" value="Mes résultats">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/custom.js"></script>
</body>

</html>

