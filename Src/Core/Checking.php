<?php

namespace Src\Core;

use Src\Model\Model;

class Checking
{
    public function __construct(
        protected array $newclean
    ) {
    }

    public function clean(array $posts = [])
    {
        $clean = [];
        foreach ($posts as $post => $value) {
            $clean[] = htmlspecialchars(trim($value));
        }
        $this->setNewclean($clean);
    }
    public function validateEmail($email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function passwordConfirm($password,  $password_confirm): bool
    {
        /**Doit être un minimum de 8 caractères
            Doit contenir au moins 1 chiffre
            Doit contenir au moins un caractère majuscule
            Doit contenir au moins un caractère minuscule
         * 
         */
        if ($password === $password_confirm) {


            return true;
        } else {

            return false;
        }
    }
    public function unique($model, $email)
    {

        $items = $model->findAll();
        foreach ($items as $item => $value) {
            if ($value === $email) {
                return true;
            }
        }
    }

    /**
     * Get the value of newclean
     */
    public function getNewclean(): array
    {
        return $this->newclean;
    }

    /**
     * Set the value of newclean
     */
    public function setNewclean(array $newclean): self
    {
        $this->newclean = $newclean;

        return $this;
    }
}
