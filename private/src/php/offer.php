<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="master.css" >
        <title>Détails de l'offre</title>
    </head>
    <body>
      <div class="offer_details">
         <div class="title">
           <h4>Titre de l'offre</h4>
         </div>
         <div class="classe">
           B1 Ingésup
         </div>
         <div class="description">
           Ce profil bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
         </div>
         <div class="skills">
           Php ...
         </div>
      </div>

      <div class="contact">
            <div class="form_fields">
              <legend class="title_contact">Nous contacter à propos de ce profil</legend>
              <!----------<input type="hidden" name="frm_action" value="create" />
              <input type="hidden" name="form_id" value="2" />
              <input type="hidden" name="frm_hide_fields_2" id="frm_hide_fields_2" value="" />
              <input type="hidden" name="form_key" value="contact-form" />
              <input type="hidden" name="item_meta[0]" value="" />
              <input type="hidden" id="frm_submit_entry_2" name="frm_submit_entry_2" value="346e32339b" />
              <input type="hidden" name="_wp_http_referer" value="/fr/nous-contacter/" />
              <input type="text" class="frm_hidden frm_verify" id="frm_verify_2" name="frm_verify" value=""  />------->
              <div class="civility">
                <label for="frm_civility">Civilité<span class="needed">*</span></label>
                <select name="frm_civility" data-frmval="Monsieur" data-reqmsg="Ce champ ne peut pas être vide">
                  <option value="Monsieur"  selected="selected">Monsieur</option>
                  <option value="Madame" >Madame</option>
                </select>
              </div>
              <div class="name">
                <label for="frm_name">NOM<span class="frm_required">*</span></label>
                <input type="text" name="frm_name" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="surname">
                <label for="frm_surname">Prénom<span class="frm_required">*</span></label>
                <input type="text" name="frm_surname" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="enterprise">
                <label for="frm_enterprise">Nom de l'entreprise<span class="frm_required">*</span></label>
                <input type="text" name="frm_enterprise" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="email">
                <label for="frm_mail">E-Mail<span class="frm_required">*</span></label>
                <input type="email" name="frm_mail" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="tel">
                <label for="frm_mobile">Téléphone<span class="frm_required">*</span></label>
                <input type="tel" name="frm_mobile" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class"message">
                <label for="frm_message">Dites-nous tout :<span class="frm_required">*</span></label>
                <textarea name="frm_message" data-reqmsg="Ce champ ne peut pas être vide"></textarea>
              </div>
              <button type="submit" class="contact_validate"> Envoyer </button>
            </div>
      </div>
    </body>
</html>
