<?php

namespace App\Http\Controllers\AuthFacebook;

use App\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToProvider_facebook()
    {

        return Socialite::driver('facebook')->redirect();
    }


    public function handleToProviderCallback_facebook()
    {

        $socialUser = Socialite::driver('facebook')->user();


        // Получение информации с соцсети

        $data = [
            'facebook_id' => $socialUser->getId(),
            'name' => substr($socialUser->name),
            'email' => $socialUser->getemail()
        ];

        //Получение ползователя по facebook_id с такими данными из базы
        $user = User::where('facebook_id', $data['facebook_id'])->first();
        // Если такого пользователя нету
        if (is_null($user)) {

            //Получение пользователя с социальным email
            $user = User::where('email', $data['email'])->whereNotNull('email')->first();

            if (!is_null($user)) {

                $user->facebook_id = $data['facebook_id'];
                $user->update();

            } else {
                //Создать нового пользователя
                $user = new User($data);
                $user->save();

                //Создание папок для файлов пользователя
                $this->createUserFileSystem($user->id);

//                //Изображение аватарки для пользователя
//                $avatarPath = '/user/' . implode('/', User::generateUserFolders($user->id)) . '/photos/avatar/avatar.jpg';
//                $avatar = Image::make($socialUser->getAvatar());
//                User::saveAvatar($avatar, $avatarPath);
//                $user->avatar_url = $avatarPath;
//                $user->update();
            }
        }



        //Вход на сайт
        Auth::login($user,true);

        //Перенаправление

        return redirect($this->redirectPath());
    }



}
