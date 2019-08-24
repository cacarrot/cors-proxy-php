<?
header('Access-Control-Allow-Origin:*');

$url = htmlspecialchars($_GET["url"]);

if ($url === "") {
    echo "";
}

$options = array('http' => array('header' => 'User-Agent: Entrylist crawler'));
$context = stream_context_create($options);
$res = file_get_contents($url, false, $context);

$type = htmlspecialchars($_GET["type"]);
switch ($type) {
    case 'xml':
        header("Content-Type: text/xml; charset=UTF-8");
        break;
    case 'json':
        header("Content-Type: application/json; charset=UTF-8");
        break;
    case 'plain':
    case 'text':
        header("Content-Type: text/plain; charset=UTF-8");
        break;
    case 'html':
        header("Content-Type: text/html; charset=UTF-8");
        break;
    default:
        break;
}

echo $res;
