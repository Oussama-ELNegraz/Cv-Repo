<?php

function lang($phrase) {

    static $lang = array(
                // Navbar Links
                'menu' => 'menu',
                'chLang' => 'change language',
                'About' => 'About us',
                'comp' => 'Skills',
                'pro' => 'Projects',
                'cara' => 'Characteristics',
                'cont' => 'Contact',
                'L1' => 'English',
                'L2' => 'French',
                'L3' => 'Arabic',
                                            
                // About us
                
                'paragraph' => "First my name is Oussama El Negraz I live in Tetouan Morocco.
                                                 I am 18 years old and I study in Ensa Tetouan.
                                                 I hope you like my website
                                                 and I prefer if you give me your opinion on my website and the faults that
                                                 I did",
                'Language' => 'Language',
                 'Lang_para' => "I have three languages to speak, read and write",
                'Language_1' => 'English',
                'Language_2' => 'Francais',
                'Language_3' => 'Arabic',
                'Loisirs' => 'Leisure',
                'Loisirs-p' => "I like computers and especially programming and electronics",
            // Features

            'f1' => 'Front end developer',
            'f1-p' => 'We can do inchhaalah every thing you want',
            'f2' => 'Back end developer',
            'f2-p' => 'We can do inchhaalah every thing you want',
            'f3' => 'SQL Databsases',
            'f3-p' => 'We can do inchhaalah every thing you want',
            'f4' => 'Hosting',
            'f4-p' => 'We can do inchhaalah every thing you want',
            'f5' => 'SEO',
            'f5-p' => 'We can do inchhaalah every thing you want',
            'f6' => 'C console Application',
            'f6-p' => 'We can do inchhaalah every thing you want',
            
            // Contact Us
            
            'i1' => 'Your Name',
             'i2' => 'Your Phone [0-9] {10}',
             'i3' => 'Your Email',
             'i4' => 'Subject',
             'i5' => 'Your Message',
             'b' => 'Send',
            '' => '',
			'' => '',
			'' => '',
			'' => '',
			'' => ''
			);

            return $lang[$phrase];

	}