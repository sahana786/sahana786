<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title') ?>
    </title>
    <?php echo $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?php echo $this->Html->css('styles')?>
    <?php echo $this->Html->script(['scripts', 'demo/chart-area-demo', 'demo/chart-bar-demo', 'demo/datatables-demo', 'demo/chart-pie-demo'])?>

    <?php echo $this->fetch('meta') ?>
    <?php echo $this->fetch('css') ?>
    <?php echo $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <?php echo $this->element('navbar') ?>

        <div class="top-nav-title">

          <!--  <a href="<?php //echo $this->Url->build('/') ?>"><span>Cake</span>PHP</a> -->

        </div>
      <!--  <div class="top-nav-links">
            <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
        </div> -->
    </nav>

    <main class="main">

        <div class="container">

            <?php echo $this->Flash->render() ?>
            <?php echo $this->fetch('content') ?>

        </div>
    </main>
    <!--<div id="layoutSidenav">
        <div id="layoutSidenav_nav">-->

    <?php echo $this->element('sidebar') ?>
      <!--  </div>
    </div>-->
</body>

    <?php echo $this->element('footer')?>


</html>
