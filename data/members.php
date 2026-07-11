<?php
// Central "database" of members. In a real app this would come from
// a database table, but the assignment calls for a PHP array.
// Each project image includes explicit w/h so member.php can compute
// CSS Grid masonry row-spans server-side (no JavaScript, no layout shift).
$members = [
    [
        'id' => 1,
        'name' => 'Bunkie',
        'discipline' => 'Creative Director & Stylist',
        'bio' => 'For me Christ is not just the niche, he is the focus. Through styling, directing, organizing, and anything I have; my goal is to create in a way that people stop and acknowledge my source.',
        'image' => 'Media/Bunkie_4.jpg',
        'projects' => [
            ['title' => 'BTS', 'image' => 'Media/Show_BTS_1.jpg'],
            ['title' => 'Styling', 'image' => 'Media/BTS_3.png'],
        ],
    ],
    [
        'id' => 2,
        'name' => 'I AM the Brand',
        'discipline' => 'Clothing Brand',
        'bio' => 'I AM the brand is more than fashion…Rooted in faith, artistry, and community, IAM is a creative hub where dancers, artists, and visionaries come together to explore, create, and grow. Through dance education, fashion, and digital artistry, we provide spaces for individuals to develop their craft, express their purpose, and step boldly into their calling.',
        'image' => 'Media/Hearmela_Suzi_12.jpg',
        'projects' => [
            ['title' => 'Hearmela (Model)', 'image' => 'Media/Hearmela_2.jpg'],
            ['title' => 'Suzi (Model)', 'image' => 'Media/Suzi_8.jpg'],
            ['title' => 'The Brand', 'image' => 'Media/I_AM_THE_BRAND_9.jpg'],
        ],
    ],
    [
        'id' => 3,
        'name' => 'Vicarious Garments',
        'discipline' => 'Clothing Brand',
        'bio' => 'At Vicarious Garments, rooted in East Atlanta and fueled by faith, our mission is to create purpose-driven fashion through every thread. We invite our customers to reflect on who (or what) lives vicariously through them, noting our answer can be found in Isaiah 53. We hope to not only build a community but illuminate through our designs while empowering intentional expression.',
        'image' => 'Media/Makayla_Mia_9.jpg',
        'projects' => [
            ['title' => 'Makayla (Model)', 'image' => 'Media/MIa_9.jpg'],
            ['title' => 'Mia (Model)', 'image' => 'Media/Makayla_2.jpg'],
        ],
    ],
    [
        'id' => 4,
        'name' => 'Blessed Brand',
        'discipline' => 'Clothing Brand',
        'bio' => 'Blessed Brand Clothing is a Christian Streetwear Brand that I started back in 2020 during covid, to be able to change that narrative by spreading the Gospel through clothing and fashion in a unique way thats still fireeee to the culture. ',
        'image' => 'Media/BLESSED_BRAND_AFTERSHOW_3.jpg',
        'projects' => [
            ['title' => 'Prisca (Model)', 'image' => 'Media/Prisca_14.jpg'],
            ['title' => 'Zion (Model)', 'image' => 'Media/BLESSED_BRAND_8.jpg'],
        ],
    ],
    [
        'id' => 5,
        'name' => 'Purple Hearts',
        'discipline' => 'Clothing Brand',
        'bio' => 'At Purple Hearts our mission is to be the light that shines in the midst of the darkness of the fashion industry by providing luxury streetwear that honors God!! Based on John 1:5. Our brand message is 1 John 4:4 which says you are of God little children and have overcome them ALL because greater is he that in you than he that is in the world. Which stands as a reminder that the battle is already won!',
        'image' => 'Media/Afeni_Owen_5.jpg',
        'projects' => [
            ['title' => 'Owen (Model)', 'image' => 'Media/PURPLE_HEARTS_11.jpg'],
            ['title' => 'Afeni (Model)', 'image' => 'Media/Afeni_4.jpg'],
        ],
    ],

];
