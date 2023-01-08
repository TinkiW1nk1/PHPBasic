<?php

namespace Core\orm;
use PDO;
class DbConector
{
    private array $conf;

    public function __construct()
    {
        $this->getConfig();
    }

    public function connect(): PDO
    {
        try {
            return new PDO($this->getDsn(), $this->getLogin(), $this->getPass());
        }catch (\Throwable $th) {
            throw $th;
        }
    }

    private function getConfig(): void
    {
        $global = include dirname(__DIR__) . "../../conf/conf.php";
        $this->conf = $global['db'];
    }

    private function getDsn(): string
    {
        $driver = $this->conf['driver'] ?? null;
        $host = $this->conf['host'] ?? null;
        $base = $this->conf['base'] ?? null;
        if(!is_null($driver) && !is_null($host) && !is_null($base)){
            return "$driver:host=$host;dbname=$base";
        }
        throw new \Exception('DSN Error');
    }

    private function getLogin(): string
    {
        $login = !empty($this->conf['login']) ? $this->conf['login'] : null;
        if(!is_null($login)){
            return $login;
        }
        throw new \Exception('login Error');
    }
    private function getPass(): string
    {
        $pass = !empty($this->conf['pass']) ? $this->conf['pass'] : '';
        return $pass;
    }

}