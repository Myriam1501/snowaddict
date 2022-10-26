<?php

final class HomepageController {

<<<<<<< HEAD
    function home(string $name): string {
        return 'Je suis sur la page d\'accueil du contrôleur homepage';
=======
    function home(): void {
        require_once('views/pages/homepage.php');
>>>>>>> 3e7c21d254f16130744f06fae0a0021643cc3a57
    }
}
