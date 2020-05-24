<?php

namespace App\Form;

use App\Entity\Invoice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Faktura' => 'Faktura',
                    'Faktura proforma' => 'Faktura proforma'
                ]
            ])
            ->add('number', TextType::class, [
                'label' => 'Numer',
                'attr' => array(
                    'readonly' => true,
                ),])
            ->add('invoicing_date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Data wystawienia'
            ])
            ->add('invoicing_place', TextType::class, [
                'label' => 'Miejsce wystawienia',
                'required' => false,
            ])
            ->add('sale_date', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Data sprzedaży'
            ])
            ->add('seller_nip', TextType::class, [
                'label' => 'NIP',
                'required' => false])
            ->add('seller_name', TextType::class, [
                'label' => 'Nazwa sprzedawcy'])
            ->add('seller_street', TextType::class, [
                'label' => 'Ulica i numer',
                'required' => false])
            ->add('seller_postal_code', TextType::class, [
                'label' => 'Kod pocztowy',
                'required' => false])
            ->add('seller_city', TextType::class, [
                'label' => 'Miasto',
                'required' => false])
            ->add('seller_account_bank_number', TextType::class, [
                'label' => 'Numer konta bankowego',
                'required' => false])
            ->add('seller_bank', TextType::class, [
                'label' => 'Bank',
                'required' => false])
            ->add('buyer_type', ChoiceType::class, [
                'label' => 'Typ nabywcy',
                'choices' => [
                    'Osoba fizyczna' => 'PERSON',
                    'Firma' => 'COMPANY'
                ]
            ])
            ->add('buyer_name', TextType::class, [
                'label' => 'Nazwa'])
            ->add('buyer_nip', TextType::class, [
                'label' => 'NIP',
                'required' => false])
            ->add('buyer_street', TextType::class, ['label' => 'Ulica i numer', 'required' => false])
            ->add('buyer_postal_code', TextType::class, ['label' => 'Kod pocztowy', 'required' => false])
            ->add('buyer_city', TextType::class, ['label' => 'Miasto', 'required' => false])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Wystawiona' => 'Wystawiona',
                    'Opłacona' => 'Opłacona',
                    'Opłacona częściowo' => 'Opłacona częściowo',
                    'Wysłana' => 'Wysłana',
                ]
            ])
            ->add('amount_paid', TextType::class, ['label' => 'Kwota opłacona', 'required' => false])
            ->add('invoice_issuer', TextType::class, ['label' => 'Imie i nazwisko wystawcy', 'required' => false])
            ->add('invoice_recipient', TextType::class, ['label' => 'Imie i nazwisko odbiorcy', 'required' => false])
            ->add('currency', ChoiceType::class, [
                'label' => 'Waluta',
                'choices' => [
                    'PLN' => 'PLN'
                ]
            ])
            ->add('items', CollectionType::class, [
                'label' => false,
                'entry_type' => InvoiceItemType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false
            ])
            ->add('netto_sum', NumberType::class, [
                'label' => 'Suma netto',
                'attr' => [
                    'readonly' => true,
                    'class' => 'netto_sum',
                ]])
            ->add('vat_sum', NumberType::class, [
                'label' => 'Suma vat',
                'attr' => [
                    'readonly' => true,
                    'class' => 'vat_sum'
                ]])
            ->add('brutto_sum', NumberType::class, [
                'label' => 'Suma brutto',
                'attr' => [
                    'readonly' => true,
                    'class' => 'brutto_sum'
                ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
