<?php

/* @var $this yii\web\View */

$this->title = 'Projects from portfolio';

var_dump($projects_list[0]);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                Всего проектов в портфолио: <b><?=count($projects_list);?></b>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Project name</th>
                        <th>Author</th>
                        <th>Engine</th>
                        <th>Create date</th>
                        <th>Publish date</th>
                        <th>Status</th>
                        <th>Favorite</th>
                        <th>Control</th>
                    </tr>
                <?php
                foreach ($projects_list as $project){
                    echo '<tr>
                        <td>' . $project['id'] . '</td>
                        <td>' . $project['name'] . '</td>
                        <td>' . $project['by_serhii'] . '/' . $project['by_mary'] . '</td>
                        <td>' . $project['engine'] . '</td>
                        <td>' . $project['create_date'] . '</td>
                        <td>' . $project['publish_date'] . '</td>
                        <td>' . $project['status'] . '</td>
                        <td>' . $project['favorite'] . '</td>
                        <td><button>1</button><button>2</button><button>3</button></td>
</tr>';
                }
                ?>
                </table>
            </div>
        </div>
    </div>
</section>
