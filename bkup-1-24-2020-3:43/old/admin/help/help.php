<?php
  define("_VALID_PHP", true);

  require_once ("../init.php");
  if (!$user->is_Admin())
      exit;
?>
<div id="users-help">
  <div class="header">
    <p><?php echo Lang::$word->USR_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->PASSWORD;?></h5>
      <?php echo Lang::$word->PASSWORD_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->USR_LEVEL;?></h5>
      <?php echo Lang::$word->USR_LEVEL_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->USR_NOTES;?></h5>
      <?php echo Lang::$word->USR_NOTES_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->USR_BIO;?></h5>
      <?php echo Lang::$word->USR_BIO_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->USR_NOTIFY;?></h5>
      <?php echo Lang::$word->USR_NOTIFY_T;?> </div>
  </div>
</div>
<div id="config-help">
  <div class="header">
    <p><?php echo Lang::$word->CONF_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SITE;?></h5>
      <?php echo Lang::$word->CONF_SITE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_COMPANY;?></h5>
      <?php echo Lang::$word->CONF_COMPANY_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_URL;?></h5>
      <?php echo Lang::$word->CONF_URL_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_DIR;?></h5>
      <?php echo Lang::$word->CONF_DIR_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_EMAIL;?></h5>
      <?php echo Lang::$word->CONF_EMAIL_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_OFFLINE;?></h5>
      <?php echo Lang::$word->CONF_OFFLINE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_OFFLINE_TIME;?></h5>
      <?php echo Lang::$word->CONF_OFFLINE_TIME_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_OFFLINE_INFO;?></h5>
      <?php echo Lang::$word->CONF_OFFLINE_INFO_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_DELLOGO;?></h5>
      <?php echo Lang::$word->CONF_DELLOGO_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_LOCALES;?></h5>
      <?php echo Lang::$word->CONF_LOCALES_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SEO;?></h5>
      <?php echo Lang::$word->CONF_SEO_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_IPP;?></h5>
      <?php echo Lang::$word->CONF_IPP_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_REGVER;?></h5>
      <?php echo Lang::$word->CONF_REGVER_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_AUTOREG;?></h5>
      <?php echo Lang::$word->CONF_AUTOREG_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_REGYES;?></h5>
      <?php echo Lang::$word->CONF_REGYES_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_NOTE;?></h5>
      <?php echo Lang::$word->CONF_NOTE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_ULIMIT;?></h5>
      <?php echo Lang::$word->CONF_ULIMIT_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_CURRENCY;?></h5>
      <?php echo Lang::$word->CONF_CURRENCY_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_CURSYMBOL;?></h5>
      <?php echo Lang::$word->CONF_CURSYMBOL_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_FPATH;?></h5>
      <?php echo Lang::$word->CONF_FPATH_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_FREE;?></h5>
      <?php echo Lang::$word->CONF_FREE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_FEATURED;?></h5>
      <?php echo Lang::$word->CONF_FEATURED_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_POP;?></h5>
      <?php echo Lang::$word->CONF_POP_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SHOWHOME;?></h5>
      <?php echo Lang::$word->CONF_SHOWHOME_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SHOWSLIDE;?></h5>
      <?php echo Lang::$word->CONF_SHOWSLIDE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_LAYOUT;?></h5>
      <?php echo Lang::$word->CONF_LAYOUT_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_FTGRID;?></h5>
      <?php echo Lang::$word->CONF_FTGRID_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_THUMBW;?></h5>
      <?php echo Lang::$word->CONF_THUMBW_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_TAX;?></h5>
      <?php echo Lang::$word->CONF_TAX_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_THUMBH;?></h5>
      <?php echo Lang::$word->CONF_THUMBH_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_INVDATA;?></h5>
      <?php echo Lang::$word->CONF_INVDATA_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_INVNOTE;?></h5>
      <?php echo Lang::$word->CONF_INVNOTE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_MAILER;?></h5>
      <?php echo Lang::$word->CONF_MAILER_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SMTP_HOST;?></h5>
      <?php echo Lang::$word->CONF_SMTP_HOST_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SMTP_SSL;?></h5>
      <?php echo Lang::$word->CONF_SMTP_SSL_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SMTP_PORT;?></h5>
      <?php echo Lang::$word->CONF_SMTP_PORT_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_SMAILPATH;?></h5>
      <?php echo Lang::$word->CONF_SMAILPATH_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_GA;?></h5>
      <?php echo Lang::$word->CONF_GA_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_METAKEY;?></h5>
      <?php echo Lang::$word->CONF_METAKEY_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CONF_METADESC;?></h5>
      <?php echo Lang::$word->CONF_METADESC_T;?> </div>
  </div>
