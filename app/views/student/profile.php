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
        :root { --yellow: #f4c430; --ink: #111; --paper: #fff; --mist: #f7f7f2; --line: #deded5; }
        * { box-sizing: border-box; } body { margin: 0; background: var(--mist); color: var(--ink); font-family: Arial, Helvetica, sans-serif; }
        .shell { width: min(1060px, calc(100% - 40px)); margin: 34px auto; background: var(--paper); border: 2px solid var(--ink); }
        header { display: flex; justify-content: space-between; align-items: center; padding: 24px 30px; border-bottom: 2px solid var(--ink); } .brand { display: flex; gap: 12px; align-items: center; font-weight: 800; } .mark { display: grid; place-items: center; width: 40px; height: 40px; background: var(--yellow); border: 2px solid var(--ink); font-weight: 900; } nav { display: flex; gap: 10px; } nav a { color: var(--ink); text-decoration: none; border: 1px solid var(--ink); padding: 10px 14px; font-weight: 700; } nav a:hover, .social:hover { background: var(--yellow); }
        main { padding: 56px 72px 72px; } .eyebrow { font-size: 12px; font-weight: 800; letter-spacing: .14em; } h1 { font-size: clamp(38px, 5vw, 62px); letter-spacing: -.06em; margin: 12px 0 42px; } .layout { display: grid; grid-template-columns: 240px 1fr; gap: 46px; }
        .identity { border-top: 12px solid var(--yellow); padding-top: 25px; } .initials { display: grid; place-items: center; width: 132px; height: 132px; background: var(--ink); color: var(--yellow); font-size: 42px; font-weight: 900; } .identity h2 { font-size: 23px; line-height: 1.1; margin: 20px 0 8px; } .badge { display: inline-block; background: var(--yellow); padding: 7px 9px; font-size: 11px; font-weight: 800; letter-spacing: .1em; }
        .details { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; } .item { border: 1px solid var(--line); padding: 19px; min-height: 82px; } .item.wide { grid-column: 1 / -1; } .label { display: block; color: #666; font-size: 10px; font-weight: 800; letter-spacing: .14em; margin-bottom: 10px; } .value { font-size: 16px; font-weight: 700; line-height: 1.35; overflow-wrap: anywhere; } .social { display: inline-block; margin-top: 10px; padding: 10px 12px; border: 1px solid var(--ink); color: var(--ink); text-decoration: none; font-size: 13px; }
        @media (max-width: 720px) { header, main { padding: 22px; } header { align-items: flex-start; gap: 18px; flex-direction: column; } main { padding-top: 42px; } .layout, .details { display: block; } .identity { margin-bottom: 40px; } .item { margin-bottom: 12px; } nav { flex-wrap: wrap; } }
    </style>
</head>
<body><div class="shell">
    <header><div class="brand"><span class="mark">CD</span><span>CLARK'S STUDENT DESK</span></div><nav><a href="<?= $escape(site_url('student')) ?>">Home</a></nav></header>
    <main><span class="eyebrow">VERIFIED PROFILE / 2026</span><h1>Student profile</h1><div class="layout"><aside class="identity"><div class="initials">CDH</div><h2><?= $escape($name) ?></h2><span class="badge">BS INFORMATION TECHNOLOGY</span></aside><section class="details"><?php foreach ($details as $label => $value): ?><div class="item<?= $label === 'Address' ? ' wide' : '' ?>"><span class="label"><?= $escape($label) ?></span><span class="value"><?= $escape($value) ?></span><?php if ($label === 'Contact'): ?><br><a class="social" href="<?= $escape($facebook) ?>" target="_blank" rel="noopener noreferrer">Facebook profile</a><?php endif; ?></div><?php endforeach; ?></section></div></main>
</div></body>
</html>