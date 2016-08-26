<?php

namespace Grdf\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MailBundle:Default:index.html.twig');
    }
    public function redirectionAction()
    {
        return $this->render('MailBundle:Default:formMail.html.twig');
    }
    public function sendMailAction()
    {
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST") {
            $Subject = $Request->get("Subject");
            $email = $Request->get("email");
            $message = $Request->get("message");

            $mailer = $this->container->get("mailer");
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('MailProjetMissionsGrdf@gmail.com')
                ->setPassword('jeisep2016');
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Test')
                ->setSubject($Subject)
                ->setFrom($email)//de qui
                ->setTo('MailProjetMissionsGrdf@gmail.com')//a qui
                ->setBody($message);
            $this->get('mailer')->send($message);
        }
        return $this->render('MailBundle:Default:formMail.html.twig');
    }

}
