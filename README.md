# README #

T.C. Kimlik Numarası doğrulama kodu.

Örnek kullanım:

$dogrula = new TCKimlik;

$vatandas = array(
	'TCKimlikNo' => 12345678901,
	'Ad' => 'Cafer',
	'Soyad' => 'Bezgetiren',
	'DogumYili' => 1900
);

boolean $dogrula->dogrula($vatandas);
