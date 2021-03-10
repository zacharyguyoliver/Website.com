<?php
function buildTabsSection($directoy){
    $settings = scandir($_SERVER['DOCUMENT_ROOT'] .'/settings/data');
    $i = 2;
    $tabsHtml = "<ul class='tabs'>";
    $tabsContentHtml = "<div class='tab_container'>";
    while($i < count($settings)){
        $fileName = $settings[$i];
        $settingsName = explode('.',$fileName)[0];

        $tabsHtml.="<li " . ($i == 2 ? 'class="active"' : '') . " rel='tab$i'>$settingsName</li>";
        $fileContents = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/settings/data/' . $fileName));
        $tabsContentHtml.="<h3 class='d_active tab_drawer_heading' rel='tab$i'>$settingsName</h3>
                            <form id='tab$i' class='tab_content settingGroup'>
                                <div class='row'>
                                    <div class='col-12'><div data-file='$fileName' class='save-btn right'>SAVE</div></div>
                                </div>";
        $uniqueSetting = 0;
        foreach($fileContents as $settingKey => $settingData){
            $tabsContentHtml.="<div class='row setting'>"; 
            $settingDataArray = (array)$settingData;
            
            foreach($settingDataArray as $key => $value){
                $tabsContentHtml.="<label for='$i-$uniqueSetting'>$key</label>";
                $tabsContentHtml.="<input id='$i-$uniqueSetting' name='$key' type='text' value='$value'>";
                $uniqueSetting++;
            }
            $tabsContentHtml.="</div>"; 

        }
        $tabsContentHtml.='</form>';





        if($i == count($settings)){
            $tabsHtml.="</ul>";
            $tabsContentHtml .= "</div>";
        }



        $i++;
    }
    return ($tabsHtml . $tabsContentHtml);
}

function breakPoint($data){
    if($data.is_array()){
        print("<pre>".print_r($data,true)."</pre>");

    }else{
        print("<pre>".$data."</pre>");
    }
    die();
}


?>