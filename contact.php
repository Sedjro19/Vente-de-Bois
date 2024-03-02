<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$errors = []; // Tableau pour stocker les erreurs de validation
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Fonction de validation pour nettoyer et vérifier les valeurs du formulaire
		function validate_input($input)
		{
			$input = trim($input);
			$input = stripslashes($input);
			$input = htmlspecialchars($input);
			return $input;
		}

		// Récupérer les valeurs du formulaire en les validant
		$name = validate_input($_POST['name']);
		$email = validate_input($_POST['email']);
		$phone = validate_input($_POST['phone']);
		$message = validate_input($_POST['message']); 

		// Validation des champs requis
		if (empty($name)) {
			$errors[] = "Le nom est requis.";
		}

		if (empty($email)) {
			$errors[] = "L'e-mail est requis.";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = "L'e-mail n'est pas valide.";
		}

		if (empty($phone)) {
			$errors[] = "Le téléphone est requis.";
		}

		if (empty($message)) {
			$errors[] = "Le message est requis.";
		}

		// Vérification des erreurs de validation
		if (empty($errors)) {
			// Adresse e-mail du destinataire
			$email_destinataire = 'terenceaustintin@gmail.com';

			// Sujet de l'e-mail
			$subject = 'Nouveau message du formulaire de contact';

			// Contenu de l'e-mail
			$body = 'Nom: '.$name.'\n
					 Email: '.$email.'\n
					 Téléphone: '.$phone.'\n
					 Message:\n'.$message;

			// En-têtes de l'e-mail
			$headers = "From: $email\r\n";
			$headers = "MIME-version:1.0\n";
			$headers = "Content-type:text/html;charset=uft-8 \n";
			$headers = "Reply-To: $email\r\n";

			$result = mail($email_destinataire, $subject, $body, $headers);
			// Envoi de l'e-mail
			if ($result) {
				echo "Votre message a été envoyé avec succès.";
			} else {
				echo "Une erreur s'est produite lors de l'envoi du message.";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

	<title>Contact us - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<meta charset="UTF-8">
	<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="https://cozyhome-fr.com/xmlrpc.php">

	<title>Palette bois de chauffage- 40 cm- 3 stères – COZY HOME</title>
	<meta name="robots" content="max-image-preview:large">
	<link rel="dns-prefetch" href="//ecommerce.nexi.it">
	<link rel="alternate" type="application/rss+xml" title="COZY HOME » Flux" href="https://cozyhome-fr.com/feed/">
	<link rel="alternate" type="application/rss+xml" title="COZY HOME » Flux des commentaires"
		href="https://cozyhome-fr.com/comments/feed/">
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/cozyhome-fr.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.4" } };
		/*! This file is auto-generated */
		!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="wp-block-library-css"
		href="https://cozyhome-fr.com/wp-includes/css/dist/block-library/style.min.css?ver=6.2.4" type="text/css"
		media="all">
	<link rel="stylesheet" id="wc-blocks-vendors-style-css"
		href="https://cozyhome-fr.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=10.4.6"
		type="text/css" media="all">
	<link rel="stylesheet" id="wc-blocks-style-css"
		href="https://cozyhome-fr.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=10.4.6"
		type="text/css" media="all">
	<link rel="stylesheet" id="classic-theme-styles-css"
		href="https://cozyhome-fr.com/wp-includes/css/classic-themes.min.css?ver=6.2.4" type="text/css" media="all">
	<style id="global-styles-inline-css" type="text/css">
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel="stylesheet" id="xpay-checkout-css"
		href="https://cozyhome-fr.com/wp-content/plugins/nexi-xpay-build/assets/css/xpay.css?ver=7.3.0" type="text/css"
		media="all">
	<link rel="stylesheet" id="photoswipe-css"
		href="https://cozyhome-fr.com/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css?ver=7.9.0"
		type="text/css" media="all">
	<link rel="stylesheet" id="photoswipe-default-skin-css"
		href="https://cozyhome-fr.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css?ver=7.9.0"
		type="text/css" media="all">
	<style id="woocommerce-inline-inline-css" type="text/css">
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel="stylesheet" id="shoptimizer-main-min-css"
		href="https://cozyhome-fr.com/wp-content/themes/shoptimizer/assets/css/main/main.min.css?ver=2.6.2"
		type="text/css" media="all">
	<link rel="stylesheet" id="shoptimizer-modal-min-css"
		href="https://cozyhome-fr.com/wp-content/themes/shoptimizer/assets/css/main/modal.min.css?ver=2.6.2"
		type="text/css" media="all">
	<link rel="stylesheet" id="shoptimizer-product-min-css"
		href="https://cozyhome-fr.com/wp-content/themes/shoptimizer/assets/css/main/product.min.css?ver=2.6.2"
		type="text/css" media="all">
	<link rel="stylesheet" id="shoptimizer-style-css"
		href="https://cozyhome-fr.com/wp-content/themes/shoptimizer/style.css?ver=6.2.4" type="text/css" media="all">
	<link rel="stylesheet" id="shoptimizer-blocks-min-css"
		href="https://cozyhome-fr.com/wp-content/themes/shoptimizer/assets/css/main/blocks.min.css?ver=2.6.2"
		type="text/css" media="all">
	<link rel="stylesheet" id="shoptimizer-woocommerce-min-css"
		href="https://cozyhome-fr.com/wp-content/themes/shoptimizer/assets/css/main/woocommerce.min.css?ver=2.6.2"
		type="text/css" media="all">
	<script type="text/javascript"
		src="https://ecommerce.nexi.it/ecomm/XPayBuild/js?alias=payment_3874197&amp;ver=6.2.4"
		id="xpay_build_lib-js"></script>
	<script type="text/javascript" src="https://cozyhome-fr.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.4"
		id="jquery-core-js"></script>
	<script type="text/javascript" src="https://cozyhome-fr.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0"
		id="jquery-migrate-js"></script>
	<script type="text/javascript"
		src="https://cozyhome-fr.com/wp-content/plugins/nexi-xpay-build/assets/js/xpay.js?ver=7.3.0"
		id="xpay-checkout-js"></script>
	<script type="text/javascript"
		src="https://cozyhome-fr.com/wp-content/plugins/nexi-xpay-build/assets/js/xpay-build.js?ver=7.3.0"
		id="xpay-build-checkout-js"></script>
	<link rel="https://api.w.org/" href="https://cozyhome-fr.com/wp-json/">
	<link rel="alternate" type="application/json" href="https://cozyhome-fr.com/wp-json/wp/v2/product/8271">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cozyhome-fr.com/xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
		href="https://cozyhome-fr.com/wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 6.2.4">
	<meta name="generator" content="WooCommerce 7.9.0">
	<link rel="canonical" href="https://cozyhome-fr.com/product/palette-bois-de-chauffage-40-cm-3-steres/">
	<link rel="shortlink" href="https://cozyhome-fr.com/?p=8271">
	<link rel="alternate" type="application/json+oembed"
		href="https://cozyhome-fr.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcozyhome-fr.com%2Fproduct%2Fpalette-bois-de-chauffage-40-cm-3-steres%2F">
	<link rel="alternate" type="text/xml+oembed"
		href="https://cozyhome-fr.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcozyhome-fr.com%2Fproduct%2Fpalette-bois-de-chauffage-40-cm-3-steres%2F&amp;format=xml">
	<script
		type="text/javascript"> var commercekit_ajs = { "ajax_url": "\/?commercekit-ajax" }; var commercekit_pdp = []; var commercekit_as = []; </script>
	<script
		src="https://cozyhome-fr.com/wp-content/plugins/nexi-xpay-build/assets/js/pagodil-sticker.min.js?v=7.3.0"></script>
	<style>
		.pagodil-sticker-container {
			display: inline-block;
			margin-bottom: 60px;
		}
	</style>
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<meta name="generator"
		content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<link rel="icon"
		href="https://cozyhome-fr.com/wp-content/uploads/2023/12/cropped-Capture-decran-2023-12-12-233202-32x32.png"
		sizes="32x32">
	<link rel="icon"
		href="https://cozyhome-fr.com/wp-content/uploads/2023/12/cropped-Capture-decran-2023-12-12-233202-192x192.png"
		sizes="192x192">
	<link rel="apple-touch-icon"
		href="https://cozyhome-fr.com/wp-content/uploads/2023/12/cropped-Capture-decran-2023-12-12-233202-180x180.png">
	<meta name="msapplication-TileImage"
		content="https://cozyhome-fr.com/wp-content/uploads/2023/12/cropped-Capture-decran-2023-12-12-233202-270x270.png">
	<style id="kirki-inline-styles">
		.header-4 .site-header .custom-logo-link img {
			height: 30px;
		}

		.price ins,
		.summary .yith-wcwl-add-to-wishlist a:before,
		.site .commercekit-wishlist a i:before,
		.commercekit-wishlist-table .price,
		.commercekit-wishlist-table .price ins,
		.commercekit-ajs-product-price,
		.commercekit-ajs-product-price ins,
		.widget-area .widget.widget_categories a:hover,
		#secondary .widget ul li a:hover,
		#secondary.widget-area .widget li.chosen a,
		.widget-area .widget a:hover,
		#secondary .widget_recent_comments ul li a:hover,
		.woocommerce-pagination .page-numbers li .page-numbers.current,
		div.product p.price,
		body:not(.mobile-toggled) .main-navigation ul.menu li.full-width.menu-item-has-children ul li.highlight>a,
		body:not(.mobile-toggled) .main-navigation ul.menu li.full-width.menu-item-has-children ul li.highlight>a:hover,
		#secondary .widget ins span.amount,
		#secondary .widget ins span.amount span,
		.search-results article h2 a:hover {
			color: #000000;
		}

		.spinner>div,
		.widget_price_filter .ui-slider .ui-slider-range,
		.widget_price_filter .ui-slider .ui-slider-handle,
		#page .woocommerce-tabs ul.tabs li span,
		#secondary.widget-area .widget .tagcloud a:hover,
		.widget-area .widget.widget_product_tag_cloud a:hover,
		footer .mc4wp-form input[type="submit"],
		#payment .payment_methods li.woocommerce-PaymentMethod>input[type=radio]:first-child:checked+label:before,
		#payment .payment_methods li.wc_payment_method>input[type=radio]:first-child:checked+label:before,
		#shipping_method>li>input[type=radio]:first-child:checked+label:before,
		ul#shipping_method li:only-child label:before,
		.image-border .elementor-image:after,
		ul.products li.product .yith-wcwl-wishlistexistsbrowse a:before,
		ul.products li.product .yith-wcwl-wishlistaddedbrowse a:before,
		ul.products li.product .yith-wcwl-add-button a:before,
		.summary .yith-wcwl-add-to-wishlist a:before,
		li.product .commercekit-wishlist a em.cg-wishlist-t:before,
		li.product .commercekit-wishlist a em.cg-wishlist:before,
		.site .commercekit-wishlist a i:before,
		.summary .commercekit-wishlist a i.cg-wishlist-t:before,
		#page .woocommerce-tabs ul.tabs li a span,
		.commercekit-atc-tab-links li a span,
		.main-navigation ul li a span strong,
		.widget_layered_nav ul.woocommerce-widget-layered-nav-list li.chosen:before {
			background-color: #000000;
		}

		.woocommerce-tabs .tabs li a::after,
		.commercekit-atc-tab-links li a:after {
			border-color: #000000;
		}

		a {
			color: #3077d0;
		}

		a:hover {
			color: #111;
		}

		body {
			background-color: #fff;
		}

		.col-full.topbar-wrapper {
			background-color: #000000;
			border-bottom-color: #000000;
		}

		.top-bar,
		.top-bar a {
			color: #ffffff;
		}

		body:not(.header-4) .site-header,
		.header-4-container {
			background-color: #fff;
		}

		.fa.menu-item,
		.ri.menu-item {
			border-left-color: #eee;
		}

		.header-4 .search-trigger span {
			border-right-color: #eee;
		}

		.header-widget-region {
			background-color: #dc9814;
		}

		.header-widget-region,
		.header-widget-region a {
			color: #fff;
		}

		.button,
		.button:hover,
		.commercekit-wishlist-table button,
		input[type=submit],
		ul.products li.product .button,
		ul.products li.product .added_to_cart,
		.site .widget_shopping_cart a.button.checkout,
		.woocommerce #respond input#submit.alt,
		.main-navigation ul.menu ul li a.button,
		.main-navigation ul.menu ul li a.button:hover,
		body .main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li a.button:hover,
		.main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li:hover a.added_to_cart,
		.site div.wpforms-container-full .wpforms-form button[type=submit],
		.product .cart .single_add_to_cart_button,
		.woocommerce-cart p.return-to-shop a,
		.elementor-row .feature p a,
		.image-feature figcaption span {
			color: #ffffff;
		}

		.single-product div.product form.cart .button.added::before {
			background-color: #ffffff;
		}

		.button,
		input[type=submit],
		ul.products li.product .button,
		.commercekit-wishlist-table button,
		.woocommerce #respond input#submit.alt,
		.product .cart .single_add_to_cart_button,
		.widget_shopping_cart a.button.checkout,
		.main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li a.added_to_cart,
		.site div.wpforms-container-full .wpforms-form button[type=submit],
		ul.products li.product .added_to_cart,
		.woocommerce-cart p.return-to-shop a,
		.elementor-row .feature a,
		.image-feature figcaption span {
			background-color: #000000;
		}

		.widget_shopping_cart a.button.checkout {
			border-color: #000000;
		}

		.button:hover,
		[type="submit"]:hover,
		.commercekit-wishlist-table button:hover,
		ul.products li.product .button:hover,
		#place_order[type="submit"]:hover,
		body .woocommerce #respond input#submit.alt:hover,
		.product .cart .single_add_to_cart_button:hover,
		.main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li a.added_to_cart:hover,
		.site div.wpforms-container-full .wpforms-form button[type=submit]:hover,
		.site div.wpforms-container-full .wpforms-form button[type=submit]:focus,
		ul.products li.product .added_to_cart:hover,
		.widget_shopping_cart a.button.checkout:hover,
		.woocommerce-cart p.return-to-shop a:hover {
			background-color: #000000;
		}

		.widget_shopping_cart a.button.checkout:hover {
			border-color: #000000;
		}

		.onsale,
		.product-label,
		.wc-block-grid__product-onsale {
			background-color: #ff3131;
			color: #fff;
		}

		.content-area .summary .onsale {
			color: #ff3131;
		}

		.summary .product-label:before,
		.product-details-wrapper .product-label:before {
			border-right-color: #ff3131;
		}

		.entry-content .testimonial-entry-title:after,
		.cart-summary .widget li strong::before,
		p.stars.selected a.active::before,
		p.stars:hover a::before,
		p.stars.selected a:not(.active)::before {
			color: #ee9e13;
		}

		.star-rating>span:before {
			background-color: #ee9e13;
		}

		header.woocommerce-products-header,
		.shoptimizer-category-banner {
			background-color: #efeee3;
		}

		.term-description p,
		.term-description a,
		.term-description a:hover,
		.shoptimizer-category-banner h1,
		.shoptimizer-category-banner .taxonomy-description p {
			color: #222;
		}

		.single-product .site-content .col-full {
			background-color: #ffffff;
		}

		.call-back-feature a {
			background-color: #dc9814;
			color: #fff;
		}

		ul.checkout-bar:before,
		.woocommerce-checkout .checkout-bar li.active:after,
		ul.checkout-bar li.visited:after {
			background-color: #000000;
		}

		.below-content .widget .ri {
			color: #000000;
		}

		.below-content .widget svg {
			stroke: #000000;
		}

		footer.site-footer,
		footer.copyright {
			background-color: #ffffff;
			color: #000000;
		}

		.site footer.site-footer .widget .widget-title,
		.site-footer .widget.widget_block h2 {
			color: #000000;
		}

		footer.site-footer a:not(.button),
		footer.copyright a {
			color: #000000;
		}

		footer.site-footer a:not(.button):hover,
		footer.copyright a:hover {
			color: #fff;
		}

		footer.site-footer li a:after {
			border-color: #fff;
		}

		.top-bar {
			font-size: 14px;
		}

		.menu-primary-menu-container>ul>li>a span:before {
			border-color: #dc9814;
		}

		.secondary-navigation .menu a,
		.ri.menu-item:before,
		.fa.menu-item:before {
			color: #404040;
		}

		.secondary-navigation .icon-wrapper svg {
			stroke: #404040;
		}

		.site-header-cart a.cart-contents .count,
		.site-header-cart a.cart-contents .count:after {
			border-color: #000000;
		}

		.site-header-cart a.cart-contents .count,
		.shoptimizer-cart-icon i {
			color: #000000;
		}

		.site-header-cart a.cart-contents:hover .count,
		.site-header-cart a.cart-contents:hover .count {
			background-color: #000000;
		}

		.site-header-cart .cart-contents {
			color: #fff;
		}

		.header-widget-region .widget {
			padding-top: 15px;
			padding-bottom: 15px;
		}

		.site .header-widget-region p {
			font-size: 14px;
		}

		.col-full,
		.single-product .site-content .shoptimizer-sticky-add-to-cart .col-full,
		body .woocommerce-message,
		.single-product .site-content .commercekit-sticky-add-to-cart .col-full {
			max-width: 1170px;
		}

		.product-details-wrapper,
		.single-product .woocommerce-Tabs-panel,
		.single-product .archive-header .woocommerce-breadcrumb,
		.plp-below.archive.woocommerce .archive-header .woocommerce-breadcrumb,
		.related.products,
		#sspotReviews,
		.upsells.products,
		.composite_summary,
		.composite_wrap {
			max-width: calc(1170px + 5.2325em);
		}

		.main-navigation ul li.menu-item-has-children.full-width .container,
		.single-product .woocommerce-error {
			max-width: 1170px;
		}

		.below-content .col-full,
		footer .col-full {
			max-width: calc(1170px + 40px);
		}

		#secondary {
			width: 17%;
		}

		.content-area {
			width: 76%;
		}

		body,
		button,
		input,
		select,
		option,
		textarea,
		h6 {
			font-family: IBM Plex Sans;
			font-size: 16px;
			font-weight: 400;
			color: #444;
		}

		.menu-primary-menu-container>ul>li>a,
		.site-header-cart .cart-contents {
			font-family: IBM Plex Sans;
			font-size: 16px;
			font-weight: 400;
			letter-spacing: -0.1px;
			text-transform: none;
		}

		.main-navigation ul.menu ul li>a,
		.main-navigation ul.nav-menu ul li>a {
			font-family: IBM Plex Sans;
			font-size: 15px;
			font-weight: 400;
			text-transform: none;
		}

		.main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li.menu-item-has-children>a,
		.main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li.heading>a {
			font-family: IBM Plex Sans;
			font-size: 16px;
			font-weight: 600;
			letter-spacing: -0.1px;
			text-transform: none;
			color: #111;
		}

		.entry-content {
			font-family: IBM Plex Sans;
			font-size: 17px;
			font-weight: 400;
			line-height: 1.5;
			text-transform: none;
			color: #444;
		}

		h1 {
			font-family: IBM Plex Sans;
			font-size: 40px;
			font-weight: 600;
			letter-spacing: -0.5px;
			line-height: 1.3;
			text-transform: none;
			color: #222;
		}

		h2 {
			font-family: IBM Plex Sans;
			font-size: 30px;
			font-weight: 600;
			letter-spacing: -0.5px;
			line-height: 1.25;
			text-transform: none;
			color: #222;
		}

		h3 {
			font-family: IBM Plex Sans;
			font-size: 24px;
			font-weight: 600;
			letter-spacing: 0px;
			line-height: 1.45;
			text-transform: none;
			color: #222;
		}

		h4 {
			font-family: IBM Plex Sans;
			font-size: 20px;
			font-weight: 600;
			letter-spacing: 0px;
			line-height: 1.4;
			text-transform: none;
			color: #222;
		}

		h5 {
			font-family: IBM Plex Sans;
			font-size: 18px;
			font-weight: 600;
			letter-spacing: 0px;
			line-height: 1.4;
			text-transform: none;
			color: #222;
		}

		blockquote p {
			font-family: IBM Plex Sans;
			font-size: 20px;
			font-weight: 400;
			line-height: 1.45;
			text-transform: none;
			color: #222;
		}

		.widget .widget-title,
		.widget .widgettitle,
		.widget.widget_block h2 {
			font-family: IBM Plex Sans;
			font-size: 15px;
			font-weight: 600;
			letter-spacing: 0px;
			line-height: 1.5;
			text-transform: uppercase;
		}

		body.single-post h1 {
			font-family: IBM Plex Sans;
			font-size: 36px;
			font-weight: 600;
			letter-spacing: -0.6px;
			line-height: 1.24;
			text-transform: none;
		}

		.term-description,
		.shoptimizer-category-banner .taxonomy-description {
			font-family: IBM Plex Sans;
			font-size: 17px;
			font-weight: 400;
			letter-spacing: -0.1px;
			line-height: 1.5;
			text-transform: none;
		}

		.content-area ul.products li.product .woocommerce-loop-product__title,
		.content-area ul.products li.product h2,
		ul.products li.product .woocommerce-loop-product__title,
		ul.products li.product .woocommerce-loop-product__title,
		.main-navigation ul.menu ul li.product .woocommerce-loop-product__title a,
		.wc-block-grid__product .wc-block-grid__product-title {
			font-family: IBM Plex Sans;
			font-size: 15px;
			font-weight: 600;
			letter-spacing: 0px;
			line-height: 1.3;
			text-transform: none;
		}

		.summary h1 {
			font-family: IBM Plex Sans;
			font-size: 32px;
			font-weight: 600;
			letter-spacing: -0.5px;
			line-height: 1.2;
			text-transform: none;
		}

		body .woocommerce #respond input#submit.alt,
		body .woocommerce a.button.alt,
		body .woocommerce button.button.alt,
		body .woocommerce input.button.alt,
		.product .cart .single_add_to_cart_button,
		.shoptimizer-sticky-add-to-cart__content-button a.button,
		.widget_shopping_cart a.button.checkout,
		#cgkit-tab-commercekit-sticky-atc-title button,
		#cgkit-mobile-commercekit-sticky-atc button {
			font-family: IBM Plex Sans;
			font-size: 16px;
			font-weight: 600;
			letter-spacing: 0px;
			text-transform: none;
		}

		@media (max-width: 992px) {

			.main-header,
			.site-branding {
				height: 70px;
			}

			.main-header .site-header-cart {
				top: calc(-14px + 70px / 2);
			}

			.sticky-m .mobile-filter {
				top: 70px;
			}

			.commercekit-atc-sticky-tabs {
				top: calc(70px - 1px);
			}

			.m-search-bh .commercekit-atc-sticky-tabs,
			.m-search-toggled .commercekit-atc-sticky-tabs {
				top: calc(70px + 60px - 1px);
			}

			.m-search-bh.sticky-m .mobile-filter,
			.m-search-toggled.sticky-m .mobile-filter {
				top: calc(70px + 60px);
			}

			.sticky-m .cg-layout-vertical-scroll .cg-thumb-swiper {
				top: calc(70px + 10px);
			}

			body.theme-shoptimizer .site-header .custom-logo-link img,
			body.wp-custom-logo .site-header .custom-logo-link img {
				height: 20px;
			}

			.m-search-bh .site-search,
			.m-search-toggled .site-search,
			.site-branding button.menu-toggle,
			.site-branding button.menu-toggle:hover {
				background-color: #fff;
			}

			.menu-toggle .bar,
			.site-header-cart a.cart-contents:hover .count {
				background-color: #111;
			}

			.menu-toggle .bar-text,
			.menu-toggle:hover .bar-text,
			.site-header-cart a.cart-contents .count {
				color: #111;
			}

			.mobile-search-toggle svg,
			.mobile-myaccount svg {
				stroke: #111;
			}

			.site-header-cart a.cart-contents:hover .count {
				background-color: #000000;
			}

			.site-header-cart a.cart-contents:not(:hover) .count {
				color: #000000;
			}

			.shoptimizer-cart-icon svg {
				stroke: #000000;
			}

			.site-header .site-header-cart a.cart-contents .count,
			.site-header-cart a.cart-contents .count:after {
				border-color: #000000;
			}

			.col-full-nav {
				background-color: #fff;
			}

			.main-navigation ul li a,
			body .main-navigation ul.menu>li.menu-item-has-children>span.caret::after,
			.main-navigation .woocommerce-loop-product__title,
			.main-navigation ul.menu li.product,
			body .main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li h6 a,
			body .main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li h6 a:hover,
			.main-navigation ul.products li.product .price,
			body .main-navigation ul.menu li.menu-item-has-children li.menu-item-has-children span.caret,
			body.mobile-toggled .main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li p.product__categories a,
			body.mobile-toggled ul.products li.product p.product__categories a,
			body li.menu-item-product p.product__categories,
			main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li.menu-item-has-children>a,
			.main-navigation ul.menu li.menu-item-has-children.full-width>.sub-menu-wrapper li.heading>a,
			.mobile-extra,
			.mobile-extra h4,
			.mobile-extra a:not(.button) {
				color: #222;
			}

			.main-navigation ul.menu li.menu-item-has-children span.caret::after {
				background-color: #222;
			}

			.main-navigation ul.menu>li.menu-item-has-children.dropdown-open>.sub-menu-wrapper {
				border-bottom-color: #eee;
			}
		}

		@media (min-width: 992px) {
			.top-bar .textwidget {
				padding-top: 10px;
				padding-bottom: 10px;
			}
		}

		@media (min-width: 993px) {
			.header-4 .header-4-container {
				height: 90px;
			}

			.header-4 .menu-primary-menu-container>ul>li>a,
			.header-4 .search-trigger {
				line-height: 90px;
			}

			.header-4 .menu-primary-menu-container>ul>li>a,
			.header-4 .site-header-cart .cart-contents .amount,
			.header-4 .search-trigger,
			.header-4 .search-trigger:hover {
				color: #000000;
			}

			.header-4 .main-navigation ul.menu>li.menu-item-has-children>a::after,
			.header-4 .main-navigation ul.menu>li.page_item_has_children>a::after,
			.header-4 .main-navigation ul.nav-menu>li.menu-item-has-children>a::after,
			.header-4 .main-navigation ul.nav-menu>li.page_item_has_children>a::after {
				background-color: #000000;
			}

			.main-navigation ul.menu ul.sub-menu {
				background-color: #fff;
			}

			.main-navigation ul.menu ul li a,
			.main-navigation ul.nav-menu ul li a {
				color: #323232;
			}

			.main-navigation ul.menu ul a:hover {
				color: #dc9814;
			}

			.shoptimizer-cart-icon svg {
				stroke: #000000;
			}

			.site-header-cart a.cart-contents:hover .count {
				color: #fff;
			}

			body.header-4:not(.full-width-header) .header-4-inner,
			.summary form.cart.commercekit_sticky-atc .commercekit-pdp-sticky-inner,
			.commercekit-atc-sticky-tabs ul.commercekit-atc-tab-links {
				max-width: 1170px;
			}
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdzeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdXeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* greek */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdLeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
		}

		/* vietnamese */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd7eE6xOedfTDw.woff) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/font) format('woff');
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdHeE6xOedc.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIxscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIVscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* greek */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIJscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
		}

		/* vietnamese */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/font) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI9scv3pBmtF8A.woff) format('woff');
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIFscv3pBms.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdzeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdXeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* greek */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdLeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
		}

		/* vietnamese */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd7eE6xOedfTDw.woff) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/font) format('woff');
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdHeE6xOedc.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIxscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIVscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* greek */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIJscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
		}

		/* vietnamese */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/font) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI9scv3pBmtF8A.woff) format('woff');
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIFscv3pBms.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdzeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdXeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* greek */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdLeE6xOedfTDw.woff) format('woff');
			unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
		}

		/* vietnamese */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhd7eE6xOedfTDw.woff) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/font) format('woff');
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYXgKVElMYYaJe8bpLHnCwDKhdHeE6xOedc.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIxscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIVscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* greek */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIJscv3pBmtF8A.woff) format('woff');
			unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
		}

		/* vietnamese */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/font) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AI9scv3pBmtF8A.woff) format('woff');
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'IBM Plex Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://cozyhome-fr.com/wp-content/fonts/ibm-plex-sans/zYX9KVElMYYaJe8bpLHnCwDKjQ76AIFscv3pBms.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	</style>
	<style id="wpforms-css-vars-root">
		:root {
			--wpforms-field-border-radius: 3px;
			--wpforms-field-background-color: #ffffff;
			--wpforms-field-border-color: rgba(0, 0, 0, 0.25);
			--wpforms-field-text-color: rgba(0, 0, 0, 0.7);
			--wpforms-label-color: rgba(0, 0, 0, 0.85);
			--wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
			--wpforms-label-error-color: #d63637;
			--wpforms-button-border-radius: 3px;
			--wpforms-button-background-color: #066aab;
			--wpforms-button-text-color: #ffffff;
			--wpforms-field-size-input-height: 43px;
			--wpforms-field-size-input-spacing: 15px;
			--wpforms-field-size-font-size: 16px;
			--wpforms-field-size-line-height: 19px;
			--wpforms-field-size-padding-h: 14px;
			--wpforms-field-size-checkbox-size: 16px;
			--wpforms-field-size-sublabel-spacing: 5px;
			--wpforms-field-size-icon-size: 1;
			--wpforms-label-size-font-size: 16px;
			--wpforms-label-size-line-height: 19px;
			--wpforms-label-size-sublabel-font-size: 14px;
			--wpforms-label-size-sublabel-line-height: 17px;
			--wpforms-button-size-font-size: 17px;
			--wpforms-button-size-height: 41px;
			--wpforms-button-size-padding-h: 15px;
			--wpforms-button-size-margin-top: 10px;

		}
	</style>
	<div></div>