</div>
<div id="gateway-help">
  <div class="header">
    <p><?php echo Lang::$word->GTW_HLP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->GTW_LIVE;?></h5>
      <?php echo Lang::$word->GTW_LIVE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->GTW_ACTIVE;?></h5>
      <?php echo Lang::$word->GTW_ACTIVE_T;?> </div>
  </div>
</div>
<div id="language-help">
  <div class="header">
    <p><?php echo Lang::$word->LMG_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->LMG_TITLE;?></h5>
      <?php echo Lang::$word->LMG_SUBTITLE2_T;?> </div>
  </div>
</div>
<div id="category-help">
  <div class="header">
    <p><?php echo Lang::$word->CAT_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->CAT_NAME;?></h5>
      <?php echo Lang::$word->CAT_NAME_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CAT_PARENT;?></h5>
      <?php echo Lang::$word->CAT_PARENT_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CAT_SLUG;?></h5>
      <?php echo Lang::$word->CAT_SLUG_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CAT_DESC;?></h5>
      <?php echo Lang::$word->CAT_DESC_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CAT_METAK;?></h5>
      <?php echo Lang::$word->CAT_METAK_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CAT_METAD;?></h5>
      <?php echo Lang::$word->CAT_METAD_T;?> </div>
  </div>
</div>
<div id="pages-help">
  <div class="header">
    <p><?php echo Lang::$word->PAG_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->PAG_SLUG;?></h5>
      <?php echo Lang::$word->PAG_SLUG_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PAG_HOME;?></h5>
      <?php echo Lang::$word->PAG_HOME_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PAG_CONTACT;?></h5>
      <?php echo Lang::$word->PAG_CONTACT_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PAG_FAQ;?></h5>
      <?php echo Lang::$word->PAG_FAQ_T;?> </div>
  </div>
</div>
<div id="slider-help">
  <div class="header">
    <p><?php echo Lang::$word->SLM_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->SLM_ADPHEIGHT;?></h5>
      <?php echo Lang::$word->SLM_ADPHEIGHT_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_APLAY;?></h5>
      <?php echo Lang::$word->SLM_APLAY_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_ARROWS;?></h5>
      <?php echo Lang::$word->SLM_ARROWS_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_CAPTIONS;?></h5>
      <?php echo Lang::$word->SLM_CAPTIONS_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_CAPTIONS_S;?></h5>
      <?php echo Lang::$word->SLM_CAPTIONS_ST;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_DOTS;?></h5>
      <?php echo Lang::$word->SLM_DOTS_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_EXTLINK;?></h5>
      <?php echo Lang::$word->SLM_EXTLINK_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_HEIGHT;?></h5>
      <?php echo Lang::$word->SLM_HEIGHT_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_PAUSE;?></h5>
      <?php echo Lang::$word->SLM_PAUSE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_REVERSE;?></h5>
      <?php echo Lang::$word->SLM_REVERSE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_SCALE;?></h5>
      <?php echo Lang::$word->SLM_SCALE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_SHUFLLE;?></h5>
      <?php echo Lang::$word->SLM_SHUFLLE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_STRIP;?></h5>
      <?php echo Lang::$word->SLM_STRIP_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_TIMER;?></h5>
      <?php echo Lang::$word->SLM_TIMER_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_TRANS;?></h5>
      <?php echo Lang::$word->SLM_TRANS_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_TRANS_DIR;?></h5>
      <?php echo Lang::$word->SLM_TRANS_DIR_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_TRANS_EAS;?></h5>
      <?php echo Lang::$word->SLM_TRANS_EAS_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_TRDELAY;?></h5>
      <?php echo Lang::$word->SLM_TRDELAY_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_TRSPEED;?></h5>
      <?php echo Lang::$word->SLM_TRSPEED_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->SLM_WLOAD;?></h5>
      <?php echo Lang::$word->SLM_WLOAD_T;?> </div>
  </div>
