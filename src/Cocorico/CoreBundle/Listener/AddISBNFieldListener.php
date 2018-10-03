<?php
namespace Cocorico\CoreBundle\Listener;

use Cocorico\CoreBundle\Event\ListingFormBuilderEvent;
use Cocorico\CoreBundle\Event\ListingFormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AddISBNFieldListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            ListingFormEvents::LISTING_NEW_FORM_BUILD => 'addISBN',
        );
    }

    public function addISBN(ListingFormBuilderEvent $event)
    {
        $event->getFormBuilder()
            ->add(
                'isbn',
                TextType::class,
                [
                    'label' =>'ISBN'
                ]
            );

    }
}