<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51KADxqSAw09MOXaWMueXtm9kPk2YpqNvantIOWWK18JaEkWi1F7StwfZFdUZcNUAVd1XlBvSoMhUi6KjjffGUX0E00uZa23E90";

$secretKey="sk_test_51KADxqSAw09MOXaWWOScmLRMhV5R1UMA3INGT7TKD8naaky6J11umofmzFf8KeX3lLDNw8RAtnh6qZodCmKgWlci00azbctgla";

\Stripe\Stripe::setApiKey($secretKey);
?>