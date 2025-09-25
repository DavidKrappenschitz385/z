<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Public Area</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .faq-item {
            margin-bottom: 20px;
        }
        .faq-question {
            background-color: #667eea;
            color: white;
            padding: 15px;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }
        .faq-question:hover {
            background-color: #764ba2;
        }
        .faq-answer {
            padding: 15px;
            background-color: #f4f7f6;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
            display: none;
        }
        .faq-question .arrow {
            transition: transform 0.3s;
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <h1>Frequently Asked Questions</h1>

        <div class="faq-item">
            <div class="faq-question">
                <span>What is the Sports League Management System?</span>
                <span class="arrow">▼</span>
            </div>
            <div class="faq-answer">
                <p>It's a comprehensive platform for managing sports leagues, teams, players, and schedules efficiently.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>How do I create a new league?</span>
                <span class="arrow">▼</span>
            </div>
            <div class="faq-answer">
                <p>Once you are registered and logged in as a league manager, you can navigate to the "Leagues" section and select "Create League."</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>Can I join an existing team?</span>
                <span class="arrow">▼</span>
            </div>
            <div class="faq-answer">
                <p>Yes, you can browse existing teams and send a request to join. The team manager will then approve or deny your request.</p>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', event => {
                const answer = item.nextElementSibling;
                const arrow = item.querySelector('.arrow');

                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    arrow.style.transform = 'rotate(0deg)';
                } else {
                    answer.style.display = 'block';
                    arrow.style.transform = 'rotate(180deg)';
                }
            });
        });
    </script>
</body>
</html>