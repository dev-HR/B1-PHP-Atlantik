<?php

	$liaisons = array(
		
		"Belle-Ile-en-Mer:15:8.3:Quiberon:Le Palais" ,
		"Belle-Ile-en-Mer:24:9:Le Palais:Quiberon" ,
		"Belle-Ile-en-Mer:16:8:Quiberon:Sauzon" ,
		"Belle-Ile-en-Mer:17:7.9:Sauzon:Quiberon" ,
		"Belle-Ile-en-Mer:19:23.7:Vannes:Le Palais" ,
		"Belle-Ile-en-Mer:11:25.1:Le Palais:Vannes" ,
		"Houat:25:8.8:Quiberon:Port St Gildas" ,
		"Houat:30:8.8:Port St Gildas:Quiberon",
		"Ile de Groix:21:7.7:Lorient:Port-Tudy" ,
		"Ile de Groix:22:7.4:Port-Tudy:Lorient"
	) ;
	
	// Code présenté dans la présentation du TD
	/*
	print_r( $liaisons ) ;
	
	$uneLiaison = "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon" ;
	$infosLiaison = explode( ":" , $uneLiaison ) ;
	print_r( $infosLiaison ) ;
	
	$uneLiaison = "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon" ;
	
	list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":" , $uneLiaison ) ;
	
	echo "Port de départ : " , $portDepart , "\n" ;
	
	*/
	
	
/* Exercice 1 */
	
	echo "Exercice 1\n\n" ;
	
	$codesLiaisons = array() ;
	
	// Votre code ici
	
	
	echo "Liste des codes des liaisons :\n\n" ;
	foreach( $codesLiaisons as $unCodeLiaison ){
		echo "\t- " , $unCodeLiaison , "\n" ;
	}
	
	
/* Exercice 2 */
	
	echo "Exercice 2\n\n" ;
	$codesLiaisonsHouat = array() ;
	
	// Votre code ici
	
	
	echo "Liste des codes des liaisons du secteur d'Houat :\n\n" ;
	foreach( $codesLiaisonsHouat as $unCodeLiaisonHouat ){
		echo "\t- " , $unCodeLiaisonHouat , "\n" ;
	}
	
	
	
/* Exercice 3 */
	
	echo "Exercice 3\n\n" ;
	$codesLiaisonsQuiberon = array() ;
	
	// Votre code ici
	
	
	echo "Liste des codes des liaisons qui desservent le port de Quiberon :\n\n" ;
	foreach( $codesLiaisonsQuiberon as $unCodeLiaisonQuiberon ){
		echo "\t- " , $unCodeLiaisonQuiberon , "\n" ;
	}
	
	
	
/* Exercice 4 */
	
	echo "Exercice 4\n\n" ;
	$ports = array() ;
	
	// Votre code ici
	
	
	echo "Liste des ports :\n\n" ;
	foreach( $ports as $unPort ){
		echo "\t- " , $unPort , "\n" ;
	}




/* Exercice 5 */
	
	echo "Exercice 5\n\n" ;
	
	// Votre code ici
	
	
	print_r( $liaisons ) ;
	
	

?>
