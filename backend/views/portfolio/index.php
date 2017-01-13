<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet at debitis et ex, illum iure magni minus natus nemo nostrum quaerat quo reiciendis sapiente, sit ullam voluptatem voluptatibus.
                <br>
                <br>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Project name</td>
                        <td>Author</td>
                        <td>Engine</td>
                        <td>Create date</td>
                        <td>Publish date</td>
                        <td>Status</td>
                        <td>Favorite</td>
                        <td>Control</td>
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
