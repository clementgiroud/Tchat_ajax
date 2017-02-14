<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TchatBundle\Controller;

/**
 * Description of ChatController
 *
 * @author paul-maillard
 */
class ChatController extends Controller {

    public static function login($name, $email) {
        if (!$name || !$email) {
            throw new Exception('Remplissez tous les champs');
        }
        if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Your email is invalid.');
        }
    }

}
