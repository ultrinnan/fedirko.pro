<section>
    <h3 class="hidden">Portfolio page</h3>
    <div class="container portfolio">
<?php
$projects_list = '<div class="row">';
//var_dump($projects);
//die;
if ($projects){
	foreach ($projects as $key => $value) {
		$techs = '';
		foreach ($value['tech_list'] as $tech){
			$techs .= '<span class="related_tech">' . $tech['name'] . '</span>';
		}
		if ($key !=0 && ($key % 2 == 0)) {
			$projects_list .= '</div>';
			$projects_list .= '<div class="row">';
		}
		$projects_list .= '<div class="col-md-6">
                <a href="/portfolio/view/' . $value['project_id'] .'" style="background: #39675a url(/images/projects/' . $value['project_id'] . '/' . $value['pictures']['main']['thumb'] . ') center top no-repeat; background-size: cover;">
                    <span class="item_desc">
                        <span class="h3">' . $value['name'] . '</span>
                        <span>' . $value['short_desc'] . '</span>
                        <span>Works on <strong>' . $value['engine']['name'] .'</strong></span>
                        <span>Technologies:</span><span>' . $techs . '</span>
                        <span class="read_more">Read more</span>
                    </span>
                </a>
            </div>';
	}
}
$projects_list .= '</div>';
echo $projects_list;
?>
    </div>
</section>
