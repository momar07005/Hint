<?php

namespace AppBundle\Security\Core\User;

use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseFOSUBProvider;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MyFOSUBUserProvider extends BaseFOSUBProvider
{
    /**
     * {@inheritDoc}
     */
    public function connect(UserInterface $user, UserResponseInterface $response)
    {
        // get property from provider configuration by provider name
        // , it will return `facebook_id` in that case (see service definition below)
        $property = $this->getProperty($response);
        $username = $response->getUsername(); // get the unique user identifier

        //we "disconnect" previously connected users
        $existingUser = $this->userManager->findUserBy(array($property => $email));
        if (null !== $existingUser) {
            // set current user id and token to null for disconnect
            // ...

            $this->userManager->updateUser($existingUser);
        }
        // we connect current user, set current user id and token
        // ...
        $this->userManager->updateUser($user);
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $userEmail = $response->getEmail();
        $user = $this->userManager->findUserByEmail($userEmail);

        // if null just create new user and set it properties
        if (null === $user) {
            $username = $response->getUsername();
            $user = new User();
            $user->setPrenom($response->getFirstName());
            $user->setNom($response->getLastName());
            $user->setEmail($response->getEmail());
            $user->setEnabled(1);
            //Préciser à l'utilisateur que son username d'ici est son addresse mail. Toutefois tenir en compte
            //de ne jamais faire confiance à l'utilisateur. S'il veut toutefois récupérer son compte ou qu'il change 
            //d'adresse mail sur facebook par exemple, on lui envoi un mail de récupération puis on élimine son FacebookID
            //Son mot de passe sera alors changé par lui et possibilité aussi de changer son username
            $user->setUsername($response->getEmail());
            $user->setPlainPassword(genererRandomString());

            $serviceName = $response->getResourceOwner()->getName();
            $serviceName = $response->getResourceOwner()->getName();
            $setter = 'set' . ucfirst($serviceName) . 'AccessToken';
            $setter1 = 'set' . ucfirst($serviceName). 'ID';
            $user->$setter($response->getAccessToken());
            $user->$setter1($username);
            // ... save user to database
            $this->userManager->updateUser($user);
            return $user;
        }
        // else update access token of existing user
        $serviceName = $response->getResourceOwner()->getName();
        $setter = 'set' . ucfirst($serviceName) . 'AccessToken';
        $setter1 = 'set' . ucfirst($serviceName). 'ID';
        $user->$setter1($response->getUsername());
        $user->$setter($response->getAccessToken());//update access token
        $this->userManager->updateUser($user);
        return $user;
    }
    
}

function genererRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) 
    {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}