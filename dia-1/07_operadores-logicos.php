<?php
	
	// Operadores lógicos

	/**
	 *	AND
	 *	True si ambos operadores son True.
	 */
	$var = True && True; // True
	$var = True && False; // False

	/**
	 *	OR
	 *	Retorna True si cualquiera de los operandos son True.
	 */
	$var = True || True; // True
	$var = True || False; // True

	/**
	 *	XOR
	 *	Retorna True si alguno de los operandos son True, pero no ambos.
	 */
	$var = True xor True; // False
	$var = True xor False; // True

	/**
	 *	NOT
	 *	Realiza una negación de la operación a la cual se anteponga.
	 */
	$var = ! True; // False
	$var = ! False; // True

?>