<?php

namespace App\Controller\Admin;

use App\Entity\projet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class projetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return projet::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
