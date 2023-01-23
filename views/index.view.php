<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</head>

<body>
    <div class="container">
        <h2>Kontaktai</h2>
 
        <?php if (isset($_POST['submit'])) : ?>
            <h3>Formos duomenys</h3>
            <ul>
                <?php foreach ($_POST as $key => $item) : ?>
                    <?php if ($key !== 'submit') : ?>
                        <li><?= $item; ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <?php else:?>

        <form method="post">
            <div class="form-group">
                <select name="company" class="form-control">
                    <option selected disabled>--Pasirinkite įmonę--</option>
                    <?php foreach($companies as $code => $company):?>
                        <?php if(!in_array($company, $blackList)):?>
                    <option value="<?=$code;?>"><?=$company;?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <select name="department" class="form-control">
                    <option selected disabled>--Pasirinkite departamentą--</option>
                    <?php foreach($departments as $code => $department):?>    
                    <option value="<?=$code;?>"><?=$department;?></option>

                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="firstName" placeholder="Vardas" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Jūsų žinutė" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success">Rodyti</button>
            </div>
        </form>
        <?php endif; ?>
    </div>
</body>

</html>