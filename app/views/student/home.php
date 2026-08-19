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
        :root { --yellow: #f4c430; --sun: #ffe889; --ink: #111; --paper: #fff; --mist: #fffdf3; --line: #e7e0be; --muted: #6c6757; }
        * { box-sizing: border-box; }
        body { margin: 0; background: var(--mist); color: var(--ink); font-family: Georgia, 'Times New Roman', serif; }
        body::before, body::after { content: ''; position: fixed; z-index: -1; width: 170px; height: 170px; border: 2px solid var(--yellow); border-radius: 50%; opacity: .45; }
        body::before { top: -75px; left: -55px; } body::after { right: -70px; bottom: -80px; background: var(--sun); }
        .shell { position: relative; overflow: hidden; width: min(1100px, calc(100% - 40px)); margin: 34px auto; background: var(--paper); border: 2px solid var(--ink); border-radius: 8px; box-shadow: 14px 14px 0 var(--yellow); animation: rise .65s ease both; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 24px 30px; border-bottom: 2px solid var(--ink); }
        .brand { display: flex; gap: 12px; align-items: center; font-weight: 800; letter-spacing: .02em; }
        .mark { display: grid; place-items: center; width: 42px; height: 42px; overflow: hidden; background: var(--yellow); border: 2px solid var(--ink); border-radius: 50%; font: 900 14px Arial, sans-serif; } .mark img { width: 100%; height: 100%; object-fit: cover; }
        nav { display: flex; gap: 10px; } nav a { color: var(--ink); text-decoration: none; border: 1px solid var(--ink); border-radius: 5px; padding: 10px 14px; font: 700 14px Arial, sans-serif; transition: .2s ease; }
        nav a:hover { background: var(--yellow); transform: translateY(-2px); }
        main { display: grid; grid-template-columns: 1.1fr .9fr; gap: 56px; padding: 82px 72px 92px; }
        .hero { position: relative; animation: fade .7s .1s ease both; } .hero::after { content: ''; position: absolute; right: 8%; bottom: -34px; width: 30px; height: 30px; background: var(--yellow); transform: rotate(45deg); }
        .eyebrow { display: inline-block; background: var(--yellow); padding: 7px 10px; border-radius: 4px; font: 800 12px Arial, sans-serif; letter-spacing: .13em; }
        h1 { max-width: 560px; margin: 22px 0 18px; font-size: clamp(46px, 7vw, 82px); line-height: .9; letter-spacing: -.07em; }
        .intro { color: var(--muted); font-size: 18px; line-height: 1.65; max-width: 500px; }
        .mini-note { display: flex; gap: 9px; align-items: center; margin-top: 30px; font: 700 12px Arial, sans-serif; letter-spacing: .08em; text-transform: uppercase; } .mini-note::before { content: ''; width: 9px; height: 9px; background: var(--yellow); border-radius: 50%; }
        .panel { position: relative; border: 2px solid var(--ink); border-radius: 8px; padding: 32px; align-self: center; background: #fffef8; box-shadow: 10px 10px 0 var(--yellow); animation: fade .7s .25s ease both; }
        .panel::before { content: '01'; position: absolute; top: -14px; right: 18px; padding: 4px 8px; background: var(--ink); color: var(--yellow); font: 800 11px Arial, sans-serif; }
        .panel h2 { margin: 0 0 8px; font-size: 28px; } .panel p { color: var(--muted); line-height: 1.5; }
        label { display: block; margin: 22px 0 7px; font-size: 12px; font-weight: 800; letter-spacing: .1em; }
        input { width: 100%; border: 1px solid var(--ink); border-radius: 5px; background: white; padding: 15px; font: 15px Arial, sans-serif; } input:focus { outline: 3px solid var(--sun); }
        button { width: 100%; margin-top: 14px; border: 2px solid var(--ink); border-radius: 5px; background: var(--yellow); padding: 15px; font: 800 14px Arial, sans-serif; cursor: pointer; transition: .2s ease; } button:hover { background: var(--ink); color: var(--yellow); transform: translateY(-2px); }
        .notice { border-left: 4px solid var(--yellow); padding: 10px 12px; background: #fff8d8; font: 13px/1.4 Arial, sans-serif; }
        @keyframes rise { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } } @keyframes fade { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 720px) { body::before, body::after { display: none; } header, main { padding: 22px; } header { align-items: flex-start; gap: 18px; flex-direction: column; } main { display: block; padding-top: 50px; } .panel { margin-top: 48px; } nav { flex-wrap: wrap; } }
    </style>
</head>
<body>
<div class="shell">
    <header><div class="brand"><span class="mark"><img src="<?= $escape(base_url('images/clark-profile.jpg')) ?>?v=0bf894b" alt="" onerror="this.style.display='none'; this.parentElement.textContent='CD';"></span><span>CLARK'S STUDENT DESK</span></div><nav><a href="<?= $escape(site_url('student')) ?>">Home</a></nav></header>
    <main>
        <section class="hero"><span class="eyebrow">STUDENT INFORMATION</span><h1>Welcome,<br>Clark Denver.</h1><p class="intro">A bright little corner for the essential details of a BS Information Technology student.</p><div class="mini-note">MCC / 3F4 / 3rd year</div></section>
        <section class="panel"><h2>Profile access</h2><p>Verify the student name to open the full profile.</p><?php if ($access_message): ?><div class="notice"><?= $escape($access_message) ?></div><?php endif; ?><form method="post"><label for="viewer_name">STUDENT NAME</label><input id="viewer_name" name="viewer_name" type="text" placeholder="Clark Denver F. Hidalgo" required><button type="submit">Open student profile</button></form></section>
    </main>
</div>
</body>
</html>