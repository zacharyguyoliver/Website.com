<?php
//create tab shell
function buildTabsSection($directoy){
    $settings = scandir($_SERVER['DOCUMENT_ROOT'] .'/settings/data');
    $i = 2;
    $tabsHtml = "<ul class='tabs'>";
    $tabsContentHtml = "<div class='tab_container'>";
    $active = true;
    while($i < count($settings)){
        $fileName = $settings[$i];
        $tempArray = explode('.',$fileName);
        $ext = $tempArray[1];
        
        if($ext != 'txt'){
            $settingsName = $tempArray[0];
            $fileContents = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/settings/data/' . $fileName));
            $tabName = $fileContents->tabSettings->tabName;

            $tabsHtml.="<li " . ($active ? 'class="active"' : '') . " rel='tab$i'>$tabName</li>";
            $active = false;
            $tabsContentHtml.="<h3 class='d_active tab_drawer_heading' rel='tab$i'>$tabName</h3>
                                <form id='tab$i' class='tab_content settingGroup' action='/library/settings-processor.php' method='post' enctype='multipart/form-data'>
                                    <input id='hidFileName' Name='hidFileName' value='$fileName' hidden>
                                    <div class='row'>
                                        <div class='col-12'><div class='save-btn right'>SAVE</div></div>
                                    </div>";
            $tabsContentHtml.= createSettingsForm((array)$fileContents->settings,$i);                       

            $tabsContentHtml.='</form>';


            if($i == count($settings)){
                $tabsHtml.="</ul>";
                $tabsContentHtml .= "</div>";
            }



            
        }
        $i++;
    }
    return ($tabsHtml . $tabsContentHtml);
}


//create tab shell content
function createSettingsForm($settings, $index){
    $uniqueSetting = 0;
    $tabsContentHtml = '';
    foreach($settings as $key => $value){
        $tabsContentHtml .="<div class='row setting'><input class='settingsBlock' value='$key' hidden><div class='col-12'><h2>$key</h2></div>"; 
        $settingDataArray = (array)$value;
        foreach($settingDataArray as $label => $input){
            $tabsContentHtml.="<label for='$index-$uniqueSetting'>$label</label>";
            $tabsContentHtml.="<input id='$index-$uniqueSetting' name='$label' type='text' value='$input'>";
            $uniqueSetting++;
        }
        $tabsContentHtml.="</div>"; 
    }
    return $tabsContentHtml;
}

//get settings from json file
function loadSettings($fileName){
    $fileContents = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/settings/data/' . $fileName));
    return (array)$fileContents->settings;
}

//pretty debug tool
function breakPoint($data){
    if(is_array($data) || is_object($data)){
        print("<pre>".print_r($data,true)."</pre>");

    }else{
        print("<pre>".$data."</pre>");
    }
    die();
}


//add random version to files that cache
function autoCreateVersion($file){
    $rand = (string) rand ( 1000 , 9999 );
    return($file . "?v=$rand");
}


?>