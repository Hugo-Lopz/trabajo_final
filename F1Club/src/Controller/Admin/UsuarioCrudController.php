<?php

namespace App\Controller\Admin;

use App\Entity\Usuario;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsuarioCrudController extends AbstractCrudController
{
    private $passwordHasher;

    // Inyecta el servicio UserPasswordHasherInterface para cifrar la contraseña
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public static function getEntityFqcn(): string
    {
        return Usuario::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nombre'),
            TextField::new('apellidos'),
            TextField::new('email'),
            TextField::new('password') // Este es el campo de contraseña
                ->setFormType(PasswordType::class), // Esto establece el tipo de campo como contraseña
            ChoiceField::new('roles')
                ->allowMultipleChoices()
                ->setChoices([
                    /*Se añaden todos los roles para que sean visibles en la tabla y ser seleccionados
                    a la hora de crear un usuario, rol user no podrá ser seleccionado ya que los propios usuarios se registran*/
                    'Rol manager' => 'ROLE_MANAGER',
                    'Rol admin' => 'ROLE_ADMIN',
                    'Rol User' => 'ROLE_USER'
                ])
                ->setFormTypeOptions(['choices' => [
                    'Rol manager' => 'ROLE_MANAGER',
                    'Rol admin' => 'ROLE_ADMIN',
                ]]),
            NumberField::new('codigo_postal')->hideOnForm(),
            TextField::new('calle')->hideOnForm(),
            NumberField::new('dinero_gastado')->hideOnForm(),
        ];
    }

     // Método para cifrar la contraseña
     private function hashPassword($entityInstance): void
     {
         if (!$entityInstance instanceof Usuario) {
             return;
         }
 
         $plainPassword = $entityInstance->getPassword();
         if ($plainPassword !== null) {
             $hashedPassword = $this->passwordHasher->hashPassword($entityInstance, $plainPassword);
             $entityInstance->setPassword($hashedPassword);
         }
     }

    // Este método se llama antes de que se persista la entidad en la base de datos
    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $this->hashPassword($entityInstance);
        parent::persistEntity($entityManager, $entityInstance);
    }
}
