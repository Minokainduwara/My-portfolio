<?php

$portfolio = [

  'name'    => 'Minoka ',
  'title'   => 'AI/ML & Software Engineer',
  'tagline' => 'Full-spectrum engineer who builds intelligent systems, cross-platform apps, immersive games, and scalable backends — from neural networks to native mobile apps.',
  'email'   => 'minokainduwara@gmail.com',
  'github'  => 'https://github.com/Minokainduwara',
  'linkedin'=> 'https://www.linkedin.com/in/minoka-wickramasinghe-3b7198194/',
  'upwork' => 'https://www.upwork.com/freelancers/~01c066638da7b9262b?mp_source=share',
  'resume'  => 'assets/doc/Resume.pdf',
  // Set to path of your photo e.g. 'assets/img/photo.jpg' or leave empty for placeholder
  'photo'   => 'assets/img/photo.png',

  'typed_texts' => [
    'AI / ML Engineer',
    'Full-Stack Developer',
    'Mobile App Developer',
    'Game Developer',
    'Software Engineer',
    'Deep Learning Expert',
  ],

  'stats' => [
    ['number' => 5,  'suffix' => '+', 'label' => 'Years Experience'],
    ['number' => 50, 'suffix' => '+', 'label' => 'Projects Built'],
    ['number' => 15, 'suffix' => '+', 'label' => 'Technologies'],
    ['number' => 99, 'suffix' => '%', 'label' => 'Dedication'],
  ],

  'about_cards' => [
    ['icon' => '🧠', 'title' => 'AI / ML',         'desc' => 'Deep learning, NLP, computer vision, MLOps'],
    ['icon' => '📱', 'title' => 'Mobile Dev',       'desc' => 'Flutter, React Native, Dart — cross-platform apps'],
    ['icon' => '🌐', 'title' => 'Web & Backend',    'desc' => 'React, Next.js, PHP, Spring Boot, Firebase'],
    ['icon' => '🎮', 'title' => 'Game Development', 'desc' => 'Unity & Unreal Engine, C#, immersive XR'],
    ['icon' => '⚙️', 'title' => 'Systems & IoT',    'desc' => 'C, Arduino, embedded systems, hardware control'],
    ['icon' => '☕', 'title' => 'Enterprise Java',  'desc' => 'Spring Boot, REST APIs, microservices architecture'],
  ],

  // Grouped skill categories for the tabbed skills section
  'skill_categories' => [
    [
      'label'  => 'AI / ML',
      'icon'   => '🧠',
      'skills' => [
        ['name' => 'Python',               'pct' => 98],
        ['name' => 'PyTorch / TensorFlow', 'pct' => 92],
        ['name' => 'HuggingFace',          'pct' => 90],
        ['name' => 'LangChain / RAG',      'pct' => 85],
        ['name' => 'Computer Vision',      'pct' => 87],
        ['name' => 'MLOps / MLflow',       'pct' => 83],
      ],
    ],
    [
      'label'  => 'Web & Backend',
      'icon'   => '🌐',
      'skills' => [
        ['name' => 'React',               'pct' => 93],
        ['name' => 'Next.js',             'pct' => 90],
        ['name' => 'PHP',                 'pct' => 88],
        ['name' => 'Spring Boot (Java)',  'pct' => 85],
        ['name' => 'Firebase',            'pct' => 91],
        ['name' => 'REST APIs',           'pct' => 94],
      ],
    ],
    [
      'label'  => 'Mobile',
      'icon'   => '📱',
      'skills' => [
        ['name' => 'Flutter',           'pct' => 92],
        ['name' => 'Dart',              'pct' => 90],
        ['name' => 'React Native',      'pct' => 87],
        ['name' => 'Firebase (Mobile)', 'pct' => 91],
        ['name' => 'iOS / Android',     'pct' => 85],
      ],
    ],
    [
      'label'  => 'Game Dev',
      'icon'   => '🎮',
      'skills' => [
        ['name' => 'Unity',          'pct' => 88],
        ['name' => 'Unreal Engine',  'pct' => 80],
        ['name' => 'C#',             'pct' => 90],
        ['name' => '3D / XR / AR',   'pct' => 78],
        ['name' => 'Game AI',        'pct' => 82],
      ],
    ],
    [
      'label'  => 'Systems',
      'icon'   => '⚙️',
      'skills' => [
        ['name' => 'Java',              'pct' => 88],
        ['name' => 'C / C++',           'pct' => 84],
        ['name' => 'Arduino',           'pct' => 82],
        ['name' => 'Embedded Systems',  'pct' => 78],
        ['name' => 'Linux / Bash',      'pct' => 86],
      ],
    ],
  ],

  'projects' => [
    [
      'icon'     => '🤖',
      'title'    => 'RAG Chatbot',
      'desc'     => 'A Retrieval-Augmented Generation (RAG) chatbot that answers questions from your own documents using local or cloud-based LLMs.',
      'tags'     => ['Python', 'faiss-cpu', 'HuggingFace', 'LangChain'],
      'category' => 'AI / ML',
      'color'    => '#00ffc8',
      'demo'     => 'https://www.linkedin.com/feed/update/urn:li:activity:7437256389636337664/',
      'code'     => 'https://github.com/Minokainduwara/RAG_Chatbot',
    ],

    [
      'icon'     => '🐦‍🔥',
      'title'    => 'Aurion Official Website',
      'desc'     => 'Aurion is an IT services and consulting company that provides end-to-end technology solutions for businesses.',
      'tags'     => ['Firebase', 'React', 'Express.js', 'Node.js'],
      'category' => 'Web',
      'color'    => '#ff4d8d',
      'demo'     => 'https://aurionlk.live'
    ],

    [
      'icon'     => '📱',
      'title'    => 'HackTrail Timer',
      'desc'     => 'A modern and minimal Hackathon / Event Countdown Timer built with Flutter.',
      'tags'     => ['Flutter', 'Dart', 'Firebase', 'TFLite'],
      'category' => 'Mobile',
      'color'    => '#7b61ff',
      'demo'     => '#',
      'code'     => 'https://github.com/Minokainduwara/hacktrail_timer',
    ],
    [
      'icon'     => '🌐',
      'title'    => 'HelaSavi B2B Platform',
      'desc'     => 'Full-stack SaaS platform with React Js, server actions, real-time analytics, role-based auth, and Stripe payments integration. “HelaSavi is a Smart Economic Resource & Business Empowerment Platform”',
      'tags'     => ['MERN', 'Tailwind', 'JWT', 'Stripe'],
      'category' => 'Web',
      'color'    => '#ff4d8d',
      'code'     => 'https://github.com/Amila619/ph-2025-hackathon',
    ],
    [
      'icon'     => '🎮',
      'title'    => 'FlappyBot 2D',
      'desc'     => 'FlappyBot 2D is a Unity-based game inspired by the popular Flappy Bird game. Help the bot avoid obstacles and soar through the air! The game features 2D controls, animated characters, and smooth gameplay mechanics.',
      'tags'     => ['Unity', 'C#', 'Android'],
      'category' => 'Game Dev',
      'color'    => '#00ced1',
      'demo'     => 'https://www.youtube.com/watch?v=mQ2GMEWHok8',
      'code'     => 'https://github.com/Minokainduwara/FlappyBot_2D',
    ],
    [
      'icon'     => '☕',
      'title'    => 'University Event Management System',
      'desc'     => 'Event Management System For The University Scalable microservices backend with Spring Boot, JWT auth, Docker orchestration, and a React admin panel.',
      'tags'     => ['Java', 'Spring Boot', 'MicroServices', 'React','MySQL'],
      'category' => 'Web',
      'color'    => '#ff4d8d',
      'code'     => 'https://github.com/Minokainduwara/Event_management_system',
    ],
    [
      'icon'     => '🔍',
      'title'    => 'Digital Extinction Tracker (Rune)',
      'desc'     => 'A web application that helps identify, track, and preserve endangered cultural knowledge—including folk stories, rare words, proverbs, and traditions—using AI/ML to analyze text and assign risk levels.',
      'tags'     => ['Python', 'FastApi', 'PyTorch', 'Firebase','Azure'],
      'category' => 'AI / ML',
      'color'    => '#00ffc8',
      'demo'     => 'https://youtu.be/b49jpYiMSSc?si=hCy87thyHekmhEbG',
      'code'     => 'https://github.com/lazarus-dev-labs/digital-extinction-tracker',
    ],
    [
      'icon'     => '⏰',
      'title'    => 'Arduino Digital Clock',
      'desc'     => 'A simple digital clock system built using an Arduino and a 16x2 LCD display. This project allows users to view and manually adjust time using push buttons.',
      'tags'     => ['Arduino', 'C++'],
      'category' => 'Systems',
      'color'    => '#fada5e',
      'code'     => 'https://github.com/Minokainduwara/Digital-Clock',
    ],
    
    [
      'icon'     => '🛒',
      'title'    => 'Grocery Store Ecommerce Platform',
      'desc'     => 'A simple and scalable Node.js + Express + MongoDB backend built for a Grocery Management System. It provides API endpoints to manage products — including adding, fetching, and deleting items.',
      'tags'     => ['MongoDB', 'React', 'Express.js', 'Node.js'],
      'category' => 'Web',
      'color'    => '#ff4d8d',
      'code'     => 'https://github.com/Minokainduwara/SE_Project',
    ]
  ],

  'experience' => [
    [
      'date'    => '2026 — Present',
      'role'    => 'Founder, AI/ML & Software Engineer',
      'company' => 'Aurion',
      'desc'    => 'Founder of Aurion and leading development of LLM-powered products and full-stack platforms. Built Flutter mobile apps with on-device ML, Next.js dashboards, and Spring Boot microservices serving 500K+ users.',
    ],
    [
      'date'    => '2024 — Present',
      'role'    => 'Full-Stack & Mobile Developer',
      'company' => 'Team Lazarus',
      'desc'    => 'Developed cross-platform apps in Flutter and React Native, RESTful backends in PHP and Java Spring Boot, and integrated Firebase for real-time features. Shipped 10+ production apps.',
    ],
    [
      'date'    => '2019 — Present',
      'role'    => 'Software Engineer & Indie Game Developer',
      'company' => 'Freelance',
      'desc'    => 'Built Unity and Unreal Engine games, embedded Arduino systems for IoT prototypes, and contributed to React front-ends and Python data pipelines.',
    ],

    [
      'date'    => '2018 — 2020',
      'role'    => 'Graphic Designer',
      'company' => 'Ceylon Graphic Designers',
      'desc'    => 'Work involved creating visual content for various clients, including branding, marketing materials, and digital graphics. Developed a strong eye for design and aesthetics that I now apply to UI/UX in my software projects.',
    ],
  ],
];
