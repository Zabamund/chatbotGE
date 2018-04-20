<?php
	//Get-started
	define('MSG_GETSTARTED',"C'est votre première visite?");
	$MSG_GETSTARTED_BUTTONS = array();
	$MSG_GETSTARTED_BUTTON = array("content_type"=>"text","title"=>"OUI c'est ma 1ère","payload"=>"bonjour");
	$MSG_GETSTARTED_BUTTONS[0] = $MSG_GETSTARTED_BUTTON;
	$MSG_GETSTARTED_BUTTON = array("content_type"=>"text","title"=>"NON","payload"=>"aide");
	$MSG_GETSTARTED_BUTTONS[1] = $MSG_GETSTARTED_BUTTON;

	
	//Welcome
	define('MSG_WELCOME',"Bonjour et bienvenue\nJ'ai été développé par Olivier, pour vous aider à voter (aide), ainsi que pour vous envoyer les résultats des votations et élections (résultats).\nMes informations sont principalement destinées aux citoyennes et citoyens genevois");
	define('MSG_WELCOME_ACT',"Comment puis-je vous aider?");
	$MSG_WELCOME_ACT_BUTTONS = array();
	$MSG_WELCOME_ACT_BUTTON = array("content_type"=>"text","title"=>"RESULTATS","payload"=>"resultats");
	$MSG_WELCOME_ACT_BUTTONS[0] = $MSG_WELCOME_ACT_BUTTON;
	$MSG_WELCOME_ACT_BUTTON = array("content_type"=>"text","title"=>"AIDE","payload"=>"aide");
	$MSG_WELCOME_ACT_BUTTONS[1] = $MSG_WELCOME_ACT_BUTTON;
	
	//Inscription
	define('MSG_INSCRIPTION_ACT',"Souhaitez-vous recevoir des notifications lors des votations et élections?\n(maximum 1 fois par jour)");
	$MSG_INSCRIPTION_ACT_BUTTONS = array();
	$MSG_INSCRIPTION_ACT_BUTTON = array("content_type"=>"text","title"=>"OUI je m'inscrits","payload"=>"inscription-oui");
	$MSG_INSCRIPTION_ACT_BUTTONS[0] = $MSG_INSCRIPTION_ACT_BUTTON;
	$MSG_INSCRIPTION_ACT_BUTTON = array("content_type"=>"text","title"=>"NON","payload"=>"inscription-non");
	$MSG_INSCRIPTION_ACT_BUTTONS[1] = $MSG_INSCRIPTION_ACT_BUTTON;
	define('MSG_INSCRIPTION_CONFIRMATION',"Merci pour votre inscription, vous recevrez une notification lors de la publication des résultats des votations et élections.\nVous pouvez arrêter ce service en tout temps en m'envoyant le mot clé STOP.");
	define('MSG_DESINSCRIPTION_CONFIRMATION',"Vous ne recevrez plus de notification :'(\nVous pouvez toujours vous réinscrire en m'envoyant le mot clé START.");
	
	define('MSG_ROBOT',"Je suis un robot et je suis développé par Olivier");
	define('MSG_DEVELOPPEUR',"Olivier est un passionné de nouvelles technologies");
	
	//Erreur
	define('MSG_ERREUR_1', "Je n'ai pas compris et je vais demander de l'aide! ;-)");
	define('MSG_ERREUR_2', "Je suis un robot et tous mes boulons n'ont pas encore été serrés! [:]");
	define('MSG_ERREUR_3', ":( je suis toujours en apprentissage! Désolé si je ne comprends pas encore tout ;-)");
	
	//Merci
	define('MSG_MERCI', "C'est un plaisir!");
	define('MSG_A_BIENTOT', "A bientôt, lors d'une prochaine votation!");
	
	//Résultats
	define('MSG_RESULTATS_HELP',"Vous pouvez aussi m'envoyer le nom d'une commune, pour connaître les résultats de cette dernière, par exemple : résultats à Aire-la-Ville.");
	define('MSG_RESULTATS_ERREUR', "Désolé, je n'ai pas encore reçu les résultats. Généralement, ils sont publiés le dimanche de la votation durant l'après-midi");
	
	//Aide
	define('MSG_AIDE',"Je peux essayer de vous aider en répondant à des questions simples!\nUn passionné d'informatique et des droits politiques m'apprend le métier.");
	
	//MSG issu de l'analyse de texte
	$msgReponse[MSG_HTTPS] = "Les échanges avec le site de vote sont sécurisés, pour garantir la confidentialité et la sécurité de votre vote.\nN'oubliez pas de mettre un \"S\" à \"HTTP\" -> \"HTTPS\"";
	$msgReponse[MSG_URL] = "L'adresse (URL) du site de vote électronique est https://www.evote-ch.ch/ge";
	$msgReponse[MSG_PBTECH] = "Je pense que vous avez un problème technique. Avez-vous essayé avec un autre navigateur/browser? Un autre appareil?";
	$msgReponse[MSG_NAVCLAVIER] = "Pour voter, il faut uniquement utiliser les boutons affichés dans les écrans. Et avancer étape par étape.\nSi vous n'avez pas atteint l'étape 5 de vérification, vous pouvez recommencer";
	$msgReponse[MSG_NUMCARTE] = "Pour voter électroniquement, il faut être inscrit.\nSi vous avez bien un carte pour le vote électronique, assurez vous que vous êtes sur le site de vote du canton de Genève (https://www.evote-ch.ch/ge)";
