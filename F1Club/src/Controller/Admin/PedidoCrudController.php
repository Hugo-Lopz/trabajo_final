<?php

namespace App\Controller\Admin;

use App\Entity\Pedido;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PedidoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pedido::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            DateField::new('fecha_pedido')->hideOnForm(),
            DateField::new('fecha_envio')->hideOnForm(),
            TextField::new('estado')->hideOnForm(),
            NumberField::new('coste_total')->hideOnForm(),
            AssociationField::new('usuario')->hideOnForm(),
        ];
    }
}
