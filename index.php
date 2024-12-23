<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';
// Create new Plates instance
$templates = new League\Plates\Engine('templates');
$Parsedown = new ParsedownExtra();
// Get URL of http request
$request = $_SERVER['REQUEST_URI'];
// Parse JSON FIle
$configuration = file_get_contents('configuration.json');

if ($configuration === false) {
  http_response_code(500);
  echo $templates->render('500');
  exit();
}

$data = json_decode($configuration);

// Route switcher
switch ($request) {
  case '/':
    echo $templates->render('index');
    break;
  case '/resume':
    echo $templates->render('resume', ['resume' => $data->resume, 'skills' => $data->skills]);
    break;
  case '/blog':
    echo $templates->render('blog', ['articles' => $data->articles]);
    break;
  case str_contains($request, '/blog/'):
    $article_metadata;
    // TODO: Use array_find when upgrading to PHP >= 8.4.0
    foreach ($data->articles as $article) {
      if ($article->file_name == basename($request)) {
        $article_metadata = $article;
      }
    }
    $article = file_get_contents('articles/' . basename($request) . '.md');
    echo $templates->render('article', ['body' => $Parsedown->text($article), 'metadata' => $article_metadata]);
    break;
  default:
    // If route not found, return 404
    http_response_code(404);
    echo $templates->render('404');
    break;
}
