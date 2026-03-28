<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="app/assets/style.css">

</head>

<body>
    <?php $data = $data ?? null; ?>

    <div class="container">


        <div class="card-header">
            <div class="header-icon">

                <svg width="22" height="22" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
            </div>
            <h2>Form Data Mahasiswa</h2>
            <p>Lengkapi informasi pribadi kamu di bawah ini</p>


            <div class="progress-bar <?php echo $data ? 'filled' : ''; ?>">
                <span></span><span></span><span></span><span></span>
            </div>
        </div>


        <div class="form-body">

            <form method="POST">


                <div class="form-group">
                    <label>
                        <svg width="13" height="13" fill="none" stroke="#777" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                        Firstname
                    </label>
                    <div class="input-wrap">
                        <svg class="input-icon" width="15" height="15" fill="none" stroke="#bbb" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                        <input type="text" name="firstname" placeholder="Firstname" required>
                    </div>
                </div>


                <div class="form-group">
                    <label>
                        <svg width="13" height="13" fill="none" stroke="#777" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                        Lastname
                    </label>
                    <div class="input-wrap">
                        <svg class="input-icon" width="15" height="15" fill="none" stroke="#bbb" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                        <input type="text" name="lastname" placeholder="Lastname" required>
                    </div>
                </div>


                <div class="form-group">
                    <label>
                        <svg width="13" height="13" fill="none" stroke="#777" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.08 4.18 2 2 0 0 1 5.09 2h3a2 2 0 0 1 2 1.72c.13 1 .37 1.97.72 2.9a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.18-1.18a2 2 0 0 1 2.11-.45c.93.35 1.9.59 2.9.72A2 2 0 0 1 22 16.92z" />
                        </svg>
                        Phone Number
                    </label>
                    <div class="input-wrap">
                        <svg class="input-icon" width="15" height="15" fill="none" stroke="#bbb" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.08 4.18 2 2 0 0 1 5.09 2h3a2 2 0 0 1 2 1.72c.13 1 .37 1.97.72 2.9a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.18-1.18a2 2 0 0 1 2.11-.45c.93.35 1.9.59 2.9.72A2 2 0 0 1 22 16.92z" />
                        </svg>
                        <input type="text" name="phone_number" placeholder="Phone Number" required>
                    </div>
                </div>


                <div class="form-group">
                    <label>
                        <svg width="13" height="13" fill="none" stroke="#777" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        Address
                    </label>
                    <div class="input-wrap textarea-wrap">
                        <svg class="input-icon" width="15" height="15" fill="none" stroke="#bbb" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <textarea name="address" rows="4" placeholder="Address" required></textarea>
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit" name="action" value="simpan" class="btn-submit">

                        <svg width="16" height="16" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        Submit
                    </button>
                </div>
            </form>


            <?php if ($data): ?>
                <hr class="divider">

                <div class="result-area">


                    <div class="result-header">
                        <div class="avatar">
                            <?php

                            echo strtoupper(substr($data['firstname'], 0, 1));
                            echo strtoupper(substr($data['lastname'], 0, 1));
                            ?>
                        </div>
                        <div>
                            <div class="result-name">
                                Hi, my name is <?php echo $data['firstname'] . " " . $data['lastname']; ?>
                            </div>
                            <div class="result-sub">Data berhasil disimpan</div>
                        </div>
                    </div>

                    <div class="result-rows">
                        <div class="result-row">

                            <svg width="15" height="15" fill="none" stroke="#4A90E2" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.08 4.18 2 2 0 0 1 5.09 2h3a2 2 0 0 1 2 1.72c.13 1 .37 1.97.72 2.9a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.18-1.18a2 2 0 0 1 2.11-.45c.93.35 1.9.59 2.9.72A2 2 0 0 1 22 16.92z" />
                            </svg>
                            <span>Phone Number : <?php echo $data['phone_number']; ?></span>
                        </div>
                        <div class="result-row">

                            <svg width="15" height="15" fill="none" stroke="#4A90E2" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                                <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <span>Address : <?php echo $data['address']; ?></span>
                        </div>
                    </div>


                    <form method="POST">
                        <button type="submit" name="action" value="hapus" class="btn-reset">
                            <svg width="12" height="12" fill="none" stroke="#4A90E2" stroke-width="2.5" stroke-linecap="round" viewBox="0 0 24 24">
                                <polyline points="1 4 1 10 7 10" />
                                <path d="M3.51 15a9 9 0 1 0 .49-3.22" />
                            </svg>
                            Reset
                        </button>
                    </form>

                </div>
            <?php endif; ?>

        </div>
    </div>
</body>

</html>