<?php
$escape = static function ($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
$details = [
    'Student ID' => $student_id,
    'Name' => $name,
    'Course' => $course,
    'Year level' => $year,
    'Section' => $section,
    'Email' => $email,
    'Address' => $address,
    'Contact' => $contact
];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Clark Denver | Student Profile</title>
    <style>
        :root { --yellow: #f4c430; --sun: #ffe889; --ink: #111; --paper: #fff; --mist: #fffdf3; --line: #e7e0be; --muted: #6c6757; }
        * { box-sizing: border-box; } body { margin: 0; background: var(--mist); color: var(--ink); font-family: Georgia, 'Times New Roman', serif; }
        body::before { content: ''; position: fixed; z-index: -1; width: 180px; height: 180px; top: -80px; right: -65px; border: 2px solid var(--yellow); border-radius: 50%; background: var(--sun); opacity: .55; }
        .shell { width: min(1100px, calc(100% - 40px)); margin: 34px auto; background: var(--paper); border: 2px solid var(--ink); border-radius: 8px; box-shadow: 14px 14px 0 var(--yellow); animation: rise .65s ease both; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 24px 30px; border-bottom: 2px solid var(--ink); } .brand { display: flex; gap: 12px; align-items: center; font-weight: 800; } .mark { display: grid; place-items: center; width: 42px; height: 42px; background: var(--yellow); border: 2px solid var(--ink); border-radius: 50%; font-weight: 900; font-family: Arial, sans-serif; } nav { display: flex; gap: 10px; } nav a { color: var(--ink); text-decoration: none; border: 1px solid var(--ink); border-radius: 5px; padding: 10px 14px; font: 700 14px Arial, sans-serif; transition: .2s ease; } nav a:hover { background: var(--yellow); transform: translateY(-2px); }
        main { padding: 58px 72px 78px; } .eyebrow { font: 800 12px Arial, sans-serif; letter-spacing: .14em; } h1 { font-size: clamp(42px, 6vw, 68px); letter-spacing: -.07em; margin: 12px 0 44px; } .layout { display: grid; grid-template-columns: 250px 1fr; gap: 46px; }
        .identity { position: relative; border: 2px solid var(--ink); border-radius: 8px; padding: 28px 24px; align-self: start; background: #fffef8; box-shadow: 8px 8px 0 var(--sun); } .identity::after { content: ''; position: absolute; right: 18px; top: 18px; width: 12px; height: 12px; border-radius: 50%; background: var(--yellow); } .avatar { display: block; width: 142px; height: 142px; border: 2px solid var(--ink); border-radius: 50%; object-fit: cover; background: var(--yellow); } .initials { display: grid; place-items: center; width: 142px; height: 142px; border: 2px solid var(--ink); border-radius: 50%; background: var(--yellow); color: var(--ink); font: 900 40px Arial, sans-serif; } .identity h2 { font-size: 24px; line-height: 1.1; margin: 22px 0 10px; } .badge { display: inline-block; background: var(--ink); color: var(--yellow); border-radius: 4px; padding: 7px 9px; font: 800 10px Arial, sans-serif; letter-spacing: .1em; }
        .details { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; } .item { border: 1px solid var(--line); border-radius: 6px; padding: 20px; min-height: 88px; background: #fffef8; transition: .2s ease; } .item:hover { border-color: var(--ink); transform: translateY(-3px); } .item.wide { grid-column: 1 / -1; } .label { display: block; color: var(--muted); font: 800 10px Arial, sans-serif; letter-spacing: .14em; margin-bottom: 10px; } .value { font: 700 16px/1.35 Arial, sans-serif; overflow-wrap: anywhere; }
        @keyframes rise { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 720px) { body::before { display: none; } header, main { padding: 22px; } header { align-items: flex-start; gap: 18px; flex-direction: column; } main { padding-top: 42px; } .layout, .details { display: block; } .identity { margin-bottom: 40px; } .item { margin-bottom: 12px; } nav { flex-wrap: wrap; } }
    </style>
</head>
<body><div class="shell">
    <header><div class="brand"><span class="mark">CD</span><span>CLARK'S STUDENT DESK</span></div><nav><a href="<?= $escape(site_url('student')) ?>">Home</a></nav></header>
    <main><h1>Student profile</h1><div class="layout"><aside class="identity"><img class="avatar" src="<?= $escape(site_url('images/clark-profile.jpg')) ?>" alt="Photo of <?= $escape($name) ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';"><div class="initials" style="display: none;">CDH</div><h2><?= $escape($name) ?></h2><span class="badge">BS INFORMATION TECHNOLOGY</span></aside><section class="details"><?php foreach ($details as $label => $value): ?><div class="item<?= $label === 'Address' ? ' wide' : '' ?>"><span class="label"><?= $escape($label) ?></span><span class="value"><?= $escape($value) ?></span></div><?php endforeach; ?></section></div></main>
</div></body>
</html>