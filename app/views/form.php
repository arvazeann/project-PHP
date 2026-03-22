<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa Sederhana</title>
    
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            padding-top: 50px;
            background-color: #f9f9f9;
        }

        .container {
            background-color: white;
            width: 500px;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 20px; 
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .btn-submit {
            background-color: #4A90E2;
            color: white;
            border: none;
            padding: 10px 40px;
            border-radius: 50px; 
            cursor: pointer; 
            font-size: 14px;
        }

        .result-area {
            margin-top: 30px;
            font-size: 14px;
            line-height: 1.8;
        }

        .btn-reset {
            background: none;
            border: none;
            color: #555;
            font-size: 12px;
            cursor: pointer;
            padding: 0;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php $data = $data ?? null; ?>

    <div class="container">
        
        <form method="POST">
            <div class="form-group">
                <input type="text" name="firstname" id="firstname" placeholder="Firstname" required>
            </div>

            <div class="form-group">
                <input type="text" name="lastname" id="lastname" placeholder="Lastname" required>
            </div>

            <div class="form-group">
                <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" required>
            </div>

            <div class="form-group">
                <textarea name="address" id="address" rows="4" placeholder="Address" required></textarea>
            </div>

            <div class="button-container">
                <button type="submit" name="action" value="simpan" class="btn-submit">Submit</button>
            </div>
        </form>

        <?php if ($data): ?>
            <div class="result-area">
                <strong>Hi, my name is <?php echo $data['firstname'] . " " . $data['lastname'] ?></strong> <br>
                Phone Number : <?php echo $data['phone_number'] ?> <br>
                Address : <?php echo $data['address'] ?> <br>
                
                <form method="POST">
                    <button type="submit" name="action" value="hapus" class="btn-reset">Reset</button>
                </form>
            </div>
        <?php endif; ?>

    </div>
</body>
</html>