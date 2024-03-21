<?php

namespace App\Controller\Admin;

use App\Entity\Equipo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EquipoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Equipo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nombre_equipo'),
        ];
    }
}
