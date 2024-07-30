<?php


  $site_domain = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
/*
  echo "<br>";
  $siteName = parse_url($site_domain);
  echo $siteName['host'];*/
 
?>
<div id="policy_page_content"></div>
    
<script>
var policy_container = document.querySelector("#policy_page_content");
var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");
var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow'
};


<?php

$address = urlencode(get_location('street_address'));
$city = urlencode(get_location('city'));
$state = urlencode(get_location('state'));
$zip = urlencode(get_location('zip'));
$email = urlencode(get_theme_mod('email_address'));

if(get_field('select-policy-page') == 48):?>
fetch("https://policies.ekwa.com/wp-json/ws/v1/policy_page?id=<?php echo get_field('select-policy-page');?>&bussiness_name=<?php echo get_theme_mod('practise_name');?>&phone=<?php echo get_theme_mod('call_tracking_number');?>&country=<?php echo  get_theme_mod('country');?>&domain=<?php echo $site_domain;?>&address=<?php echo $address;?>&city=<?php echo $city;?>&state=<?php echo $state;?>&zip=<?php echo $zip;?>&email=<?php echo $email;?>")
<?php else:?>
fetch("https://policies.ekwa.com/wp-json/ws/v1/policy_page?id=<?php echo get_field('select-policy-page');?>&bussiness_name=<?php echo get_theme_mod('practise_name');?>&phone=<?php echo get_theme_mod('call_tracking_number');?>&country=<?php echo  get_theme_mod('country');?>&domain=<?php echo $site_domain;?>&address=<?php echo $address;?>&city=<?php echo $city;?>&state=<?php echo $state;?>&zip=<?php echo $zip;?>&email=<?php echo $email;?>")
<?php endif;?>
 
  .then(response => response.text())
  .then(result => policy_container.innerHTML = JSON.parse(result))
  .catch(error => console.log('error', error));
  </script>