</head>

<body>
	<!-- Fixed navbar -->
	<?php require('header.html'); ?>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>

				<p>
					We’d love to hear from you. Interested in working together? Fill out the form below with some info
					about your project and I will get back to you as soon as I can. Please allow a couple days for me to
					respond.
				</p>
				<br>

				<form method="POST" action="#" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-4">
							<input class="form-control" type="text" name="name" required placeholder="Nom"
								value="<?php echo isset($name) ? $name : ''; ?>">
						</div>
						<div class="col-sm-4">
							<input class="form-control" type="email" name="email" required placeholder="Email"
								value="<?php echo isset($email) ? $email : ''; ?>">
						</div>
						<div class="col-sm-4">
							<input class="form-control" type="tel" name="phone" required placeholder="Téléphone"
								value="<?php echo isset($phone) ? $phone : ''; ?>">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<textarea name="message" placeholder="Tapez votre message ici..." required
								class="form-control" rows="9"><?php echo isset($message) ? $message : ''; ?></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<label class="checkbox"><input type="checkbox" name="newsletter" <?php echo isset($newsletter) && $newsletter ? 'checked' : ''; ?>> S'inscrire à la
								newsletter</label>
						</div>
						<div class="col-sm-6 text-right">
							<input class="btn btn-action" type="submit" value="Envoyer le message">
						</div>
					</div>
					<?php if (!empty($errors)): ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="alert alert-danger">
									<ul>
										<?php foreach ($errors as $error): ?>
											<li>
												<?php echo $error; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</form>
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						2002 Holcombe Boulevard, Houston, TX 77030, USA
					</address>
					<h4>Phone:</h4>
					<address>
						+1 (438) 800-3422
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div> <!-- /container -->

	<section class="container-full top-space">
		<div id="map"></div>
	</section>

	<?php require('footer.html'); ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
	<script src="assets/js/google-map.js"></script>


</body>

</html>