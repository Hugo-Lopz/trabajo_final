<?php

namespace App\Controller\Admin;

use App\Entity\Descuento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DescuentoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Descuento::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            NumberField::new('porcentaje_descuento'),
            DateField::new('fecha_inicio'),
            DateField::new('fecha_finalizacion')
        ];
    }
}
