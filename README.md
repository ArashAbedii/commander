# PHP CLASS TO RUNNING COMMANDS IN BACKGROUND

### INSTALLITATIN

open terminul in your project root directory and then run this command:

```
composer require arashabedii/commander
```

example:

```PHP
require_once './vendor/autoload.php';

use ArashAbedii\Commander;

//run command in background
echo Commander::runInBg("php test.php");
```