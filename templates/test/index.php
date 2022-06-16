<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>
    <title>
        CakePHP: the rapid development PHP framework:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>

    <?php
    echo '<pre>';
    print_r($c);
    echo '</pre>';
    ?>
    <?php echo $this->Form->create(null, [
        'url' => [
            'controller' => 'Test',
        ]
    ]); ?>
    <div class="form-group">
        <select class="form-control a" name="a">
            <option value="1">A</option>
            <option value="2">b</option>
            <option value="3">c</option>

        </select>
    </div>
    <input name="id" list="screens.screenid-datalist" id="screens.screenid" value="" placeholder="Chọn" class="b" autocomplete="off">
    <datalist id="screens.screenid-datalist">
        <option data-id="123" value="Address 1">
        <option data-id="456" value="Address 2">
        <option data-id="789" value="Address 3">
    </datalist>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Gửi</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $('.b').change(function() {
            // location.reload();
            console.log($('datalist option').attr('selected', true).attr('data-id'));

        })
        $('.btn-primary').click(function() {
            // let id = $('.b').val();
            let id = 100;
            var csrfToken = $('meta[name="csrfToken"]').attr('content');
            $.ajax({
                headers: {
                    'X-CSRF-Token': csrfToken
                },
                type: "POST", //type of method
                url: "http://localhost/cakephp/cake/test", //your page
                data: {
                    abc: 100
                }, // passing the values
                success: function(res) {
                    console.log('res', res);
                }
            });
        })
    </script>
</body>

</html>