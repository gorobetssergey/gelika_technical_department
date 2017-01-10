<?php

/* @var $this yii\web\View */

$this->title = 'Геліка-техвідділ';
?>



<div class="site-index">
    <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Розрахунок ваги</a></li>
            <li><a href="#tab2" data-toggle="tab">Розрахунок ПФ</a></li>
            <li><a href="#tab3" data-toggle="tab">Розрахунок поролону</a></li>
            <li><a href="#tab4" data-toggle="tab">Розрахунок вуглекислоти</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active fade" id="tab1">
                <p>Розрахунок ваги виробу (теоретичний)</p>
            </div>
            <div class="tab-pane fade " id="tab2">
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-lg-3"></div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                <h4 class="text-center">Розрахунок витрат порошкової фарби (ПФ)</h4>
                <table class="table table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th>Матеріал</th>
                        <th>К-ть</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Труба</td>
                        <td>0,25</td>
                    </tr>
                    </tbody>
                </table>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3"></div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab3">
                <p>Розрахунок поролону (вага)</p>
            </div>
            <div class="tab-pane fade" id="tab4">
                <p>Розрахунок вуглекислоти та дроту зварювального</p>
            </div>
        </div>
    </div>
<!--
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>-->
</div>
