<?php
// Fonctions du site

// DEBUG
function debug($var) {
    echo '<pre>';
        print_r($var);
    echo '</pre>';
}

//********************* Traitement Message **********************/

// an email address that will be in the From field of the email.
$from = '';

// an email address that will receive the email with the output of the form
$sendTo = 'flo.brown@me.com';

// subject of the email
$subject = 'Nouveau message depuis mon portfolio';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('email' => 'Email', 'message' => 'Message'); 

// message that will be displayed when everything is OK :)
$okMessage = 'Merci pour votre message. Je vous répondrai dès que possible.';

// If something goes wrong, we will display this message.
$errorMessage = 'Une erreur est survenue, veuillez réessayer.';

try
{

    if(count($_POST) == 0) throw new \Exception('Le formulaire est vide.');
            
    $emailText = "Vous avez un nouveau message depuis votre portfolio\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}