</div>
<div id="coupons-help">
  <div class="header">
    <p><?php echo Lang::$word->CPN_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->CPN_CODE;?></h5>
      <?php echo Lang::$word->CPN_CODE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CPN_DISC;?></h5>
      <?php echo Lang::$word->CPN_DISC_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CPN_VALID;?></h5>
      <?php echo Lang::$word->CPN_VALID_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CPN_MINVAL;?></h5>
      <?php echo Lang::$word->CPN_MINVAL_T;?> </div>
  </div>
</div>
<div id="comments-help">
  <div class="header">
    <p><?php echo Lang::$word->CMT_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->CMT_CHAR;?></h5>
      <?php echo Lang::$word->CMT_CHAR_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_CPP;?></h5>
      <?php echo Lang::$word->CMT_CPP_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_DATEF;?></h5>
      <?php echo Lang::$word->CMT_DATEF_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_USRREQ;?></h5>
      <?php echo Lang::$word->CMT_USRREQ_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_EMAILREQ;?></h5>
      <?php echo Lang::$word->CMT_EMAILREQ_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_SHOWCAP;?></h5>
      <?php echo Lang::$word->CMT_SHOWCAP_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_SHOWWEB;?></h5>
      <?php echo Lang::$word->CMT_SHOWWEB_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_SHOWUSR;?></h5>
      <?php echo Lang::$word->CMT_SHOWUSR_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_SHOWEMAIL;?></h5>
      <?php echo Lang::$word->CMT_SHOWEMAIL_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_PUBLIC;?></h5>
      <?php echo Lang::$word->CMT_PUBLIC_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_AUTOA;?></h5>
      <?php echo Lang::$word->CMT_AUTOA_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_NOTIFY;?></h5>
      <?php echo Lang::$word->CMT_NOTIFY_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->CMT_BLACK;?></h5>
      <?php echo Lang::$word->CMT_BLACK_T;?> </div>
  </div>
</div>
<div id="products-help">
  <div class="header">
    <p><?php echo Lang::$word->PRD_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->PRD_SLUG;?></h5>
      <?php echo Lang::$word->PRD_SLUG_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_PRICE;?></h5>
      <?php echo Lang::$word->PRD_PRICE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_DAYS;?></h5>
      <?php echo Lang::$word->PRD_DAYS_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_IMG;?></h5>
      <?php echo Lang::$word->PRD_IMG_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_AUD;?></h5>
      <?php echo Lang::$word->PRD_AUD_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_YOUTUBE;?></h5>
      <?php echo Lang::$word->PRD_YOUTUBE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_LIVE;?></h5>
      <?php echo Lang::$word->PRD_LIVE_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_AFF;?></h5>
      <?php echo Lang::$word->PRD_AFF_T;?> </div>
    <div class="item">
      <h5><?php echo Lang::$word->PRD_TAGS;?></h5>
      <?php echo Lang::$word->PRD_TAGS_T;?> </div>
  </div>
</div>
<div id="trans-help">
  <div class="header">
    <p><?php echo Lang::$word->TXN_HELP;?></p>
    <a class="helper"><i class="icon reorder"></i></a></div>
  <div class="wojo-content" id="help-items">
    <div class="item">
      <h5><?php echo Lang::$word->TXN_NOTIFY;?></h5>
      <?php echo Lang::$word->TXN_NOTIFY_T;?> </div>
  </div>
</div>