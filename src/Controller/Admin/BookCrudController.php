<?php

namespace App\Controller\Admin;

use App\Entity\Book;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BookCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Book::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Title'),
            TextareaField::new('summary', 'Summary'),
            AssociationField::new('author', 'Author'),
            IntegerField::new('publicationYear', 'Publication Year')->setSortable(true),
            BooleanField::new('available', 'Available'),
            TextField::new('description'),
            ImageField::new('cover_image')
                ->setUploadDir('/images/books')
                ->setBasePath('/images/books')
        ];
    }
}