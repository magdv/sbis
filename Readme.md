## Клиент API Sbis.

---------------------------

# Внимание!!!

## Библиотека пока активно редактируется и могут быть несовместимые изменения. Учтите этот момент.

```php
Надо сделать свой локальный класс для передачи настроек

declare(strict_types=1);

use GuzzleHttp\Client;
use MagDv\Sbis\ClientConfig;
use Psr\Http\Client\ClientInterface;

class LocalConfig extends ClientConfig
{
    public function getCachePath(): ?string
    {
        return null;
    }

    public function getIsDebug(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return getenv(ConfigNames::URL);
    }

    public function getClient(): ClientInterface
    {
        return new Client(
            [
                'debug' => true,
            ]
        );
    }
}
// пример авторизации
        
// Настройка запроса
$request = new AuthRequest();
$param = new AuthParam();
$param->login = (string)getenv('LOGIN');
$param->password = (string)getenv('PASSWORD');

$params = new AuthParams();
$params->param = $param;

$request->params = $params;

$factory = new \MagDv\Sbis\SbisFactory(new LocalConfig());
$authApi = $factory->getAuthApi();

$response = $authApi->auth($request);

// Текущий код ответа
$response->statusCode;

// Проверка, что удачный запрос
if ($response->isOk()) {
// ID СЕССИИ
    $sessionId = $response->result;
}

// Проверка статуса и вывод ошибки
if (!$response->isOk()) {
 echo $response->error;
}

// Устанавливаем токен
$factory->setSessionId($sessionId);

// Тут уже с токеном начинаем использовать
$factory->.....
```

## Сделаны и протестированы методы

- `СБИС.Аутентифицировать`
- `СБИС.Выход`
