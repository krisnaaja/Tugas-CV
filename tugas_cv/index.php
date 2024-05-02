<!DOCTYPE html>
<html lang="en">
    <?php 'data.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            justify-content:  center;
            align-items: center;
            display: flex;
        }
        .container {
            margin: 0 auto;
            width: 100%;
            background-color: #fff;
            min-height: 1000px;
            max-width: 1000px;
            box-shadow: 0 30px 40px rgba(0,0,0,0.5);

        }

        .title-cv {
            color: black;
            position: relative;
            
        }

        .title-cv h1 {
            text-align: center;
            color: #0E46A3; 
            border-bottom: 3px solid rgba(0,0,0,0.5);
            font-weight: bold;
        }

        .title-cv h2 {
            color: #0E46A3; 
            font-family: 'lucida sans';
            font-weight: bold;
        }
        
        .title-cv p {
            margin-left: 30px;
        }

        .title-cv ul {
            line-height: 2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title-cv">
        <h1>Curriculum Vitae</h1>
        <?php
        $name = "I Putu Bagus Krisna Jaya";
        $email = "krisboe144@gmail.com";
        $phone = "087860188743";
        $address = "Abiansemal";
        $education = [
            ["SD 1 PUNGGUL", "SMP N 4 ABIANSEMAL"],
            ["SMA N 1 ABIANSEMAL", "instiki"]
        ];
        $experience = [
            ["Administration", "Sd 1 Punggul"],
            ["Joki Game", "Home"]
        ];
        ?>
        <h2>Personal Information</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>

        <h2>Education</h2>
        <ul>
            <?php foreach ($education as $edu): ?>
                <li>
                    <strong><?php echo $edu[0]; ?></strong><br>
                    <?php echo $edu[1]; ?> 
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Experience</h2>
        <ul>
            <?php foreach ($experience as $exp): ?>
                <li>
                    <strong><?php echo $exp[0]; ?></strong><br>
                    <?php echo $exp[1]; ?><br>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
      
    </div>
</body>
</html>