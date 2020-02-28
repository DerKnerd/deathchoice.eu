<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="Stylesheet" type="text/css" href="css/page.css">
    <title>Select your religion(s)</title>
    <link rel="icon" href="img/favicon.png">
</head>
<body class="scriptEnabled">
<div id="layout">
    <h1 id="heading">Select your religion(s)</h1>
    <div id="browsers" class="browsers">
        <?php
        $religions = [
            [
                'name' => 'Catholic Church',
                'description' => 'The Catholic Church, sometimes referred to as the Roman Catholic Church, is the largest Christian church, with approximately 1.3 billion baptised Catholics worldwide as of 2017.',
                'img' => 'img/catholic_church.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Catholic_Church',
                'convert' => 'https://www.wikihow.com/Become-Catholic',
            ],
            [
                'name' => 'Judaism',
                'description' => 'Judaism is an ethnic religion comprising the collective religious, cultural and legal tradition and civilization of the Jewish people.',
                'img' => 'img/judaism.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Judaism',
                'convert' => 'https://www.wikihow.com/Convert-to-Judaism',
            ],
            [
                'name' => 'Pastafarianism',
                'description' => 'Judaism is an ethnic religion comprising the collective religious, cultural and legal tradition and civilization of the Jewish people.',
                'img' => 'img/pastafarianism.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Flying_Spaghetti_Monster',
                'convert' => 'https://pastafarian.kiwi/FAQ/',
            ],
            [
                'name' => 'Protestantism',
                'description' => 'Protestantism is the second-largest form of Christianity with a total of 800 million to 1 billion adherents worldwide or about 37% of all Christians.',
                'img' => 'img/protestant_church.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Protestantism',
                'convert' => 'https://www.wikihow.com/Declare-Your-Personal-Christian-Statement-of-Faith-%28Protestant%29',
            ],
            [
                'name' => 'Buddhism',
                'description' => 'Buddhism is the world\'s fourth-largest religion with over 520 million followers, or over 7% of the global population, known as Buddhists.',
                'img' => 'img/buddhism.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Buddhism',
                'convert' => 'https://www.wikihow.com/Become-a-Buddhist',
            ],
            [
                'name' => 'Oriental Orthodoxy',
                'description' => 'Oriental Orthodoxy is the fourth largest communion of Christian churches, with about 76 million members worldwide.',
                'img' => 'img/orthodox_church.jpg',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Oriental_Orthodox_Churches',
                'convert' => 'https://journeytoorthodoxy.com/welcome/how-to-become-an-orthodox-christian/',
            ],
            [
                'name' => 'PDF',
                'description' => 'The Portable Document Format is a file format developed by Adobe in the 1990s to present documents, including text formatting and images, in a manner independent of application software, hardware, and operating systems.',
                'img' => 'img/pdf_icon.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/PDF',
                'convert' => 'https://pics.me.me/google-how-do-i-convert-to-how-do-i-convert-27165320.png',
            ],
            [
                'name' => 'Sunni Islam',
                'description' => 'Sunni Islam is the largest denomination of Islam, followed by 87–90% of the world\'s Muslims. Its name comes from the word sunnah, referring to the behaviour of the Islamic prophet Muhammad.',
                'img' => 'img/sunni_islam.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Sunni_Islam',
                'convert' => 'https://www.wikihow.com/Become-a-Muslim',
            ],
            [
                'name' => 'Shia Islam',
                'description' => 'Shia Islam or Shi\'ism is one of the two main branches of Islam. It holds that the Islamic prophet Muhammad designated Ali ibn Abi Talib as his successor and the Imam after him, most notably at the event of Ghadir Khumm, but was prevented from the caliphate as a result of the incident of Saqifah.',
                'img' => 'img/shia_islam.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Shia_Islam',
                'convert' => 'https://www.wikihow.com/Become-a-Muslim',
            ],
            [
                'name' => 'Satanism',
                'description' => 'Shia Islam or Shi\'ism is one of the two main branches of Islam. It holds that the Islamic prophet Muhammad designated Ali ibn Abi Talib as his successor and the Imam after him, most notably at the event of Ghadir Khumm, but was prevented from the caliphate as a result of the incident of Saqifah.',
                'img' => 'img/satanism.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Satanism',
                'convert' => 'https://www.learnreligions.com/how-to-convert-to-satanism-95769',
            ],
            [
                'name' => 'Hinduism',
                'description' => 'Hinduism is an Indian religion and dharma, or way of life, widely practised in the Indian subcontinent and parts of Southeast Asia.',
                'img' => 'img/hinduism.png',
                'tellmemore' => 'https://en.wikipedia.org/wiki/Hinduism',
                'convert' => 'https://www.wikihow.com/Convert-to-Hinduism',
            ],
        ];

        shuffle($religions);
        ?>
        <table>
            <thead>
            <tr>
                <?php foreach ($religions as $religion) {
                    ?>
                    <th>
                        <img class="browserImg" src="<?php echo $religion['img'] ?>"
                             alt="<?php echo $religion['name'] ?>"
                             title="<?php echo $religion['name'] ?>">
                    </th>
                    <?php
                } ?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($religions as $religion) {
                    ?>
                    <td>
                        <?php echo $religion['description'] ?>
                    </td>
                    <?php
                } ?>
            </tr>
            <tr>
                <?php foreach ($religions as $religion) {
                    ?>
                    <td>
                        <div class="browserTableLink">
                            <a target="_blank" href="<?php echo $religion['convert'] ?>">
                                Convert
                            </a>
                        </div>
                    </td>
                    <?php
                } ?>
            </tr>
            <tr>
                <?php foreach ($religions as $religion) {
                    ?>
                    <td>
                        <div class="browserTableLink">
                            <a target="_blank" href="<?php echo $religion['tellmemore'] ?>">
                                Tell me more
                            </a>
                        </div>
                    </td>
                    <?php
                } ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
