<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
	<form method="POST">
		<section class="question">
		<label for="word">Choose a Japanese word:</label>
        <select id="word" name="word">
            <?php foreach ($words as $word): ?>
                <option value="<?= htmlspecialchars($word->getJapaneseTranslation()) ?>">
                    <?= htmlspecialchars($word->getJapaneseTranslation()) ?>
                </option>
            <?php endforeach; ?>
        </select>
		</section>
		<section class="player-answer">
		<label for="answer">What's the English translation?</label>
		<input id="answer" type="text" name="answer">
		<button type="submit">Submit Answer</button>
		</section>
</form>
</body>
</html>