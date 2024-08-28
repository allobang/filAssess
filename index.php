<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomy Quiz</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .intro-card {
            margin-bottom: 30px;
        }
        .quiz-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .quiz-container button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="intro-card card text-white bg-primary mb-3">
        <div class="card-header">
            <h2 class="card-title">Mga Astronomers</h2>
        </div>
        <div class="card-body">
            <p class="card-text">
                Ang sumusunod ay tungkol sa ilang astronomers mula sa iba’t ibang bansa. Ilan lamang sa kanilang natuklasan o ginawa ang napasama rito.
            </p>
            <ul>
                <li><strong>Edward Emerson Bernard:</strong> Amerikanong astronomer na tumuklas ng Bernard’s Star. Siya ang unang nakakita ng panlimang satellite ng Jupiter noong 1892. Siya ay lalong nakilala sa kanyang <em>Atlas of Selected Regions of the Milky Way</em>. Siya rin ang kumilala sa labing-anim na kometa.</li>
                <li><strong>Camille Tilammarion:</strong> Isang astronomer mula sa France. Naniwala siyang may halaman sa buwan at may naninirahan sa Mars. Naniniwala rin siyang umiikot ang Venus sa maikling panahon.</li>
                <li><strong>Sir William Herschel:</strong> Isang British astronomer. Siya ang tumuklas ng planetang Uranus. Natuklasan niya rin ang dalawang buwan ng Jupiter at Uranus. Tinutuklasan niya ang pag-aaral ng mga bituin at natuklasan ang paggalaw ng Solar System sa kalawakan.</li>
                <li><strong>Charles Babbage:</strong> English Mathematician na bumuo ng mga prinsipyo na pinagkunan ng pagdesenyo ng Modern Computers. Sumulat siya ng akda ukol sa “Principles of Tools for Turning ang Planning Metals.” Nag-imbento rin siya ng skima ng pag-ikot ng makina.</li>
            </ul>
            <p class="card-text">
                Kung ikaw ay magiging isang astronomer? Anong larangan ka kaya makikilala?
            </p>
        </div>
    </div>

    <div class="quiz-container">
        <h1 class="text-center">Astronomy Quiz</h1>
        <form id="quizForm">
            <div class="question mb-3">
                <p>1. Sino ang astronomer na lumikha ng Bernard Star?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="a" id="q1a">
                    <label class="form-check-label" for="q1a">a. William Herschel</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="b" id="q1b">
                    <label class="form-check-label" for="q1b">b. Charles Babbage</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="c" id="q1c">
                    <label class="form-check-label" for="q1c">c. Camille Tilammarion</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="d" id="q1d">
                    <label class="form-check-label" for="q1d">d. Edward Emerson Bernard</label>
                </div>
            </div>

            <div class="question mb-3">
                <p>2. Ano ang natuklasan ni Sir William Herschel?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="a" id="q2a">
                    <label class="form-check-label" for="q2a">a. Planetang Uranus</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="b" id="q2b">
                    <label class="form-check-label" for="q2b">b. Modern Computers</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="c" id="q2c">
                    <label class="form-check-label" for="q2c">c. Satellite ng Jupiter</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="d" id="q2d">
                    <label class="form-check-label" for="q2d">d. Lahat ng ito ay tama</label>
                </div>
            </div>

            <div class="question mb-3">
                <p>3. Sino ang may-akda ng Principles of Tools for Turning ang Planning Metals?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="a" id="q3a">
                    <label class="form-check-label" for="q3a">a. William Herschel</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="b" id="q3b">
                    <label class="form-check-label" for="q3b">b. Charles Babbage</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="c" id="q3c">
                    <label class="form-check-label" for="q3c">c. Camille Tilammarion</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="d" id="q3d">
                    <label class="form-check-label" for="q3d">d. Edward Emerson Bernard</label>
                </div>
            </div>

            <div class="question mb-3">
                <p>4. Bakit kaya mahalaga ang astronomers sa buhay ng tao?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="a" id="q4a">
                    <label class="form-check-label" for="q4a">a. Sila ang nagsasabi sa atin ng pagbabago sa ating mundo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="b" id="q4b">
                    <label class="form-check-label" for="q4b">b. Sila ang nagsasabi kung ano ating magiging kinabukasan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="c" id="q4c">
                    <label class="form-check-label" for="q4c">c. Sila ang nagsasabi kung kailan magkakaroon ng bagyo.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="d" id="q4d">
                    <label class="form-check-label" for="q4d">d. Wala sa mga ito ay tama.</label>
                </div>
            </div>

            <div class="question mb-3">
                <p>5. Paano kaya magiging isang astronomer ang isang bata?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="a" id="q5a">
                    <label class="form-check-label" for="q5a">a. Kailangang ikaw ay magaling sa Literature</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="b" id="q5b">
                    <label class="form-check-label" for="q5b">b. Kailangang ikaw ay magaling sa Arts at Music</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="c" id="q5c">
                    <label class="form-check-label" for="q5c">c. Kailangang ikaw ay magaling sa Physical Education</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="d" id="q5d">
                    <label class="form-check-label" for="q5d">d. Kailangang ikaw ay magaling sa Mathematics at Science</label>
                </div>
            </div>

            <div class="question mb-3">
                <p>6. Bakit kaya wala pang tanyag na Pilipinong astronomer na natala sa mga aklat?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="a" id="q6a">
                    <label class="form-check-label" for="q6a">a. Dahil di pa sapat ang kaalaman ng mga Pilipino kumpara sa ibang lahi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="b" id="q6b">
                    <label class="form-check-label" for="q6b">b. Dahil di sapat ang mga instumentong kailangan ng isang astronomer sa ating bansa</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="c" id="q6c">
                    <label class="form-check-label" for="q6c">c. a at b ay tama.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="d" id="q6d">
                    <label class="form-check-label" for="q6d">d. a at b ay mali.</label>
                </div>
            </div>

            <div class="question mb-3">
                <p>7. Bakit kinakailangang pag-aralan ng mga astronomers ang mga bagay mula sa kalawakan?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="a" id="q7a">
                    <label class="form-check-label" for="q7a">a. Upang maunawaan ang kalagayan ng araw at ng mga bituin, kung paano ito nabuo at ano ang mangyayari sa mga ito sa hinaharap.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="b" id="q7b">
                    <label class="form-check-label" for="q7b">b. Upang maunawaan ang kapalaran ng mga tao sa hinaharap sa pagbasa ng mga kaganapan sa kalawakan.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="c" id="q7c">
                    <label class="form-check-label" for="q7c">c. Upang mapag-aralan ang galaw ng mga bituin at araw kaugnay ng mga magaganap na kalamidad sa mundo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="d" id="q7d">
                    <label class="form-check-label" for="q7d">d. Lahat ng ito ay tama.</label>
                </div>
            </div>

            <div class="question mb-3">
                <p>8. Kung wala kayang mga astronomers na nakatuklas ng mga bagay sa kalawakan, ano kaya ang takbo ng ating mundo ngayon?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="a" id="q8a">
                    <label class="form-check-label" for="q8a">a. Naniniwala pa tayo sa mga sabi-sabi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="b" id="q8b">
                    <label class="form-check-label" for="q8b">b. Walang nakakaalam ng mga bagong tuklas na mga bituin at planeta</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="c" id="q8c">
                    <label class="form-check-label" for="q8c">c. Lahat at tama.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="d" id="q8d">
                    <label class="form-check-label" for="q8d">d. Lahat ay mali.</label>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="calculateScore()">Submit and Calculate Score</button>
        </form>

        <div class="result" id="result"></div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function calculateScore() {
        const answers = {
            q1: 'd',
            q2: 'a',
            q3: 'b',
            q4: 'a',
            q5: 'd',
            q6: 'c',
            q7: 'a',
            q8: 'c'
        };

        let score = 0;

        for (let i = 1; i <= 8; i++) {
            const question = document.querySelector(`input[name="q${i}"]:checked`);
            if (question && question.value === answers[`q${i}`]) {
                score++;
            }
        }

        document.getElementById('result').innerText = `Nakuha mo ang ${score} tamang sagot sa 8 tanong.`;
    }
</script>

</body>
</html>
