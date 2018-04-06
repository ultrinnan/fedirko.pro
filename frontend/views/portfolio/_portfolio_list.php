<section>
    <div class="container portfolio">
<?php
$projects_list = '<div class="row">';
//var_dump($projects);
//die;
if ($projects){
	foreach ($projects as $key => $value) {
		$techs = '';
		foreach ($value['tech_list'] as $tech){
			$techs .= '<div class="related_tech">' . $tech['name'] . '</div>';
		}
		if ($key !=0 && ($key % 2 == 0)) {
			$projects_list .= '</div>';
			$projects_list .= '<div class="row">';
		}
		$projects_list .= '<div class="col-md-6">
                <a href="/portfolio/view/' . $value['project_id'] .'">
                    <div class="item_image" style="background: #39675a url(/images/projects/' . $value['project_id'] . '/' . $value['pictures']['main']['thumb'] . ') center no-repeat; background-size: cover;">
                    </div>
                    <div class="item_desc">
                        <h3>' . $value['name'] . '</h3>
                        <p>' . $value['short_desc'] . '</p>
                        <p>Works on <strong>' . $value['engine']['name'] .'</strong></p>
                        <p>Technologies:' . $techs . '</p>
                        <span class="read_more">Read more</span>
                    </div>
                </a>
            </div>';
	}
}
$projects_list .= '</div>';
echo $projects_list;
?>
    </div>
</section>
