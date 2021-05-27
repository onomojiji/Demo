@extends('layouts.app')

@section('title')
    {{ "Mon CV Professionnel" }}
@endsection

@section('content')
    <div class="container-fluid">
            <div class="row" style="margin-top: 5px;">

                {{-- <!-- """"""""PARTIE GAUCHE""""" --> --}}

                <div class="col-sm-4">
                    <div class="row text-center">
                        <h2><span><img src="images/user.png" alt="Personne" style="width: 30px;"></span>ONOMO JEAN BAPTISTE</h2>
                        <img class="img-fluid rounded" src="images/jiji.jpg" alt="Photo 4x4">
                    </div>
                    <br>

                    <div class="row text-light text-center bg-info rounded">
                        <span>
                            <img class="rounded" src="images/contacts.png" alt="contacts" style="width: 46px;">
                        </span>
                        <h2>Contacts</h2>
                    </div>
                    <div class="row text-left">
                        <ul style="list-style-type: none;">
                            <li><span><img src="images/gmail.png" alt="Gmail" style="width:20px;">
                            </span>lenfantdesrails@gmail.com</li>
                            <li><span><img src="images/whatsapp.png" alt="whatsapp" style="width: 20px;">
                            </span>+237 699 563 010</li>
                            <li><span><img src="images/linkedin.png" alt="facebook" style="width: 20px;">
                            </span>Onomo Jean Baptiste</li>
                            <li><span><img src="images/adresse.png" alt="adresse" style="width: 20px;">
                            </span>Bloc F (F77) Makèpè sainte Monique, Douala Cameroun</li>
                        </ul>
                    </div>

                    <div class="row text-light text-center bg-info rounded">
                        <span><img src="images/competences.png" alt="compétences" style="width: 46px;"></span>
                        <h2>Compétences</h2>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">

                            <li>
                                <h3>Ingénieur</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                    style="width: 30%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                    30%</div>
                                </div>
                            </li>
                            <li>
                                <h3>White Hat</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                    style="width: 32%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                    32%</div>
                                </div>
                            </li>
                            <li>
                                <h3>{{ "Developpeur d'applications Mobile" }}</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    50%</div>
                                </div>
                            </li>
                            <li>
                                <h3>Code Warrior</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                    style="width: 68%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                    68%</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="row text-light text-center bg-info rounded">
                        <span><img src="images/langues.png" alt="langues" style="width: 46px;"></span>
                        <h2>Langues</h2>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">
                            <li>
                                <span><img src="images/français.png" alt="français" style="width: 20px;"></span>
                                <strong>Français</strong>: parle, lis, écris
                            </li>
                            <li>
                                <span><img src="images/anglais.png" alt="Anglais" style="width: 20px;"></span>
                                <strong>Anglais</strong>: lis, écris
                            </li>
                        </ul>
                    </div>

                    <div class="row text-light text-center bg-info rounded">
                        <span><img src="images/intérêts.png" alt="intérêts" style="width: 46px;"></span>
                        <h2>Intérêts</h2>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">
                            <li><strong>Argent</strong></li>
                            <li><strong>Code</strong></li>
                            <li><strong>Gangsta RAP</strong></li>
                            <li><strong>Coupé Décalé</strong></li>
                            <li><strong>GTA</strong></li>
                            <li><strong>Football</strong></li>
                        </ul>
                    </div>
                    <div class="row text-light text-center bg-info rounded">
                        <span><img src="images/citation.png" alt="intérêts" style="width: 46px;"></span>
                        <h2>Citation Favorite</h2>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">
                            <li>
                                <em>
                                    << L'oiseau sur le Baobah, ne doit pas oublier
                                        qu'il a porté des lunettes...>>
                                    </em>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- ----------------------------------------------------------------------- -->
                <div class="col-sm-1">

                </div>
                {{-- <!-- """""""""""""""""""""PARTIE DROITE""""""""""""""""""""""" --> --}}

                <div class="col-sm-7">
                    <hr class="bg-dark">
                    <div class="row">
                        <span><img src="images/objectif.png" alt="objectis" style="width: 40px;"></span>
                        <h3>OBJECTIFS</h3>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">
                            <li>Être PDG de ma propre Entrepise</li>
                            <li>Laisser un Héritage Comme Papa Kadji Deffosso</li>
                            <li>{{ "Et puis Marquer l'histoire..." }}</li>
                        </ul>
                    </div>
                    <hr class="bg-dark">
                    <div class="row">
                        <span><img src="images/experience-pro.png" alt="exp-pro" style="width: 30px;"></span>
                        <h3>EXPÉRIENCE PROFESSIONNELLE</h3>
                    </div>
                    <div class="row">
                        <ul>
                            <li>
                                <strong>
                                    Ibom
                                </strong> :
                                <em>
                                    PDG, Développeur,
                                    {{ "Chef d'equipe" }}
                                </em>
                                <span class="float-right">
                                    <em>
                                        {{ "du 13 Avril 2019 jusqu'à Aujourd'hui" }}
                                    </em>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <hr class="bg-dark">
                    <!-- ----------------------------------------------------- -->
                    <div class="row">
                        <span><img src="images/education.png" alt="education" style="width: 46px;"></span>
                        <h3>EDUCATION</h3>
                    </div>
                    <div class="row">
                        <table class="table table-striped overflow-auto">
                            <thead>
                                <tr>
                                <th scope="col">Année</th>
                                <th scope="col">Établissement</th>
                                <th scope="col">Classe</th>
                                <th scope="col">Niveau de Validation</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <th scope="row">
                                            <span class="badge badge-primary badge-pill">
                                                <h4>2019 - 2020</h4>
                                            </span>
                                        </th>
                                        <td>École Nationnale Supérieure Polytechnique de Douala</td>
                                        <td>2è Année Tronc Commun</td>
                                        <td><div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        10%</div>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <span class="badge badge-primary badge-pill">
                                                <h4>2018 - 2019</h4>
                                            </span>
                                        </th>
                                        <td>École Nationnale Supérieure Polytechnique de Douala</td>
                                        <td>1ère Année Tronc Commun</td>
                                        <td><div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        80%</div>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <span class="badge badge-primary badge-pill">
                                                <h4>2016 - 2017</h4>
                                            </span>
                                        </th>
                                        <td>{{ "Lycée Technique D'Obala" }}</td>
                                        <td>Terminale F3</td>
                                        <td><div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        100%</div>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <span class="badge badge-primary badge-pill">
                                                <h4>2015 - 2016</h4>
                                            </span>
                                        </th>
                                        <td>{{ "Lycée Technique D'Obala" }}</td>
                                        <td>Première F3</td>
                                        <td><div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        100%</div>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----------------------------------------------- -->
                    <hr class="bg-dark">
                    <div class="row">
                        <span><img src="images/projets.png" alt="projets" style="width: 46px;"></span>
                        <h3>PROJETS</h3>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">
                            <li><strong>Ibom</strong>: <em>Application Hybride</em>
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                        style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">
                                        7%</div>
                                    </div>
                            </li>
                            <li><strong>Opuma</strong>: <em>E{{ "plucheuse d'orange" }}</em>
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                        style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        20%</div>
                                    </div>
                            </li>
                            <li><strong>J-Prod</strong>: <em>Application Hybride</em>
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                        style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        20%</div>
                                    </div>
                            </li>
                        </ul>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <hr class="bg-dark">
                    <div class="row">
                        <span><img src="images/references.png" alt="references" style="height: 40px;"></span>
                        <h3>REFÉRENCES</h3>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">
                            <li><strong>Tonton Roméo </strong>: <em>Chef Division Partenariat Orange Money (ORANGE CAMEROUN)</em></li>
                            <li><strong>Bill Gates</strong> : <em>PDG de MICROSOFT</em></li>
                            <li><strong>Marck Zukerberg</strong> : <em>PDG de Facebook, whatsapp, Instagram</em></li>
                            <li><strong>Feu Papa Kadji Deffosso</strong> : <em>Ex PDG du Groupe UBC</em> </li>
                        </ul>
                    </div>
                    <!-- ------------------------------------------------------------------------- -->
                    <hr class="bg-dark">
                    <div class="row">
                        <span><img src="images/activites.png" alt="activites" style="width: 46px;"></span>
                        <h3>ACTIVITÉS</h3>
                    </div>
                    <div class="row">
                        <ul style="list-style-type: none;">
                            <li>{{ "J'apprend un peu de UX Design" }}</li>
                            <li>{{ "Je code des brouillons d'APK web avec Laravel, Lumen et Angular" }}</li>
                            <li>Je code de temps en temps quelques brouillons de jeux 2D avec Python</li>
                            <li>{{ "Je n'ai pas encore fini avec mon Livre <strong>UML: Conception d'une Application Web" }}</strong></li>
                            <li>{{ "Je n'ai pas encore fini mon Livre <strong>Stratégies Anti Hackeurs" }}</strong></li>
                            <li>{{ "Je m'amuse de temps en temps avec quelques petits projets sur Arduino" }}</li>
                        </ul>
                    </div>
                    <hr>
                    <!-- ------------------------------------------------------------- -->

                    <div class="row">
                        <span><img src="images/chonson.png" alt="chanson" style="width: 46px;"></span>
                        <h3>Chanson Préférée</h3>
                    </div>
                    <div class="row">
                        <p>
                            <strong>Himra ft J-Haine</strong> : ICB (<em>Imbécile Chien Batard</em>)<br>
                            <audio src="audio/J-Haine x Himra - ICB TERRE2BUZZ.COM.mp3" controls></audio>
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection


