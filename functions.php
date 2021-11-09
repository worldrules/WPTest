<?php
/**
 * Extra files & functions are hooked here.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Avada
 * @subpackage Core
 * @since 1.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! defined( 'AVADA_VERSION' ) ) {
	define( 'AVADA_VERSION', '7.2.1' );
}

if ( ! defined( 'AVADA_MIN_PHP_VER_REQUIRED' ) ) {
	define( 'AVADA_MIN_PHP_VER_REQUIRED', '5.6' );
}

if ( ! defined( 'AVADA_MIN_WP_VER_REQUIRED' ) ) {
	define( 'AVADA_MIN_WP_VER_REQUIRED', '4.7' );
}

// Developer mode.
if ( ! defined( 'AVADA_DEV_MODE' ) ) {
	define( 'AVADA_DEV_MODE', false );
}

/**
 * Compatibility check.
 *
 * Check that the site meets the minimum requirements for the theme before proceeding.
 *
 * @since 6.0
 */
if ( version_compare( $GLOBALS['wp_version'], AVADA_MIN_WP_VER_REQUIRED, '<' ) || version_compare( PHP_VERSION, AVADA_MIN_PHP_VER_REQUIRED, '<' ) ) {
	require_once get_template_directory() . '/includes/bootstrap-compat.php';
	return;
}

/**
 *  --------------------------------- CUSTOMIZAÇÃO A PARTIR DAQUI --------------------------------------------------
 */

function acnf_mixed_menu_single_multiple_pages() {
    ?>
        <script>
			
			//Verificacao do CNPJ e mudando comporta
			//<abbr class="required" title="obrigatório">*</abbr>
			function verificaCnpj() {
	  jQuery( "#billing_cnpj" ).change(function() {
	  if(document.querySelector("#billing_cnpj").value != ''){
		
		
		 document.querySelector("#billing_razo_social_field > label > span").remove()
		 document.querySelector("#billing_nome_fantasia_field > label > span").remove()
	  } else {
var node = document.createElement("span");                 // Create a <li> node
var textnode = document.createTextNode("(opcional)");         // Create a text node
node.appendChild(textnode);                              // Append the text to <li>
document.querySelector("#billing_razo_social_field > label").appendChild(node);
		  
var node2 = document.createElement("span");                 // Create a <li> node
var textnode2 = document.createTextNode("(opcional)");         // Create a text node
node2.appendChild(textnode2);                              // Append the text to <li>
document.querySelector("#billing_nome_fantasia_field > label").appendChild(node2);
	   
	  }
	});
	}
	
//Traduzindo 2 campinhos 
function traduzindoCampos() {

    if(document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-table-titles > div.wcf-qty-header.wcf-item > div > strong")) {
        document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-table-titles > div.wcf-qty-header.wcf-item > div > strong").innerText = 'Produto';
    }

    if(document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-table-titles > div.wcf-qty-header.wcf-price > div > strong")) {
        document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-table-titles > div.wcf-qty-header.wcf-price > div > strong").innerText = 'Preço';
    }
    
    if(document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-row-8209 > div.wcf-item > div.wcf-item-all-text > div > div.wcf-display-subscription-details")) {
        document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-row-8209 > div.wcf-item > div.wcf-item-all-text > div > div.wcf-display-subscription-details").innerText = "";
    }

    if(document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-row-8210 > div.wcf-item > div.wcf-item-all-text > div > div.wcf-display-subscription-details")){
        document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-row-8210 > div.wcf-item > div.wcf-item-all-text > div > div.wcf-display-subscription-details").innerText = "";
    }

    if(document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-row-8213 > div.wcf-item > div.wcf-item-all-text > div > div.wcf-display-subscription-details")) {
        document.querySelector("#wcf-embed-checkout-form > div > form.checkout.woocommerce-checkout > div.woocommerce-content-box.full-width > div.wcf-product-option-wrap.wcf-yp-skin-classic.wcf-product-option-after-customer > div > div.wcf-qty-row.wcf-qty-row-8213 > div.wcf-item > div.wcf-item-all-text > div > div.wcf-display-subscription-details").innerText = "";
    }




}	
		
//Retirando acentos 			
	
			function tiraNumeros() {
			jQuery('#billing_cdigo_do_parceiro').keyup(function() {
			jQuery(this).val(this.value.replace(/\D/g, ''))
	});
		  }
			function tiraNumeros2() {
			jQuery('#billing_ie').keyup(function() {
			jQuery(this).val(this.value.replace(/\D/g, ''))
	});
		  }
			
		  function registerMenuClick() {
		    jQuery('.fusion-main-menu .menu-item a').each(function() {
		      jQuery(this).click(() => setTimeout(updateMenu, 10))
			})
		  }
			
		  function updateMenu() {
            var url = window.location.href.split('?')[0].replace(/\/$/, '').replace('#_', '#');
			var items = jQuery('.fusion-main-menu .menu-item');
			  
			items.each(function() {
				var item = jQuery(this);
                item.removeClass('current-menu-item current_page_item');
				if (url === item.find('a').attr('href').replace(/\/$/, '')) {
				  item.addClass('current-menu-item current_page_item');
				}
			});
			
			if (items.filter('.current-menu-item.current_page_item').length === 0) {
				items.first().addClass('current-menu-item current_page_item');
			}
		  }
			
          jQuery(document).ready(function() {
			verificaCnpj();
			updateMenu();
			traduzindoCampos();
			registerMenuClick();
			tiraNumeros();
			tiraNumeros2();
			consultaCep();
			  
			  function limpa_formulário_cep() {
				  // Limpa valores do formulário de cep.
				  jQuery("#billing_address_1").val("");
				  jQuery("#billing_neighborhood").val("");
				  jQuery("#billing_city").val("");
			  };
			  
			  function consultaCep() {
  //Quando o campo cep perde o foco.
  jQuery("#billing_postcode").blur(function () {
    //Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, "");

    //Verifica se campo cep possui valor informado.
    if (cep != "") {
      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test(cep)) {
        //Preenche os campos com "..." enquanto consulta webservice.

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON(
          "https://viacep.com.br/ws/" + cep + "/json/?callback=?",
          function (dados) {
            if (!("erro" in dados)) {
              //Atualiza os campos com os valores da consulta.
              jQuery("#billing_address_1").val(dados.logradouro);
              jQuery("#billing_neighborhood").val(dados.bairro);
              jQuery("#billing_city").val(dados.localidade);
            } //end if.
            else {
              //CEP pesquisado não foi encontrado.
              limpa_formulário_cep();
              alert("CEP não encontrado.");
            }
          }
        );
      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }
  });
}

			
           
          
		  });
        </script>
    <?php
}
add_action('wp_head', 'acnf_mixed_menu_single_multiple_pages');


/**
 * Filter to disable SKU & Category on product page
 *
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

/**
 * Filter to enable/disable the auto-fill of checkout fields 
 *
 * @param  string $allow having yes/no
 * @return string $allow yes or no
 */
function acnf_do_not_store_persistance_data( $allow ){
	$allow = 'no';
	return $allow;
}
add_filter( 'cartflows_allow_persistace', 'acnf_do_not_store_persistance_data', 10, 1 );

function acnf_checkout_get_value( $value, $imput ) {
	    // Billing first name
    if(isset($_GET['codigoParceiro']) && ! empty($_GET['codigoParceiro']) && $imput == 'billing_cdigo_do_parceiro' )
        $value = esc_attr( $_GET['codigoParceiro'] );

    // Billing last name
    if(isset($_GET['nome']) && ! empty($_GET['nome']) && $imput == 'billing_first_name' )
        $value = esc_attr( $_GET['nome'] );

    // Billing email
    if(isset($_GET['email']) && ! empty($_GET['email']) && $imput == 'billing_email' )
        $value = sanitize_email( $_GET['email'] );
	
	if(isset($_GET['vendedor']) && ! empty($_GET['vendedor']) && $imput == 'billing_vendedor' )
        $value = esc_attr( $_GET['vendedor'] );

    return $value;
}
add_filter( 'woocommerce_checkout_get_value' , 'acnf_checkout_get_value', 20, 2 );

