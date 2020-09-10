<?

session_start();

	/* Establecemos que las paginas no pueden ser cacheadas */

/*	header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");*/

$identificador = mysqli_connect('localhost', 'laborali_root', '43ds fs*a.12', 'laborali_casos');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



$identificador->set_charset("utf8");


function logOut() {

		session_unset();
		session_destroy();
		session_start();
		session_regenerate_id(true);
		header("location://laboralink.cl");

}

?>
