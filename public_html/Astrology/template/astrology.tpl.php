<?php 
$site = [
    'title' => 'new title',
    'meta_content' => 'new Meta Content',
    'heading' => 'new Heading',
    'style_sheet' => [
        '../assets/css/astrology-home.css'
    ]
];
include 'common.tpl.php';
echo $header;

$tpl_view = isset($_GET['process']) ? 'result' : 'home';
if ('home' === $tpl_view): ?>
    <link rel="stylesheet/css" href="FormPage.css" >
<form action="astrology.php" method="get">
    <label>
        Name: <input type="text" name="name" required>
    </label>
    <label>
        Date of Birth: <input type="datetime-local" name="date_of_birth" required>
    </label>
    <label>
        Location: <input type="text" name="location">
    </label>
    <input type="hidden" name="process" value="1">
    <input type="submit">
</form>
<?php elseif ('result' === $tpl_view): ?>
    result test
<?php endif; ?>