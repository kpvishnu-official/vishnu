<?php 
// include 'formSubmitPage.php';

$tpl_view = isset($_GET['process']) ? 'result' : 'home';
if ('home' === $tpl_view): ?>
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
hello