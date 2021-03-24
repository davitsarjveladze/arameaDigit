<template>
<div>
  <div class="home-row-2">
    <div class="content container">

      <div class="row row-cols-1 row-cols-md-3">
        <!-- card 1 : connecter -->
        <div class="col-md-4 mb-4" id="login">
          <div class="card h-100">
            <div class="card-body">

                <div class="ajax">
                  <h5 class="card-title">Se connecter</h5>
                  <div class="card-slot"></div>
                  <p class="card-text">
                    Pour commencer, utilisez vos identifiants LOGIN ET MOT DE PASSE
                  </p>
                  <div class="card-form">
                    <div class="ajax"><div class="formulaire_spip formulaire_login">
                      <form id="formulaire_login" method="post" action="index.html#">
                        <div><input name="formulaire_action" type="hidden" value="login"><input name="formulaire_action_args" type="hidden" value="jNgahgEe53wtocgHxcnKINla3xYq3bhFuwoVxzFJOXN53RoiAYF+x1VMdp/q/BMYDZSCsub43tChKKfi8P5WivoHtykg5x1zC7ctP/HcDdjqi3wFNlZ8i2xOcL6EMVw2K6BLe167xA=="></div>
                        <fieldset>
                          <legend>Identifiants personnels</legend>
                          <div class="editer-groupe">
                            <div class="editer editer_login obligatoire">
                              <label for="var_login">Login :</label><input type="text" class="text" name="var_login" id="var_login" value="" size="40" required="required" autofocus="autofocus" autocapitalize="off" autocorrect="off">
                            </div>
                            <div class="editer editer_password obligatoire">
                              <label for="password">Mot de passe&nbsp;:</label><input type="password" class="text password" name="password" id="password" value="" size="40" autocapitalize="off" autocorrect="off">
                              <p class="details"><a href="spip.php@page=spip_pass&amp;lang=fr.html" id="spip_pass">mot&nbsp;de&nbsp;passe&nbsp;oublié&nbsp;?</a></p>
                            </div>

                            <div class="editer editer_session"><div class="choix">
                              <input type="checkbox" class="checkbox" name="session_remember" id="session_remember" value="oui" onchange="jQuery(this).addClass('modifie');">
                              <label class="nofx" for="session_remember">Se souvenir de moi</label>
                            </div></div>
                          </div>
                        </fieldset>
                        <p class="boutons"><input type="submit" class="btn submit" value="Valider"></p>
                      </form>
                    </div>
                    </div>
                  </div>
                </div></div>
            </div>
          </div>



        <!-- card: Notre ministère -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-logo"><img src="IMG/logo/ministere-blue.svg@1580915240" class="spip_logo" width="50" height="50" alt=""></div>
              <h5 class="card-title">
                <a href="Nos-Ministres.html" class="card-title-link crayon selections_contenu-titre-1 ">Notre ministère</a>

              </h5>
              <div class="card-slot"></div>
              <div class="card-text crayon selections_contenu-descriptif-1 "><p>L’AREMAE vous proposera dans cette rubrique des nouvelles de notre maison et vous conseillera d’aller sur son site de référence <a href="http://www.diplomatie.gouv.fr" class="spip_url spip_out auto" rel="nofollow external">www.diplomatie.gouv.fr</a> ou bien reprendra des articles publiés dans la revue Correspondances après autorisation.</p></div>
              <a href="Nos-Ministres.html" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- card: Nos bénévoles -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-logo"><img src="IMG/logo/benevoles-blue.svg@1580915240" class="spip_logo" width="50" height="50" alt=""></div>
              <h5 class="card-title">
                <a href="Le-Conseil-d-administration-Le-Bureau.html" class="card-title-link crayon selections_contenu-titre-2 ">Nos bénévoles</a>

              </h5>
              <div class="card-slot"></div>
              <div class="card-text crayon selections_contenu-descriptif-2 "><p>Une équipe dynamique pour vous accompagner.<br class="autobr">
                Retrouvez la composition de notre Conseil d’administration et du Bureau en charge de l’administration de notre association et de proposer à nos adhérents des activités culturelles et associatives.</p></div>
              <a href="Le-Conseil-d-administration-Le-Bureau.html" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- card: Bulletin d&#8217;adhésion -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-logo"><img src="IMG/logo/adhesion-blue.svg@1580915240" class="spip_logo" width="50" height="50" alt=""></div>
              <h5 class="card-title">
                <a href="Devenir-adherent.html" class="card-title-link crayon selections_contenu-titre-3 ">Bulletin d’adhésion</a>

              </h5>
              <div class="card-slot"></div>
              <div class="card-text crayon selections_contenu-descriptif-3 "><p>Pour adhérer à notre association</p></div>
              <a href="Devenir-adherent.html" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- card: Propositions de lecture -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-logo"><img src="IMG/logo/lecture-blue.svg@1580915240" class="spip_logo" width="50" height="50" alt=""></div>
              <h5 class="card-title">
                <a href="nos-propositions-de-lecture.html" class="card-title-link crayon selections_contenu-titre-4 ">Propositions de lecture</a>

              </h5>
              <div class="card-slot"></div>

              <a href="nos-propositions-de-lecture.html" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- card: Les Permanences -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-logo"><img src="IMG/logo/permanences-blue.svg@1580915241" class="spip_logo" width="50" height="50" alt=""></div>
              <h5 class="card-title">
                <a href="Les-Permanences.html" class="card-title-link crayon selections_contenu-titre-5 ">Les Permanences</a>

              </h5>
              <div class="card-slot"></div>

              <a href="Les-Permanences.html" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>





      </div>

    </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'HomeMidll'
}
</script>

<style scoped>

</style>
