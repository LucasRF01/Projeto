<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'L Basics';
?>
<!DOCTYPE html>
<html>
<head>
    <html lang="pt">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-3.5.1.min.js" type="text/javascript" ></script>
    
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'pg']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav" id="barra-superior">   
        <div class="top-nav-title">
            <a>L <span>Basic's</span></a>
        </div>
        <div class="top-nav-links">
            <a href="<?= $this->Url->build('/') ?>">Home</a>
            <a href="<?= $this->Url->build('/contatos') ?>">Lista de contatos</a>
        </div>
    </nav>
        <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
        </main>
    <div id="rodape">
        <p>| Copyright © 2020 - L Basic's | Contato: contato@LBasics.com | </p>
    </div>
            <footer>
                <div>
                    <button onclick="backToTop()" id="btnTop">
                        ^ 
                    </button>      
                </div>
            </footer>
</body>               
<script>
    function backToTop() {
        document.documentElement.scrollTop = 0;
    }
</script>

</html>