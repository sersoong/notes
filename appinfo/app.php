<?php

use OCA\Notes\Application;

var_dump("hello");

$app = \OC::$server->query(Application::class);
$app->register();

$policy = new OCP\AppFramework\Http\ContentSecurityPolicy();
$policy->addAllowedScriptDomain('cdn.jsdelivr.net');
$policy->addAllowedStyleDomain('cdn.jsdelivr.net');
$policy->addAllowedFontDomain('cdn.jsdelivr.net');
$policy->addAllowedImageDomain('cdn.jsdelivr.net');
$policy->addAllowedConnectDomain('cdn.jsdelivr.net');
$policy->addAllowedMediaDomain('cdn.jsdelivr.net');
$policy->addAllowedObjectDomain('cdn.jsdelivr.net');
$policy->addAllowedFrameDomain('cdn.jsdelivr.net');
$policy->addAllowedChildSrcDomain('cdn.jsdelivr.net');
$policy->addAllowedFrameAncestorDomain('cdn.jsdelivr.net');
$policy->addAllowedWorkerSrcDomain('cdn.jsdelivr.net');
\OC::$server->getContentSecurityPolicyManager()->addDefaultPolicy($policy);