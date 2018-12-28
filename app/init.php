<?php

require_once '../vendor/autoload.php';

require_once 'database.php';

require_once 'core/App.php';

require_once 'core/Controller.php';

 //Timezone config
//date_default_timezone_set('America/La_Paz');

// SELECT cl.num_dossier, IF(pc.id = ct.pcclient_id, CONCAT(pc.prenom, ' ', pc.nom), NULL) AS nomPcclient, IF(pc.id = ct.pcclient_id, pc.id, NULL) AS idPcclient, ct.police, tc.designation AS typeContrat, us.designation AS usageContrat, CONCAT(cl.prenom, ' ', cl.nom) AS nomClient, cl.profession, cl.type_client, cl.tel, cl.email, cl.id AS idClient, IF(calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') IS NULL, 0, calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') ) AS montantEncaisse, ( ct.prime_reel - IF(calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') IS NULL, 0, calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') ) ) AS montantRestant FROM contrats ct, clients cl, contrattypes tc, usages us, pcclients pc WHERE cl.id = ct.client_id AND us.id = ct.usage_id AND tc.id = ct.type_contrat AND ( pc.id = ct.pcclient_id OR ct.pcclient_id IS NULL ) AND ct.deleted_at IS NULL AND cl.deleted_at IS NULL GROUP BY cl.id



// SELECT cl.num_dossier, ct.police, IF(pc.id = ct.pcclient_id, ct.police, CONCAT(pc.prenom, ' ', pc.nom), NULL) AS nomPcclient, IF(pc.id = ct.pcclient_id, pc.id, NULL) AS idPcclient, ct.police, tc.designation AS typeContrat, us.designation AS usageContrat, CONCAT(cl.prenom, ' ', cl.nom) AS nomClient, cl.profession, cl.type_client, cl.tel, cl.email, cl.id AS idClient, IF(calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') IS NULL, 0, calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') ) AS montantEncaisse, ( ct.prime_reel - IF(calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') IS NULL, 0, calcSumMontantEncaisse(ct.id, '2017-01-01', '2019-01-01') ) ) AS montantRestant FROM contrats ct, clients cl, contrattypes tc, usages us, pcclients pc WHERE cl.id = ct.client_id AND us.id = ct.usage_id AND tc.id = ct.type_contrat AND ( pc.id = ct.pcclient_id OR ct.pcclient_id IS NULL ) AND ct.deleted_at IS NULL AND cl.deleted_at IS NULL GROUP BY cl.id
