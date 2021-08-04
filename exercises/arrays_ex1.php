<?php
$words = "Arrays are a much dreaded topic to many programmers";

if ( !isset($_POST['answer']) || strlen($_POST['answer']) < 1 ) {
    $array_elements = explode(' ', $words);
    shuffle($array_elements);
    $n = rand(1, count($array_elements));
    $key = $array_elements[$n - 1];
    $array_elements = implode(', ', $array_elements);
} else {
    $answer = htmlentities($_POST['answer']);
    $array_elements = htmlentities($_POST['array']);
    $n = $_POST['n'];
    $key = $_POST['key'];
}
?>

<html>

<head>
    <title>Learn PHP Online</title>
    <link href="../css/general.css" rel="stylesheet">
</head>

<body>
    <h1>Unit 2. Arrays. Exercise 1</h1>
    <div class="assignment">
        <p>
            Write PHP script to create an array containing exactly the
            following elements: <strong><?= $array_elements ?></strong>
            in this very order and output the <strong><?= $n ?>'th</strong> // fix the ordinal
            element inside an HTML paragraph tag.
        </p>
    </div>
    <div class="submission">
        <p>Enter your PHP code below:</p>
        <form method="post">
            <textarea class="answer"
            type="textarea" cols="80" rows="8"
            placeholder="<?= htmlentities('<?php...?>') ?>"
            name="answer"><?= isset($answer) ? $answer : ""; ?></textarea></br>
            <input type="hidden" name="array" value="<?= $array_elements ?>">
            <input type="hidden" name="n" value="<?= $n ?>">
            <input type="hidden" name="key" value="<?= $key ?>">
            <input type="submit" name="Submit">
        </form>
    </div>
    <?php
        if ( isset($answer) && strlen($answer) > 0 ) {
            echo '<p>Your submission produces the following output:</p>';
            // have their script from $answer executed here somehow (danger?)
            // check the output vs. $key and go yada
        }
    ?>
</body>

</html>
