<?php

namespace Controller;

use Model\Staff;
use Model\User;
use Src\Request;
use Model\Post;
use Src\View;
use Src\Auth\Auth;
use function React\Promise\all;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function home(): string
    {
        if (Auth::user()->roleID == 1){
            return new View('site.addEmployee');
        }
        else {
            return new View('site.staffAdd');
        }
    }

    public function choose(): string {
        return new View('site.addRoleEmployee');
    }

    public function staff(): string {
        return new View('site.staffAdd');
    }

    public function division(): string {
        return new View('site.humanResources');
    }

    public function employee(): string {
        return new View('site.listEmployee');
    }

    public function attach(): string {
        return new View('site.attach');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/home');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/home');
    }

}
