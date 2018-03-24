<?php
/**
 * Created by PhpStorm.
 * User: yas
 * Date: 08/02/18
 * Time: 23:10
 */

namespace App\DataFixtures;


use App\Entity\Categorie;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager){

        $categories= array(
            array(
                'Casques', 'Decouvrez nos casques', 'casques',
            ),
            array(
                'Ecouteurs', 'Decouvrez nos ecouteurs', 'ecouteurs',
            ),
            array(
                'Baladeurs', 'Decouvrez nos baladeurs', 'baladeurs',
            ),
            array(
                'Enceintes', 'Decouvrez nos enceintes', 'enceintes',
            ),
            array(
                'Microphones', 'Decouvrez nos microphones', 'micros',
            ),
            array(
                'Multi-Effets', 'Decouvrez nos Multi-Effets', 'multi-effets',
            )
        );

        $produits= array(
            array(
                'Bose QC35', 300.66, 'description', 1, 'bose_qc35.jpg'
            ),
            array(
                'Beoplay H9', 330.66, 'description', 1, 'beoplay_h9.jpg'
            ),
            array(
                'Sony MDR 1000X', 300.66, 'description', 1, 'sony_mdr1000x.jpg'
            ),
        );

        for($i= 0; $i< count($categories); $i++){
            $categorie= new Categorie();
            if ($i== 0) $casque= $categorie;
            $categorie->setNom( $categories[$i][0]);
            $categorie->setDescription( $categories[$i][1]);
            $categorie->setSlug( $categories[$i][2]);
            $manager->persist($categorie);
        }

        $manager->flush();

        for($i= 0; $i< count($produits); $i++){
            $produit= new Produit();
            $produit->setNom( $produits[$i][0]);
            $produit->setDescription( $produits[$i][2]);
            $produit->setPrix( $produits[$i][1]);
            $produit->setImage($produits[$i][4]);
            $produit->setCategorie($casque);
            $manager->persist($produit);
        }

        $manager->flush();
    }
}