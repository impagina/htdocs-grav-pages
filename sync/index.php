<?php

// https://gist.github.com/milo/daed6e958ea534e4eba3 / github-webhook-handler.php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$hook_secret = file_get_contents('secret.txt');
print(">".trim($hook_secret)."<");

if (!isset($_SERVER['HTTP_X_HUB_SIGNATURE'])) {
	throw new \Exception("HTTP header 'X-Hub-Signature' is missing.");
}

list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + array('', '');

$raw_post = file_get_contents('php://input');
if (hash_equals($hash, hash_hmac($algo, $raw_post, $hook_secret))) {
	throw new \Exception('Hook secret does not match.');
}

$json = $rawPost ?: file_get_contents('php://input');

$payload = json_decode($json);

// shell_exec('cd  user/pages/ && git reset --hard HEAD && git pull' );

