<?php

namespace App\Controller\Admin;

use App\Entity\Cupon;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CuponCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cupon::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('codigo_cupon'),
            NumberField::new('porcentaje_descuento'),
            DateField::new('fecha_caducidad'),
            TextField::new('descripcion')
        ];
    }
}