function incluir_senha_no_order_meta( $order_id ){
	if( !empty( $_POST['account_password'] ) ){
		$senha = $_POST['account_password'];
		$Cifra =  'AES-128-CBC';
		$Chave =  't6w9z$C&F)J@NcRf';
		$TextoCifrado = openssl_encrypt($senha, $Cifra, $Chave, OPENSSL_RAW_DATA);
		$Resultado = base64_encode($TextoCifrado);
		update_post_meta( $order_id, 'account_password',  $Resultado);
	}
}
add_action( 'woocommerce_checkout_update_order_meta', 'incluir_senha_no_order_meta' );

function acnf_forcelogin_bypass_dynamic( $bypass ) {
    // Get visited URL without query string
    $url_path = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
	
    // Allow URL
    $allowed_urls = array(
       '/checkout-acnf-agro-todos-planos/',
		'/checkout-acnf-agro-plano-mensal/',
		'/checkout-acnf-agro-plano-semestral/',
		'/checkout-acnf-agro-plano-anual/',
		'/checkout-acnf-agro-global/',
       '/tudo-pronto/',
       '/conta-nao-ativada/',
		'/my-account/',
		'/'
    );

    if (in_array($url_path, $allowed_urls)) {
       $bypass = true;
    }


    return $bypass;
}
add_filter( 'v_forcelogin_bypass', 'acnf_forcelogin_bypass_dynamic', 10, 2);

/**
 * Bypass Force Login to allow for exceptions.
 *
 * @param bool $bypass Whether to disable Force Login. Default false.
 * @param string $visited_url The visited URL.
 * @return bool
 */


function acnf_auto_select_plan_from_url($args)
{
	if(isset($_GET['plan']) && ! empty($_GET['plan'])) {
		$plan = esc_attr( $_GET['plan'] );
		if(count($args['options']) > 0){
			foreach ($args['options'] as $key => $v)
				if($v === $plan)
					$args['selected'] = $args['options'][$key];
		}
	}	
    return $args;
}
add_filter('woocommerce_dropdown_variation_attribute_options_args','acnf_auto_select_plan_from_url',10,1);


/** Limitar quantidade de caracteres nos campos da finalização de compra */

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
$fields['billing']['billing_ie']['minlength'] = 2;
$fields['billing']['billing_ie']['maxlength'] = 15;
//$fields['billing']['billing_ie']['type'] = number;
$fields['billing']['billing_address_1']['maxlength'] = 60;
$fields['billing']['billing_neighborhood']['maxlength'] = 60;
$fields['billing']['billing_city']['maxlength'] = 60;
$fields['billing']['billing_vendedor']['maxlength'] = 60;
$fields['billing']['billing_address_2']['maxlength'] = 60;
$fields['billing']['billing_number']['maxlength'] = 5;
$fields['billing']['billing_vendedor']['maxlength'] = 40;
$fields['account']['account_password']['maxlength'] = 20;
$fields['billing']['billing_nome_fantasia']['maxlength'] = 60;
$fields['billing']['billing_razo_social']['maxlength'] = 60;
//$fields['billing']['billing_cdigo_do_parceiro']['type'] = number;
$fields['billing']['billing_cdigo_do_parceiro']['maxlength'] = 15;
	
	
return $fields;
}



// woocommerce remove message (en&es): [Item] has been removed from your cart because it can no longer be purchased. Please contact us for assistance.

function customize_wc_errors( $error ) {
    if ( strpos( $error, 'foi removido do seu carrinho porque' ) !== false ) {
        return '';
    } else {
        return $error; 
    }
}
add_filter( 'woocommerce_add_error', 'customize_wc_errors' );

/**
 *  --------------------------------- ALTERAÇÔES ATÉ AQUI --------------------------------------------------
 */

/**
 * Bootstrap the theme.
 *
 * @since 6.0
 */
require_once get_template_directory() . '/includes/bootstrap.php';

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
