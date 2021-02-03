<?php

function lang($phrase) {

    static $lang = array(
                // Navbar Links
            'menu' => 'menu',
            'chLang' => 'changer de langue',
			'About' 	=> 'À propos de nous',
			'comp' 	=> 'Compétences',
			'pro' 		=> 'Projects',
			'cara' 		=> 'Caractéristiques',
            'cont'		=> 'Contact',
            'L1' => 'Anglais',
			'L2' => 'Francais',
			'L3' => 'Arabe',            
            // About us

			'paragraph' 	=> "D'abord je m'appelle Oussama El Negraz j'habite à Tetouan Maroc.
                                j'ai 18 ans et j'étudie en ensa Tetouan.
                                j'éspere que vous aimez mon site web
                                et je préfere si vous me donnez votre  avis sur mon site web et les fautes que 
                                j'ai fait",
            'Language' 			=> 'Langue',
            'Lang_para' => "j'ai trois langue parler , lire et ecrire",
			'Language_1' => 'Anglais',
			'Language_2' => 'Francais',
			'Language_3' => 'Arabe',
			'Loisirs' => 'Loisirs',
			'Loisirs-p' => "j'aime informatique et surtout la programmation et l'électronique",

            // Features

            'f1' => 'Développeur front-end',
            'f1-p' => 'Nous pouvons faire inchhaalah tout ce que vous voulez',
            'f2' => 'Développeur back-end',
            'f2-p' => 'Nous pouvons faire inchhaalah tout ce que vous voulez',
            'f3' => 'Bases de données SQL',
            'f3-p' => 'Nous pouvons faire inchhaalah tout ce que vous voulez',
            'f4' => 'Hébergement',
            'f4-p' => 'Nous pouvons faire inchhaalah tout ce que vous voulez',
            'f5' => 'SEO',
            'f5-p' => 'Nous pouvons faire inchhaalah tout ce que vous voulez',
            'f6' => 'Application console C',
            'f6-p' => 'Nous pouvons faire inchhaalah tout ce que vous voulez',
            
            // Contact Us
            
            'i1' => 'Votre nom',
            'i2' => 'Votre téléphone [0-9] {10}',
            'i3' => 'Votre e-mail',
            'i4' => 'Sujet',
            'i5' => 'Votre message',
            'b' => 'Envoyer',
            '' => '',
			'' => '',
			'' => '',
			'' => '',
			'' => ''
			);

            return $lang[$phrase];

	}