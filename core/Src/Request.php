<?php

namespace Src;

use Error;
use mysql_xdevapi\Exception;

class Request
{
    protected array $body;
    public string $method;
    public array $headers;

    public function __construct()
    {
        $this->body = $_REQUEST;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->headers = getallheaders() ?? [];
    }

    public function all(): array
    {
        return $this->body + $this->files();
    }

    public function set($field, $value):void
    {
        $this->body[$field] = $value;
    }

    public function get($field)
    {
        return $this->body[$field];
    }

    public function files(): array
    {
        return $_FILES;
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->body)) {
            return $this->body[$key];
        }
        throw new Error('Accessing a non-existent property');
    }

    public function foto(): self
    {
        $uploadDirectory = 'images/';
        if (isset($this->files()['avatar']) && $this->files()['avatar']['error'] === UPLOAD_ERR_OK) {
            $avatar = $this->files()['avatar'];
            $filename = $uploadDirectory . basename($avatar['name']);
            if (move_uploaded_file($avatar['tmp_name'], $filename)) {
                $this->set('avatar', $filename);
                return $this;
            } else {
                throw new Error("Ошибка загрузки файла", 500);
            }
        }
    }
}
