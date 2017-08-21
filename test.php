<?php
/**
 * Created by PhpStorm.
 * User: shaileshyadav
 * Date: 8/19/17
 * Time: 7:01 PM
 */

require_once 'src/VedicRishiClient.php';

$userId = "Type Your User Id";
$apiKey = "Type Your ApI Key";



// make some dummy data in order to call vedic rishi api
$data = array(
    'name' => "Ajeet",
    'gender' =>'male',
    'day' => 05,
    'month' => 8,
    'year' => 1999,
    'hour' => 23,
    'min' => 3,
    'lat' => 19.07283,
    'lon' => 72.88261,
    'language' => 'hi',
    'tzone' => 5.5,
    'place' => 'Mumbai IN',
    'chart_style'=> 'NORTH_INDIAN',
    'footer_link'=> 'astrologyapi.com',
    'logo_url'=> 'logo_url',
    'company_name'=> 'Vedic Rishi Astro Solutions Pvt. Ltd.',
    'company_info'=> 'Your Company Info',
    'domain_url'=> 'https://www.astrologyapi.com',
    'company_email'=> 'mail@astrologyapi.com',
    'company_landline'=> '+91- 221232 22',
    'company_mobile'=> '+91 1212 1212 12'
);

// instantiate VedicRishiClient class
$vedicRishi = new VedicRishiClient($userId, $apiKey);
$responseData = $vedicRishi->getPdfresponse($data);
$url =json_decode($responseData);
?>

<?php
if($url ->{'status'} == true){
    ?>
<script type="text/javascript">
    window.location.href = "<?php print $url->{'pdf_url'};?>";
</script>
    <?php
}
?>
