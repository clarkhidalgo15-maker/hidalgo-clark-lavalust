<?php
$escape = static function ($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clark's Student Desk</title>
    <style>
        :root { --yellow: #f4c430; --ink: #111; --paper: #fff; --mist: #f7f7f2; --line: #deded5; }
        * { box-sizing: border-box; }
        body { margin: 0; background: var(--mist); color: var(--ink); font-family: Arial, Helvetica, sans-serif; }
        .shell { width: min(1060px, calc(100% - 40px)); margin: 34px auto; background: var(--paper); border: 2px solid var(--ink); }
        header { display: flex; justify-content: space-between; align-items: center; padding: 24px 30px; border-bottom: 2px solid var(--ink); }
        .brand { display: flex; gap: 12px; align-items: center; font-weight: 800; letter-spacing: .02em; }
        .mark { display: grid; place-items: center; width: 40px; height: 40px; background: var(--yellow); border: 2px solid var(--ink); font-weight: 900; }
        nav { display: flex; gap: 10px; } nav a { color: var(--ink); text-decoration: none; border: 1px solid var(--ink); padding: 10px 14px; font-weight: 700; }
        nav a:hover { background: var(--yellow); }
        main { display: grid; grid-template-columns: 1.1fr .9fr; gap: 56px; padding: 74px 72px 82px; }
        .eyebrow { display: inline-block; background: var(--yellow); padding: 7px 10px; font-size: 12px; font-weight: 800; letter-spacing: .13em; }
        h1 { max-width: 560px; margin: 22px 0 18px; font-size: clamp(42px, 6vw, 72px); line-height: .95; letter-spacing: -.06em; }
        .intro { color: #555; font-size: 17px; line-height: 1.6; max-width: 500px; }
        .panel { border: 2px solid var(--ink); padding: 28px; align-self: center; box-shadow: 10px 10px 0 var(--yellow); }
        .panel h2 { margin: 0 0 8px; font-size: 25px; } .panel p { color: #555; line-height: 1.5; }
        label { display: block; margin: 22px 0 7px; font-size: 12px; font-weight: 800; letter-spacing: .1em; }
        input { width: 100%; border: 1px solid var(--ink); padding: 14px; font-size: 15px; }
        button { width: 100%; margin-top: 14px; border: 2px solid var(--ink); background: var(--yellow); padding: 14px; font-weight: 800; cursor: pointer; }
        .notice { border-left: 4px solid var(--yellow); padding: 10px 12px; background: #fff8d8; font-size: 13px; line-height: 1.4; }
        @media (max-width: 720px) { header, main { padding: 22px; } header { align-items: flex-start; gap: 18px; flex-direction: column; } main { display: block; padding-top: 50px; } .panel { margin-top: 48px; } nav { flex-wrap: wrap; } }
    </style>
</head>
<body>
<div class="shell">
    <header><div class="brand"><span class="mark">CD</span><span>CLARK'S STUDENT DESK</span></div><nav><a href="<?= $escape(site_url('student')) ?>">Home</a><a href="<?= $escape(site_url('student/profile')) ?>">Profile</a></nav></header>
    <main>
        <section><span class="eyebrow">STUDENT INFORMATION</span><h1>Welcome,<br>Clark Denver.</h1><p class="intro">A simple, focused space for the essential details of a BS Information Technology student.</p></section>
        <section class="panel"><h2>Profile access</h2><p>Verify the student name to open the full profile.</p><?php if ($access_message): ?><div class="notice"><?= $escape($access_message) ?></div><?php endif; ?><form method="post"><label for="viewer_name">STUDENT NAME</label><input id="viewer_name" name="viewer_name" type="text" placeholder="Clark Denver F. Hidalgo" required><button type="submit">Open student profile</button></form></section>
    </main>
</div>
</body>
</html>