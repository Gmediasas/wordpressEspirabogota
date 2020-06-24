<?php
session_start();

if($_SESSION['user']['idRol'] == 1) {

get_header();
/*
Template Name: landing-agenda-general
*/
	
?>


<style>

.vc_row.vc_row-flex > .container > .vc_column_container {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

   .vc_column_container {
   padding-left: 0;
   padding-right: 0;
   }
   .vc_column_container>.vc_column-inner {
   box-sizing: border-box;
   padding-left: 15px;
   padding-right: 15px;
   width: 100%;
   }
   .vc_row {
   margin-left: -15px;
   margin-right: -15px;
   }
   .vc_row:after, .vc_row:before {
   content: " ";
   display: table;
   }
   :after, :before {
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   }
   
   .vc_custom_1498038552127 {
   margin-top: 0px !important;
   }ing-right: 0;
   }
   .vc_custom_1498038456584 {
   margin-bottom: 30px !important;
   }
   .vc_custom_1498038465570 {
   margin-bottom: 30px !important;
   }
   .vc_custom_1498038473455 {
   margin-bottom: 30px !important;
   }

   .vc_custom_1499603120939 {
   }

   .vc_custom_1499673079879 {
   margin-top: 50px !important;
   margin-bottom: 50px !important;
   }

   .vc_custom_1499673280683 {
   margin-top: 100px !important;
   }

   .vc_custom_1499603120939 {
   margin-top: 100px !important;
   padding-top: 50px !important;
   padding-bottom: 25px !important;
   }

   .vc_custom_1499677004832 {
   margin-top: 50px !important;
   margin-bottom: 0px !important;
   }

   .vc_custom_1499677573067 {
   margin-top: 100px !important;
   margin-bottom: 100px !important;
   }

   .vc_custom_1499677242709 {
   padding-top: 200px !important;
   padding-bottom: 200px !important;
   }

   .vc_custom_1572988000429 {
    padding-top: 20px !important;
   }

   .container {
   padding-right: 15px;
   padding-left: 15px;
   margin-right: auto;
   margin-left: auto;
   }

   .btn {
    position: relative;
    height: 30px;
    padding: 0 10px;
    font-size: 14px;
    line-height: 30px;
   }

   .mi-agenda {
      margin-bottom: 0px;
      border: solid 1px #009cdf;
      padding: 10px;
   }

   .forgot-password {
     font-size: 0.8rem;
     text-align: center;
   }

   .registro {
     font-size: 0.8rem;
     text-align: center;
   }

   .wpb_button, .wpb_content_element, ul.wpb_thumbnails-fluid>li {
    margin-bottom: 35px;
   }

   .form-group {
    margin-bottom: 20px;
    }

    .Sticky--top .nav.navbar.bootsnav ul.nav > li.active > a {
      color: #fff;
    }

    .Sticky--top .nav.navbar.bootsnav ul.nav > li > a {
      color: #fff;
    }

    .Sticky--not-top .nav.navbar.bootsnav ul.nav > li.active > a {
      color: #6f6f6f;
    }

    .Sticky--not-top .nav.navbar.bootsnav ul.nav > li > a {
      color: #6f6f6f;
    }

    .wpb_single_image img {
    height: auto;
    max-width: 100%;
    vertical-align: top;
}

    table.contenido_td td {
      text-align:center;
      vertical-align: middle !important;
    }

    table.contenido_td th {
      text-align:center;
      vertical-align: middle !important;
      font-size: 0.8rem;
    }

    table.contenido_td img {
      text-align:center;
      vertical-align: middle !important;
    }

    .boton-ocupado {
      text-align: center;
      background: #cccccc;
      font-size: 0.5rem;
    }

      @media (min-width: 1024px){
   nav.navbar.bootsnav.navbar-fixed.navbar-transparent .logo-display, nav.navbar.bootsnav.navbar-fixed.no-background .logo-display {
      display: block;
      height: 84%;
      }

      .Sticky--top nav.navbar.bootsnav ul.nav > li > a {
    font-size: 12px;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: bold;
    }

    .Sticky--top nav.navbar.bootsnav ul.nav > li.active > a {
    font-size: 12px;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: bold;
    }

    .Sticky--not-top nav.navbar.bootsnav ul.nav > li > a {
    font-size: 12px;
    color: #6f6f6f;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: bold;
    }

    .Sticky--not-top nav.navbar.bootsnav ul.nav > li.active > a {
    font-size: 12px;
    color: #009cdf;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: bold;
    }

   }

      @media (min-width: 1200px){
      .container {
      width: 1170px;
      }
   }
      @media (min-width: 992px){
      .container {
      width: 970px;
      }
   }
      @media (min-width: 768px){
      .vc_col-sm-1, .vc_col-sm-10, .vc_col-sm-11, .vc_col-sm-12, .vc_col-sm-2, .vc_col-sm-3, .vc_col-sm-4, .vc_col-sm-5, .vc_col-sm-6, .vc_col-sm-7, .vc_col-sm-8, .vc_col-sm-9 {
      }
      .vc_col-sm-4 {
      width: 33.33333333%;
      }
   }
      @media (min-width: 768px) {
         .vc_col-sm-7 {
            width: 58.33333333%;
            float: left;
         }

         .vc_col-sm-3 {
            width: 25%;
            float: left;
         }
      }

.hasTooltip span {
  display: none;
  color: #000;
  text-decoration: none;
  /* padding: 3px; */
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: left;
  border-radius: 6px;
  padding: 5px 0;
  font-size: 0.6rem;
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 50%;
  margin-left: -60px;
  letter-spacing: normal;
}

.hasTooltip:hover span {
  display: block;
  position: absolute;
  background-color: #fcf8f8;
  border: 1px solid #CCC;
  /* margin: 2px 10px; */
  padding: 10px;
  text-transform: uppercase;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 7px;
}

</style>

    <?php if(isset($_SESSION['token'])) {?>
        <script>
            jQuery('#menu-item-976').css('display','none');
            jQuery('#menu-item-977').css('display','none');
        </script>

        <?php if($_SESSION['user']['idRol'] == 1) {?>
            <script>
                jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Mi Agenda" href="agenda-general/">Mi Agenda</a></li>')
                jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
            </script>
        <?php }elseif($_SESSION['user']['idRol'] == 4) {?>
            <script>
                jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Mi Agenda" href="agenda-empresa/">Mi Agenda</a></li>')
                jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
            </script>

        <?php }else{ ?>
            <script>
                jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Mi Agenda" href="mi-agenda/" >Mi Agenda</a></li>')
                jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
            </script>
        <?php } ?>

    <?php }else{ ?>
        <script>
            jQuery('#menu-item-976').css('display','block');
            jQuery('#menu-item-977').css('display','block');
        </script>
    <?php } ?>

<?php
echo $_SESSION['user']['id'];
//Gestión de erorres

//Gestión de erorres
$postHeaders = array('Content-Type: application/json','Authorization: Bearer '.$_SESSION['token']);
$apiUrl = "https://prod.gevents.co/public/api/agenda_empresa_tecnalia";
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);

