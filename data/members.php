<?php
// Central "database" of members. In a real app this would come from
// a database table, but the assignment calls for a PHP array.
// Each project image includes explicit w/h so member.php can compute
// CSS Grid masonry row-spans server-side (no JavaScript, no layout shift).
$members = [
    [
        'id' => 1,
        'name' => 'Mara Densu',
        'discipline' => 'Illustrator',
        'bio' => 'Mara is a freelance illustrator who blends bold linework with soft watercolor washes. She specializes in editorial illustration and character design for children\'s books.',
        'image' => 'https://placehold.co/400x400/e8dff5/4a3f66?text=Mara+D.',
        'projects' => [
            ['title' => 'Wildwood Tales', 'image' => 'https://placehold.co/600x800/e8dff5/4a3f66?text=Wildwood+Tales', 'w' => 600, 'h' => 800],
            ['title' => 'City of Kites', 'image' => 'https://placehold.co/600x450/e8dff5/4a3f66?text=City+of+Kites', 'w' => 600, 'h' => 450],
            ['title' => 'Paper Moons', 'image' => 'https://placehold.co/600x600/e8dff5/4a3f66?text=Paper+Moons', 'w' => 600, 'h' => 600],
        ],
    ],
    [
        'id' => 2,
        'name' => 'Julian Vance',
        'discipline' => 'Photographer',
        'bio' => 'Julian shoots documentary-style street photography, focusing on quiet, in-between moments in busy cities. His work has appeared in three local gallery shows.',
        'image' => 'https://placehold.co/400x400/dff0e8/2f5c46?text=Julian+V.',
        'projects' => [
            ['title' => 'Between Trains', 'image' => 'https://placehold.co/600x400/dff0e8/2f5c46?text=Between+Trains', 'w' => 600, 'h' => 400],
            ['title' => 'Corner Store Portraits', 'image' => 'https://placehold.co/600x750/dff0e8/2f5c46?text=Corner+Store', 'w' => 600, 'h' => 750],
        ],
    ],
    [
        'id' => 3,
        'name' => 'Renata Osei',
        'discipline' => 'Ceramicist',
        'bio' => 'Renata throws functional stoneware pottery with hand-mixed glazes inspired by tide pools and lichen. Every piece is wheel-thrown and fired in a small backyard kiln.',
        'image' => 'https://placehold.co/400x400/f5e9df/6b4a33?text=Renata+O.',
        'projects' => [
            ['title' => 'Tidepool Glaze Series', 'image' => 'https://placehold.co/600x600/f5e9df/6b4a33?text=Tidepool+Series', 'w' => 600, 'h' => 600],
            ['title' => 'Everyday Mugs', 'image' => 'https://placehold.co/600x500/f5e9df/6b4a33?text=Everyday+Mugs', 'w' => 600, 'h' => 500],
            ['title' => 'Lichen Bowls', 'image' => 'https://placehold.co/600x700/f5e9df/6b4a33?text=Lichen+Bowls', 'w' => 600, 'h' => 700],
        ],
    ],
    [
        'id' => 4,
        'name' => 'Theo Marsh',
        'discipline' => 'Woodworker',
        'bio' => 'Theo builds small-batch furniture and cutting boards from reclaimed hardwood, favoring simple joinery and visible grain over heavy finishes.',
        'image' => 'https://placehold.co/400x400/efe5d8/5a4a2f?text=Theo+M.',
        'projects' => [
            ['title' => 'Reclaimed Oak Bench', 'image' => 'https://placehold.co/600x450/efe5d8/5a4a2f?text=Oak+Bench', 'w' => 600, 'h' => 450],
            ['title' => 'Walnut Cutting Boards', 'image' => 'https://placehold.co/600x600/efe5d8/5a4a2f?text=Cutting+Boards', 'w' => 600, 'h' => 600],
        ],
    ],
    [
        'id' => 5,
        'name' => 'Priya Chandran',
        'discipline' => 'Weaver',
        'bio' => 'Priya designs handwoven textiles on a floor loom, working mostly in undyed cotton and wool to highlight natural fiber texture.',
        'image' => 'https://placehold.co/400x400/e5eef5/2f4a66?text=Priya+C.',
        'projects' => [
            ['title' => 'Undyed Wool Throws', 'image' => 'https://placehold.co/600x700/e5eef5/2f4a66?text=Wool+Throws', 'w' => 600, 'h' => 700],
            ['title' => 'Grid Weave Runners', 'image' => 'https://placehold.co/600x400/e5eef5/2f4a66?text=Grid+Runners', 'w' => 600, 'h' => 400],
        ],
    ],
    [
        'id' => 6,
        'name' => 'Owen Brackett',
        'discipline' => 'Printmaker',
        'bio' => 'Owen carves linocut prints of local wildlife and hand-pulls each edition on a vintage tabletop press, keeping every run small and numbered.',
        'image' => 'https://placehold.co/400x400/f5dfe6/662f45?text=Owen+B.',
        'projects' => [
            ['title' => 'Backyard Birds Series', 'image' => 'https://placehold.co/600x600/f5dfe6/662f45?text=Backyard+Birds', 'w' => 600, 'h' => 600],
            ['title' => 'Night Fox Linocut', 'image' => 'https://placehold.co/600x750/f5dfe6/662f45?text=Night+Fox', 'w' => 600, 'h' => 750],
            ['title' => 'River Otters', 'image' => 'https://placehold.co/600x500/f5dfe6/662f45?text=River+Otters', 'w' => 600, 'h' => 500],
        ],
    ],
    [
        'id' => 7,
        'name' => 'Sela Vance',
        'discipline' => 'Musician',
        'bio' => 'Sela is a multi-instrumentalist songwriter who performs stripped-down acoustic sets at local cafes and community stages.',
        'image' => 'https://placehold.co/400x400/f5f0df/665c2f?text=Sela+V.',
        'projects' => [
            ['title' => 'Porch Light Sessions (EP)', 'image' => 'https://placehold.co/600x600/f5f0df/665c2f?text=Porch+Light', 'w' => 600, 'h' => 600],
            ['title' => 'Live at the Corner Cafe', 'image' => 'https://placehold.co/600x400/f5f0df/665c2f?text=Live+at+Cafe', 'w' => 600, 'h' => 400],
        ],
    ],
];
