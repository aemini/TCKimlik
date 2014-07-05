<?php
class TCKimlik {

	public static function dogrula($array) {
		/*
		 * array(
		 *	'TCKimlikNo' => 'long',
		 *	'Ad' => 'string',
		 *	'Soyad' => 'string',
		 *	'DogumYili' => 'int'
		 * )
		 */
		try {
			$url = 'https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx';
			$connection = new SoapClient($url."?WSDL");
			$result = $connection->TCKimlikNoDogrula($array);

			return $result->TCKimlikNoDogrulaResult;
		} catch (Exception $e) {
			Session::flash('message', $e->faultstring);
			return false;
		}
	}

}