$agenda = json_decode($json, true);

curl_close($curl);

?>

<main id="main" class="site-main" role="main">

  <div class="vc_row-full-width vc_clearfix"></div>

  <div class="vc_element vc_vc_row vc_container-block vc_layout_1" data-tag="vc_row" data-model-id="03d06a2a5f74fa54253ff5d01ebbc05d" style="margin-top:50px;">
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1498038552127 ui-sortable">
                     <div class="container">
                        <div class="vc_element vc_vc_column vc_container-block vc_col-sm-12" data-tag="vc_column" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="aee7f2bae5d7587cb5a57ee06ccc3a6b">
                           <div class="wpb_column vc_column_container">
                              <div class="vc_column-inner ">
                                 <div class="wpb_wrapper">
                                    <div class="Sc-heading row">
                                       <div class="u-MarginTop100 u-MarginBottom50 u-xs-MarginBottom30 u-sm-MarginBottom30 text-center col-sm-8 col-sm-offset-2">
                                          <h1 class="u-MarginTop5 u-MarginBottom10 u-Weight700 Sc-heading__main">Agenda general</h1>
                                          <div class="Split Split--height2"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="vc_element vc_vc_row vc_container-block vc_layout_1" data-tag="vc_row" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="a4c99fbb999e931a7db3bf8574571e85" style="margin-bottom:50px;">
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1499251628957 ui-sortable" style="margin-left:0px;margin-right:0px;">
                     <div class="container">



                     <div class="table-responsive">
                         <table class="table table-bordered u-Margin0 contenido_td">
                             <thead>
                             <tr>
                                 <th>Empresa</th>
                                 <th>2:00pm - 2:20pm</th>
                                 <th>2:20pm - 2:40pm</th>
                                 <th>2:40pm - 3:00pm</th>
                                 <th>3:00pm - 3:20pm</th>
                                 <th>3:20pm - 3:40pm</th>
                                 <th>3:40pm - 4:00pm</th>
                                 <th>4:00pm - 4:20pm</th>
                                 <th>4:20pm - 4:40pm</th>
                                 <th>4:40pm - 5:00pm</th>
                             </tr>
                             </thead>
                             <tbody>
                             <?php foreach ($agenda['agenda'] as  $agendas){ ?>
                                 <tr>
                                     <td>
                                         <p style="text-align: center;">
                                             <img src="../wp-content/uploads/2019/11/<?php echo $agendas['logo'] ?>" width="100%">
                                         </p>
                                         <p><?php echo $agendas['empresa'] ?></p>
                                     </td>

                                     <?php for($i=0;$i< 9;$i++){?>
                                         <td>
                                             <?php  foreach ($agenda['citas'] as  $citas){
                                              if($citas['idAnfitrion'] == $agendas['idAnfitrionHorario']){
                                                if($agenda['hora'][$i]['id_horario'] == $citas['id_horario']) { ?>
                                                        <a  class="btn btn-secondary boton-ocupado u-MarginBottom10 u-LetterSpacing2 viewModalAssistant" style="text-align:center" data-toggle="modal"  href="" data-id="<?php echo $citas['id'] ?>">
                                                            OCUPADO
                                                        </a>
                                                <?php }
                                                }
                                              } ?>
                                         </td>
                                     <?php } ?>
                                 </tr>
                             <?php } ?>
                             </tbody>
                         </table>

      <!-- Modal -->
