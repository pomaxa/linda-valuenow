<?php

namespace App\Form;

use App\Entity\FreeQuoteRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class FreeQuoteRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //TODO: add eirCOde specific validation
        $builder->add('eirCode', TextType::class, [
                    'required' => true,
                    'constraints' => [new Length(['min' => 1])],
                ])
                ->add('address', TextType::class, [
                    'required' => true,
                    'constraints' => [new Length(['min' => 1])],
                ])
                ->add('bedroomCount', IntegerType::class, [
                    'required' => true,
                ])
                //TODO: should be an Enum
                ->add('requestReason', TextType::class, [
                    'required' => true,
                    'constraints' => [new Length(['min' => 1])],
                ])
                ->add('fullName', TextType::class, [
                    'required' => true,
                    'constraints' => [new Length(['min' => 1])],
                ])
                //TODO: add phone validation
                ->add('phone', TextType::class, [
                    'required' => true,
                    'constraints' => [new Length(['min' => 1])],
                ])
                ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FreeQuoteRequest::class,
        ]);
    }
}
