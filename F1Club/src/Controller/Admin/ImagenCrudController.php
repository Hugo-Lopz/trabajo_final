<?php

namespace App\Controller\Admin;

use App\Entity\Imagen;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ImagenCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Imagen::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('url_imagen'),
            AssociationField::new('producto')->autocomplete()
        ];
    }
}