<div class="modal fade" id="modalAssistant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: center;">
        <p id="name_apellido"></p>
        <p id="position"></p>
        <p id="company"></p>
      </div>
      <div class="modal-footer" style="text-align:center;">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


</div>

<div class="vc_element vc_vc_column vc_container-block vc_col-sm-12" data-tag="vc_column" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="a7812fe88b95d9849c90ca1b5399cc2a">

</div>
</div>
</div>
</div>

      <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">

          <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center">
                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper vc_box_border_grey">
                        <img src="../wp-content/uploads/2019/11/logo_alcaldia_bog.png" class="wpb_single_image img">
                      </div>
                    </figure>
                  </div>
                </div>
              </div>
          </div>
          
          <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center">
                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper vc_box_border_grey">
                        <img src="../wp-content/uploads/2019/11/logo_tecnalia-1.png" class="wpb_single_image img">
                      </div>
                    </figure>
                  </div>
                </div>
              </div>
          </div>

          <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center">
                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper vc_box_border_grey">
                        <img src="../wp-content/uploads/2019/11/logo_clark_modet-02.png" class="wpb_single_image img">
                      </div>
                    </figure>
                  </div>
                </div>
              </div>
          </div>
            <?php if(isset($_SESSION['token'])){ ?>
                <input value="<?php echo $_SESSION['token'] ?>" name="hidden" type="hidden" id="token">
            <?php }?>
          <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center">
                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper vc_box_border_grey">
                        <img src="../wp-content/uploads/2019/11/Logo_FITIC_.png" class="wpb_single_image img">
                      </div>
                    </figure>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

</main>
      <!-- #main -->
<script>
    var urlApi = 'https://prod.gevents.co/public/api/';

    jQuery(document).ready( function() {

        var token = jQuery('#token').val();

        jQuery('.viewModalAssistant').click(function () {

            var id=jQuery(this).data('id');

            jQuery.ajax({
                url: urlApi+"consult_company_tecnalia/"+id,
                dataType: "json",
                headers: {"Accept": "application/json", "Authorization": "Bearer "+token},
                success: function(response) {
                    jQuery('#modalAssistant').modal('show');
                    jQuery('#name_apellido').html(response['assistant']['nombre_apellido']);
                    jQuery('#company').html(response['assistant']['empresa']);
                    jQuery('#position').html(response['assistant']['cargo']);
                }
            });
        });
    });
</script>
<?php get_footer(); ?>

<?php
}else{
    echo '<script type="text/javascript">
                        window.location.href="iniciar-sesion/";
                        </script>';
}
?>

