        <h1>Apprenant Développeur web </h1>                
        <section id="s0">
                <h2><hr> Informations personnelles <hr></h2>
                <div class="container">
                        <div>
                        <p>Mohamed Guerroui <br>15 rue Albert Marquet bât A8, <br>13013 Marseille <br>Email: guerroui.m@gmail.com <br>Tél: 06.52.88.65.17<br>Nationnalité: Française</p>
                        </div>
                        <div>             
                        <img src="assets/img/photo-de-profil.jpg" alt="photo de profil">
                        </div>  
                </div>
        </section>
        </section>

        <section id="s1">
                <h2><hr> Expériences professionnelles <hr></h2>
                <div class="doublecase">
                        <div class="rectangle1"> 
                        <p>2018-2019</p>
                        </div>
                        <div class="rectangle2">              
                        <p>Agent d'entretien</p>
                        </div>  
                </div>

                <div class="doublecase">
                        <div class="rectangle1"> 
                        <p>2016-2018</p>
                        </div>
                        <div class="rectangle2">              
                        <p>Agent de déchetterie</p>
                        </div>  
                </div>

                <div class="doublecase">
                        <div class="rectangle1"> 
                        <p>2013-2016</p>
                        </div>
                        <div class="rectangle2">              
                        <p>Manoeuvre dans le bâtiment</p>
                        </div>  
                </div>
        </section>

        <section id="s2">
                <h2><hr> Diplômes/Formations <hr></h2>
                <div class="doublecase">
                        <div class="rectangle1"> 
                        <p>2012</p>
                        </div>
                        <div class="rectangle2">              
                        <p>Titre professionnelles d'électricien d'équipement</p>
                        </div>  
                </div>

                <div class="doublecase">
                        <div class="rectangle1"> 
                        <p>2006</p>
                        </div>
                        <div class="rectangle2">              
                        <p>DEUG de physique-chimie</p>
                        </div>  
                </div>

                <div class="doublecase">
                        <div class="rectangle1"> 
                        <p>2004</p>
                        </div>
                        <div class="rectangle2">              
                        <p>Baccalauréat S</p>
                        </div>  
                </div>
        </section>

        <section id="s3">
                <h2><hr> Informations complémentaires <hr></h2>
                <p>Anglais technique (TOEIC: 780) <br>Permis B et véhicule</p>
        </section>
        
        <section id="s4">
                <h2><hr> Pour me contacter <hr></h2>
                <div class="formulaire"> 
                        <form id="contact" action="#contact" method="POST">
                                <input name="Nom" type="text" placeholder="Nom" autocomplete="off" required/><br>
                                <input name="Prénom" type="text" placeholder="Prénom" required/><br>
                                <input name="email" type="email" placeholder="Email"required/><br>
                                <textarea name="message" maxlength="1000" placeholder="Votre message" required onkeyup="reste(this.value);"></textarea><br/>
                                <span id="caracteres">1000</span> caractères restants <br>
                                <script type="text/javascript">
                                function reste(texte)
                                        {
                                        var restants=1000-texte.length;
                                        document.getElementById('caracteres').innerHTML=restants;
                                        }
                                </script>
                                <input type="submit" value="ENVOYER" class="submit"/>
                                </form>
                </div>
        </section>