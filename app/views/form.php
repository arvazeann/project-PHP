<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $data = $data ?? null; ?>

    <h2>Form Mahasiswa Sederhana</h2>

    <form method="POST">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname" required><br>

        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" required><br>

        <label for="phone_number">Phone number</label>
        <input type="text" name="phone_number" id="phone_number" required><br>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" required><br>

        <button type="submit" name="action" value="simpan">Submit</button>
    </form>

    <?php if ($data): ?>
        <p>
            Hi, my name is <?php echo $data['firstname'] . " " . $data['lastname'] ?> <br>
            Phone Number: <?php echo $data['phone_number'] ?> <br>
            Address: <?php echo $data['address'] ?> <br>
        </p>
        <form method="POST">
            <button type="submit" name="action" value="hapus">Reset</button>
        </form>
    <?php endif; ?>
</body>

</html>