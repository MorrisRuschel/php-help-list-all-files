<?php
//
// CONFIGURAÇÕES GERAIS
//
ini_set( 'memory_limit', '-1' );
ini_set( 'max_execution_time', 600 );


//
// CONFIGURAÇÕES DO ARQUIVO
//
$directory = 'samples/';


//
// FUNÇÃO RECURSIVA PARA PEGAR TODOS OS ARQUIVOS
//
function get_folder_contents( $directory, &$results = array() )
{
	//
	// EXECUTA A FUNÇÃO
	// 	http://php.net/manual/pt_BR/function.scandir.php
	//
	$files = scandir( $directory );


	//
	// PERCORRE O RETORNO
	//
	foreach( $files as $value )
	{
		//
		// MONTA O CAMINHO
		//
		$path = realpath( $directory . DIRECTORY_SEPARATOR . $value );


		//
		// VERIFICA SE É ARQUIVO OU DIRETÓRIO
		//
		if ( !is_dir( $path ) )
		{
			$results[] = $path;
		}
		else if ( $value != '.' && $value != '..' )
		{
			get_folder_contents( $path, $results );
			$results[] = $path;
		}
	}

	return $results;
}


//
// INICIA A APLICAÇÃO
//
var_dump( get_folder_contents( $directory ) );