//!!!	
	$msgReponse[MSG_VOTE] = "Vous trouverez toutes les informations sur le site du canton de Genève http://www.ge.ch/votations/20180304/information/";
	$msgReponse[MSG_AUTHENTIFICATION] = "Si vous avez un problème de date de naissance, vérifiez que vous utilisez bien votre carte de vote.";
	$msgReponse[MSG_CODEVERIFICATION] = "Si votre problème est les codes de vérification, je ferai tout de suite une capture d'écran de la page web et je contacterai le helpdesk";
	$msgReponse[MSG_TROUVERCODEVERIFICATION] = "Ils sont bien cachés! En principe ils sont attachés à votre carte de vote";
	$msgReponse[MSG_CODEVERIFICATIONEXPLICATION] = "Les codes de vérification vous permettent de vérifier que votre vote a été reçu par le serveur tel que vous l'avez exprimé";
	$msgReponse[MSG_CODECONFIRMATION] = "Si votre code de confirmation n'est plus lisible, je suis désolé de vous le dire, vous ne pourrez plus voter par internet. Si ce n'est pas trop tard, vous pouvez encore voter par correspondance ou au local";
	$msgReponse[MSG_CODEFINALISATION] = "Si votre le code de finalisation ne correspond pas à celui de votre carte, je ferai tout de suite une capture d'écran de la page web et je contacterai le helpdesk";
	$msgReponse[MSG_PRISENCOMPTE] = "En saisissant votre numéro de carte de vote dans la page https://www.evote-ch.ch/ge, vous pourrez vérifiez que le Service des votations a bien enregistré votre vote";
	$msgReponse[MSG_BLOQUE] = "Désolé si votre session de vote par internet a été bloquée, vous allez devoir voter soit par correspondance, soit au local";
	$msgReponse[MSG_SVEVOTE] = "Je vous conseille de lire l'une des dernières pages (Où et quand voter?) de la brochure cantonale";
	$msgReponse[MSG_SVEDUPLICATA] = "Vous pouvez demander de l'aide au SVE http://www.ge.ch/droits-politiques/";
	$msgReponse[MSG_CHADEMANDEINFORMATION] = "Vous trouverez peut-être quelques informations sur le site web http://www.chvote.ch/";
	$msgReponse[MSG_CHASUGGESTION] = "Un pas après l'autre, nous essayons toujours de nous améliorer ;-)";
	$msgReponse[MSG_COMMENT] = "Pour voter, vous avez plusieurs options : par internet si vous êtes inscrit (https://www.evote-ch.ch/ge), par correspondance et au local. Pour le vote par internet la Chancellerie explique le processus sur son site web http://ge.ch/vote-electronique/mode-demploi";
	$msgReponse[MSG_ETRANGER_RESIDENT] = "Pour le droit de vote des personnes étrangères, vous trouverez plus d'information sur https://www.ge.ch/droits-politiques/infos-pratiques-electeurs/etrangers-residents.asp ";
	$msgReponse[MSG_DEF_VOT] = "Lors d'une votation vous pouvez exprimer vos choix, en acceptant ou en refusant l'objet soumis au vote.";
	$msgReponse[MSG_DEF_ELE] = "Lors d'une élection vous choisissez les personnes qui vont vous représenter pour légiférer et diriger votre commune, canton ou au niveau national.";
	$msgReponse[MSG_DEF_VOT_ELE] = "Lors d'une votation vous répondez à une question, tandis que lors d'une élection vous choisissez vos représentants";
	$msgReponse[MSG_DEF_IN] = "Une initiative est une proposition d'évolution légale faite par un groupe de citoyens. Le Grand-conseil peut proposer un contre-projet";
	$msgReponse[MSG_DEF_REFERENDUM] = "Lorsqu'une loi est publiée dans la feuille d'avis, vous pouvez vous opposer à son entrée en vigueur en récoltant un certain nombre de signatures de citoyens. Si le nombre de signatures récoltées est au moins égal au nombre exigé légalement, la loi devra être soumise au vote.\nSi la constitution est modifiée, on parle de référendum obligatoire, et cette modification doit obligatoirement être acceptée par le peuple, on parle de référendum obligatoire";
	$msgReponse[MSG_DEF_QUESTIONSUB] = "Lors d'une votation, la question subsidiaire est posée lorsque vous devez choisir entre une initiative et un contre-projet. Si les deux objets mentionnés précédement sont acceptés, alors vous devez dire si vous préférez l'initiative ou le contre-projet";
	$msgReponse[MSG_ERREUR_PASSION] = "C'est de vous servir au mieux!";
	$msgReponse[MSG_RESULTAT_COMMUNE] = "Pour connaître les résultats d'une commune, vous devez m'envoyer par exemple : résultats à Aire-la-Ville";
	
	$msgReponse[MSG_EMOJI_POSITIF] = "Merci!";
	$msgReponse[MSG_EMOJI_NEGATIF] = "Désolé, si je ne suis pas au top!";

	//!!!
	$msgReponse[MSG_DATE] = "La prochaine votation aura lieu le 4 mars. Vous pouvez voter par internet jusqu'au samedi 3 à 12 heures, par correspondance jusqu'au jeudi 1 et dans votre local le dimanche de la votation entre 10 et 12 heures";
	
	
	define('MSG_HELPDESK_ETAT',"Je n'ai pas de lien avec l'Etat de Genève, je ne suis qu'un robot développé par un passionné!\nSi je n'ai pas pu vous aider, je vous conseil de contacter le helpdesk de l'Etat : e-demarches@etat.ge.ch");
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"><head>
<!--[if gte mso 9]><xml>
<mso:CustomDocumentProperties>
<mso:_dlc_DocId msdt:dt="string">P2FNWD4FKVCR-473636027-12</mso:_dlc_DocId>
<mso:_dlc_DocIdItemGuid msdt:dt="string">6d38fa46-1aad-4d88-97a8-c7428da6d258</mso:_dlc_DocIdItemGuid>
<mso:_dlc_DocIdUrl msdt:dt="string">https://ecd.ge.ch/intra/gouvernance/ot/livinglab/chatbot/chatbot201801/_layouts/15/DocIdRedir.aspx?ID=P2FNWD4FKVCR-473636027-12, P2FNWD4FKVCR-473636027-12</mso:_dlc_DocIdUrl>
</mso:CustomDocumentProperties>
</xml><![endif]-->
</head>