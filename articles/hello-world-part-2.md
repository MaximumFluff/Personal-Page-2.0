Who amongst us has not felt the urge to give in to the voices and discard a long-running project in favour of a full re-write? Say hello to homepage 2.0, a full reimplementation in PHP!

Coding in PHP has always held interest to me since first interacting with it in a summer course during my first year of university. Keeping an eye on the rapid improvements the language was making with version 8 and beyond, I felt it time to finally embark on a hobby project utilizing it.

I had no significant problems getting to grips with the langauge aside from some function name wierdness (a lot of underscores!) and the fact that `array_find` was a global function that was only added quite recently and thus had problems finding it in a google search.

The structure of the project is mostly the same, a `templates` folder holds all the Plates templating files, `artices` contains the blog post markdown. There is a `configuration.json` file that contains article metadata, resume structure and a list of skills. This is parsed and passed into the relevant template files.

`index.php` has a simple router that handles all requests:

```php
switch ($request) {
  case '/':
    echo $templates->render('index');
    break;
  case '/resume':
    echo $templates->render('resume');
    break;
  // etc....
  default:
    http_response_code(404);
    echo $templates->render('404');
    break;
}
```

Now that my page is in a significantly more maintainable state, I finally feel ready to move onto the next steps of this project: properly hosting it with a nicer domain name, either self-hosted on my personal server or on a external hosting platform.

I can see myself going further with this language, as I found the experience quite comfy (for lack of a better word) and what better choice for web programming than a language that was literally built for the job, making better and better strides with each new version?
