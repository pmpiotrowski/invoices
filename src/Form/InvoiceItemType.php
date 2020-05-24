<?php

namespace App\Form;

use App\Entity\Invoice;
use App\Entity\InvoiceItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => false])
            ->add('amount', NumberType::class, [
                'label' => false,
                'html5' => true,
                'attr' => [
                    'class' => 'amount'
                ]
            ])
            ->add('unit', ChoiceType::class, [
                'label' => false,
                'choices'  => [
                    'szt' => 'szt',
                    'godz' => 'godz',
                    'dni' => 'dni',
                    'mc' => 'mc',
                    'km' => 'km',
                    'm2' => 'm2',
                    'kg' => 'kg'
                ]
            ])
            ->add('vat', ChoiceType::class, [
                'label' => false,
                'choices'  => [
                    '23' => '23',
                    '8' => '8',
                    '5' => '5',
                    '0' => '0'
                ],
                'attr' => [
                    'class' => 'vat',
                    'step' => '0.01'
                ]
            ])
            ->add('price_netto', NumberType::class, [
                'label' => false,
                'html5' => true,
                'scale' => 2,
                'attr' => [
                    'class' => 'price_netto',
                    'step' => '0.01'
                ]
                ])
            ->add('price_brutto', NumberType::class, [
                'label' => false,
                'html5' => true,
                'scale' => 2,
                'attr' => [
                    'class' => 'price_brutto',
                    'step' => '0.01'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InvoiceItem::class,
        ]);
    }
}
