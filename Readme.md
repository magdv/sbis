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
$authApi = $factory->getAuth();

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
$contractor = $factory->getContractor();

$request = new GetInfoRequest();
$request->params = new GetInfoParams();
$request->params->memberParam = new MemberParam();
$request->params->memberParam->ul = new UlMember();
$request->params->memberParam->ul->inn = '7601000985';
$request->params->memberParam->ul->kpp = '760601001';
$request->params->memberParam->ul->name = 'СК Премьер, ОАО';

// СБИС.ИнформацияОКонтрагенте
$response = $contractor->getInfo($request);

if ($response->isOk()) {
    echo $response->result->member->inn
}

//результат
7601000985

```

## Сделаны и протестированы методы

- `СБИС.Аутентифицировать`
- `СБИС.Выход`
- `СБИС.ИнформацияОКонтрагенте`
- `СБИС.СБИС.ЗаписатьДокумент`
